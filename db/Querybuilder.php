<?php
namespace db\query;
use \PDO;
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
        header("location:signup");
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
        $_SESSION['adminloggeddin']=true;
        header('location:adminpage');
    }elseif(password_verify($password,$_SESSION['password'])&& $a['Role']=='user'){
        $_SESSION['loggeddin']=true;
        header('location:userpage');
    }else{
        echo"<script>alert('Entered password is wrong')</script>";
    }
}
function update(int $id,string $username,string $update,$date){
    $updatepreparedquery=$this->connect->prepare("INSERT INTO dailyupdate (user_id,name,updates,date) VALUES ($id,'$username','$update','$date')");
    $updatepreparedquery->execute();
    header("location:userpage");

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
    $prepareddelete=$this->connect->prepare("DELETE FROM  dailyupdate WHERE update_id=$id");
    $prepareddelete->execute();
    header("location:adminpage");
}
function comment(int $id,string $comment){
    $preparedcomment=$this->connect->prepare("INSERT INTO admincomment (update_id,comment) VALUES ($id,'$comment')");
    $preparedcomment->execute();
    header("location:adminpage");
}
function commentdisplay(int $id){
    $preparedcommentdisplay=$this->connect->prepare("SELECT * FROM  admincomment WHERE update_id=$id");
    $preparedcommentdisplay->execute();
    return $preparedcommentdisplay->fetchAll(PDO::FETCH_ASSOC);
 
}
function contenttoedit(int $id){
    $preparedtoedit=$this->connect->prepare("SELECT * FROM  dailyupdate WHERE update_id=$id");
    $preparedtoedit->execute();
    $row=$preparedtoedit->rowCount();
    $associatedata=$preparedtoedit->fetchAll(PDO::FETCH_ASSOC);
        if($row>0){
            foreach($associatedata as $a){
            $_SESSION['update']=$a['updates'];
            $_SESSION['update_id']=$a['update_id'];
            }
            header("location:editpost");
    }else{
        echo"<script>alert('Couldnot found data to edit')</script>";
    }
}
function editpost(int $id,string $update){
    $preparededitpost=$this->connect->prepare("UPDATE dailyupdate SET updates='$update' WHERE update_id=$id");
    $preparededitpost->execute();
    header("location:userpage");
 
}
}
?>