<?php 
require "page.php";
$pg= new pageCls("Disquaification");
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
              <span class="strap2">&quot;A disqualification can have far reaching effects often</span>
              <br/>
              <span class="strap2">costing you your job, business etc.</span>
			  <span class="strap1">We can help&quot;</span>
              </div>
				<?php $pg->displayHeader();?>
        Disqualification is an order of the court and driving whilst disqualified is considered very seriously by the courts.
        <br/>
        <br/>
        Normally the minimum sentence for driving while you are disqualified is a community sentence although many courts will wish to sentence you to prison.
        <br/>
        <br/>
        Disqualification can either be mandatory or discretionary.
        Disqualification can also be imposed by virtue of the &quot;totting up&quot; provisions.
        <br/>
        <br/>
        A disqualification can have far reaching effects often costing you your job, business etc.
        <br/>
        <br/>
        Subject to certain time periods an application can be made for the removal of a disqualification before its normal end.
        <span class="mainGreen">We are very experienced in these applications and have succeeded in virtually all of the cases we have taken.</span>
        <br/>
        <br/>
        Even in a case where there is a mandatory disqualification, for example drink driving, the court can be persuaded to avoid imposing a disqualification if they can be convinced that Special Reasons exist.
        <br/>
        <br/>
        Special Reasons could include shortness of distance driven, driving because of medical emergency, laced drinks.   <br/>
        <br/>
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