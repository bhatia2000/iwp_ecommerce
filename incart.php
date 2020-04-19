<?php
    $id=$_POST["id"];
    $conn=mysqli_connect("localhost","root");
    mysqli_select_db($conn,"Store");  
    $res = mysql_query("SELECT * FROM Record WHERE id = '$id'");
    while($res)
    {
        mysqli_select_db($conn,"Cart");  
        $sql1="INSERT INTO Mycart (id,name,price,image) VALUES (1,'hARDIK',899,'najfbja')";
        if ($conn->query($sql1) === TRUE) 
        {
            echo "hello how are u";
        } 
        else 
        {
            echo "Error: " . $sql1 . "<br>" . $conn->error;
        }
    }
    $conn->close();
?>
