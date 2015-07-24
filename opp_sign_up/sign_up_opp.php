<?php include '../view/header.php'; ?>
<div id="main">
    <h1>Select A Opportunity</h1>
    <form action="" method="post" id="aligned">
        <input type="hidden" name="action" value="sign_up" />

        <label>Opportunity:</label>
		<select name="opp_name"><option value="">-- Select A Opportunity --</option>
		<?php            
			$query = "SELECT * 
					  FROM OPPORTUNITY O, CLASS C
					  WHERE C.ClassName = '$class_name'
					  AND C.CID = O.CID
					  AND Slots > 0";
					  
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
        <input type="submit" value="Sign up" />
        <br />
    </form>

</div>
<?php include '../view/footer.php'; ?>