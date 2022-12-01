<?php
class UserModel extends Database
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function loginDriver($email, $password)
    {
        $sql = "SELECT * FROM `driver` WHERE `email` = :email AND `password` = :pass";

        $this->prepare($sql);
        $this->bind(':email', $email);
        $this->bind(':pass', $password);
        $driver = $this->single();

        if ($this->rowCount() > 0) {
            return $driver;
        } else {
            return false;
        }
    }
    public function loginPoliceOfficer($email, $password)
    {
        $sql = "SELECT * FROM `policeofficer` WHERE `email` = :email AND `password` = :pass";

        $this->prepare($sql);
        $this->bind(':email', $email);
        $this->bind(':pass', $password);
        $policeofficer = $this->single();

        if ($this->rowCount() > 0) {
            return $policeofficer;
        } else {
            return false;
        }
    }
    public function loginPoliceStation($email, $password)
    {
        $sql = "SELECT * FROM `policestation` WHERE `email` = :email AND `password` = :pass";

        $this->prepare($sql);
        $this->bind(':email', $email);
        $this->bind(':pass', $password);
        $policestation = $this->single();

        if ($this->rowCount() > 0) {
            return $policestation;
        } else {
            return false;
        }
    }
    public function loginSystemAdmin($email, $password)
    {
        $sql = "SELECT * FROM `systemadmin` WHERE `email` = :email AND `password` = :pass";

        $this->prepare($sql);
        $this->bind(':email', $email);
        $this->bind(':pass', $password);
        $admin = $this->single();

        if ($this->rowCount() > 0) {
            return $admin;
        } else {
            return false;
        }
    }
    public function loginRmvAdmin($email, $password)
    {
        $sql = "SELECT * FROM `rmvadmin` WHERE `email` = :email AND `password` = :pass";

        $this->prepare($sql);
        $this->bind(':email', $email);
        $this->bind(':pass', $password);
        $rmvadmin = $this->single();

        if ($this->rowCount() > 0) {
            return $rmvadmin;
        } else {
            return false;
        }
    }
    public function findUserByEmail($email, $password)
    {
        if ($this->loginDriver($email, $password) == false) {
            return false;
        } else if ($this->loginPoliceOfficer($email, $password) == false) {
            return false;
        } else if ($this->loginPoliceStation($email, $password) == false) {
            return false;
        } else if ($this->loginSystemAdmin($email, $password) == false) {
            return false;
        } else {
            return false;
        }
    }
}