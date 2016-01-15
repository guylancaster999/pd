<?php 
require "page.php";
$pg= new pageCls("Driving Without Insurance");?>
    <div id="wrapper">
      <div id="header">
          <?php $pg->banner(); ?>
      </div><!-- #header -->
      <div id="content">
        <table width="100%">
          <tr>
            <td>
           <div class="main">
            <div class="strap0">
              <span class="strap1">&quot;You need expert Help</span>
              <span class="strap2">when you are accused of any</span>
              <br/>
              <span class="strap2">offence involving no insurance.&quot;</span>
              </div>
              <?php $pg->displayHeader();?>
			Using a motor vehicle on a road or other public place without a policy of insurance is a criminal offence which can attract a fine, 6-8 points, or a discretionary disqualification, including a retest.
           <br/>
           <br/>
			Mandatory disqualification unless special reasons exist.
           <br/>
           <br/>
			If you are charged with this offence it is for you to establish that you have a policy of insurance.
           <br/>
           <br/>
			There is a statutory defence available to employed drivers if certain criteria are met.
           <br/>
           <br/>
			The courts treat these cases very seriously, imposing severe fines and often looking to disqualify, expert mitigation is necessary to reduce the likely sentence.
           <br/>
           <br/>
			We will provide objective practical advice and assistance, and understanding counsel.
           <br/>
			<br/>
			Do not face this offence alone, <A href="contact.php">contact us</a> immediately.
         </div>
		 	   </td>
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
