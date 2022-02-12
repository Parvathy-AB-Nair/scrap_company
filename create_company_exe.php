<?php 
require_once("../connectionclass.php");
 
$fullname=$_POST['fullname'] ; 
$phone=$_POST['phone'] ;
$email=$_POST['email'] ; 
$address=$_POST['address'] ; 
$state=$_POST['state'] ; 
$password=$_POST['password'] ; 
  
$obj=new connectionclass() ; 
$qry="select username from login where username='$email'";
$row=$obj->getSingleRow($qry); 
if($row){
echo "<script type='text/javascript'> 
alert('Email already Exists.') 
window.location.href='admin_new_company.php';
</script>";
return;
}
 
$obj=new connectionclass() ;

;
$qry="insert into login(username,password,usertype)values('$email','$password','Company')"; 
$data=$obj->Manipulation($qry); 
if($data["Status"]=="true"){
    
$obj=new connectionclass() ;
    $qry="INSERT INTO company (full_name, address, phone, email, state) VALUES ( '$fullname', '$address', '$phone', '$email', '$state')"; 
    $data1=$obj->Manipulation($qry); 
    echo $obj->alert("You are successfully registered","admin_companies.php");
}else{
    echo $obj->alert("Registration Failed","admin_new_company.php");
}
//header("location:../index.php");
?>