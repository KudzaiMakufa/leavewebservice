<h2>Listing Reports</h2>
<br>
<?php if ($reports): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Date</th>
			<th>Reportno</th>
			<th>Fullname</th>
			<th>Goals</th>
			<th>Objectives</th>
			<th>Taskdealine</th>
			<th>Taskdescription</th>
			<th>Taskstatus</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($reports as $item): ?>		<tr>

			<td><?php echo $item->date; ?></td>
			<td><?php echo $item->reportno; ?></td>
			<td><?php echo $item->fullname; ?></td>
			<td><?php echo $item->goals; ?></td>
			<td><?php echo $item->objectives; ?></td>
			<td><?php echo $item->taskdealine; ?></td>
			<td><?php echo $item->taskdescription; ?></td>
			<td><?php echo $item->taskstatus; ?></td>
			<td>
				<?php echo Html::anchor('report/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('report/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Reports.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('report/create', 'Add new Report', array('class' => 'btn btn-success')); ?>

</p>
