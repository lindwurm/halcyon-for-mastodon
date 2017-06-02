<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Halcyon for Mastodon</title>
  <link rel="shortcut icon" href="/login/assets/images/favicon.ico" />
  <link rel="stylesheet" type="text/css" href="/login/assets/css/style.css" media="all" />
  <link rel="stylesheet" type="text/css" href="/assets/css/fonts.css" media="all" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="/assets/js/jquery-cookie/src/jquery.cookie.js"></script>

  <script>
    if(
      localStorage.getItem("current_id")       &&
      localStorage.getItem("current_instance") &&
      localStorage.getItem("current_authtoken")
    ){
      location.href="/";
    };
  </script>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-98782992-1', 'auto');
    ga('send', 'pageview');
  </script>

</head>
  <body>
    <main>
      <article id="login_form">

        <h1><img src="/login/assets/images/halcyon-title.png"></h1>

        <section class="description_wrap">
          <span class="description">
            Halcyon is standard Twitter like client of Mastodon, And you can use it just by login to your instance.<br/>
            Let's Toot like a tweet.
          </span>
        </section>

        <form class="search_form box" action="auth.php" method="POST">

            <h2>Login to Halcyon</h2>
            <span class="or_create">or <a href="https://joinmastodon.org/">create an account</a></span>

            <span class="session_aleart invisible">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
              <span></span>
            </span>

            <input name="domain"   type="text" class="login_form_input" placeholder="Instance's domain" required/>
            <input name="email"    type="text" class="login_form_input" placeholder="Email adress" required/>
            <input name="password" type="password" class="login_form_input" placeholder="Password" required/>

            <div class="login_form_agree">
              <input id="agree" type="checkbox" required checked/><label for="agree" >I agree with the </label><a href="/terms">Terms</a>
            </div>

            <input type="submit" value="Login"></input>

        </form>

        <nav class="box">
          <ul>

            <li>
              <a href="https://mastodon.social/@Halcyon">
                <span class="icon-Mastodon_logo"></span>
              </a>
            </li>

            <li>
              <a href="mailto:neetshin@neetsh.in">
                <i class="fa fa-envelope" aria-hidden="true"></i>
              </a>
            </li>

            <li>
              <a href="https://github.com/halcyon-suite">
                <i class="fa fa-github" aria-hidden="true"></i>
              </a>
            </li>

          </ul>
        </nav>

        <div class="box help_us">
          <h2>Help us</h2>
          <ul>
            <li>
              BTC: 3AucsLDnY37qipYngLM5KH9heWkJ1AEArv
            </li>
            <li>
              Patreon: <a href="https://www.patreon.com/neetshin">https://www.patreon.com/neetshin</a>
            </li>
            <li>
              Enty: <a href="https://enty.jp/N_EE_T">https://enty.jp/N_EE_T</a>
            </li>
          </ul>
        </div>

      </article>

      <footer>
        Photo by <a href="https://www.flickr.com/photos/shahinolakara/">Shahin Olakara on Flickr</a> (CC BY 2.0)
      </footer>

    </main>

  </body>

  <?php if (isset($_GET['cause'])): ?>
    <script>

      $(function() {

        var cause = "<?= htmlspecialchars((string)filter_input(INPUT_GET, 'cause'), ENT_QUOTES) ?>";

        if ( cause === "domain" ) {

          $('body main article input.login_form_input[name="domain"]').addClass('error');

          $('.session_aleart').removeClass('invisible');
          $('.session_aleart > span').text('This instance does not exsist.');

        } else if ( cause === "login" ) {

          $('body main article input.login_form_input[name="email"]').addClass('error');
          $('body main article input.login_form_input[name="password"]').addClass('error');

          $('.session_aleart').removeClass('invisible');
          $('.session_aleart > span').text('This Email or password is invalid');

        }

      });

      $(document).on('click','body main article input.login_form_input', function(e) {
        $(this).removeClass('error');
      });

    </script>
  <?php endif; ?>

</html>