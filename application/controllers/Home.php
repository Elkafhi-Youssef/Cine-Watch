<?php
/**
 *  
 * This file contains the default contriller 'Home' with 
 * default method main 
 * 
 */

 // Home class
class Home extends Controller{
    

    public function __construct(){

    }

    // index : default method 
    public function index(){
        
      
        $this->loadView('home',[]);
    }

    public function logout(){
        
       
        unset($_SESSION["user_id"]);
        unset($_SESSION["email"]);
        unset($_SESSION["fullname"]);
        
        $this->loadView('home',[]);
    }

}