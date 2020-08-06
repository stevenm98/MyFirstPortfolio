<?php
    // connect to database 
    $conn = mysqli_connect('localhost', 'steve', 'test1234', 'my_website');

    // check connection
    /* if(!$conn){
        echo 'Connection error: '. mysqli_connect_error();
    } */
    echo $check = !$conn ? 'Connection error:'. mysqli_connect_error(): '';

    $email = $message = $service_date = $dev[] = $msg = "";
    $errors = array("email" => "", "message" => "", "dev" => "");
    // check if button is pressed
    if(isset($_POST['btnSubmit'])){
        // check if email is empty    
        if(empty($_POST['email'])){
            $errors['email'] = "Email required! <br/>";
        }else{
            $email = $_POST["email"];
        }
        // check if message is empty
        if(empty(trim($_POST['message']))){
            $errors['message'] = "Message required! <br/>";
        }else{
            $message = $_POST["message"];
        }
        if(empty($_POST['dev'])){
            $dev = "no service";
        }else{
            $dev = implode(",", $_POST["dev"]);
        }


        // check if there are any errors in the form
        if(!array_filter($errors)){
            // prevent sql injection attacks
           
            $msg = "Succesfully submitted!";

            $email = mysqli_real_escape_string($conn, $_POST["email"]);
            $message = mysqli_real_escape_string($conn, $_POST["message"]);
            $service_date = mysqli_real_escape_string($conn, $_POST["service_date"]);
            

            // create sql
            $sql = "INSERT INTO user(user_email,user_message,service_date,user_service) 
            VALUES('$email','$message','$service_date','$dev')";

            

            //save/insert to db and check if successful 
            if(mysqli_query($conn, $sql)){

            }
       
            // close connection 
            mysqli_close($conn);
        }

    }




?>