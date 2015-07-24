<?php include '../view/header.php'; ?>
<div id="main">
    <h1>Select A Class</h1>
    <form action="" method="post" id="aligned">
        <input type="hidden" name="action" value="select_opp" />

        <label>Class:</label>
		<select name="class_name"><option value="">-- Select A Class --</option>
		<?php            
			$query = "SELECT * 
					  FROM CLASS C, STUDENT S, STUDENT_ENROLL_CLASS SEC
					  WHERE S.FName = '$student_name'
					  AND S.SID = SEC.SID
					  And SEC.CID = C.CID";
			$result = $db->query($query);
			foreach($result as $row) :
			{
				echo '<option value="'. $row['ClassName'] . '">' . $row['ClassName'] . '</option>';
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