<!--
Created using code from: https://github.com/hamlesh/Personal-Homepage
//-->

<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Your Name - Personal Homepage</title>
<link rel="Shortcut Icon" href="/favicon.ico" type="image/x-icon" />
<meta http-equiv="pragma" content="no-cache" />
<meta name="robots" content="all" />
<meta name="MSSmartTagsPreventParsing" content="true" />
<meta http-equiv="imagetoolbar" content="false" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery.backstretch.min.js"></script>
<script type="text/javascript" src="js/twitter2.js" charset="utf-8"></script>
<script type="text/javascript" src="js/fetchtweets.js" charset="utf-8"></script>
</head>

<body>

<div id="floatholder"></div>

<div id="about">

    <h1>Your Name</h1>
    
    <p>Some informaiton about you</p>
    <p>Interesting facts, where you work, perhaps that you have a secret love of space hamsters?</p>
    <p>Indeed</p>
    
    <? include( 'social.php' ); ?>
    <? include( 'contact.php' ); ?>
    
    <br><br>
    <div id="tweets"></div>

</div>

<? include( 'background.php' ); ?>
<? include( 'footer.php' ); ?>
</body> </html>
