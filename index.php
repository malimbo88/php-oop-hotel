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
    
  //Room data array
  $room_data = $room->getRoom();
?>

<!-- Room list -->
  <ul>
    <li><?php echo "Id: " . $room_data["id"]; ?></li>
    <li><?php echo "Room Number: " . $room_data["room_number"]; ?></li>
    <li><?php echo "Floor: " . $room_data["floor"]; ?></li>
    <li><?php echo "Beds: " . $room_data["beds"]; ?></li>
  </ul>
<!-- end Room list -->

<?php };
//end Foreach Room froom array Rooms
?>
