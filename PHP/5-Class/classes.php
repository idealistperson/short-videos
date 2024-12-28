<?php
class Company{
    public $name;
    private $revenue;

    public function __construct($name,$revenue){
        $this->name=$name;
        $this->revenue=$revenue;
    }
    public function getDetails(){
        return "Company:$this->name\nRevenue:$"
        .number_format($this->revenue);
    }
}
$myCompany = new Company("Idealist Person",100000);
echo $myCompany->getDetails();
?>