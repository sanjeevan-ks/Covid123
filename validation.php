<?php
$connect=mysqli_connect("localhost","root","","database123")or die("Connection fails");
if(!empty($_POST['save']))
{
    $first_name = $_POST['un'];
    $password = $_POST['pw'];
    $query = "select * from entry_details where first_name='$first_name' and password='$password'";
    $result=mysqli_query($connect,$query);
    $count = mysqli_num_rows($result);
    $message = "Please Click on the link here: <a href='/Search_Vaccination/index.html' title='My Page'>My Page</a>";
    if($count>0){
        echo $message ;
    }
    else{
        echo "Login Unsuccessfully";
    }
}
?>
<div style="text-align:center;margin-top:200px;color:white;">
    <h2>User Login Page</h2>
    <form method="post">
        Enter Username:&emsp;<input type='text' name = 'un'/>
        <br/><br/>
        Enter Password:&emsp;<input type="password" name="pw"/>
        <br/><br/>
        <input type="Submit" name="save" value="Login"/>
    </form>
<div>
