<?php
include 'connection.php';


// This is email and password varification

$email = $_POST['email'];
$password = $_POST['password'];


if(isset($_POST['submit'])){
    if(empty($email)){
        ?>
        <script>confirm('Please Enter Email.');location.href = '../index.php';</script>
        <?php
    }
    if(empty($password)){
        ?>
        <script>confirm('Please Password.');location.href = '../index.php';</script>
        <?php
    }

    if(!empty($email) && !empty($password)){
        // this is a checking query that email and password is exist in our database or not
        $query = " SELECT * FROM admin WHERE email = '$email' and password = '$password' ";
        //fire query
        mysqli_query($con,$query);
        // check how many rows in our table
        $number = mysqli_num_rows(mysqli_query($con,$query));

        $all_data = mysqli_fetch_array(mysqli_query($con,$query));

         //check email
         if($email != $all_data['email']){
            ?>
            <script>confirm('Please Enter Valid Email');location.href = '../index.php';</script>
            <?php
        }
        //check password
        if($password != $all_data['password']){
            ?>
            <script>confirm('Please Enter Valid Password');location.href = '../index.php';</script>
            <?php
        }
        session_start();
        $_SESSION['username'] = $email;
        
        if($email == $all_data['email'] && $password == $all_data['password']){
            ?>
            <script>confirm('You are Login Successfully..');location.href = 'dashboard.php';</script>
            <?php
            
        }
        
    }

}

?>