<?php

// database functions ************************************************

function fConnectToDatabase() {
   $db = new PDO('mysql:host=localhost;dbname=dvdtitles', 'root');
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
   return $db;
}
?>
