<?php
require "page.php";
$pg= new pageCls("Road Traffic Accidents (RTAs)");
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
              <span class="strap1">&quot;We are here to help</span>
              <span class="strap2">you to pursuade the courtof your version of events, and</span>
              <br/>
              <span class="strap2">to accept that the evidence against you is weak and unsafe to find you guilty&quot;</span>
              </div>
              <?php $pg->displayHeader();?>
		  <h2>Claim the compensation you deserve</h2>
          If you are involved in a road traffic accident, contact our sister firm Simple to Claim
           <br/>
          <br/>
      </div> <!-- main-->
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