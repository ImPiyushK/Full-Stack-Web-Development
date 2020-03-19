<?php include('config.php'); ?>
<?php
    if (isset($_POST['bttn']))
    {
        echo $_POST['id'].'<br>';
        echo $_POST['name'].'<br>';
        echo $_POST['age'].'<br>';
        echo $_POST['contact'].'<br>';
        echo $_POST['email'].'<br>';
    }
    else
    {
        echo "Welcome User";
    }
?>
