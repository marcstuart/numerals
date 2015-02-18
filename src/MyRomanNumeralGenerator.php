<?php

class MyRomanNumeralGenerator implements romanNumeralGenerator{

    /**
     * Generate a roman numeral from a decimal number
     * 
     * @param int $number - The number to be generated
     * @return String $numeralDisplay - The decimal number in numerals 
     */

    public function generate($number){

        //validate $number and throw an exception
        if(!is_int($number)){
            throw new InvalidArgumentException('Input must be a valid integer: '.$number);
        }elseif($number < 0){
            throw new RangeException('Negative numbers are not allowed: '.$number);
        }elseif($number > 3999){
            throw new RangeException('Maximum input is 3999: '.$number);
        }
        
        $numeralDisplay = '';
        $numerals = array(
                        'M'  => 1000,
                        'CM' => 900,
                        'D'  => 500,
                        'CD' => 400,
                        'C'  => 100,
                        'XC' => 90,
                        'L'  => 50,
                        'XL' => 40,
                        'X'  => 10,
                        'IX' => 9,
                        'V'  => 5,
                        'IV' => 4,
                        'I'  => 1,
                    );
						
        foreach($numerals as $key => $numeral){
            while($number >= $numeral){
                $number -= $numeral;
                $numeralDisplay .= $key;
            }
        }

        return $numeralDisplay;

    }

}