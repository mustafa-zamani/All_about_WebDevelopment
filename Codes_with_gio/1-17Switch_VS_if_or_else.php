<?php

$paymentStatus = 'paid';

switch($paymentStatus)
{
    case 'Paid':
    case 'paid': 
        echo "Paid";
        break;
    case 'declined':
        echo 'declined';
        break;
    case 'Pending':
        echo 'Pending';
        break;
    default:
        echo 'unknown payment status';
}

#swithc statement do loose comprison 
$paymentStatuses = ['paid', 'Paid', 'declined'];

foreach($paymentStatuses as $paymentStatuse){
switch($paymentStatuse)
{
    case 'Paid':
    case 'paid': 
        echo "Paid";
        break 2;

    case 'declined':
        continue 2;
        echo 'declined';
        break;

    case 'Pending':
        echo 'Pending';
        break;
    default:
        echo 'unknown payment status';
}
echo '<br />';
}

#usage example 
function x()
{
    sleep (3);
    echo 'Done'."<br />";
    return 3;
}

if($x()===1){
    echo 1;
}elseif($x()===2){
    echo 2;
}elseif($x()===3){
    echo 3;
}else{
    echo 4;
}

switch(x()){
{
    case 1:
    case '1': 
        echo 1;
        break 2;

    case 2:
        continue 2;
        echo 2;
        break;

    case 3:
        echo 3;
        break;
    default:
        echo 'unknown umber';
}