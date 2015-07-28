<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function WorkingDays($year, $month, $day) {
    if (!$year)
        $year = date('Y');
    if (!$month)
        $month = date('m');
    if (!$day)
        $day = date('d');
 
    //create a start and an end datetime
    $startdate = strtotime($year . '-' . $month . '-01');
    $enddate = strtotime($year . '-' . $month . '-' . $day);
    $currentdate = $startdate;
 
    while ($currentdate <= $enddate) {
        //if not Saturday or Sunday, +1
        if (!((date('D', $currentdate) == 'Sat') || (date('D', $currentdate) == 'Sun') )) {
            $return = $return + 1;
        }
        $currentdate = strtotime('+1 day', $currentdate);
    } //end date walk loop
    //return the number of working days
    return $return;
}
?>
<html>
    <head>
        <TITLE>Northernaviation 555 444</TITLE>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <link href="assets/theme_bolt/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="assets/theme_bolt/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="assets/theme_bolt/css/main.css" rel="stylesheet" type="text/css">
        
                
        <script type="text/javascript" src="assets/jquery-1.11.3.js"></script>
        <script type="text/javascript" src="assets/jquerymobile/jquery.mobile-1.4.5.js"></script>
        
        <script type="text/javascript" src="assets/easyslider1.7/js/easySlider1.7.js"></script>
        
        <script src="assets/theme_bolt/js/chart.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                    $("#slider").easySlider({
                            auto: true, 
                            continuous: true
                    });
            });
        </script>
    </head>
    <body>
    <div class="navbar navbar-brand1">
     
        <div class="navbar navbar-default navbar-fixed-top">
          <a class="navbar-brand1" href="#" NAME="anchor_save" ID="anchor_save"><img src="images/mailchiamp.jpg" alt="" border="0"> </a>
          <a class="navbar-brand1" href="#">Course</a>
          <a class="navbar-brand1" href="#">News</a>
          <a class="navbar-brand1" href="testpage.php">About</a>
          <a class="navbar-brand1" href="#">Contact</a>
          <a class="navbar-brand1" href="SetUp.php">Set Up</a>
        </div>
        <div class="navbar1 "> </div>
    </div>
        
        <div  class="navbar-brand1">
            เรียนขับเครื่องบินที่ฟินสุดๆ
        </div>
        <div id="slider" class="navbar-brand1">
            <ul>				
                <li><a href="#"><img src="images/slide1.jpg" alt="Css Template Preview" /></a></li>
                <li><a href="#"><img src="images/slide2.jpg" alt="Css Template Preview" /></a></li>
                <li><a href="#"><img src="images/slide3.jpg" alt="Css Template Preview" /></a></li>                
            </ul>
        </div>
        <?php
        //WorkingDays("2015", "07", "25");
        //echo "Hello World!";
        ?>
        
    </body>
</html>