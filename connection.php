<?php


$conn = mysqli_connect('localhost','root','','danish') OR die (mysqli_error());
 if($conn){
    //  echo "connection successful";
    ?>
    <script>
         alert('connection successful');
    </script>
    <?php
   
 }
 else{
    echo "connection not successful";
   
 }
?>