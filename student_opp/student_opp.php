<?php include '../view/header.php'; ?>
<div id="main">

    <h1>Student-Opportunity View</h1>

    <div id="content">
        <!-- display a view -->
        <table>
            <tr>
		  <th>Student</th>	
          <th>Opportunity Name</th>
		  
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($student_opp as $student_opp_s) : ?>
            <tr>
			    <td><?php echo $student_opp_s['StudentName']; ?></td>
                <td><?php echo $student_opp_s['OpportunityName']; ?></td>
		  
            </tr>
            <?php endforeach; ?>
        </table>
      
    </div>

</div>
<?php include '../view/footer.php'; ?>
