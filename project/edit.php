<?php 
include_once("config.php");

if(isset($_POST['update']))
{
    $id= $_POST['id'];
    $name = $_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $result = mysqli_query($mysql,"UPDATE student  SET name='$name ', email='$email',mobile='$mobile' Where id=$id");
    header("Location: index.php");
}
?>
<?php 
$id=$_GET['id'];
$result = mysqli_query($mysql,"SELECT * FROM student WHERE id=$id");
while ($user_data = mysqli_fetch_array($result))
{
    $name = $user_data['name'];
    $email= $user_data['email'];
    $mobile=$user_data['mobile'];

} 
?>
<html>
    <head>
        <title>Edit Student</title>
    </head>
    <body>
        <a href="index.php">Home</a>
        <br/><br/>
        <from name="update_student" method="post" action="edit.php">
            <table border="0">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name ="name" value=<?php echo $name;?> ></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name ="email" value=<?php echo $emial;?> ></td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td><input type="text" name ="mobile" value=<?php echo $mobile;?> ></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="id" value=<?php echo$_GET['id'] ?>></td>
                    <td><input type="submit" name ="update" value="update" ></td>
                </tr>
            </table>
        </from>    
    </body>
</html>