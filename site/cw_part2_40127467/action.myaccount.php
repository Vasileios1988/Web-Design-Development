<?php



if(isset($_POST['order'])){

    echo '<script>alert("Under Construction")</script>';

}


if(isset($_POST['update'])){
    header("Location: update.php");
    exit();
}
    

if(isset($_POST['delete'])){
    session_start();

    $usersId = $_SESSION['userId'];

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
        echo "you are connected";
    }

     //write our sql query - Select all Data
     $sql = "DELETE FROM users WHERE usersId = '$usersId' ";


    if(mysqli_query($conn, $sql)){
        echo "Data DELETED";
    } else {
        echo "FAIL to delete"; 
    } 

    // Close connection
    mysqli_close($conn);

    header("Location: logout.php");
    exit();
}

if(isset($_POST['updateBtn'])){

        session_start();

        $usersId = $_SESSION['userId'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];

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
            echo"  ID: " .$usersId ;
            echo"  name: " .$fname ;
            echo"  lastname: " .$lname ;
            echo"  email " .$email ;
        }

        //create sql query
        $sql = "UPDATE users SET usersName = '$fname', usersSurname = '$lname', usersEmail = '$email' WHERE usersId = $usersId;";

        if(mysqli_query($conn, $sql)){
            echo "Data UPDATED";
        } else {
            echo "FAIL to UPDATE"; 
        } 
            
    // Close connection
    mysqli_close($conn);

    header("Location: logout.php");
    exit();

    }


