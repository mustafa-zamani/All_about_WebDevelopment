<?php

# Match expression work only with php 8 and higher
# Match expression to the stric comprison while the switch do loose comprison
# with match expression we can't modify multi statement for one case while in switch we can have multi statement
# if you want to use multi-expression use function and call it in match

$paymentStatus = '2';

$paymentStatusDisplay = match($paymentStatus){
    1 =>  'Paid',
    2 =>  'Payment declined',
    0 =>  'Pending Payment',
    default=> 'unknown payment',
};

$paymentStatusDisplay = match($paymentStatus){
    1 =>  'Paid',
    2,3 =>  'Payment declined',
    0 =>  'Pending Payment',
};

echo $paymentStatusDisplay;

