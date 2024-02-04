<?php
if ($_GET['randomId'] != "hDLzOTYBikgKplxt7J42d6SNaKPoQvwvhu3zUQjzrmTBVC1cbAQyVzqou9QxbKwm") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
