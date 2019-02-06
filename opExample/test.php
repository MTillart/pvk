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

    function setText($s){
        $this->str = $s; //sellele omistatakse s-i vaartus
    }
    function showText(){
        echo '<b>'.$this->str.'</b><br>';
    }

}