<?php
class Fruit{
    public $name;
    public $color;

    function set_name($name){
        $this->name= $name;
    }
    function set_color($color){
        $this->color= $color;
    }
    function get_name(){
        return $this->name;
    }
    function get_color(){
        return $this->color;
    }
}
class Students{
    public $name;
    public $roll;
    public $reg;
    public $section;
    function __construct($n,$r,$reg,$sec){
        $this ->name=$n;
        $this ->roll=$r;
        $this ->reg=$reg;
        $this ->section=$sec;
    }
    // function set_details($n,$r,$reg,$sec){
    //     $this ->name=$n;
    //     $this ->roll=$r;
    //     $this ->reg=$reg;
    //     $this ->section=$sec;
    // }
    function get_details(){
        echo "Name: $this->name <br>Roll No.: $this->roll<br>registration : $this->reg <br> $this->section<br>";
    }
    function __destruct(){
        echo "Object is destroyed";
    }
}
echo "****************Fruits Class *******************<br>";
$apple =new Fruit();
$apple->set_name('Apple');
$apple ->set_color('Red');
echo "Name : ". $apple->get_name()."<br>";
echo "Color : ".$apple->get_color()."<br>";
// echo "**********student Class*******************<br>";
// $std = new Students();
// $std->set_details('Saurav','09','12210691','k22MZ');
// $std->get_details();
echo "************Student details using constructor**************<br>";
$std2 =new Students('abhinash','010','12210691','k22MZ');
$std2->get_details();