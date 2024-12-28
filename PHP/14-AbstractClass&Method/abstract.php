<?php
abstract class Developer{
    public $name ;

    public function __construct ($name){
        $this->name = $name;
    }
    abstract public function code();
    abstract public function debug():string;
}

class FrontEndDeveloper extends Developer{
    public function code(){
        echo "$this->name is coding front-end.\n";
    }
    public function debug():string{
        return "$this->name is debugging UI.\n";
    }
}

class BackEndDeveloper extends Developer {
    public function code(){
        echo "$this->name is coding back-end.\n";
    }
    public function debug():string{
        return "$this->name is debugging server.\n";
    }
}

$dev1 = new FrontEndDeveloper("Herry");
$dev1->code();
echo $dev1->debug();

$dev2 = new BackEndDeveloper("Amanda");
$dev2 ->code();
echo $dev2->debug();