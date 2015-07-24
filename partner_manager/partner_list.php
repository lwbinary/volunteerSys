<?php include '../view/header.php'; ?>
<div id="main">

    <h1>Partner List</h1>

    <div id="content">
        <!-- display a table of partners -->
        <table>
            <tr>
                <th>Partner Name</th>
                <th>Phone</th>
                <th>URL</th>
                <th>Email</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($partners as $partner) : ?>
            <tr>
                <td><?php echo $partner['CommName']; ?></td>
                <td><?php echo $partner['Phone']; ?></td>
                <td><?php echo $partner['URL']; ?></td>
                <td><?php echo $partner['Email']; ?></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="delete_partner" />
                    <input type="hidden" name="partner_id"
                           value="<?php echo $partner['CommPartnerID']; ?>" />
                    <input type="submit" value="Delete" />
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="?action=show_add_form">Add Partner</a></p>
    </div>

</div>
<?php include '../view/footer.php'; ?>