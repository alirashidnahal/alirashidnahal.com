<?php
ob_start(); //this should be first line of your page
Header( "HTTP/1.1 301 Moved Permanently" );
Header('Location: https://alirashidnahal.com/');
ob_end_flush(); //this should be last line of your page
?>

<?php
/* This file return the 301 redirection code to the site Header and exit the thumbnail-template */
?>