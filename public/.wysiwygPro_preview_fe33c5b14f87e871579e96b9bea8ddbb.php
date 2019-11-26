<?php
if ($_GET['randomId'] != "Z1jbRW30ebYmjWrzV7mohlrQnAzGqlVMIC9dia4EBEn5jukNeX6qZ7WverZESSB1") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
