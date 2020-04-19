<?php
$conn=mysqli_connect("localhost", "root");
mysqli_select_db($conn, "profile");
if($conn)
{
    $name=$_POST['name'];
    $phno=$_POST['number'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    
    $sql="select * from details";
    $query=mysqli_query($conn,$sql);
    //$email=$_POST['email'];
    //$pass=$_POST['pass'];
    $f=0;
    while($res=mysqli_fetch_array($query))
    {
        if($res['Email']==$email)
        {
            if($res['Password']==$pass)
            {
                $f=1;
                echo " 
                <script> 
                    if(confirm(' Account already exists. Login '))
                    {
                        window.location.href = 'login/index.html';
                    }
                </script> ";  
            }
        }
    }
    if($f==0)
    {
        $sql= "INSERT INTO details (Name,Phone,Email,Password) VALUES ('".$name."','".$phno."','".$email."','".$pass."')";
        if ($conn->query($sql) === TRUE)  
        {
            header("Location: login/index.html"); 
            //echo "<script>window.location.href = 'login/index.html'</script>";
        }
        else
        {
            echo "Error signing up";
        }
    }

}
else
{
    echo"Could not connect to Database";
}

?>