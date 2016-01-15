<?php 
require "page.php";
$pg= new pageCls("Driving While Disqualified");
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
    <div class="strap0">
        <span class="strap1">&quot;It is occasionly possible </span>
        <span class="strap2"> to persuade the court to remove  a</span>
         <br/>
        <span class="strap2">disqualification part way through.&quot;</span>
      </div>
          <?php $pg->displayHeader();?>
          The imposition of a driving disqualification is regarded by the court as a serious matter.
           Driving whilst disqualified will often lead to a custodial sentence.
           It is occasionally possible to persuade the court to remove a disqualification part-way through.
           We can advise you as to the making of an application to remove a disqualification and represent you at the court hearing.
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