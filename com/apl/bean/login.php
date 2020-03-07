<?php
class Career{
    
    private $id;
    private $career_id;
    private $c_email;
    private $c_pass;
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
    public function getC_email()
    {
        return $this->c_email;
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
     * @param mixed $c_email
     */
    public function setC_email($c_email)
    {
        $this->c_email = $c_email;
    }

    /**
     * @param mixed $c_pass
     */
    public function setC_pass($c_pass)
    {
        $this->c_pass = $c_pass;
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