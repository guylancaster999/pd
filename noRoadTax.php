<?php 
require "page.php";
$pg= new pageCls("No Tax - Road Fund (Excise License)");?>
   <div id="wrapper">
      <div id="header">
          <?php $pg->banner(); ?>
      </div><!-- #header -->
      <div id="content">
        <table width="100%">
          <tr>
            <td>
			<div class="main">
          <?php $pg->displayHeader();?>
          It is an offence to use or keep on a public road a mechanically propelled vehicle when no excise license is in force.
          <br/>
          <br/>
          The penalties include a fine of £1000, £2500 or 5 times the value of the vehicle, which ever is the greater.
          <br/>
          <br/>
          The charge includes not only the use but the driver's mere presence of the car on the road.
          <br/>
          <br/>
          It is a defence of the vehicle was used by another who used it without the authority of the owner.
          The use of a vehicle by an employee can be arguably a defence as to prosecute would amount to oppression.
          <br/>
          <br/>
          If you are in any confusion or doubt, <A href="contact.php">contact us</a> in total confidence.</div>
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
  
		  