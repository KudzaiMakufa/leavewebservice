<h2 align="center">Listing Leave Applications</h2>
<br>
<?php if ($leaves): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Fullname</th>
			<th>Leavetype</th>
			<th>Startdate</th>
			<th>Enddate</th>
			<th>Typeofday</th>
			<th>Notes</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($leaves as $item): ?>		<tr>

			<td><?php echo $item->fullname; ?></td>
			<td><?php echo $item->leavetype; ?></td>
			<td><?php echo $item->startdate; ?></td>
			<td><?php echo $item->enddate; ?></td>
			<td><?php echo $item->typeofday; ?></td>
			<td><?php echo $item->notes; ?></td>
			<td>


				<div class="btn-toolbar">
								<div class="btn-group">
							
						<?php echo Html::anchor('leave/view/'.$item->id, '<i class="glyphicon glyphicon-wrench"></i> View', array('class' => 'btn btn-default btn-sm')); ?>
						<?php echo Html::anchor('leave/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>
								</div>
								</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Leaves Applications submitted yet.</p>

<?php endif; ?><p>
	

</p>
