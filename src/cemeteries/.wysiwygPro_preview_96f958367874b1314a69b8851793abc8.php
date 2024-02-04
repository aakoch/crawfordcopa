<?php
if ($_GET['randomId'] != "tKAtKUfK9Zz0YPCNNY8odUivRdTXHvMjQFYlGma9auH4qjpf31tTlqRxdxmKN9h7") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
