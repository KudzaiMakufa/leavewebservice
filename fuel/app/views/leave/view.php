<h2>Viewing Leave request number <?php echo $leave->id; ?></h2>

<p>
	<strong>Fullname:</strong>
	<?php echo $leave->fullname; ?></p>
<p>
	<strong>Leavetype:</strong>
	<?php echo $leave->leavetype; ?></p>
<p>
	<strong>Startdate:</strong>
	<?php echo $leave->startdate; ?></p>
<p>
	<strong>Enddate:</strong>
	<?php echo $leave->enddate; ?></p>
<p>
	<strong>Typeofday:</strong>
	<?php echo $leave->typeofday; ?></p>
<p>
	<strong>Notes:</strong>
	<?php echo $leave->notes; ?></p>


<?php echo Html::anchor('leave', 'Back'); ?>