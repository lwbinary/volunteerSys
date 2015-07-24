<?php include '../view/header.php'; ?>
<div id="main">
    <h1>Add Opportunity</h1>
    <form action="" method="post" id="aligned">
        <input type="hidden" name="action" value="add_opp" />
				
		<label>Partner:</label>
        <select name="partner_name"><option value="">-- Select A Partner --</option>
		<?php            
			$query = "SELECT * 
					  FROM COMMUNITY_PARTNER";
			$result = $db->query($query);
			foreach($result as $row) :
			{
				echo '<option value="'. $row['CommName'] . '">' . $row['CommName'] . '</option>';
			}
			endforeach ;
		?>
		</select>
        <br />
        
        <label>Class:</label>
        <select name="class_name"><option value="">-- Select A Class --</option>
		<?php            
			$query = "SELECT * 
					  FROM CLASS";
			$result = $db->query($query);
			foreach($result as $row) :
			{
				echo '<option value="'. $row['ClassName'] . '">' . $row['ClassName'] . '</option>';
			}
			endforeach ;
		?>
		</select>        
		<br />
        
        <label>Name:</label>
        <input type="input" name="name" />
        <br />

        <label>Start Date:</label>
        <input type="input" name="start_date" /><span>use 'yyyy-mm-dd' format</span>
        <br />

        <label>End Date:</label>
        <input type="input" name="end_date" /><span>use 'yyyy-mm-dd' format</span>
        <br />

        <label>Slots:</label>
        <input type="input" name="slots" />
        <br />

		<label>Location:</label>
		<input type="input" name="location" />
		<br />

        <label>&nbsp;</label>
        <input type="submit" value="Add Opportunity" />
        <br />
    </form>
    <p><a href="?action=list_opps">View Opportunity List</a></p>

</div>
<?php include '../view/footer.php'; ?>
