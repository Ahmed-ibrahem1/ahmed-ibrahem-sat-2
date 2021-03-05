<?php 


// 1 - write a function getNumMatches that searches for a word in an array of words and returns 
// the number of matches (repetitions).

function getNumMatchess($word , $arr) {
    $count = 0;
        foreach($arr as $ar) {
            if($word == $ar) {
                $count++;
            }
        }
   return $count;
}

// -------------------------------------------------------------------------------------------------

// 2 - write a function getPriceWithDiscount that takes the price and returns the price after discount.
// discount is 10% for prices less than 1000
// and 5% for prices greater than or equal 1000

function getPriceWithDiscount($price) {
    if($price < 1000) {
        $dis = $price-$price*10/100;
        return $dis;
    }elseif ($price > 1000){
        $dis = $price-$price*5/100;
        return $dis;
    }
}



?>