<head>
    <!--- BASE -->
    <base href="http://127.0.0.1/shaknow_package/"/>

    <!--- Title --->
    <title> Processing... </title>
</head>

<!--- loading image -->
<div id="loader_box">
    <img src="loading/loader.svg" class="loader_img"/>
</div>


<?php
// start the session
session_start();

// Check is Global variable has set
if(isset($_GET['fusername']) &&
   isset($_GET['fmessage']) &&
   isset($_GET['fsubmit'])
  )
    {
    // Check if submit button has clicked
    if($_GET['fsubmit'] == "submitted") {
        // Store username after validation in Local from Global variable
        $user_random_name = validate($_GET['fusername']);
        
        // Store message after validation in Local from Global variable
        $message = validate($_GET['fmessage']);

        // function to store data in database
        store_in_db($user_random_name,$message);
    }
}
else {
    echo 
    "<script>
    slert('Cannot access page!');
    </script>";
}

// input validation function
function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


// Function to establish connection to database and store data
function  store_in_db($user_random_name,$message) {
$hostname = "localhost";
$username = "ishu";
$password = "ishu123";
$dbname = "shaknow";

    // Establish a connection
    try {
        $con = new mysqli($hostname,$username,$password,$dbname);
        // insert data
        $sql = "INSERT INTO random_messages (Username, Message) VALUES " . " " . "(" . "'" . $user_random_name . "'," . "'" . $message . "');";
        echo $sql;

        try {
            $result = $con->query($sql);
            $_SESSION['message_status'] = "sent";

            echo "<script>
            location.href='contact.php';
            </script>";
        }
        catch(EXCEPTION $error) {
            $error_message = $error->getMessage();
        }
    }
    catch(EXCEPTION $error) {
        $eeror_message = $error->getMessage();
    }
}

?>