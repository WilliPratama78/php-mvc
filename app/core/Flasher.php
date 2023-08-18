<?php 
    class Flasher{
        public static function setFlashCrud($pesan, $aksi, $tipe){
            $_SESSION["flash"] = [
                'pesan' => $pesan,
                'aksi' => $aksi,
                'tipe' => $tipe
            ];
        }

        public static function flashCrud(){
            if(isset($_SESSION['flash'])){
                echo "<div class='alert alert-" .$_SESSION['flash']['tipe'] ." alert-dismissible fade show' role='alert'>
                Data Mahasiswa <strong> " . $_SESSION['flash']['pesan'] . "</strong> " .$_SESSION['flash']['aksi'] . "
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>";
              unset($_SESSION['flash']);
            }
        }

        public static function setErr(){
            $_SESSION["error"] = true;
        }

        public static function getErr(){
            if(isset($_SESSION['error'])){
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                Username / Password <strong>Tidak Valid</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>";
              unset($_SESSION["error"]);
            }
        }

        


    }
