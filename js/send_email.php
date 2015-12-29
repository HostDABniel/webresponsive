<?php
if (isset($_REQUEST['email']))  {
    //Email information
    $admin_email = "user@cuenta.com";
    $name = $_REQUEST['nombre'];
    $email = $_REQUEST['email'];
    $message = $_REQUEST['mensaje'];

    //send email
    if (mail($admin_email, $name, $message, "From:" . $email)) {
        echo 1;
    }
    else {
    	echo 0;
    }
}
?>