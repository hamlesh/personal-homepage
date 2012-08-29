<center><?
/*
This file manages all of the social icons and links You can load in and 
use different icons, simply give the file the same name as the social
network its for.  You can change the order of the icons too.
*/

$socialiconpath = "images/socialicons/"; // Relative path to where you've stored your social icons

$socialname = "twitter"; 
$sociallink = "http://twitter.com/hamlesh"; 
echo '<a href="'.$sociallink.'" target="'.$socialname.'"><img src="'.$socialiconpath.$socialname.'.png" id="socialbadge"></a>';

$socialname = "facebook"; 
$sociallink = "http://facebook.com/hamleshmotah"; 
echo '<a href="'.$sociallink.'" target="'.$socialname.'"><img src="'.$socialiconpath.$socialname.'.png" id="socialbadge"></a>';

$socialname = "gplus"; 
$sociallink = "http://gplus.to/hamlesh"; 
echo '<a href="'.$sociallink.'" target="'.$socialname.'"><img src="'.$socialiconpath.$socialname.'.png" id="socialbadge"></a>';

$socialname = "linkedin"; 
$sociallink = "http://www.linkedin.com/in/hamlesh"; 
echo '<a href="'.$sociallink.'" target="'.$socialname.'"><img src="'.$socialiconpath.$socialname.'.png" id="socialbadge"></a>';

//$socialname = "flickr"; 
//$sociallink = "http://flickr.com/hamlesh"; 
//echo '<a href="'.$sociallink.'" target="'.$socialname.'"><img src="'.$socialiconpath.$socialname.'.png" id="socialbadge"></a>';

//$socialname = "tumblr"; 
//$sociallink = "http://hamlesh.co.uk"; 
//echo '<a href="'.$sociallink.'" target="'.$socialname.'"><img src="'.$socialiconpath.$socialname.'.png" id="socialbadge"></a>';

$socialname = "blog"; 
$sociallink = "http://hamleshmotah.com"; 
echo '<a href="'.$sociallink.'" target="'.$socialname.'"><img src="'.$socialiconpath.$socialname.'.png" id="socialbadge"></a>';

$socialname = "skype"; 
$sociallink = "callto://hamlesh"; 
echo '<a href="'.$sociallink.'" target="'.$socialname.'"><img src="'.$socialiconpath.$socialname.'.png" id="socialbadge"></a>';

/*
The following are not social networks, but I'm referencing them here as they are icons.
Its an example of how you can add your own contact drop down divs, and include additional
files on the index.php.  phone, email, and vcard make the drop downs defined in contact.php
reveal themselves.
*/

$socialname = "phone"; 
$sociallink = "#".$socialname; 
echo '<a href="'.$sociallink.'" class="show_'.$socialname.'"><img src="'.$socialiconpath.$socialname.'.png" id="socialbadge"></a>';

$socialname = "email"; 
$sociallink = "#".$socialname; 
echo '<a href="'.$sociallink.'" class="show_'.$socialname.'"><img src="'.$socialiconpath.$socialname.'.png" id="socialbadge"></a>';

$socialname = "vcard";
$sociallink = "#".$socialname;
echo '<a href="'.$sociallink.'" class="show_'.$socialname.'"><img src="'.$socialiconpath.$socialname.'.png" id="socialbadge"></a>';

?></center>

