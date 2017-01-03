<?php
    $conn_error = "Could not connect to database";

    $servername = 'localhost';
    $username="omkarinn123";
    $password="Omkar@123";
    $mysql_db = "innomkar";
    $myemail="omkarinn123@gmail.com";
    $con = mysqli_connect($servername,$username,$password) or die('Error');
    mysqli_select_db($con,$mysql_db) or die($conn_error);

    $name = $_POST['name'];
    $email =$_POST['email'];
    $contact =$_POST['contact'];
   $message=$_POST['message'];

    $sql ="INSERT INTO contact(name,email,contact,message)VALUES('$name','$email','$contact','$message')";
    if(!mysqli_query($con,$sql))
    {
        die('Error:' . mysqli_error($con));
    }
    else
        $to = $myemail;
        $email_subject = "Contact form submission: $name";
        $email_body = "You have received a new message. ".
        " Here are the details:\n Name: $name \n ".
        "Email: $email\n Message \n $message";
        $headers = "From: $myemail\n";
        $headers .= "Reply-To: $email";
        mail($to,$email_subject,$email_body,$headers);
         header('Location: contact.html');
        mysqli_close($con)
?>