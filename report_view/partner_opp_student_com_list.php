<?php include '../view/header.php'; ?>
<div id="main">

    <h1>Partner-Opportunity View</h1>

    <div id="content">
        <!-- display a view -->
        <table>
            <tr>
                <th>Opportunity Name</th>
                <th>Community Partner Name</th>
		  <th>Student</th>
		  <th>Comment</th>		
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($partner_opp_student_com as $partner_opp_sc) : ?>
            <tr>
			<td><?php echo $partner_opp_sc['OpportunityName']; ?></td>
			<td><?php echo $partner_opp_sc['PartnerName']; ?></td>
			<td><?php echo $partner_opp_sc['StudentName']; ?></td>
			<td><?php echo $partner_opp_sc['Comment']; ?></td>
		  
            </tr>
            <?php endforeach; ?>
        </table>
      
    </div>

</div>
<?php include '../view/footer.php'; ?>
