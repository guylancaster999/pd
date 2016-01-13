<?php
function contactBar()
{
    print '<img src="img/border.jpg" alt="" class="wideBar">
    <br/>
     <div class="bar">
             <a href="index.php" title="PDS Home Page">Home</a> |
             <a href="contact.php" title="Contact PDS">Contact us</a>
        </div>
        <hr/>';
        return;
}
function top($pgTtl)
{
print '<!DOCTYPE html>
    <html lang="en">
    <head>
      <title>Paul Darnborough Solicitors - '.$pgTtl.'</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="keywords" content="Driving Offences, Accidents, Careless Driving Dangerous Driving, Disqualification, Insurance Offences Penalty Points, Traffic Lights, Totting Up, Drunk In Charge, Failure To Provide, Mobile Phones, Young Drivers, Speeding, Driving While Disqualified, Criminal Offences, Offences of Violence, Public Order Offences, Criminal Damage, Drug Offences, Revenue &amp; Customes Offences" />
      <meta name="description" content="Paul Darnborough Solicitors - '.$pgTtl.'" />
      <link rel="stylesheet" href="css/main.css" />
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
      <link rel="icon" href="favicon.ico" type="image/x-icon" />
    </head>
    <body>
        <div class="logo">
              <a href="#" title="Paul Darnborough Solicitors">
                <img src="img/logo.jpg" alt="Paul Darnborough Solicitors"/>
              </a>
          </div>
          <div class="slogan">
            <a href="#" title="07811329055">
                <img src="img/slogan.jpg" alt="07811329055"/>
            </a>
          </div>';
return;
}
function foot($cls)
{
		print' <div class="menu">
			<div class="menuHdr">Driving Offences</div>
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
	        <div>
			<div class="menuHdr">Information</div>
            <div><a href="contact.php" title="Contact us">Contact Us</a></div>
             <br/>
            </div>
			           <br/>
            </div>
      <div class="'.$cls.'">
          <img src="img/border.jpg" alt="" class="wideBar">
          <span class="footText">&copy; Copyright 2010-2016 P.D. Solicitors registration number 5533388.
           Regulated by the Solicitors Regulation Authority and the Solicitors\' Code of Conduct 2007.
          For more information and a copy of the Code of Conduct, visit the <a href="http://www.sra.org.uk">Authority\'s website</a>.
           We are regulated by the the Law society, for more information, click <a href="http://www.lawsociety.org.uk/home">here</a>.
           Our registered address is on our <a href="contact.php">contact page</a>.</span>
        </div>

	 </body>
</html>';
return;
}
