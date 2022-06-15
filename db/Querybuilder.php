<?php
session_start();
class Querybuilder{
    function __construct(protected $connect){
    }
    function registration(string $name,string $email,string $password,string $role,string $department){
        $preparedemailcheck=$this->connect->prepare("SELECT * FROM userdetails WHERE email='$email'");
        $preparedemailcheck->execute();
        $result=$preparedemailcheck->rowCount();
        if($result>0){
        echo "<script>alert('Email already exists')</script>";
        }else{
        $preparedregistration=$this->connect->prepare("INSERT INTO userdetails (Name,Email,Password,Role,dept_id) VALUES ('$name','$email','$password','$role','$department')");
        $preparedregistration->execute();
        header("location:/?info=registered");
        }
    }
    function userlogin(string $email,string $password){
        $preparedlogin=$this->connect->prepare("SELECT * FROM userdetails WHERE email='$email'");
        $preparedlogin->execute();
        $row=$preparedlogin->rowCount();
        $associatedata=$preparedlogin->fetchAll(PDO::FETCH_ASSOC);
        if($row>0){
            foreach($associatedata as $a){
            $_SESSION['name']=$a['Name'];
            $_SESSION['password']=$a['Password'];
            $_SESSION['id']=$a['id'];
            }
    }else{
        echo"<script>alert('Entered email is wrong')</script>";
    }
       if(password_verify($password,$_SESSION['password'])&& $a['Role']=='admin'){
        header('location:adminpage');
    }elseif(password_verify($password,$_SESSION['password'])&& $a['Role']=='user'){
        header('location:userpage');
    }else{
        echo"<script>alert('Entered password is wrong')</script>";
    }
}
function update(int $id,string $username,string $update,$date){
    $updatepreparedquery=$this->connect->prepare("INSERT INTO dailyupdate (user_id,name,updates,date) VALUES ($id,'$username','$update','$date')");
    $updatepreparedquery->execute();
    header("location:userpage?info=inserted");

}
function adminupdatedisplay(string $table){
    $prepareddisplay=$this->connect->prepare("SELECT * FROM  {$table}");
    $prepareddisplay->execute();
    return $prepareddisplay->fetchAll(PDO::FETCH_ASSOC);
}
function userupdatedisplay(int $id){
    $prepareddisplay=$this->connect->prepare("SELECT * FROM  dailyupdate WHERE user_id=$id");
    $prepareddisplay->execute();
    return $prepareddisplay->fetchAll(PDO::FETCH_ASSOC);
}
function delete(int $id){
    $prepareddelete=$this->connect->prepare("DELETE FROM  dailyupdate WHERE user_id=$id");
    $prepareddelete->execute();
    header("location:adminpage?info=deleted");
}
}
?>