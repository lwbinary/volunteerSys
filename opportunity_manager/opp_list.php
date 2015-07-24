<?php include '../view/header.php'; ?>
<div id="main">

    <h1>Opportunity List</h1>

    <div id="content">
        <!-- display a table of opportunities -->
        <table>
            <tr>
                <th>Opportunity Name</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Slots</th>
				<th>Location</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($opportunities as $opportunity) : ?>
            <tr>
                <td><?php echo $opportunity['OppName']; ?></td>
                <td><?php echo $opportunity['StartDate']; ?></td>
                <td><?php echo $opportunity['EndDate']; ?></td>
                <td><?php echo $opportunity['Slots']; ?></td>
								<td><?php echo $opportunity['Location']; ?></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="delete_opp" />
                    <input type="hidden" name="opp_id"
                           value="<?php echo $opportunity['OppID']; ?>" />
                    <input type="submit" value="Delete" />
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="?action=show_add_form">Add Opportunity</a></p>
    </div>

</div>
<?php include '../view/footer.php'; ?>
