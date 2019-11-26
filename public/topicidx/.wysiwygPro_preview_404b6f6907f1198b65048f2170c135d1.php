<?php
if ($_GET['randomId'] != "mzyZa03g1jScL3G7LS3P6OSFuPrgCRu4d17e90QOQNAuaNSYe7cxDFWfFIvLAtvf") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
