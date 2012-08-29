<? /*
This file sets additional contact information points.  The divs are made to reveal using links from the social.php file.
*/ ?>

<script type="text/javascript">
$(document).ready(function(){
  $(".phone").hide();
  $(".show_phone").show();
  $('.show_phone').click(function(){  $(".phone").slideToggle(); });
});

$(document).ready(function(){
  $(".email").hide();
  $(".show_email").show();
  $('.show_email').click(function(){  $(".email").slideToggle(); });
});

$(document).ready(function(){
  $(".vcard").hide();
  $(".show_vcard").show();
  $('.show_vcard').click(function(){  $(".vcard").slideToggle(); });
});
</script>

<div class="phone"><br><br><h2>+44 (0)123 456 789</h2></div>

<div class="email"><br><br>
<h2><a href="mailto:you@email.com">you@email.com</a></h2>
</div>

<div class="vcard"><br><br>
<? include 'vcard.php'; ?>
<h2><a href="vcard.vcf">Download vCard</a></h2>
<h2><img src="vcard_qr.php"></h2>
</div>