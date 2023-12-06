<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('159.89.47.44', 'scheetzo_mis4013finalproject', '[aZre0I14Z9*', 'scheetzo_mis4013finalproject');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
