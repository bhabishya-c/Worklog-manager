<?php
session_start();
class Querybuilder{
    function __construct(protected $connect){
    }
    function registration($name,$email,$password,$role){
        $preparedemailcheck=$this->connect->prepare("SELECT * FROM userdetails WHERE email='$email'");
        $preparedemailcheck->execute();
        $result=$preparedemailcheck->rowCount();
        if($result>0){
        echo "<script>alert('Email already exists')</script>";
        }else{
        $preparedregistration=$this->connect->prepare("INSERT INTO userdetails (Name,Email,Password,Role) VALUES ('$name','$email','$password','$role')");
        $preparedregistration->execute();
        header("location:login?info=registered");
        }
    }
    function userlogin($email,$password){
        $preparedlogin=$this->connect->prepare("SELECT * FROM userdetails WHERE email='$email'");
        $preparedlogin->execute();
        $row=$preparedlogin->rowCount();
        $associatedata=$preparedlogin->fetchAll(PDO::FETCH_ASSOC);
        var_dump($associatedata);
        if($row>0){
            foreach($associatedata as $a){
            $_SESSION['name']=$a['Name'];
            }
    }else{
        echo"<script>alert('Entered email is wrong')</script>";
    }foreach($associatedata as $a){
        if(password_verify($password,$a['Password'])&& $a['Role']=='admin'){
        header('location:adminpage');
    }elseif(password_verify($password,$a['Password'])&& $a['Role']=='user'){
        header('location:userpage');
    }else{
        echo"<script>alert('Entered password is wrong')</script>";
    }

}
}
}
?>