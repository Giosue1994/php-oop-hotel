<?php
  require_once (__DIR__ . '/Stanza.php');
  require_once (__DIR__ . '/array_stanze.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HOTEL</title>
  </head>
  <body>

    <h1>HOTEL</h1>

    <ul>
        <?php
        foreach ($array_stanze as $this_stanza) {

          $stanza = new Stanza();
          $stanza->room_number = $this_stanza['room_number'];
          $stanza->beds = $this_stanza['beds'];
          $stanza->floor = $this_stanza['floor'];
          $stanza->created_at = $this_stanza['created_at'];
          $stanza->updated_at = $this_stanza['updated_at'];

          echo '<li>' . $stanza->getStanza() . '</li>';
        }
        ?>
    </ul>

  </body>
</html>
