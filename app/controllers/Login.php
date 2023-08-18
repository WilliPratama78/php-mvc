<?php 
    class Login extends Controller{
        
        public function index(){
            if(isset($_SESSION["login"])){
                header("Location:".BASEURL);
                exit;
            }
            $this->view("login/index");
            $this->view("templates/footer");
        }
        public function masuk(){
            
            $this->model("Login_model")->login($_POST);
        }
    }
?>