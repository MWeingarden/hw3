<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('159.89.47.44', 'michaelw_hw3user', 'j[#b6I$UjhTk', 'michaelw_hw3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
