
<style type="text/css">
#clockdiv{font-family: sans-serif;color: #fff;display: inline-block;font-weight: 100;text-align: center;	font-size: 25px;}
#clockdiv > div{padding: 10px;border-radius: 3px;background: #00BF96;display: inline-block;}
#clockdiv div > span{padding: 5px;border-radius: 3px;background: #00816A;display: inline-block;}
.smalltext{padding-top: 5px;font-size: 16px;}
/* Smartphones (portrait and landscape) ----------- */
@media only screen 
and (min-device-width : 320px) 
and (max-device-width : 480px) {
  /* Styles */
#clockdiv{font-family: sans-serif;color: #fff;display: inline-block;font-weight: 90;text-align: center;	font-size: 15px;}
#clockdiv > div{padding: 5px;border-radius: 3px;background: #00BF96;display: inline-block;}
#clockdiv div > span{padding: 10px;border-radius: 3px;background: #00816A;display: inline-block;}
.smalltext{padding-top: 3px;font-size: 12px;}
}
</style>

<?php 
date_default_timezone_set("Asia/KolKata"); 
$date = strtotime("March 15, 2017 10:00 AM");
$remaining = $date - time();
$days_remaining = floor($remaining / 86400);
$hours_remaining = floor(($remaining % 86400) / 3600);
$minutes_remaining=floor(($remaining % (3600)) / (60));
$second_remaining=floor(($remaining%60));
 ?> 
<div id="clockdiv">
  <div>
    <span class="days"> <?php echo $days_remaining?></span>
    <div class="smalltext">Days</div>
  </div>
  <div>
    <span class="hours"> <?php echo $hours_remaining?></span>
    <div class="smalltext">Hours</div>
  </div>
  <div>
    <span class="minutes"><?php echo $minutes_remaining ?></span>
    <div class="smalltext">Minutes</div>
  </div>
  <div id="ani">
    <span class="seconds" ><?php echo $second_remaining ?></span>
    <div class="smalltext">Seconds</div>
  </div>
    <div>
    <span>TO</span>
    <div class="smalltext">GO</div>
  </div>
</div>