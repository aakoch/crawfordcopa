<?php
if ($_GET['randomId'] != "HkIhlD4Wu8WXGtmU2oxAC32AQiRLJE4yd9hJMH_Q_oNr5esYt4ttGKjprUHgQNUl") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
