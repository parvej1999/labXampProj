
<html lang="en">
<head>
    <title>Registration Form</title>
</head>
<body>
   <p>hi</p>
    <center>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "registrationForm");
        if(isset($_POST['submit'])){
            $fname = $_POST['firstName'];
            $lname = $_POST['lastName'];
            $gender = $_POST['gender'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $phnumber = $_POST['number'];
                

            $sql = "insert into lab_form values(
                '$fname', '$lname', '$gender', '$email', '$password', '$phnumber'
            )";
            
            if(mysqli_query($conn, $sql)){
                echo "<h3>data stored in a database successfully."
                    . " Please browse your localhost php my admin"
                    . " to view the updated data</h3>";
                
                echo nl2br("\n$fname\n $lname\n "
                . "$gender\n $email");
            }
            else{
                echo "ERROR: Hush! Sorry $sql. "
                    . mysqli_error($conn);
            }
            }
            mysqli_close($conn);

        ?>
    </center>
</body>
</html>
