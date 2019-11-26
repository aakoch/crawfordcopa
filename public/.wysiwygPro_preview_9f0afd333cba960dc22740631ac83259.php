<?php
if ($_GET['randomId'] != "YYETttCKSPtBovCNm8fNteXuIgmwI5ebJXireny1j0VrxmNbQdYSmoCVGnEizQp5") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
