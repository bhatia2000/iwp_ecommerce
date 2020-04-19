<?php
$conn=mysqli_connect("localhost", "root");
mysqli_select_db($conn, "profile");
if($conn)
{
    $sql="select * from details";
$query=mysqli_query($conn,$sql);
$email=$_POST['email'];
$pass=$_POST['pass'];
$f=0;
while($res=mysqli_fetch_array($query))
{
    if($res['Email']==$email)
    {
        if($res['Password']==$pass)
        {
            $f=1;
            header("Location: index.html"); 
            //break;
        }
    }
}
if($f==0)
{
    
     echo " <script> 
     if(confirm('Please create an account first ! '))
     {
         window.location.href = 'login/index1.html';
     }
      </script> ";
    //header("Location: login/index1.html"); 
    
}
}
else
{
 echo"Cannot connect to Database";
}
?>
