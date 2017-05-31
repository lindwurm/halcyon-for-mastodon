<?php
  #!/usr/bin/env php
  #ini_set("display_errors", On);
  #error_reporting(E_ALL);

  require_once('../../authorize/Mastodon.php');
  use HalcyonSuite\HalcyonForMastodon\Mastodon;
  use Exception;

  if ( !preg_match('/(^[a-z0-9\-\.\/]+?\.[a-z0-9-]+$)/', mb_strtolower($_POST['domain'])) ) {
    header('Location: https://halcyon.social/login?cause=domain', true, 303);
    die();
  }

  $URL        = "https://".$_POST['domain'];
  $domain     = $_POST['domain'];
  $email      = $_POST['email'];
  $password   = $_POST['password'];

  $api = new Mastodon();

  // select instances
  try {
      $api->selectInstance($URL);
  } catch (Exception $e) {
      header('Location: https://halcyon.social/login?cause=domain', true, 303);
      die();
  }

  // login
  $access_token = $api->login($email, $password)['html']['access_token'];

  if ( $access_token ) {
    $account_id   = $api->accounts_verify_credentials()['html']['id'];
  } else {
    header('Location: https://halcyon.social/login?cause=login', true, 303);
    die();
  }

?>

<script>

if(
  localStorage.getItem("current_id")       |
  localStorage.getItem("current_instance") |
  localStorage.getItem("current_authtoken")
){
    location.href = "/logout";
};

/* IMPORTANT */
localStorage.setItem("current_id",        "<?php echo $account_id; ?>" );
localStorage.setItem("current_instance",  "<?php echo $domain; ?>" );
localStorage.setItem("current_authtoken", "<?php echo $access_token; ?>");

localStorage.setItem("setting_post_stream", "manual");
localStorage.setItem("setting_post_privacy", "public");
localStorage.setItem("setting_local_instance", "default");
localStorage.setItem("setting_search_filter", "all");

localStorage.setItem("what_to_follow_0", JSON.stringify({id:"",username:"Halcyon",display_name:"Halcyon for Mastodon",url:"https://mastodon.social/@Halcyon",avatar:"https://files.mastodon.social/accounts/avatars/000/132/199/original/1ca33302b092376b.png"}));
localStorage.setItem("what_to_follow_1", JSON.stringify({id:"",username:"Gargron",display_name:"Eugen",url:"https://mastodon.social/@Gargron",avatar:"https://files.mastodon.social/accounts/avatars/000/000/001/original/J3IHut1v.png"}));
localStorage.setItem("what_to_follow_2", JSON.stringify({id:"",username:"Mastodon",display_name:"Mastodon",url:"https://mastodon.social/@Mastodon",avatar:"https://files.mastodon.social/accounts/avatars/000/013/179/original/logo-41b041930be24e8039129c8ac4ff4840ef467f40c3f2d5044db50a4b15ceb285.png"}));

location.href = "/";

</script>
