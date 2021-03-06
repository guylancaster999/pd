<?php 
require "page.php";
$pg= new pageCls("Speeding Offences");?>
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
        <span class="strap1">&quot;It is vitally important</span>
        <span class="strap2">to know where the prosecution weaknesses lie </span>
         <br/>
        <span class="strap2">and use this to your advantage.&quot;</span>
      </div>
	<?php $pg->displayHeader();?>
         Who doesn't have conviction for speeding?
          I don't know anyone even my mum.
          The most careful driver can commit an offence.
          Speed Cameras seem to appear at the most unlikely places, and be positioned to catch out an unwary motorist.
          <br/>
		  <br/>
          Without being aware of the consequences you can rack up points to place you in a situation of facing a lengthy period of disqualification from driving and a substantial fine.
          <br/><br/>
          Speeding carries a range of points (3-6) and in more serious cases an immediate ban.
          <br/><br/>
          Speak to us if you face this offence, the devices used to assert your speed are not infallible, and neither are the Officers who us them.
          You may need to speak to an expert court practitioner about what tactics to adopt and how best to approach the presentation of your Defence.
          <br/><br/>
          We will provide objective practical advice and assistance, and understanding counsel.
          <br/><br/>
          Do not face this offence alone, <a href="contact.php">contact us</a> immediately.
      </div>
	    </td>
		 <td class="tdHbar" ><?php $pg->hbar();?></td>
			  <td class="menuPos">
		<div  class="menu">
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