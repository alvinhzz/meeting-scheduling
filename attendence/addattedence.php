<html>
<head>
    <title>Add Machine</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="inssertadd.php" method="post" name="form1">
        <table width="25%" border="0">
           
            <tr> 
                <td>Meeting ID</td>
                <td><input type="text" name="meeting_id"></td>
            </tr>
            <tr> 
                <td>Member ID</td>
                <td><input type="text" name="member_id"></td>
            </tr>
            <tr> 
                <td>Group ID</td>
                <td><input type="text" name="group_id"></td>

            </tr>
            <tr>
                <td>Member name</td>
                <td><input type="text" name="member_name"></td>

            </tr>
            <tr>
                <td>Status</td>
                <td>
                    <select name="status">
                        <option value="Hadir">Hadir</option>
                        <option value="Tidak hadir">Tidak Hadir</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Attendence time</td>
                <td><input type="time" name="attendance_time"></td>

            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    
</body>
</html>