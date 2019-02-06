<?php
/**
 * Created by PhpStorm.
 * User: merli
 * Date: 06-Feb-19
 * Time: 10:30 AM
 */

class test
{
    var $str = '';

    /**
     * test constructor.
     * @param string $str
     */
    public function __construct($s)
    {
        $this->setText($s);
    }

    function setText($s){
        $this->str = $s; //sellele omistatakse s-i vaartus
    }
    function showText(){
        echo '<b>'.$this->str.'</b><br>';
    }

}