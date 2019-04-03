<h2>Editing Report</h2>
<br>

<?php echo render('report/_form'); ?>
<p>
	<?php echo Html::anchor('report/view/'.$report->id, 'View'); ?> |
	<?php echo Html::anchor('report', 'Back'); ?></p>
