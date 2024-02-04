<?php
if ($_GET['randomId'] != "_Yf4U8cYa8AEcjbR64AuMs30QxZUNgEsi8XZ6Gg3vS7u63Wj5wFUhERZpu0yuMs8") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
