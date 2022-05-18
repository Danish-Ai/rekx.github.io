<?php

include 'connection.php';
$sql= mysqli_query($conn,"SELECT * from portfolio");
?>

<div aling="right"><a href="portfolio.php">New User</a></div>
<center>
    <h1 style="color: blue"> welcome to my portfolio</h1>

    <table border="1">
        <tr>
            <th>    sl No.  </th>
            <th>    User id </th>
            <th>    Name    </th>
            <th>    Number  </th>
            <th>    Email   </th>
            <th>    Adderss </th>
            <th>    Action  </th>
        </tr>
        <?php
            $sl =0;
            while ($sql_fetch = mysqli_fetch_assoc($sql)){?>
            <tr>
                <td>    <?php  echo $sl+1; $sl++            ?></td>
                <td>    <?php  echo $sql_fetch['id']        ?></td>
                <td>    <?php  echo $sql_fetch['name']      ?></td>
                <td>    <?php  echo $sql_fetch['number']    ?></td>
                <td>    <?php  echo $sql_fetch['email']     ?></td>
                <td>    <?php  echo $sql_fetch['address']   ?></td>
               
            </tr>
            <?php}?>
    </table>
</center>