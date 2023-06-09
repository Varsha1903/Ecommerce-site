<?php
    session_start();
    
    $con=mysqli_connect('localhost','root');
    if($con){
        echo "Connection Successfully";
    }   
    else{
        echo "No Connection";
    }
    mysqli_select_db($con,'flipkart-clone');
    $name=$_POST['email'];
    $pass=$_POST['passwd'];

    $query="SELECT * FROM user_data WHERE usern = '$name' && passd='$pass'";
    $result=mysqli_query($con,$query);
    $num=mysqli_num_rows($result);
    if($num==1){
        $_SESSION['username']=$name;
        echo"Successfully Logged In";
        header('location:index.html');

    }
    else{
        header('location:login.html');


    }
?>