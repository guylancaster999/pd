<?php 
require "page.php";
$pg= new pageCls("Football Spectators and Violence at Football matches");
?>
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
			It is an offence for a person at a designated football match to throw anything at or towards the playing area.
			<br/><br/>
			It is also an offence to take part in chanting at a football match of a indecent or racialist nature.
			 <br/><br/>
			This is contrary to the Football Offences Act 1991.
			<br/><br/>
			If you are charged with any such offence, <A href="contact.php">contact</a> our office for advice immediately.
   </div>
	  	   </td>
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