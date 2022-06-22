<?php
// namespace Controller\page;
class Pagescontroller{
    public function admin(){
        require "Views/adminpage.php";
    }
    public function user(){
        require "Views/userpage.php";
    }
    public function login(){
        require "Views/login.php";
    }
    public function edit(){
        require 'queries/contenttoeditdisplayquery.php';
    }
    public function editpost(){
        require 'Views/editpost.php';
    }
    public function editquery(){
        require 'queries/editquery.php';
    }
    public function signup(){
        require "Views/signup.php";
    }
    public function loginquery(){
        require "queries/loginquery.php";
    }
    public function logoutquery(){
        require "queries/logoutquery.php";
    }
    public function signupquery(){
        require "queries/signupquery.php";
    }
    public function userupdatedisplayquery(){
        require "queries/userupdatedisplayquery.php";
    }
    public function displayadmincommentquery(){
        require "queries/displayadmincommentquery.php";
    }
    public function admincommentquery(){
        require "queries/admincommentquery.php";
    }
    public function delete(){
        require "queries/deletequery.php";
    }
    public function userupdatequery(){
        require "queries/usersupdatequery.php";
    }
    
    

    
}

?>