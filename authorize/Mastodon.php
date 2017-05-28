<?php
#!/usr/bin/env php
namespace HalcyonSuite\HalcyonForMastodon;

require_once('database.php');
require_once('Mastodon-api-php/Mastodon_api.php');

use HalcyonSuite\HalcyonForMastodon\Database;
use PDO;
use Exception;

/*-------------------
  class for halcyon
--------------------*/
class Mastodon extends \Mastodon_api
{
    private $clientName = 'Halcyon for Mastodon';
    private $clientRedirectUri = 'urn:ietf:wg:oauth:2.0:oob';
    private $clientWebsite = 'https://halcyon.social/';
    private $clientScopes = array('read', 'write', 'follow');
    private $instances = array();
    private $dbHost = '';
    private $dbUser = '';
    private $dbPass = '';
    private $dbName = '';


    function __construct(){
        $this->database = new Database($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        $this->readInstances();
    }

    private function newInstance($domain)
    {
        $res = $this->create_app($this->clientName, $this->scopes, $this->clientRedirectUri, $this->clientWebsite);
        if (isset($res['html']['client_id'])) {
            $this->instances[$domain] = $res['html'];
            $this->database->dbExecute("insert into instances(domain, client_id, client_secret) values(?,?,?)", array($domain, $res['html']['client_id'], $res['html']['client_secret']));
        }else{
            throw new Exception("Invalid instance");
        }
    }

    public function selectInstance($domain)
    {
        $this->set_url($domain);
        if (!$this->instanceExists($domain)) {
            $this->newInstance($domain);
        }
        $this->set_client($this->instances[$domain]['client_id'], $this->instances[$domain]['client_secret']);
    }

    public function instanceExists($domain)
    {
        return isset($this->instances[$domain]);
    }

    private function readInstances()
    {
        $stmt = $this->database->dbExecute("select domain,client_id,client_secret from instances");
        foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $row){
            $this->instances[$row['domain']] = $row;
        }
    }

}
?>
