<?
/*
This file is used for things like analytics tracking code etc
*/

$hostname = $_SERVER['SERVER_NAME'];
$hostname = str_replace('www.', '', $hostname);
if ( $hostname == "hamlesh.com" | $hostname == "hamlesh.co" | $hostname == "hamlesh.in" | $hostname == "hamlesh.net" ) { 
  $hostname = "hamlesh.com";
  $googlesiteid = "UA-782676-17";
}
if ( $hostname == "motah.co.uk" | $hostname == "motah.co" ) { 
  $hostname = "motah.co.uk";
  $googlesiteid = "UA-782676-14";
}
?>

<!-- Start of Woopra Code -->
<script type="text/javascript">
var woo_settings = {idle_timeout:'300000', domain:'<?=$hostname?>'};
(function(){
var wsc = document.createElement('script');
wsc.src = document.location.protocol+'//static.woopra.com/js/woopra.js';
wsc.type = 'text/javascript';
wsc.async = true;
var ssc = document.getElementsByTagName('script')[0];
ssc.parentNode.insertBefore(wsc, ssc);
})();
</script>
<!-- End of Woopra Code -->

<!-- Google Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '<?=$googlesiteid?>']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- End Analytics -->

