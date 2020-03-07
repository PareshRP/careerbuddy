<?php 
class Career{
    
    private $id;
    private $career_id;
    private $c_fname;
    private $c_lname;
    private $c_email;
    private $c_phno;
    private $c_pass;
    private $c_cpass;
    private $c_secques;
    private $createdby;
    private $updatedby;
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getCareer_id()
    {
        return $this->career_id;
    }

    /**
     * @return mixed
     */
    public function getC_fname()
    {
        return $this->c_fname;
    }

    /**
     * @return mixed
     */
    public function getC_lname()
    {
        return $this->c_lname;
    }

    /**
     * @return mixed
     */
    public function getC_email()
    {
        return $this->c_email;
    }

    /**
     * @return mixed
     */
    public function getC_phno()
    {
        return $this->c_phno;
    }

    /**
     * @return mixed
     */
    public function getC_pass()
    {
        return $this->c_pass;
    }

    /**
     * @return mixed
     */
    public function getC_cpass()
    {
        return $this->c_cpass;
    }

    /**
     * @return mixed
     */
    public function getC_secques()
    {
        return $this->c_secques;
    }

    /**
     * @return mixed
     */
    public function getCreatedby()
    {
        return $this->createdby;
    }

    /**
     * @return mixed
     */
    public function getUpdatedby()
    {
        return $this->updatedby;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $career_id
     */
    public function setCareer_id($career_id)
    {
        $this->career_id = $career_id;
    }

    /**
     * @param mixed $c_fname
     */
    public function setC_fname($c_fname)
    {
        $this->c_fname = $c_fname;
    }

    /**
     * @param mixed $c_lname
     */
    public function setC_lname($c_lname)
    {
        $this->c_lname = $c_lname;
    }

    /**
     * @param mixed $c_email
     */
    public function setC_email($c_email)
    {
        $this->c_email = $c_email;
    }

    /**
     * @param mixed $c_phno
     */
    public function setC_phno($c_phno)
    {
        $this->c_phno = $c_phno;
    }

    /**
     * @param mixed $c_pass
     */
    public function setC_pass($c_pass)
    {
        $this->c_pass = $c_pass;
    }

    /**
     * @param mixed $c_cpass
     */
    public function setC_cpass($c_cpass)
    {
        $this->c_cpass = $c_cpass;
    }

    /**
     * @param mixed $c_secques
     */
    public function setC_secques($c_secques)
    {
        $this->c_secques = $c_secques;
    }

    /**
     * @param mixed $createdby
     */
    public function setCreatedby($createdby)
    {
        $this->createdby = $createdby;
    }

    /**
     * @param mixed $updatedby
     */
    public function setUpdatedby($updatedby)
    {
        $this->updatedby = $updatedby;
    }

   
}
    
    
    
   