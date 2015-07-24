<?php include '../view/header.php'; ?>
<div id="main">

    <h1>Partner List</h1>

    <div id="content">
        <!-- display a table of classes -->
        <table>
            <tr>
                <th>Class Name</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>capacity</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($classes as $class) : ?>
            <tr>
                <td><?php echo $class['ClassName']; ?></td>
                <td><?php echo $class['StartDate']; ?></td>
                <td><?php echo $class['EndDate']; ?></td>
                <td><?php echo $class['Capacity']; ?></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="delete_class" />
                    <input type="hidden" name="class_id"
                           value="<?php echo $class['CID']; ?>" />
                    <input type="submit" value="Delete" />
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="?action=show_add_form">Add Class</a></p>
    </div>

</div>
<?php include '../view/footer.php'; ?>