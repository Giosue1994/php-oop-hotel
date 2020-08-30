<?php
  class Stanza {
    public $room_number;
    public $floor;
    public $beds;
    public $created_at;
    public $updated_at;

    public function constract($_room_number, $_beds, $_created_at) {
      $this->room_number = $_room_number;
      $this->beds = $_beds;
      $this->created_at = $_created_at;
    }

    public function getStanza() {
      return
      'Numero Stanza: ' . $this->room_number . '<br>' .
      'Piano: ' . $this->floor . '<br>' .
      'Numero letti: ' . $this->beds . '<br>' .
      'Creato il: ' . $this->created_at . '<br>' .
      'Aggiornato il: ' . $this->updated_at . '<br><br>';
    }
  }
?>
