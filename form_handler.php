<?php

    if (isset($_POST['Register'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $gender = $_POST['gender'];
        if(val_password($pass)){
            echo 'your email is '.$email. "</br>" ;
            echo 'your gender is  '.$gender. "</br>";
            if (isset($_POST['color'])) {
                $colors = $_POST['color'];
                echo 'your favourite colors : ';
                foreach($colors as $color){
                    
                    echo "$color </br>";
                }
            }else{
                echo 'you have not select any color';
            }
        }
        
    }else{
        header("Location: form.html");
    }

    function val_password($pass){
        $passLength = strlen($pass);
        if($passLength < 8 || $passLength > 16){
            echo "your pass should be more than 8 and less than 16 charectreters";
            return false;
            
        }else{
            return true;
        }
    }
?>