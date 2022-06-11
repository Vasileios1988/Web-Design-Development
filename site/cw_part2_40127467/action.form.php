<?php

if (isset($_POST["submit"])){
    
    $name = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $psw = $_POST['passwordOne'];
    $pswcheck = $_POST['passwordTwo']; 
    
    if($psw !== $pswcheck){
       header("Location: Form.php?error=passwordsDoNotMatch");
    }


    if($psw == $pswcheck){
        $serverName = "localhost";
        $userName = "boozyMonkey";
        $password = "scotland2022!";
        $dbName = "boozyMonkey";
    
        //Create connection to Database boozyMonkey
        $conn = mysqli_connect($serverName, $userName, $password, $dbName);
    
        // Check connection
        if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
        }else{
            echo"you are connected";
        }
        
        //create sql query
        $sql = "INSERT INTO users (usersName, usersSurname, usersEmail, usersPsw) VALUES (?, ?, ?, ?);";

        //Initiate prepared statement
        $stmt = mysqli_stmt_init($conn);

        //Prepare prepared statement - and check if it works
        if (!mysqli_stmt_prepare($stmt, $sql)){
            echo "SQL Statement Failed";
        }else{
            mysqli_stmt_bind_param($stmt, "ssss", $name, $lastname, $email, $psw);
            mysqli_stmt_execute($stmt);
        }
     
    // Close connection
    mysqli_close($conn);

    }

    header("Location: LogIn.php");
     exit();



}

?>


 
