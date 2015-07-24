<?php include '../view/header.php'; ?>
<div id="main">

    <h1>Partner, Opportunity, Student and Comment</h1>

    <div id="content">
        <!-- display a view -->
        <table>
            <tr>
          <th>Community Partner</th>
		  <th>Opportuntiy</th>
		  <th>Student</th>
		  <th>Comments</th>	
		  <th>Comment Date</th>	
          <th>&nbsp;</th>
            </tr>
            <?php foreach ($opp_info as $opp_info_s) : ?>
            <tr>
                <td><?php echo $opp_info_s['PartnerName']; ?></td>
                <td><?php echo $opp_info_s['OpportunityName']; ?></td>
				<td><?php echo $opp_info_s['StudentName']; ?></td>
                <td><?php echo $opp_info_s['Comments']; ?></td>
				<td><?php echo $opp_info_s['CommentDate']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
      
    </div>

</div>
<?php include '../view/footer.php'; ?>
