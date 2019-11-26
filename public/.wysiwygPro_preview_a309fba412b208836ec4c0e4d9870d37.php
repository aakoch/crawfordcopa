<?php
if ($_GET['randomId'] != "MoHidsWWtL4GGfDAem5I8pUNBTk71P9w_tLx6uMMSKNMxakuYLlZyyMFuW8u1iDn") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
