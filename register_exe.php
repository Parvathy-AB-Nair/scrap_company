<?php 
require_once("../connectionclass.php");
 
$fullname=$_POST['fullname'] ; 
$phone=$_POST['phone'] ;
$email=$_POST['email'] ; 
$address=$_POST['address'] ; 
$state=$_POST['state'] ; 
$password=$_POST['password'] ; 
 
$aadhar=$_POST['aadhar'] ; 
$obj=new connectionclass() ; 
$qry="select username from login where username='$email'";
$row=$obj->getSingleRow($qry); 
if($row){
echo "<script type='text/javascript'> 
alert('Email already Exists.') 
window.location.href='register.php';
</script>";
return;
}
 
$obj=new connectionclass() ;

;
$qry="insert into login(username,password,usertype)values('$email','$password','Customer')"; 
$data=$obj->Manipulation($qry); 
if($data["Status"]=="true"){
    
$obj=new connectionclass() ;
    $qry="INSERT INTO registration (full_name, address, phone, email, state,aadhar) VALUES ( '$fullname', '$address', '$phone', '$email', '$state', '$aadhar')"; 
    $data1=$obj->Manipulation($qry); 
    echo $obj->alert("You are successfully registered","login.php");
}else{
    echo $obj->alert("Registration Failed","register.php");
}
//header("location:../index.php");
?>