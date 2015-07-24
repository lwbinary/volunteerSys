<?php include '../view/header.php'; ?>
<div id="main">

    <h1>Partner-Opportunity View</h1>

    <div id="content">
        <!-- display a view -->
        <table>
            <tr>
                <th>Community Partner</th>
		  <th>Opportunity</th>	
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($partner_opp as $partner_opp_s) : ?>
            <tr>
                <td><?php echo $partner_opp_s['PartnerName']; ?></td>
                <td><?php echo $partner_opp_s['OpportunityName']; ?></td>
		  
            </tr>
            <?php endforeach; ?>
        </table>
      
    </div>

</div>
<?php include '../view/footer.php'; ?>
