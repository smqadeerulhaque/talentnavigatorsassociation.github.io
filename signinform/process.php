<?php

require_once('connection.php');
session_start();
if(isset($_POST['Login']))
{   
    if(empty($_POST ['UName']) || empty($_POST['Passowrd']))
    {
        header("location:index.php?Empty= DETAILS REQUIRED");
    }
    else
    {
        $query="select * from portal where UName='".$_POST['UName']."' and Passowrd='".$_POST['Passowrd']."'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['UName'];
                header("location:wellcome.php");
            }
            else
            {
                header("location:index.php?Invalid= Please Enter Correct User Name and Password ");
            }
    }
}
else
{
    echo 'Ooops! Something went wrong.<br/> TRY AGAIN';
}

?> 
