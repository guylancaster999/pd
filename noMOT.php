<?php 
require "page.php";
$pg= new pageCls("No MOT Certificate");?>
    <div id="wrapper">
      <div id="header">
          <?php $pg->banner(); ?>
      </div><!-- #header -->
      <div id="content">
        <table class="wide">
          <tr>
            <td>
			<div class="main">
         <?php $pg->displayHeader();?>
          It is an offence to use or permit a motor vehicle to be on a road first registered 3 or more years previously without a test certificate in force.
          <br/><br/>
          Maximum penalty fine &pound;1,000.00
        <br/><br/>
          The mere presence of a vehicle on a road can constitute using.
           A vehicle should have a test certificate unless it is impossible for the driver to drive the vehicle.
              <br/>    <br/>
          If you have questions about this matter, <A href="contact.php">contact us</a> for clarification regarding your concerns.
        </div>
 	    </td>
		<td  class="tdHbar"><?php $pg->hbar();?></td>
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