<?php
class pageCls
{
	private $pgTtl;

	function __construct ($pg)
{
	$this->pgTtl = $pg;
	print '<!DOCTYPE html>
    <html lang="en">
    <head>
      <title>Paul Darnborough Solicitors - '.$this->pgTtl.'</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="keywords" content="Driving Offences, Accidents, Careless Driving Dangerous Driving, Disqualification, Insurance Offences Penalty Points, Traffic Lights, Totting Up, Drunk In Charge, Failure To Provide, Mobile Phones, Young Drivers, Speeding, Driving While Disqualified, Criminal Offences, Offences of Violence, Public Order Offences, Criminal Damage, Drug Offences, Revenue &amp; Customes Offences" />
      <meta name="description" content="Paul Darnborough Solicitors - '.$this->pgTtl.'" />
      <link rel="stylesheet" href="css/main.css" />
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
      <link rel="icon" href="favicon.ico" type="image/x-icon" />
      <!--[if lt IE 7]>
        <style type="text/css">
          #wrapper { height:100%; }
        </style>
      <![endif]-->
    </head>';
return;
}
function hbar()
{
	print '<img src="img/dot.png" class="vbar" >';
}
function displayHeader()
{
	print "<h1>".$this->pgTtl."</h1>";
}

function banner()
{
  print'<div class="logo">
              <a href="#" title="Paul Darnborough Solicitors">
                <img src="img/logo.jpg" alt="Paul Darnborough Solicitors"/>
              </a>
          </div>
          <div class="slogan">
            <a href="#" title="Phone:07811329055">
                <img src="img/slogan.jpg" alt="Phone:07811329055"/>
            </a>
          </div>
          <div class="barPos">
          <img src="img/border.jpg" alt="" class="wideBar">
           <div class="bar">
                  <a href="index.php" title="PDS Home Page">Home</a> |
                   <a href="contact.php" title="Contact PDS">Contact us</a> |
            </div> <!--bar-->
          <img src="img/dot.png" class="hbar" >
          </div> <!--barpos-->    ';
return;
}
function menu()
{
	print'<div class="menuHdr">Driving Offences</div>
            <div><a href="rta.php">Road Traffic Accidents</a></div>
            <div><a href="carelessDriving.php">Careless Driving</a></div>
            <div><a href="dangerousDriving.php">Dangerous Driving</a></div>
            <div><a href="disqualification.php">Disqualification</a></div>
            <div><a href="noInsurance.php">No Insurance (Using,<br/>Causing or Permitting)</a></div>
            <div><a href="failingToStop.php">Failing to Stop</a></div>
            <div><a href="penaltyPoints.php">Penalty Points</a></div>
            <div><a href="trafficLightOffences.php">Traffic Light Offences</a></div>
            <div><a href="tottingUp.php">Totting Up</a></div>
            <div><a href="drinkDriving.php">Drink Driving</a></div>
            <div><a href="mobilePhoneDriving.php">Mobile Phone Driving</a></div>
            <div><a href="newDrivers.php" title="new Drivers">New Drivers</a></div>
            <div><a href="speedingOffences.php">Speeding Offences</a></div>
            <div><a href="drivingWhileDisqualified.php">Driving While Disqualified</a> </div>
            <div><a href="openingACarDoor.php">Opening a Car Door</a></div>
            <div><a href="pedestrianCrossing.php">Pedestrian Crossing (failing<br/>to accord precedence)</a></div>
			      <div><a href="noRoadTax.php">No Road Tax</a></div>
		        <div> <a href="noMOT.php" title="No MOT Certificate">No MOT</a></div>
		  		  <br/>
            <div class="menuHdr">Criminal Offences</div>
            <div><a href="offencesOfViolence.php">Offences of Violence</a></div>
            <div><a href="publicOrderOffences.php">Public Order Offences</a></div>
            <div><a href="drugOffences.php">Drug Offences</a> </div>
            <div><a href="revenueCustomOffences.php">Revenue &amp; Custom Offences</a></div>
            <div><a href="footballSpectators.php">Football Spectators</a></div>
            <br  />
	          <div class="menuHdr">Information</div>
          <div><a href="contact.php" title="Contact us">Contact Us</a></div>';
}
function foot()
{
  print ' <img src="img/border.jpg" alt="" class="wideBar">
          <div class="footText">&copy; Copyright 2010-2016 P.D. Solicitors registration number 5533388.
           Regulated by the Solicitors Regulation Authority and the Solicitors\' Code of Conduct 2007.<br/>
          For more information and a copy of the Code of Conduct, visit the Solicitors Regulation Authority\'s<a href="http://www.sra.org.uk"> website</a>.<br/>
           We are regulated by the the Law society, for more information, click <a href="http://www.lawsociety.org.uk/home">here</a>.<br/>
           Our registered address is on our <a href="contact.php">contact page</a>.</div>      ';
      return;
}
}