<h2 align="center">REPORTit Users</h2>
<br>
<?php if ($reports): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>username</th>
			<th>email</th>
			<th>Activated ?</th>
			<th>Fullname</th>
			<th>Gender</th>
			<th>Verified ?</th>
			
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($reports as $item): ?>		<tr>

			<td><?php echo $item->username; ?></td>
			<td><?php echo $item->email; ?></td>
			<td><?php
			if($item->isactivated == "1"){
			 echo "activated"; 
			}else{
				echo "deactivated";
			}
			 ?></td>
			
			<td><?php echo $item->fullname; ?></td>
			<td><?php echo $item->gender; ?></td>
			<td><?php echo $item->verified; ?></td>
		
			<td>
				<div class="btn-toolbar">
								<div class="btn-group">
								<?php echo Html::anchor('users/deactivate/'.$item->id, '<i class="glyphicon glyphicon-wrench"></i> Deactivate', array('class' => 'btn btn-default btn-sm')); ?>
						<?php echo Html::anchor('users/activate/'.$item->id, '<i class="glyphicon glyphicon-wrench"></i> Activate', array('class' => 'btn btn-default btn-sm')); ?>
						<?php echo Html::anchor('users/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>
								</div>
								</div>
			
			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Users in System.</p>

<?php endif; ?><p>
	

</p>
