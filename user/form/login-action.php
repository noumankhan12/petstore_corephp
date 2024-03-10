<?php
$Name=$_POST['name'];
$Password=$_POST['password'];
$Con = mysqli_connect('localhost','root','','e');
$result=mysqli_query($Con,"SELECT * FROM `tbluser` WHERE  (Username= '$Name' OR Email='$Name') AND Password= '$Password' ");
session_start();
if(mysqli_num_rows($result)){
    $_SESSION['user'] = $Name;
echo"
<script>
alert('Succesfully Login');
window.location.href='../index.php';
    </script>
";
}
else{
    echo"
    <script>
    alert('Incorrrect Email/Password');
    window.location.href='login.php';
        </script>
    "; 
}
?>