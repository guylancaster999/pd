<?php
require "page.php";
$pg= new pageCls("Contact Us");
?>
<body>	
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
   	   <table>
			 <tr>
			   <td>Telelephone</td>
			   <td>:</td>
			   <td>07811 329055</td>
			 </tr>
			 <tr>
			   <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
			 </tr>
			 <tr>
			   <td>Address</td>
			   <td>:</td>
			   <td>Paul Darnborough Solicitors, 75 South Drive, Chorlton-cum-Hardy, Manchester M21 8ED</td>
			 </tr>
			 <tr>
			   <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
			 </tr>
			 <tr>
			   <td>Email</td>
			   <td>:</td>
			   <td><A href="mailto:info@pdsolicitors.co.uk">info@pdsolicitors.co.uk</a></td>
			   </tr>
			 </table>
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