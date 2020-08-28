<!-- index.php -->

<?php
//Require
require_once( __DIR__ . "/rooms.php");
require_once( __DIR__ . "/room.php");

//Foreach Room froom array Rooms
foreach ($rooms as $single_room) {

  //Room instance
  $room = new Room ($single_room["id"], $single_room["room_number"],
    $single_room["floor"], $single_room["beds"]);
  var_dump($room);
}
//end Foreach Room froom array Rooms
?>
