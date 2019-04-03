<h2>Editing Leave</h2>
<br>

<?php echo render('leave/_form'); ?>
<p>
	<?php echo Html::anchor('leave/view/'.$leave->id, 'View'); ?> |
	<?php echo Html::anchor('leave', 'Back'); ?></p>
