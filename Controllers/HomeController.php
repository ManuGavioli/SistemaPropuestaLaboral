<?php
    namespace Controllers;

    class HomeController
    {
        public function Index($message = ""){
            require_once(VIEWS_PATH."login.php");
        }
        
        public function Logout(){
            require_once(VIEWS_PATH."logout.php");
        }     
        
        public function Menu(){
            require_once(VIEWS_PATH."home.php");
        }

        public function MenuAdmin(){
            require_once(VIEWS_PATH."homeAdmin.php");
        }
    }
?>
