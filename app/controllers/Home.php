<?php 
    class Home extends Controller{
        public function index(){
            if(!isset($_SESSION["login"])){
                header("Location:" .BASEURL."login");
                exit;
            }
            $data["judul"] = "Home"; 
            $this->view("templates/header", $data);
            $this->view("Home/index");
            $this->view("templates/footer");
        }
    }
?>