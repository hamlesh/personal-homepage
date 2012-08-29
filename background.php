<?
/*
This file controls the rotation of the background image

Depending on how many images you want to be able to cycle through
you will need to set $bgkey.  The example below lists three different 
background images I could potentially cycle through. I can also set 
$bgkey to a static number.

You can obviously add as many as you like.  I know its not the most
elegant way to manage this if you want to cycle through a large
number of images, feel free to fork my code and improve it :)
*/

$bgkey = rand(1,3);
//$bgkey = "1";  // If you only want to use the 1st image in the list
$bgpath = "images/"; // Relative path where background images are stored

if ( $bgkey == "1" ) { $bgfile = "idrops.jpg"; }
if ( $bgkey == "2" ) { $bgfile = "wolke.jpg"; }
if ( $bgkey == "3" ) { $bgfile = "flare.jpg"; }
?>

<script type="text/javascript">
  $.backstretch("<?=$bgpath?>/<?=$bgfile?>", {speed: 150});
</script>
