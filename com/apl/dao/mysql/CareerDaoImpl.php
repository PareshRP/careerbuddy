<?php
class CareerDaoImpl implements CareerDao
{
    public function creatCareer($car)
    {
        $con = new Connection();
        $conn = $con->getConnection();
        $cid = $this->getRowCount("career1", $conn);
        $sql = "INSERT INTO `career1`(`career_id`, `c_fname`, `c_lname`, `c_email`, `c_phno`, `c_pass`,`c_cpass`, `c_secques`, `createdby`,`updatedby`)
         VALUES (".$cid.",'".$car->getc_fname()."','".$car->getc_lname()."','".$car->getc_email()."',".$car->getc_phno().",'".$car->getc_pass()."','".$car->getc_cpass()."','".$car->getc_secques()."','".$car->getCreatedby()."','".$car->getUpdatedby()."')";
        echo $sql;
        
        if (mysqli_query($conn, $sql)) {
            $result = array(
                "status" => "success"
            );
            return $result;
        } else {
            $result = array(
                "status" => "fail",
                "message" => "Error: " . $sql . "<br>" . mysqli_error($conn)
            );
            return $result;
        }
        mysqli_close($conn);
    }
    
    public function getRowCount($tablename, $con)
    {
        $id = 0;
        $query = "SELECT count(`id`) as count FROM " . $tablename;
        $result = mysqli_query($con, $query);
        
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            if ($row = mysqli_fetch_assoc($result)) {
                $id = $row["count"];
                $id = $id + 1;
            }
        }
        return $id;
    }
    //     public function createCareer($car)
    //     {}
    
    
    public function getCareer()
    {
        $con = new Connection();
        $conn = $con->getConnection();
        $clist = array();
        $i = 0;
        $query = "SELECT `id`, `career_id`, `c_fname`,`c_lname`, `c_email`, `c_phno`, `c_pass`,`c_cpass`,`c_secques`,`createdby`,`updatedby` FROM `career1`";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $car = new Career();
                $car->setCareer_id($row["career_id"]);
                $car->setC_fname($row["c_fname"]);
                $car->setC_lname($row["c_lname"]);
                $car->setC_email($row["c_email"]);
                $car->setC_phno($row["c_phno"]);
                $car->setC_pass($row["c_pass"]);
                $car->setC_cpass($row["c_cpass"]);
                $car->setC_secques($row["c_secques"]);
                $clist[$i ++] = array(
                    "id" => $row["career_id"],
                    "career" => $car
                );
            }
        }
        return $clist;
    }
    
    
    public function updateCareer($cid)
    {
        $con = new Connection();
        $conn = $con->getConnection();
        $car = new Career();
        
        $query = "SELECT `id`, `career_id`, `c_fname`,`c_lname`, `c_email`, `c_phno`, `c_pass`,`c_cpass`,`c_secques`,`createdby`,`updatedby` FROM `career1` where career_id = " . $cid;
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            if ($row = mysqli_fetch_assoc($result)) {
                
                $car->setCareer_id($row["career_id"]);
                $car->setC_fname($row["c_fname"]);
                $car->setC_lname($row["c_lname"]);
                $car->setC_email($row["c_email"]);
                $car->setC_phno($row["c_phno"]);
                $car->setC_pass($row["c_pass"]);
                $car->setC_cpass($row["c_cpass"]);
                $car->setC_secques($row["c_secques"]);
                
            }
            return $car;
        }
    }
    
    
    
    public function updateCareerById($car)
    {
        $con = new Connection();
        $conn = $con->getConnection();
        
        $sql = "UPDATE `career1` SET `c_fname`= '".$car->getC_fname()."',`c_lname`= '".$car->getC_lname()."',`c_email`= '".$car->getC_email()."',`c_phno`= '".$car->getC_phno()."',`c_pass`= '".$car->getC_pass()."',`c_cpass`= '".$car->getC_cpass()."',`c_secques`= '".$car->getC_secques()."' WHERE `career_id` = " .$car->getCareer_id();
        
        echo $sql;
        
        if (mysqli_query($conn, $sql)) {
            $result = array(
                "status" => "success"
            );
            return $result;
        } else {
            $result = array(
                "status" => "fail",
                "message" => "Error: " . $sql . "<br>" . mysqli_error($conn)
            );
            return $result;
        }
        mysqli_close($conn);
    }
}

