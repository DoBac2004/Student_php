<?php



if(isset($_POST['Submit'])){
    $name =$_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    include_once("config.php");
    $result = mysqli_query($mysqli,"INSERT INTO student(name,email,mobile)VALUES('$name','$email','$mobile')");
    echo "User added successfully";
}
?>
<html>
    <head>
        <title>Add student</title>
    </head>
    <body>
        <a href="index.php">Go to Home</a>
        <br/><br/>
        <from action="create.php" method="post" name =" from">
            <table width="25%" border="0">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td><input type="text" name="mobile"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Submit" value="Add"></td>
                </tr>
            </table>
        </from>
    </body>
</html>