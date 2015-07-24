<?php include '../view/header.php'; ?>
<div id="main">

    <h1>Student List</h1>

    <div id="content">
        <!-- display a table of students -->
        <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
		  		<th>Initial</th>
                <th>Email</th>
		  		<th>Phone</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($students as $student) : ?>
            <tr>
                <td><?php echo $student['FName']; ?></td>
                <td><?php echo $student['LName']; ?></td>
		  		<td><?php echo $student['Initial']; ?></td>
                <td><?php echo $student['Phone']; ?></td>
		  		<td><?php echo $student['Email']; ?></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="delete_student" />
                    <input type="hidden" name="student_id"
                           value="<?php echo $student['SID']; ?>" />
                    <input type="submit" value="Delete" />
		  					</form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="?action=show_add_form">Add Student</a></p>
    </div>

</div>
<?php include '../view/footer.php'; ?>
