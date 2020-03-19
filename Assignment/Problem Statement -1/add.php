<?php include('config.php'); ?>

<?php

    if (isset($_POST['bttn']))
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];

        $sql = "INSERT INTO `users` (id, name, age, contact, email) VALUES('$id', '$name', '$age', '$contact', '$email');";
        
        if(mysqli_query($con,$sql))
        {
            echo "Sucessful";
        }
        else 
            echo "unsucceful";
    }
    else
    {
        echo "Welcome Guest";
    }
?>