<?php
interface LoginDao {
    
    public function creatLogin($log);
    
    public function getLogin();
    
    public function updateLogin($lid);
    
    public function updateLoginById($log);
    
}