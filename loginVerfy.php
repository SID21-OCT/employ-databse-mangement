<?php
$conn = mysqli_connect("localhost","root","","websitelogin");

/*var_dump($_POST['log_btn']);
var_dump($_POST['username']);
var_dump($_POST['password']);*/

if(isset($_POST['login_Btn'])){
$username=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT * FROM logindetail WHERE username ='$username'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==0)
{
	
header('location:pls.php'); 

}else
{
//var_dump($result);
while($row = mysqli_fetch_assoc($result)){
	//var_dump($row['password']);
$resultpassword = $row['password'];
if($password == $resultpassword){
	/*if() */
header('location:emp_dashboard.php'); 
}else{
	

header('location:pls.php'); 
}
}
}
}
?>