<?php include '../view/header.php'; ?>
<div id="main">
    <h1>Select A Opportunity</h1>
    <form action="" method="post" id="aligned">
        <input type="hidden" name="action" value="select_student" />
		
        <label>Opportunity:</label>
		<select name="opp_name"><option value="">-- Select A Opportunity --</option>
		<?php            
			$query = "SELECT * 
					  FROM COMMUNITY_PARTNER CP, OPPORTUNITY O 
					  WHERE CP.CommPartnerID = O.CommPartnerID
					  AND CommName = '$partner_name'";
			$result = $db->query($query);
			foreach($result as $row) :
			{
				echo '<option value="'. $row['OppName'] . '">' . $row['OppName'] . '</option>';
			}
			endforeach ;
		?>
		</select>
		<br />

        <label>&nbsp;</label>
        <input type="submit" value="Select" />
        <br />	
    </form>

</div>
<?php include '../view/footer.php'; ?>
