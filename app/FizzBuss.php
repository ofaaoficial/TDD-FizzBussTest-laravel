<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 3/21/2019
 * Time: 11:42 AM
 */

namespace App;


class FizzBuss
{
//    Kata fizz
    public function getList(){
        $arr = [];
        for($i = 1; $i <= 100; $i++){
            if($i % 3 == 0){
                array_push($arr, 'Fizz');
            }else if($i % 5 == 0){
                array_push($arr, 'Buss');
            }else if($i % 3 == 0 && $i % 5 == 0){
                array_push($arr, 'FizzBuss');
            }else{
                array_push($arr, $i);
            }
        }
        return $arr;
    }
}