<?php

if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $psw = $_POST["password"];

    $serverName = "localhost";
    $userName = "boozyMonkey";
    $password = "scotland2022!";
    $dbName = "boozyMonkey";

    //Create connection to Database boozyMonkey
    $conn = mysqli_connect($serverName, $userName, $password, $dbName);

    // Check connection
    if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    //write our sql query - Select all Data
    $sql = "SELECT * FROM users WHERE usersEmail = ? AND usersPsw = ?;";

    //Create a prepare statement
    $stmt = mysqli_stmt_init($conn);

    //Prepare the prepared statement
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "SQL Statement Failed";
    }else{
        mysqli_stmt_bind_param($stmt, "ss", $email, $psw);
        //execute the statement in the database
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        $logIn = mysqli_fetch_assoc($result);      
    
    }
    $userId = $logIn['usersId'];
    $dbPsw = $logIn['usersPsw'];
    $dbName = $logIn['usersName'];
    $dblname = $logIn['usersSurname'];
    $dbemail = $logIn['usersEmail'];

    if(!$psw === $dbPsw){
        header("Location: LogIn.php?error:wrongLogin");
        exit();
    }else if($psw === $dbPsw){
        session_start();
        $_SESSION['userId'] = $userId;
        $_SESSION['name'] = $dbName;
        $_SESSION['lname'] = $dblname;
        $_SESSION['email'] = $dbemail;
        header("Location: Homepage.php?youAreLoggedIn");
        exit();
    } else {
        echo "No User Found";
    }
    
    
// Close connection
mysqli_close($conn);

}
