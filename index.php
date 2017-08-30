<?php
session_start();
if (extension_loaded('newrelic')) {
  newrelic_set_appname('passwds.io');
}
?>
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" itemscope="itemscope" itemtype="http://schema.org/WebPage" lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>passwds.io - The Pronounceable Password Generator</title>
<link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/jquery.prettySocial.min.js"></script>
<script src="js/process.js" type="text/javascript"></script>
<meta property="og:title" content="passwds.io - The Pronounceable Password Generator" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://passwds.io" />
<meta property="og:description" content="This is provided as a free service to encourage usage of somewhat randomized passwords. Many of the passwords will contain pronounceable portions, making them even easier to remember." />
<meta property="og:site_name" content="passwds.io" />
<style type="text/css" media="screen">
a.prettySocial {
    font-size:3.0rem;
    text-decoration:none;
    padding-left:10px;
}
</style>
</head>
<body itemscope="itemscope" itemtype="http://schema.org/WebPage">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77935-37', 'auto');
  ga('send', 'pageview');

</script>
<header itemscope itemtype="http://schema.org/WPHeader">
      <nav class="navbar navbar-default navbar-fixed-top noBorder">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand brandStyle" href="https://passwds.io">passwds.io</a></div>
          <div class="collapse navbar-collapse noPadding" id="myNavbar">
            <div class="navbar-right menustyle">
             <ui class="nav navbar-nav">
                <li><a href="https://longren.io/introducing-passwds-io/" target="_blank">About</a></li>
                <li><a href="https://longren.io/" target="_blank">Tyler's Blog</a></li>
                <li><a href="http://sticky.longren.io/" target="_blank">jQuery Sticky Alert</a></li>
                <li><a href="https://placezombie.com" target="_blank">Placezombie</a></li>
              </ui>
            </div>
          </div> <!--end of id nav-->
        </div><!--end of id container-->
        </nav>
    </header>
     <div class="container-fluid noPadding">
      <div class="container text-center">
       <h1>
          Pronounceable Password Generator
        </h1>
        <p class="textStyle">
          Need some passwords? You're at the right place. The form below will allow you to select how many passwords you need and the required length of the passwords.
        </p>
        <h3>
          Get some passwords!
        </h3>
        <div id="decodeForm" class="container-fluid noPadding textStyle text-center">
                    <form method="post" action="/" id="passwordSubmitForm">
                        <p>
                            <label for="length">Choose a Password Length</label><br />
              <select name="length" id="length">
                <?php
                for ($i = 8; $i <= 30; $i++) { ?>
                  <option value="<?=$i?>" <?php if ($i==8) { ?> selected<?php } ?>><?=$i?></option>
                <?php
                }
                ?>
              </select><br /><br />
              <label for="num">Choose the Number of Passwords to Generate</label><br />
              <select name="num" id="num">
                <?php
                for ($i = 1; $i <= 100; $i++) { ?>
                  <option value="<?=$i?>" <?php if ($i==1) { ?> selected<?php } ?>><?=$i?></option>
                <?php
                }
                ?>
              </select><br /><br />
                            <input type="submit" value="Generate!" class="btn btn-primary" id="generateSubmit" /> <input type="reset" value="Reset" class="btn btn-default" />
                        </p>
                    </form>
                </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="notComplete"><p>You need to select the minimun length for the password.</p></div>
                            <div class="passwordList"></div>
                        </div>
                    </div>

        <p class="textStyle">
          This is provided as a free service to encourage usage of somewhat randomized passwords. <i>Many</i> of the passwords will contain pronounceable portions, making them even easier to remember.
        </p>
        
      </div>

  <div class="container footer" itemscope="itemscope" itemtype="http://schema.org/WPFooter" role="contentinfo">
        <div class="col-xs-12 col-md-4 noPadding">
          <p id="footerLogoText"><a href="https://passwds.io/">Passwds.io</a> © 2014</p>
        </div>
        <div class="col-xs-12 col-md-4 noPadding">
          <div class="social-container">
    <div class="links">
      <a href="#" data-type="twitter" data-url="https://passwds.io" data-description="Pronounceable Password Generator" data-via="tlongren" class="prettySocial fa fa-twitter"></a>

      <a href="#" data-type="facebook" data-url="https://passwds.io" data-title="passwds.io" data-description="Pronounceable Password Generator" data-media="https://passwds.io/images/mist.jpg" class="prettySocial fa fa-facebook"></a>

      <a href="#" data-type="googleplus" data-url="https://passwds.io" data-description="Pronounceable Password Generator" class="prettySocial fa fa-google-plus"></a>

      <a href="#" data-type="pinterest" data-url="https://passwds.io" data-description="Pronounceable Password Generator" data-media="https://passwds.io/images/mist.jpg" class="prettySocial fa fa-pinterest"></a>

      <a href="#" data-type="linkedin" data-url="http://tlongren.com/prettySocial" data-title="passwds.io" data-description="Custom share buttons for Pinterest, Twitter, Facebook and Google Plus." data-via="tlongren" data-media="https://passwds.io/images/mist.jpg" class="prettySocial fa fa-linkedin"></a>
    </div>

    <script type="text/javascript" class="source">
      $('.prettySocial').prettySocial();
    </script>
  </div>
        </div>
        <div class="col-xs-12 col-md-4 noPadding">
          <p>Made by <a href="https://www.longren.io/" target="_blank">Tyler</a></p>
        </div>
      </div>


    </div>
  </body>

</html>