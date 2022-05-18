<?php

    include 'connection.php';
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $address = implode(",",$_POST['add']);
   
    $user_insert =  mysqli_query($conn,"INSERT INTO portfolio 
                        VALUES ('','$name','$number','$email','$address')")
                        or die (mysqli_erro($conn));
    
    if($user_insert){
        echo "new records succsfully saved";
    }
    else{
        echo" not saved";
    }

    

?>