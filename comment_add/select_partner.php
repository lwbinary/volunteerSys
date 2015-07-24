<?php include '../view/header.php'; ?>
<div id="main">
    <h1>Select A Partner</h1>
    <form action="" method="post" id="aligned">
        <input type="hidden" name="action" value="select_opp" />
		
        <label>Partner:</label>
		<select name="partner_name"><option value="">-- Select A Partner --</option>
		<?php            
			$query = "SELECT * FROM COMMUNITY_PARTNER";
			$result = $db->query($query);
			foreach($result as $row) :
			{
				echo '<option value="'. $row['CommName'] . '">' . $row['CommName'] . '</option>';
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
