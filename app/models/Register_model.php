<?php
class Register_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function registrasi($data)
    {
        $username = strtolower(stripslashes($data["username"]));
        $password = $data["password"];
        $password2 = $data["password2"];

        $this->db->query("SELECT username FROM users WHERE username=:username");
        $this->db->bind('username', $username);

        if ($this->db->single()) {
            echo "<script>
                    alert('Konfirmasi password tidak sesuai');
                </script>";
            return false;
        }

        if($password !== $password2){
            echo "<script>
                    alert('Konfirmasi password tidak sesuai');
                </script>";
        return false;
        };

        $password = password_hash($password , PASSWORD_DEFAULT);

        $this->db->query("INSERT INTO users VALUES ('', :username, :password)");
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
