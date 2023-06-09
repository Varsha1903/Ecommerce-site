<!-- <html>
    <body>
        <p>hry i am working</p>
</body>
</html> -->
<?php

    session_start();
    header('location:login.html');
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
        echo "Duplicate Data";
    }
    else{
        $query="INSERT INTO user_data (usern, passd) VALUES ('$name','$pass')";
        mysqli_query($con,$query);
        echo "Registration Successful";
    }
?>
