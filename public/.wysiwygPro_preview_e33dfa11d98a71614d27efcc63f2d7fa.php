<?php
if ($_GET['randomId'] != "78JI1oPYhZq4zqAl68QMlm9tt_RKKrtagB7ErQN_IQNdIY5PFlMdOb11MKTROOey") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
