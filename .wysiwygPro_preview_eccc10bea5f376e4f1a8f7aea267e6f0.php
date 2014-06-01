<?php
if ($_GET['randomId'] != "RlOV8aqu0vbRuSP2n47xvYiAKUsFnWzmWscpNeEI33XklnHOA3kQfdUmajuSj0QM") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
