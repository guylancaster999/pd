<?php 
require "page.php";
$pg= new pageCls("Opening a Car Door");?>
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
        It is an offence to open a door of a motor vehicle or trailer on a road so as to cause injury or danger.
        <br/><br/>
        Sentences available include a fine of up to £1000.00, or a fixed penalty.
        <br/><br/>
        The offence consists of opening a car door so as to cause danger or injury to any person.
        If a child opened a door and a parent permitted the door to be opened, then a parent could be held responsible for permitting the offence to have been permitted.
        <br/><br/>
        The charge has a wide definition.
        The Crown do not have to prove carelessness, nor that someone was struck or injured, only that the act caused danger.
        <br/><br/>
        We will provide objective practical advice and assistance, and understanding counsel.
        <br/><br/>
        Do not face this offence alone, <a href="contact.php">contact us</a> immediately.    </div>
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