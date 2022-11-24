
<?php
class LoginUser{
    private $username;
    private $password;
    public $error;
    public $success;
    private $storage = "data.json";
    private $stored_users;
    
    public function __construct($username, $password){
        $this->username = $username;
        $this->password = $password;
        $this->stored_users = json_decode(file_get_contents($this->storage), true);
        $this->login();
    }

    private function login(){
        foreach($this->stored_users as $user){
            if($user['username'] == $this->username){
                if($user['password'] == $this->password){
                    session_start();
                    $_SESSION['user'] = $this->username;
                    header("location: account.php");
                    exit();
                }
                
            }
        }
        return $this->error = "wrong username or password";
    }
}
?>