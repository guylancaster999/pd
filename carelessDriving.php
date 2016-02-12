<?php 
require "page.php";
$pg= new pageCls("Careless Driving");
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
            <div class="strap0">
              <span class="strap1">&quot;We will investigate</span>
              <span class="strap2">all the prosecution evidence on </span>
              <br/>
              <span class="strap2">your behalf and advise on the strength of the police case&quot;</span>
              </div>
             <?php $pg->displayHeader();?>
             The penalty for this offence is 3-9 penalty points, a possible disqualification and a fine.
		  <br/>
		  <br/>
		   These are all very harsh penalties for an offence which most drivers are capable of committing.
           The Legal definition of the charge is where your driving falls below the standard expected of a careful competent driver.
			<br/>
			<br/>
			This offence can be committed in a public place and a road, so includes supermarket car parks and the like.
			<br/>
			<br/>
			A skid may not be due to lack of care, a sudden emergency should be judged in the course of the driving.
            A mechanical defect of the vehicle can provide a defence provided the driver had no prior knowledge of it's existence.
			  <br/>
			  <br/>
			We will provide objective practical advice and assistance, and understanding counsel.
			  <br/>
			  <br/>
			Do not face this offence alone, <A href="contact.php">contact us</a> immediately.
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