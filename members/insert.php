<?php
    include('database.php');
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $mname = $_POST['member_name'];
        $memail = $_POST['member_email'];


        // include database connection file

        // Insert user data into table
        $result = mysqli_query($connect, "INSERT INTO members(member_name, member_email) VALUES('$mname','$memail')");

        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>