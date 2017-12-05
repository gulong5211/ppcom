<?php
class Singleton{
    private static $instanceof;
    private function __construct(){}
    private function  __clone(){}
    public  static function getInstanceof(){
    if(!(self::$instanceof instanceof self)){
        self::$instanceof=new self;
    }
        return self::$instanceof;
}
    public function demo(){
        echo 1;
    }

}
$a=Singleton::getInstanceof();
echo $a->demo();