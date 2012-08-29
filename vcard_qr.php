<?
/*
Uses the vCard data in vcard.php to dynamically generate QR code
*/
include 'vcard.php';
include 'qr/qrlib.php';
QRcode::png($vcard_data);
?>
