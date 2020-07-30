<?php
    include('database.php');
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $gid = $_POST['group_id'];
        $min = $_POST['meeting_name'];
        $mid = $_POST['meeting_date'];
        $mis = $_POST['meeting_start'];
        $mie = $_POST['meeting_end'];
        $mip = $_POST['meeting_place'];


        // include database connection file

        // Insert user data into table
        $result = mysqli_query($connect, "INSERT INTO meetings(group_id, meeting_name, meeting_date, meeting_start, meeting_end, meeting_place) VALUES('$gid','$min','$mid','$mis','$mie', '$mip')");

        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>