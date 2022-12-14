<?php

// echo 'hello';

$email = $_POST['email'];
if ($email =='') {
   echo 'enter ';
}
else{

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $rec = $email;
        $sub = "hello";
        $body = "Hii I am Bhagyashri";
        $header = "From:chhotipawar11@gmail.com";
    
        if (mail($rec, $sub, $body, $header)) {
            echo 'success';
        }
        else{
            echo 'check please';
        }
    }
    else{
        echo 'Enter Valid mail ' . $email;
    }
}
?>