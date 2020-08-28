<!-- room.php -->

<?php
// Room Class
Class Room {
  public $id;
  public $room_number;
  public $floor;
  public $beds;

  //Methods
  //Method construct
  public function __construct($_id, $_room_number, $_floor, $_beds) {
    $this->id = $_id;
    $this->room_number = $_room_number;
    $this->floor = $_floor;
    $this->beds = $_beds;
  }

  //Method getRoom
  public function getRoom() {
    return [
      "id" => $this->id,
      "room_number" => $this->room_number,
      "floor" => $this->floor,
      "beds" => $this->beds
    ];
  }
  //end Method getRoom

};
// end Room Class
?>
