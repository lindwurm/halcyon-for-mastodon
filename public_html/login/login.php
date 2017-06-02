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

    <!-- HEADER -->
    <header id="header">

      <div id="header_wrap">

        <div id="header_title_wrap" class="header_box header_right_box">

            <div class="header_box_child title_box">
                <a href="/">
                    <!-- TITLE IMAGE -->
                    <img src="halcyon-title.png" alt="Halcyon for mastodon"/>
                </a>
            </div>

        </div>

        <div id="header_menu_wrap" class="header_box header_left_box">

            <nav class="header_box_child nav_box">
                <ul>

                    <!-- NEWS-->
                    <a href="https://mastodon.social/@halcyon" class="no-underline">
                        <li>
                            <span><i class="fa fa-newspaper-o" aria-hidden="true"></i>News</span>
                        </li>
                    </a>

                    <!-- SOURCE-->
                    <a href="https://github.com/halcyon-suite" class="no-underline">
                        <li>
                            <span><i class="fa fa-code" aria-hidden="true"></i>Source</span>
                        </li>
                    </a>

                    <!-- TERMS -->
                    <a class="no-underline">
                        <li>
                            <span><i class="fa fa-balance-scale" aria-hidden="true"></i>Terms</span>
                        </li>
                    </a>

                    <!-- CONTACT -->
                    <a href="mailto:neetshin@neetsh.in" class="no-underline">
                        <li>
                            <span><i class="fa fa-envelope" aria-hidden="true"></i>Contact</span>
                        </li>
                    </a>

                    <!-- SIGN IN -->
                    <a href="#login_form_wrap" class="no-underline">
                        <li>
                            <span><i class="fa fa-user-circle-o" aria-hidden="true"></i>Login</span>
                        </li>
                    </a>

                </ul>
            </nav>

        </div>

      </div>

    </header>

    <!-- MAIN -->
    <main id="main">

        <div id="login_form_wrap">

            <div class="login_form">

                <form action="" method="POST" >

                    <h2>Login to Halcyon</h2>
                    <p>
                        or <a href="https://joinmastodon.org/">create an account</a>
                    </p>

                    <div class="login_form_main">
                        <input name="acct" type="text" class="login_form_input" placeholder="@halcyon@mastodon.social" required/>
                        <label class="login_form_continue pointer">
                            <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                            <input id="login_continue" type="submit" value="" class="invisible"></input>
                        </label>
                    </div>

                    <div class="login_form_agree">
                        <label class="login_form_agree_check disallow_select pointer">
                            <i class="fa fa-check-square-o" aria-hidden="true"></i>
                            I agree with the <a href="/terms">Terms</a>
                            <input id="agree" type="checkbox" required checked class="invisible"/>
                        </label>
                    </div>

                </form>

            </div>

        </div>

        <article id="article">

            <h2>What is Halcyon</h2>

            <p>
                Halcyon is standard <span style="font-weight: bold">Twitter like client</span> of Mastodon, And you can use it just by login to your instance. Let's Toot like a tweet.
            </p>

            <div class="image_wrap">

                <ul>
                    <li><img src="preview2.png" alt="halcyon_screenshot"/></li>
                    <li><img src="preview1.png" alt="halcyon_screenshot"/></li>
                    <li><img src="preview0.png" alt="halcyon_screenshot"/></li>
                </ul>

                <button class="prev_button switch_button"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
                <button class="next_button switch_button"><i class="fa fa-angle-right" aria-hidden="true"></i></button>

            </div>

            <h2>Contact us</h2>

            <p>
                Mastodon: <a href="https://mastodon.social/@halcyon" target="_blank">＠Halcyon＠mastodon.social</a><br />
                Email: <a href="mailto:neetshin@neetsh.in" target="_blank">neetshin＠neetsh.in</a><br />
                Github: <a href="https://github.com/halcyon-suite" target="_blank">/halcyon-suite</a>
            </p>

            <h2>Help us</h2>

            <p>
                Bitcoin: 3AucsLDnY37qipYngLM5KH9heWkJ1AEArv<br />
                Patreon: <a href="https://www.patreon.com/neetshin" target="_blank">https://www.patreon.com/neetshin</a><br />
                Enty: <a href="https://enty.jp/N_EE_T" target="_blank">https://enty.jp/N_EE_T</a>
            </p>

        </article>

    </main>

    <!-- FOOTER -->
    <footer id="footer">
        <div class="footer_anchor">
            <a href="#">
                <i class="fa fa-angle-up" aria-hidden="true"></i>
            </a>
        </div>
    </footer>

  </body>

</html>
