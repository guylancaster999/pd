<?php
	require "page.php";
	$pg = new pageCls("Welcome to P.D. Solicitors");
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
              <span class="strap2">you to pursuade the court of your version of events, and</span>
              <br/>
              <span class="strap2">to accept that the evidence against you is weak and unsafe to find you guilty&quot;</span>
              </div>
            <?php $pg->displayHeader();?>
          <h2>Private Client Discreet &amp; Professional Legal Representation</h2>
          Thank you for visiting this web site.
          I know that you are in trouble and need my help.
          <br/>
          <br/>
          Otherwise you wouldn't have been searching for a Criminal Defence Lawyer.
          I'm grateful you've contacted me, and sorry that you needed to.
          But don't worry things aren't as bad as they seem, and with some clever thought and actions.
          Together we can make things seem better than they did.
          <br/>
          <br/>
          I have been a practising lawyer for 20 years and know that often the Law is broken, not because people are bad or criminal, but because there are events in your life that effect the way you behave at a moment in time.
          These actions are momentary, or part of a course of events that are impossible to change.
           I understand this.
          <br/>
          <br/>
          What I often find is that the police can make up their mind that you have committed a crime and once an officer has made his mind up, there is little you can do against the wheels of the state.
		  I know what a terrifying place this is to inhabit, and that is why I am here to help and guide you through the journey, and put your case for you.
          <br/>
          <br/>
          I am here to help you persuade the court of your version of events, and to accept that the evidence against you is weak and unsafe to find you guilty.
          <br/>
          <br/>
          That is what motivates me and has done so since entering the profession and continues to do so.
          <br/>
          <br/>
          Feel free to dip in and out of the web site as suits you &ndash; I hope you find the text useful clear and informative.
          <br/>
          <br/>
          I or one of my team can speak to you at any time, we can represent you at the police station, magistrates, and crown court in any part of England and Wales.
		  We will make sure that you are properly prepared for the court experience and that you have someone instructed by us to represent you.
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
           <?php  $pg->foot();?>
      </div><!-- #footer -->
    </div><!-- #wrapper -->
</body>
</html>
