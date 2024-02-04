<?php
if ($_GET['randomId'] != "WjYBu3K5OZOorLu7myKm5QwXvoVByx3CGAFCjn8Xv7wfJgOIxjKErf39u0j53osp") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
