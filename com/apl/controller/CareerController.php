<?php

class CareerController
{
    
    public function createCareer()
    {
        $car = new Career();
        $career = new CareerDaoImpl();
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $car->setC_fname($_POST["cfname"]);
            $car->setC_lname($_POST["clname"]);
            $car->setC_email($_POST["cemail"]);
            $car->setC_phno($_POST["cphno"]);
            $car->setC_pass($_POST["cpass"]);
            $car->setC_cpass($_POST["cpass"]);
            $car->setC_secques($_POST["csecques"]);
            $car->setCreatedby('DevHead');
            $car->setUpdatedby('DevHead');
        }
        
        $result = $career->creatCareer($car);
        return $result;
    }
    
    public function getCareer() {
        $cr = new CareerDaoImpl();
        $result = $cr->getCareer();
        return $result;
    }
    
    public function updateCareer($cid) {
        $car = new CareerDaoImpl();
        $result = $car->updateCareer($cid);
        return $result;
    }
    
    
    public function updateCareerById() {
        $car = new Career();
        $career = new CareerDaoImpl();
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $car->setCareer_id($_POST["career_id"]);
            $car->setC_fname($_POST["c_fname"]);
            $car->setC_lname($_POST["c_lname"]);
            $car->setC_email($_POST["c_email"]);
            $car->setC_phno($_POST["c_phno"]);
            $car->setC_pass($_POST["c_pass"]);
            $car->setC_secques($_POST["c_secques"]);
        }
        
        $result = $career->updateCareerById($car);
        return $result;
    }
    
    
}

?>
