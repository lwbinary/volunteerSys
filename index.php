<?php include 'view/header.php'; ?>
<?php error_reporting(E_ALL ^ E_NOTICE); ?>

<div id="main">
    <h2>Administrators</h2>
    <ul class="nav">
        <li><a href="partner_manager">Manage Community Partners</a></li>
        <li><a href="opportunity_manager">Manage Opportunities</a></li>
        <li><a href="student_manager">Manage Students</a></li>
        <li><a href="class_manager">Manage Classes</a></li>
    </ul>
	
	<h2>Students</h2>
    <ul class="nav">
        <li><a href="opp_sign_up">Sign up for an Opportunity</a></li>
    </ul>
	
    <h2>Community Partners</h2>
    <ul class="nav">
        <li><a href="comment_add">Add a Comment for a Student</a></li>
    </ul>
	
    <h2>Reports</h2>
    <ul class="nav">
    <li><a href="student_opp">View Each Student/Opportunity Pair</a></li>
	<li><a href="individual_opp">View All The Opportunities in Which a Given Student is Enrolled</a></li>
	<li><a href="partner_opp">View All Community Partners and Their Opportunities</a></li>
	<li><a href="opp_info">View Information for a Given Opportunity</a></li>
    </ul>
	
    </ul>
</div>
<?php include 'view/footer.php'; ?>