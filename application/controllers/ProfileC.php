<?php


    class ProfileC extends Controller{

        public function __construct(){
            // Load and instatiate the profile model
            $this->setModelInstance('profile');
        }
        
        public function index(){
            // $this->loadView('user/profile',[]);
            $this->redirect(URLROOT .'/profileC/getAllPostsUser/1');

            
        }
          
        
        public function getAllPostsUser($id){
            $data = $this->modelInstance->getAllPostsUser($id);
            $this->loadView('user'.DS.'profile',$data); 
        }
   
  
    
                   
                
                
                
        

 
        


       

        
    }