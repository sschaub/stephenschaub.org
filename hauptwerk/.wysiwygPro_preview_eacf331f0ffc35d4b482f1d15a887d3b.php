<?php
if ($_GET['randomId'] != "KWbPwayoszNOKbK0LRVPHjabkkYO9EcsDoTbr2KJB0DX3b08kSCYWPXtth_NkPji") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
