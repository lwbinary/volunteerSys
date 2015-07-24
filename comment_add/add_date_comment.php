<?php include '../view/header.php'; ?>
<div id="main">
    <h1>Insert Date & Comment</h1>
    <form action="" method="post" id="aligned">
        <input type="hidden" name="action" value="insert_comment" />

		<label>Today's Date(default)</label>
		<br />
		
		<label>Comment:</label>
		<input type ="input", name="comment"><span>100 chars limit</span>       
		<br />

        <label>&nbsp;</label>
        <input type="submit" value="Add Comment" />
        <br />	
    </form>
</div>
<?php include '../view/footer.php'; ?>
