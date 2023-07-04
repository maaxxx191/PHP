<?php
 class Company {
    protected $c_name;
    protected $address;
    protected $tell;

    public function setCompanyValue($c_name,$address,$tell){
        $this->c_name = $c_name;
        $this->address = $address;
        $this->tell = $tell;
    }
    
    public function displayCompany(){
        echo '会社名:'.$this->c_name."\n";
        echo '住所:'.$this->address."\n";
        echo '電話番号:'.$this->tell."\n";
    }
 }
 class Department extends Company {
    private $d_name;
    private $manager;

    public function setDepartmentValue($d_name,$manager){
        $this->d_name = $d_name;
        $this->manager = $manager;
    }

    public function displayDepartment(){
        echo '部署名:'.$this->d_name."\n";
        echo '部長:'.$this->manager."\n"."\n";
    }
 }

 $department_A = new Department();
 $department_A->setCompanyValue("サンプルA","市ヶ谷","080-XXXX-XXXX");
 $department_A->setDepartmentValue("人事","高田");
 $department_B = new Department();
 $department_B->setCompanyValue("サンプルB","池袋","090-XXXX-XXXX");
 $department_B->setDepartmentValue("総務","田中");
 $department_C = new Department();
 $department_C->setCompanyValue("サンプルC","新宿","070-XXXX-XXXX");
 $department_C->setDepartmentValue("営業","高橋");

 $array = [$department_A,$department_B,$department_C];
 foreach($array as $value) {
    $value->displayCompany();
    $value->displayDepartment();
}

 ?>
