<?php
if ($_GET['randomId'] != "2Fo8McfdFf4oJW6coUL_uL35QsEDlO9MKPPtWrV4NmpdMNIDurxn_gv2KUH41FdF") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
