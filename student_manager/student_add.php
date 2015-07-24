<?php include '../view/header.php'; ?>
<div id="main">
    <h1>Add Student</h1>
    <form action="" method="post" id="aligned">
        <input type="hidden" name="action" value="add_student" />
	
        <label>Last Name:</label>
        <input type="input" name="lname" />
        <br />

        <label>First Name:</label>
        <input type="input" name="fname" />
        <br />
	
		<label>Initial:</label>
		<input type="input" name="initial" />
		<br />

        <label>Phone:</label>
        <input type="input" name="phone" />
        <br />

        <label>Email:</label>
        <input type="input" name="email" />
        <br />
        
        <label>&nbsp;</label>
        <input type="submit" value="Add Student" />
        <br />
    </form>
    <p><a href="?action=list_students">View Student List</a></p>
</div>
<?php include '../view/footer.php'; ?>
