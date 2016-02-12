<?php 
require "page.php";
$pg= new pageCls("Failing to Stop");
?>
    <div id="wrapper">
      <div id="header">
          <?php $pg->banner(); ?>
      </div><!-- #header -->
      <div id="content">
        <table class="wide">
          <tr>
            <td>
				<div class="main">
				<?php $pg->displayHeader(); ?>
			As a driver on a road or public place where an accident occurred which caused injury to a person or damage to a vehicle or property, an offence is committed of the driver fails to stop and provide their details
			<br/>
			<br/>
			The sentence for such an offence is 5-10 points (unless special reasons), fine, possible  imprisonment, discretionary disqualification.
			<br/>
			<br/>
			Where an accident occurs a driver has a duty to stop at the scene.
			If you do not you commit the offence.
			Unless the information has been given you must report the accident to the police as soon as practical, and in any case within 24 hours.
						<br/>
						<br/>
			There is case law that determines that you must know you have been involved in an accident to be convicted of the offence.
						<br/>
						<br/>
			We will provide objective practical advice and assistance, and understanding counsel.
						<br/>
						<br/>
			Do not face this offence alone, contact us immediately.
				</div>
		 	   </td>
			    <td  class="tdHbar"><?php $pg->hbar();?></td>
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