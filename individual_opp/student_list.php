<?php include '../view/header.php'; ?>
<div id="main">

    <h1>Student/Opportunity View</h1>
    
     <form action="" method="get" id="aligned">
        <input type="hidden" name="action" value="student_name" />
		
        <!-- display a view -->
            <tr>
                <label>Select a student:<label>	
                <th>&nbsp;</th>
            </tr>
	
            <?php foreach ($student as $students) : ?>
            <li>
		<a href ="student_name.php?student=<?php echo $students['FName']; ?>">
		<?php echo $students['FName']; ?> <a/>
	    </li>	
            <?php endforeach; ?>
	</form><td>
	
</div>
<?php include '../view/footer.php'; ?>
