<?php
    include('database.php');
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $mid = $_POST['member_id'];
        $gid = $_POST['group_id'];


        // include database connection file

        // Insert user data into table
        $result = mysqli_query($connect, "INSERT INTO group_members(member_id, group_id) VALUES('$mid','$gid')");

        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>