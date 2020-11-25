<?php

class Company
{
    public $companyName;

    public function __construct($companyName = "DOT Indonesia")
    {
        $this->companyName = $companyName;
    }

    public function setCompanyName($name)
    {
        $this->companyName = $name;
    }

    public function getCompanyName()
    {
        return "$this->companyName";
    }
}


// 
class Departement extends Company
{
    public $departementName;

    public function __construct($departementName = "Software Development")
    {
        $this->departementName = $departementName;
    }

    public function setDepartementName($name)
    {
        $this->departementName = $name;
    }

    public function getDepartementName()
    {
        $str = "{$this->departementName}";
        return $str;
    }
}


// Class Employee
class Employee extends Departement
{

    public
        $name,
        $title,
        $sallary;

    public function __construct($name = "Muhammad Yudiz Rizqi Patria", $title = "Intership", $sallary = 100000)
    {
        $this->name = $name;
        $this->title = $title;
        $this->sallary = $sallary;
    }

    public function setEmployeeName($name = "Yudiz Patria")
    {
        $this->name = $name;
    }

    public function getEmployeeTitle()
    {
        return " $this->title";
    }

    public function getEmployeeProfile()
    {
        return
            "
            Info Karyawan
            <br>
        ================================
        <br> 
        Nama Karyawan : {$this->name} 
        <br>
        Pangkat Karyawan :  {$this->getEmployeeTitle()} 
        <br>
        Gaji Karyawan {$this->getEmployeeMounthlySalary()} 
        <br>
        Divisi : {$this->getDepartementName()} 
        <br>
        Nama Perusahaan : {$this->getCompanyName()}
        <br>
        ================================
        ";
    }

    public function getEmployeeMounthlySalary($day = 30)
    {
        if (!is_integer($day)) {
            throw new Exception("Integer Only");
        }
        $this->day = $day;
        $cry =  ($this->sallary * $this->day);
        return $cry;
    }
}

$infoKaryawan = new Employee();
$infoKaryawan->setDepartementName("Software Development");
$infoKaryawan->setCompanyName("DOT Indonesia");
echo $infoKaryawan->getEmployeeProfile();
