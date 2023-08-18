<?php
class Register extends Controller
{
    public function index()
    {
        if(isset($_SESSION["login"])){
            header("Location:" .BASEURL);
            exit;
        }
        $this->view("register/index");
        $this->view("templates/footer");
    }

    public function daftar()
    {
        if ($this->model("Register_model")->registrasi($_POST) > 0) {
            $_SESSION["login"] = true;
            header("Location:". BASEURL);
            exit;
        }
    }
}
