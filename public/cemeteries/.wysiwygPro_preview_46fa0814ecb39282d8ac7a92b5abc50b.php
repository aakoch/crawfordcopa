<?php
if ($_GET['randomId'] != "xOuSVkSZKoRUKXcQiCRodAPIZcfJXlWa3M0_1gdCQesgkzT6CJBNwGBd1HizoCk0") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
