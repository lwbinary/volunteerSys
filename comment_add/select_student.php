<?php include '../view/header.php'; ?>
<div id="main">
    <h1>Select A Student</h1>
    <form action="" method="post" id="aligned">
        <input type="hidden" name="action" value="add_date_comment" />
		
        <label>Student:</label>
		<select name="student_name"><option value="">-- Select A Student --</option>
		<?php            
			$query = "SELECT * 
					  FROM STUDENT S, STUDENT_GET_OPPORTUNITY SGO, OPPORTUNITY O
					  WHERE S.SID = SGO.SID
					  AND SGO.OppID = O.OppID
					  AND OppName = '$opp_name'";
			$result = $db->query($query);
			foreach($result as $row) :
			{
				echo '<option value="'. $row['FName'] . '">' . $row['FName'] . '</option>';
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
