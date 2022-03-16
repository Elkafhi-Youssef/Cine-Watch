<?php

    class Profile{

        private $db = null;
        public function __construct(){
            $this->db = new Db();
        }
        public function getAllPostsUser($id){
            // $this->db->prepareQuery("SELECT * FROM user WHERE id_user = ?");
            $this->db->prepareQuery("SELECT * FROM user
            INNER JOIN post
            ON user.id_user =post.id_user
            WHERE user.id_user = ?");
            $this->db->execute([$id]);
            return $this->db->getResult(); 
        }
        public function deletePatient($id)
        {
           $this->db->prepareQuery("DELETE FROM patient WHERE id_patient = ?");
           $this->db->execute([$id]);
        }
        public function getpatient($id){
            $this->db->prepareQuery("SELECT * FROM patient where id_patient =?");
            
           $this->db->execute([$id]);
             return  $this->db->getRow(); 
            
        }
        
       
    }