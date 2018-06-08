<?php 

function get_month_string($data){
    $month = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

    return $month[(int)$data];
}

function transcargo_get_the_date(){
    $date = get_the_date();
    $date_arr = explode('.', $date); 
    $date_num = $date_arr[0];
    $month = $date_arr[1];
    $month = get_month_string($month);
    $year = $date_arr[2];
    $date = $month .' '. $date_num .', '. $year;

    return $date;
}