<?php
include 'common/_dbconnect.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $timee = $_POST['time_picker'];

    echo $fname .'<br>';
    echo $lname .'<br>';
    echo $email .'<br>';
    echo $phone .'<br>';
    
    echo $timee .'<br>';

    $sql1 = "INSERT INTO `appointment` (`fname`, `lname`, `email`, `phone`, `timee`) VALUES ('$fname','$lname','$email','$phone','$timee')";
    $result1 = mysqli_query($conn,$sql1);
    if($result1){

    }else{
        header("location:/Advocate-Vidhi-Chambers/appointment.php?status=existemail");

    }

    
    
$entered_date=$_POST['appt_date'];
$timestamp = strtotime($_POST['appt_date']); 

$today=date("Y-m-d");

echo $today;
echo '<br>';
echo $entered_date.'<br>';
// $today=strtotime($today);

$date_one=strtotime($today. ' + 1 days');
$date_two=strtotime($today. ' + 2 days');
$date_three=strtotime($today. ' + 3 days');

$date1=date('Y-m-d', strtotime($today. ' + 1 days'));
// echo $date1;

$date2=date('Y-m-d', strtotime($today. ' + 2 days'));
// echo $date2;

$date3=date('Y-m-d', strtotime($today. ' + 3 days'));
// echo $date3;

    $date=date('d',$timestamp);
    $month=date('m',$timestamp);
    $year=date('Y',$timestamp);

    $date11=date('d',$date_one);
    $month11=date('m',$date_one);
    $year11=date('Y',$date_one);

    $date22=date('d',$date_two);
    $month22=date('m',$date_two);
    $year22=date('Y',$date_two);

    $date33=date('d',$date_three);
    $month33=date('m',$date_three);
    $year33=date('Y',$date_three);
    

    function dayofweek($d, $m, $y) 
{ 
    static $t = array(0, 3, 2, 5, 0, 3, 
                      5, 1, 4, 6, 2, 4); 
    $y -= $m < 3; 
    return ($y + $y / 4 - $y / 100 +  
            $y / 400 + $t[$m - 1] + $d) % 7;
            

} 
$day = dayofweek($date, $month, $year); 
$day=$day+1;

$day1 = dayofweek($date11, $month11, $year11); 
$day1=$day1+1;

$day2 = dayofweek($date22, $month22, $year22); 
$day2=$day2+1;

$day3 = dayofweek($date33, $month33, $year33); 
$day3=$day3+1;

// 1-monday
// 2-tuesday
// 3-wed
// 4-thur
// 5-friday
// 6-saturday
// 7-sunday

if ($entered_date==$today and $day!=7) {
    echo 'appointment today and today no sunday';
   header("location:/Advocate-Vidhi-Chambers/appointment.php?status=nosunday");

} elseif ($entered_date==$today and $day==7) {
    echo 'appoitment today but today  sunday'.'<br>';
    echo 'select another date';
    header("location:/Advocate-Vidhi-Chambers/appointment.php?status=sunday");
    
} elseif($entered_date==$date1 and $day1!=7) {
    echo 'appointment tom and tom no sunday';
    header("location:/Advocate-Vidhi-Chambers/appointment.php?status=nosunday");

} elseif($entered_date==$date1 and $day1==7) {
    echo 'appointment tom and tom  sunday'.'<br>';
    echo 'select another date';
    header("location:/Advocate-Vidhi-Chambers/appointment.php?status=sunday");
    
}elseif($entered_date==$date2 and $day2!=7) {
    echo 'appointment day after tom and no sunday';
    header("location:/Advocate-Vidhi-Chambers/appointment.php?status=nosunday");
}elseif($entered_date==$date2 and $day2==7) {
    echo 'appointment day after tom and sunday'.'<br>';
    echo 'select another date';
    header("location:/Advocate-Vidhi-Chambers/appointment.php?status=sunday");
}
elseif($entered_date==$date3 and $day3!=7) {
    echo 'appointment done no sunday'.'<br>';   
    header("location:/Advocate-Vidhi-Chambers/appointment.php?status=nosunday"); 
}
elseif($entered_date==$date3 and $day3==7) {
    echo 'sunday no appointments'.'<br>';   
    header("location:/Advocate-Vidhi-Chambers/appointment.php?status=sunday"); 
}else{
    echo "appointments can only be given till three days from today.";
    header("location:/Advocate-Vidhi-Chambers/appointment.php?status=greaterdate");
}



}
?>
