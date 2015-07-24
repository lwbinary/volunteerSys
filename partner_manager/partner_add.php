<?php include '../view/header.php'; ?>
<div id="main">
    <h1>Add Partner</h1>
    <form action="" method="post" id="aligned">
        <input type="hidden" name="action" value="add_partner" />

        <label>Name:</label>
        <input type="input" name="name" />
        <br />

        <label>Phone:</label>
        <input type="input" name="phone" />
        <br />

        <label>URL:</label>
        <input type="input" name="url" />
        <br />

        <label>Email:</label>
        <input type="input" name="email" />&nbsp;
        <br />

        <label>&nbsp;</label>
        <input type="submit" value="Add Partner" />
        <br />
    </form>
    <p><a href="?action=list_partners">View Partner List</a></p>

</div>
<?php include '../view/footer.php'; ?>