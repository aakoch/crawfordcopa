<?php
if ($_GET['randomId'] != "CIlEmrVZD5FDODMC6TiynKehhL2esfKuJj34jR9_WJcgdo_z_eOSA8HPr3RhYSEm") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
