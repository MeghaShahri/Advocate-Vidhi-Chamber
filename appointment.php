<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Vidhi Chambers-Home</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Law Firm Website Template" name="keywords">
        <meta content="Law Firm Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>
    <style>
        .msg {
            position: relative;
            padding: .75rem 1.25rem;
            border: 1px solid transparent;
            border-radius: .25rem;
            }

        .msg-empty{
        
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }
        .msg b{
        color: #721c24;
        background-color: #f8d7da;

        }
        .msg-success{
        
        color: #721c24;
        background-color: #f8d7da;
        border-color: #f5c6cb;
    }
    
        .details2-form{
            margin-top: 200px;
            position: relative;
            margin-bottom:-20px;
            left: 50%;
            transform: translate(-50%,-10%);
            width: 550px;
            height: 750px;
            padding: 10px 40px;
            box-sizing: border-box;
            background: #ffffff;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            margin-bottom: -50px;
            bottom:20%;
   }
   #submit{
        cursor: pointer;
        margin: 0;
        position: absolute;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
   }
   @media(max-width:499px){
    .details2-form{
        width:500px;
    }
   }
   @media(max-width:415px){
    .details2-form{
        width:450px;
    }
   }

   @media(max-width:400px){
    .details2-form{
        width:400px;
    }
   }
   @media(max-width:370px){
    .details2-form{
        width:350px;
    }
   }
   @media(max-width:295px){
    .details2-form{
        width:300px;
    }
   }
   @media(max-width:294px){
        #lname{
            margin-left:125px;
        }
    
   }
   @media(max-width:242px){
    .details2-form{
        width:270px;

    }
    label{
        width:100%;
    }
   }
   @media(max-width:198px){
    .details2-form{
        width:220px;
    }
   }
    </style>

    <body>
        <?php
            include 'common/nav.php';
            $status=$_GET['status'];
    
                if($status=='empty'){
                
                }
                else if($status=='sunday'){
                    echo' <div class="msg msg-empty">
                    <b>Failed!</b> Appointments on sunday not allowed.Please select another date.
                </div>';
                }
                else if($status=='nosunday'){
                    echo'
                <div class="alert alert-success" role="alert">
                <b>Done!</b> Noted.Wait for confirmation on call.
               
                </div>';
                }
                else if($status=='greaterdate'){
                    echo' <div class="msg msg-empty">
                    <b>Failed!</b> Select a date within 3 days from today.
                </div>';
                }
                else if($status=='existemail'){
                    echo' <div class="msg msg-empty">
                    <b>Failed!</b> Email already exists.
                </div>';}
        ?> 
        <!-- <p style="color:red;">Please fill the deatils below.Note-Appointment date should be within three days from today and appointments on sunday not allowed.</p> -->
        <div id="details2-form" class="details2-form">
                <form role="form" class="form" action="get_appointment.php" method="post">
                
                <div class="form-group">
                    <label for="name">Name :</label>
                    <div class="row">
                        <div class="col">
                        <input type="text" name="fname" class="form-control" placeholder="First name" required>
                        </div>
                        <div class="col" id="lname">
                        <input type="text"  class="form-control" name="lname" placeholder="Last name" required>
                    </div>
                </div>
                  </div>

                  

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email Id :</label>
                      <input type="email" class="form-control"
                      id="exampleInputEmail1" placeholder="Enter email" name="email" required/>
                  </div>
                  <div class="form-group">
                    <label for="phone">Phone Number :</label>
                      <input type="tel" class="form-control"
                          id="phone" name="phone" placeholder="Enter phone" required/>
                  </div>

                  <div class="form-group">
                  <label for="gender">Select your gender:</label><br>
                    <input type="radio" id="male" name="gender" value="male"  required>
                    <label for="male" style="font-weight:normal">Male</label><br>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female" style="font-weight:normal">Female</label><br>
                    <input type="radio" id="other" name="gender" value="other">
                    <label for="other" style="font-weight:normal">Other</label>
                 </div>
                
                <div class="form-group">
                    <label for="appt_date">Select a date :</label>
                    <input type="date" id="appt_date" name="appt_date" min="<?php echo date('Y'); ?>" value="<?php echo date('Y-m-d'); ?>" required>
                </div><br>

                <?php 
                    function create_time_range($start, $end, $interval = '60 mins', $format = '12') {
                        $startTime = strtotime($start); 
                        $endTime   = strtotime($end);
                        $returnTimeFormat = ($format == '12')?'g:i:s A':'G:i:s';
                    
                        $current   = time(); 
                        $addTime   = strtotime('+'.$interval, $current); 
                        $diff      = $addTime - $current;
                    
                        $times = array(); 
                        while ($startTime < $endTime) { 
                            $times[] = date($returnTimeFormat, $startTime); 
                            $startTime += $diff; 
                        } 
                        $times[] = date($returnTimeFormat, $startTime); 
                        return $times; 
                    }
                    
                    $times = create_time_range('10:00', '17:00', '60 mins');
                ?>
               
                <div class="form-group">
                  <label for="appt_time">Select a time:</label>
                  <!-- <input type="time" id="appt_time" name="appt_time">   -->
                  <select name="time_picker">
                    <option value="">Select time</option>
                    <?php foreach($times as $key=>$val){ ?>
                    <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
                    <?php } ?>
                </select>  
                </div>

                 <br> <br><button type="submit" class="btn" id="submit" style="background:#ffc40c; color:black; border:2px solid black">
                    Submit
                </button>      
                </form>  
            </div>
            
            
        <?php
             include 'common/footer.php';
           
        ?>
<script>
var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1; //January is 0!
    var yyyy = today.getFullYear();
    if (dd < 10) {
    dd = '0' + dd
    }
    if (mm < 10) {
    mm = '0' + mm
    }

    today = yyyy + '-' + mm + '-' + dd;
    document.getElementById("appt_date").setAttribute("min", today);
   
    var someDate = new Date();
    var numberOfDaysToAdd = 2;
    someDate.setDate(someDate.getDate() + numberOfDaysToAdd); 

    var ddd = someDate.getDate();
    var mmm = someDate.getMonth() + 1;
    var yyy = someDate.getFullYear();

    var someFormattedDate = yyy + '-' + mmm + '-' + ddd;
    document.getElementById("appt_date").setAttribute("max",someFormattedDate );


</script>