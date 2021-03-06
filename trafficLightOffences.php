<?php require "page.php";
$pg= new pageCls("Traffic Light Offences");?>
    <div id="wrapper">
      <div id="header">
          <?php $pg->banner(); ?>
      </div><!-- #header -->
      <div id="content">
        <table class="wide">
          <tr>
            <td>
	<div class="main">
		<div class="strap0">
        <span class="strap1">&quot;Successful</span>
			  <span class="strap2"> defences can be raised against prosecutions for </span>
        <br/>
        <span class="strap2">red light offences.&quot;</span>
    </div>
	<?php $pg->displayHeader();?>
		Prosecutions for failing to comply with traffic light signals have increased substantially since the introduction of traffic light cameras.
		<br/><br/>
		Evidence can still be given by a police officer or indeed civilian witnesses as to whether a motorist went through a traffic light on red.
		<br/><br/>
		In essence you commit the offence if any part of your vehicle crosses the stop line when the light is showing red.
		<br/><br/>
		Not only can successful defences be raised against prosecutions for red light offences but, in certain circumstances, Special Reasons can be pleaded to avoid penalty points even in the event of a conviction.
		PENALTY 3 points + a fine
			 </div>
			 	 </td>
				  <td class="tdHbar"><?php $pg->hbar();?></td>
			  <td class="menuPos">
					<div   class="menu">
		<?php $pg->menu();?>
		</div>
	  </td>
	</tr>
	</table>
       </div><!-- #content -->
      <div id="footer">
           <?php $pg->foot();?>
      </div><!-- #footer -->
    </div><!-- #wrapper -->
</body>
</html>