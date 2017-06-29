<?php
include "dbConnect.php";
// database functions ************************************************

$myDB=fConnectToDatabase();

function fInsertToDatabase($asin, $title, $price) {
    global $myDB;
  $sql = "INSERT INTO dvdtitles (asin, title, price) VALUES ('$asin', '$title', $price)";
  $stmt= $myDB->prepare($sql);
  $stmt->execute();

}

function fDeleteFromDatabase($deleteID) {
    global $myDB;
  $sql = "DELETE FROM dvdtitles WHERE dvdtitles.asin='$deleteID'";
  $stmt= $myDB->prepare($sql);
  $stmt->execute();

}

function fListFromDatabase() {
    global $myDB;
  $sql = 'SELECT * FROM dvdtitles';
  $stmt= $myDB->prepare($sql);
    $stmt->execute();
    while($row = $stmt->fetch()) {
    print_r($row);
    echo "<br>";
    }
}

function fInsertToActorDatabase($fname, $lname) {
    global $myDB;
  $sql = "INSERT INTO dvdactors (fname, lname) VALUES ('$fname', '$lname')";
  $stmt= $myDB->prepare($sql);
  $stmt->execute();

}

function fDeleteFromActorDatabase($deleteID) {
    global $myDB;
  $sql = "DELETE FROM dvdactors WHERE actorID=$deleteID";
  $stmt= $myDB->prepare($sql);
  $stmt->execute();

}

function fListFromActorDatabase() {
    global $myDB;
  $sql = 'SELECT * FROM dvdactors';
  $stmt=$myDB->prepare($sql);
    $stmt->execute();
    while($row = $stmt->fetch()) {
    print_r($row);
        echo "<br>";
    }
}
?>
