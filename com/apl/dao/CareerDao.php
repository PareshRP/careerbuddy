<?php
interface CareerDao {
    
    public function createCareer($car);
   
    public function getCareer();
    
    public function updateCareer($cid);
    
    public function updateCareerById($car);
    
}