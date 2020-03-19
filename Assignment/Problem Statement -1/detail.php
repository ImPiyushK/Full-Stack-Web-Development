<?php include('config.php'); ?>
<html>
    <head>
        <title>Insert Records</title>
    </head>
    <body>
        <?php
            $sql = "select * from `users`";
            $result = mysqli_query($con, $sql);
            if($result->num_rows > 0)
            {
        ?>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Edit</th>
                    <th>Delete</th>
                 </tr>
            </thead>
            
        <?php } ?>
        </table>
    </body>
</html>