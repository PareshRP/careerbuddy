<?php

class LoginController
{
    
    public function createLogin()
    {
        $log = new Login();
        $login = new LoginDaoImpl();
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            $log->setC_email($_POST["cemail"]);
            $log->setC_pass($_POST["cpass"]);
            $log->setCreatedby('DevHead');
            $log->setUpdatedby('DevHead');
        }
        
        $result = $login->creatLogin($log);
        return $result;
    }
    
    public function getLogin() {
        $lo = new LoginDaoImpl();
        $result = $lo->getLogin();
        return $result;
    }
    
    public function updateLogin($cid) {
        $log = new LoginDaoImpl();
        $result = $log->updateLogin($cid);
        return $result;
    }
    
    
    public function updateLoginById() {
        $log = new Login();
        $login = new LoginDaoImpl();
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $log->setLogin_id($_POST["login_id"]);
            $log->setC_email($_POST["c_email"]);
            $log->setC_pass($_POST["c_pass"]);
        }
        
        $result = $login->updateLoginById($log);
        return $result;
    }
    
    
}

?>
