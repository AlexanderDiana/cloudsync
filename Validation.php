<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Validation
 *
 * @author DianaA
 */
class Validation {
  
    function is_email($val)
  {
  return (bool)(preg_match("/^([a-z0-9+_-]+)(.[a-z0-9+_-]+)*@([a-z0-9-]+.)+[a-z]{2,6}$/ix", $val));
 
  }
  
  public static $regexes = Array(
    		'date' => "^[0-9]{4}[-/][0-9]{1,2}[-/][0-9]{1,2}\$",
    		'amount' => "^[-]?[0-9]+\$",
    		'number' => "^[-]?[0-9,]+\$",
    		'alfanum' => "^[0-9a-zA-Z ,.-_\\s\?\!]+\$",
    		'not_empty' => "[a-z0-9A-Z]+",
    		'words' => "^[A-Za-z]+[A-Za-z \\s]*\$",
    		'phone' => "^[0-9]{10,11}\$",
    		'zipcode' => "^[1-9][0-9]{3}[a-zA-Z]{2}\$",
    		'plate' => "^([0-9a-zA-Z]{2}[-]){2}[0-9a-zA-Z]{2}\$",
    		'price' => "^[0-9.,]*(([.,][-])|([.,][0-9]{2}))?\$",
    		'2digitopt' => "^\d+(\,\d{2})?\$",
    		'2digitforce' => "^\d+\,\d\d\$",
    		'anything' => "^[\d\D]{1,}\$"
    );
  //function returns true if input string only conatins characters
  public function onlyChars($a){
      $flag = false;
      if(ctype_alpha($a))
      {
          $flag=true;
             
      }
     return $flag;
    }
    
    //function returns true if input string only contains digits
    public function onlyDigits($a){
        $flag = false;
        if(ctype_digit($a)){
            $flag=true;
        }
        return $flag;
    }
    
    //function returns true if input string only contains alphanumberic characters
    public function onlyAphaNum($a){
        $flag = false;
        if(ctype_alnum($a)){
            $flag=true;
        }
        return $flag;
    }
    
   //function returns true if the length of the string length is less than the max length
    public function maxlength($max, $a){
        $flag = false;
        if(strlen($a)<= $max){
            $flag=true;
        }
        return $flag;
    }
    
   //returns true if the input string is a valid email address
   public function valEmail($a){
       $flag = false;
       if(filter_var($a, FILTER_VALIDATE_EMAIL)){
           $flag=true;
       }
       return $flag;
   } 
   
   //returns true if the input string is a valid url
   public function valURL($a){
       $flag=false;
       if(filter_var($a, FILTER_VALIDATE_URL)){
           $flag = true;
       }
       return $flag;
   }
   
    //put your code here
}

