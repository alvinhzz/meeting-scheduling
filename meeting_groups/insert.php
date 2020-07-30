<?php
    include('database.php');
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $gid = $_POST['group_id'];
        $gin = $_POST['group_name'];


        // include database connection file

        // Insert user data into table
        $result = mysqli_query($connect, "INSERT INTO meeting_groups(group_id, group_name) VALUES('$gid','$gin')");

        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>