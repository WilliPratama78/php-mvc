<?php
class Login_model
{

    private $db;
    public function __construct()
    {
        $this->db = new Database;
   
    }

    public function login($data)
    {
   
        $username = $data["username"];
        $password = $data["password"];
        $this->db->query("SELECT * FROM users WHERE username=:username");
        $this->db->bind('username', $username);
        $this->db->execute();

        if ($this->db->fetchColumn()) {
            $row = $this->db->single();
           

            if (password_verify($password, $row["password"])) {
                // set session
                $_SESSION['login'] = true;
 
                header("Location:" . BASEURL);
                exit;
            }
        }
            Flasher::setErr();
            header("Location:" .BASEURL . "login");
            exit;
        
        
    }
}
