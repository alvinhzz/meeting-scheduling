<?php
    include('database.php');
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $mid = $_POST['meeting_id'];
        $mcd = $_POST['member_id'];
        $mxid = $_POST['group_id'];
        $gid = $_POST['member_name'];
        $gie = $_POST['status'];
        $ade = $_POST['attendance_time'];


        // include database connection file

        // Insert user data into table
        $result = mysqli_query($connect, "INSERT INTO meeting_attendance(meeting_id,member_id,group_id,member_name,status,attendance_time) VALUES('$mid','$mcd','$mxid','$gid','$gie','$ade')");

        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>