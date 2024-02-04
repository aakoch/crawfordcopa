<?php
if ($_GET['randomId'] != "kON3bbtFa2sJN5V1u7vP0qOZ1Ls0UleV8lprXHotPrFBJ5htdhed1AwzDVUHlPtv") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
