<?php include '../view/header.php'; ?>
<div id="main">
    <h1>Add Class</h1>
    <form action="" method="post" id="aligned">
        <input type="hidden" name="action" value="add_class" />

        <label>Class Name:</label>
        <input type="input" name="name" />
        <br />

        <label>Start Date:</label>
        <input type="input" name="start_date" /><span>use 'yyyy-mm-dd' format</span>
        <br />

        <label>End Date:</label>
        <input type="input" name="end_date" /><span>use 'yyyy-mm-dd' format</span>
        <br />

        <label>Capacity:</label>
        <input type="input" name="capacity" />&nbsp;
        <br />

        <label>&nbsp;</label>
        <input type="submit" value="Add Class" />
        <br />
    </form>
    <p><a href="?action=list_classes">View Class List</a></p>

</div>
<?php include '../view/footer.php'; ?>