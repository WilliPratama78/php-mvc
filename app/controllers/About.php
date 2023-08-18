<?php 
    class About extends Controller{

        public function Index($nama = "Willi", $pekerjaan = "Pencari Kerja", $umur = 19){
            if(!isset($_SESSION["login"])){
                header("Location:".BASEURL."login");
                exit;
            }
            $data["nama"] = $nama;
            $data["pekerjaan"] = $pekerjaan;
            $data["umur"] = $umur;
            $data["judul"] = "About";
            $this->view("templates/header", $data);
            $this->view("about/index", $data);
            $this->view("templates/footer");
        }
        public function Page(){
            $data["judul"] = "Page";
            $this->view("templates/header", $data);
            $this->view("about/page");
            $this->view("templates/footer");
        }
    }
?>
