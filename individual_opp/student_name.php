<?php
require('../model/database.php');
?>


<?php include '../view/header.php'; ?>
<div id="main">


	<table>
		<?php            
			$student_name = $_GET['student'];
			$query = "SELECT * FROM StudentOpp WHERE StudentName = '$student_name' ";
			$result = $db->query($query);
			foreach($result as $row) :
			{
				echo '<option value="'. $row['OpportunityName'] . '">' . $row['OpportunityName'] . '</option>';
			}
			endforeach ;
		?>   

</div>
<?php include '../view/footer.php'; ?>
