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
        <table class="wide">
          <tr>
            <td>
		   <div class="main">	
			<?php $pg->displayHeader();?>
		   <table class="wide">
			 <tr>
			   <td>Telelephone</td>
			   <td>&nbsp;<strong>:</string>&nbsp;</td>
			   <td><a href="tel:+447811329055">07811 329055</a></td>
			 </tr>
			 <tr>
			   <td>&nbsp;</td>
			   <td>&nbsp;</td>
			   <td>&nbsp;</td>
			 </tr>
			 <tr>
			   <td>Address</td>
			   <td>&nbsp;<strong>:</string>&nbsp;</td>
			   <td>Paul Darnborough Solicitors, 75 South Drive, Chorlton-cum-Hardy, Manchester M21 8ED.
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
			   </td>
			 </tr>
			 <tr>
			   <td>&nbsp;</td>
			   <td>&nbsp;</td>
			   <td>&nbsp;</td>
			 </tr>
			 <tr>
			   <td>Email</td>
			   <td>&nbsp;<strong>:</string>&nbsp;</td>
			   <td><a href="mailto:info@pdsolicitors.co.uk">info@pdsolicitors.co.uk</a></td>
			   </tr>
			 <tr>
			   <td>&nbsp;</td>
			   <td>&nbsp;</td>
			   <td>&nbsp;</td>
			 </tr>
			 <tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>
						<A href="#" title="Paul Darnborough Solicitor">
						<img src="img/pauldarnborough.jpg" alt="Paul Darnborough" />
						</a>
					</td>
				</tr>
 			</table>
		</div>
		</td>
		<td >&nbsp;</td>
    <td class="menuPos">
		<div  class="menu"><?php $pg->menu();?></div>
	  </td>
	</tr>
	</table>
       </div><!-- #content -->
      <div id="footer"><?php  $pg->foot();?></div><!-- #footer -->
    </div><!-- #wrapper -->
</body>
</html>
