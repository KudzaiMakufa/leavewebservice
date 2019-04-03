<h2>Viewing #<?php echo $report->id; ?></h2>

<p>
	<strong>Date:</strong>
	<?php echo $report->date; ?></p>
<p>
	<strong>Reportno:</strong>
	<?php echo $report->reportno; ?></p>
<p>
	<strong>Fullname:</strong>
	<?php echo $report->fullname; ?></p>
<p>
	<strong>Goals:</strong>
	<?php echo $report->goals; ?></p>
<p>
	<strong>Objectives:</strong>
	<?php echo $report->objectives; ?></p>
<p>
	<strong>Taskdealine:</strong>
	<?php echo $report->taskdealine; ?></p>
<p>
	<strong>Taskdescription:</strong>
	<?php echo $report->taskdescription; ?></p>
<p>
	<strong>Taskstatus:</strong>
	<?php echo $report->taskstatus; ?></p>


<?php echo Html::anchor('report', 'Back'); ?>