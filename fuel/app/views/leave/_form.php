<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Fullname', 'fullname', array('class'=>'control-label')); ?>

				<?php echo Form::input('fullname', Input::post('fullname', isset($leave) ? $leave->fullname : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Fullname')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Leavetype', 'leavetype', array('class'=>'control-label')); ?>

				<?php echo Form::input('leavetype', Input::post('leavetype', isset($leave) ? $leave->leavetype : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Leavetype')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Startdate', 'startdate', array('class'=>'control-label')); ?>

				<?php echo Form::input('startdate', Input::post('startdate', isset($leave) ? $leave->startdate : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Startdate')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Enddate', 'enddate', array('class'=>'control-label')); ?>

				<?php echo Form::input('enddate', Input::post('enddate', isset($leave) ? $leave->enddate : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Enddate')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Typeofday', 'typeofday', array('class'=>'control-label')); ?>

				<?php echo Form::input('typeofday', Input::post('typeofday', isset($leave) ? $leave->typeofday : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Typeofday')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Notes', 'notes', array('class'=>'control-label')); ?>

				<?php echo Form::input('notes', Input::post('notes', isset($leave) ? $leave->notes : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Notes')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>