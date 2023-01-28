<?php
error_reporting(0);
$visitCounter = $_COOKIE['visitCounter']?:0;
$visitCounter++;
$lastVisit =$_COOKIE['lastVisit']?date('Y-m-d H:i',$_COOKIE['lastVisit']):'';
if (date('d-m-Y', $_COOKIE['lastVisit']) != date('d-m-Y')){
  setcookie('visitCounter', $visitCounter, time()+3600*24);
  setcookie('lastVisit', time(), time()+3600*24);
}

