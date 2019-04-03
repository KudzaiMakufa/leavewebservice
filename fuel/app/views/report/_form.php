
<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Date', 'date', array('class'=>'control-label')); ?>

				<?php echo Form::input('date', Input::post('date', isset($report) ? $report->date : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Date')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Reportno', 'reportno', array('class'=>'control-label')); ?>

				<?php echo Form::input('reportno', Input::post('reportno', isset($report) ? $report->reportno : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Reportno')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Fullname', 'fullname', array('class'=>'control-label')); ?>

				<?php echo Form::input('fullname', Input::post('fullname', isset($report) ? $report->fullname : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Fullname')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Goals', 'goals', array('class'=>'control-label')); ?>

				<?php echo Form::input('goals', Input::post('goals', isset($report) ? $report->goals : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Goals')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Objectives', 'objectives', array('class'=>'control-label')); ?>

				<?php echo Form::input('objectives', Input::post('objectives', isset($report) ? $report->objectives : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Objectives')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Taskdealine', 'taskdealine', array('class'=>'control-label')); ?>

				<?php echo Form::input('taskdealine', Input::post('taskdealine', isset($report) ? $report->taskdealine : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Taskdealine')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Taskdescription', 'taskdescription', array('class'=>'control-label')); ?>

				<?php echo Form::input('taskdescription', Input::post('taskdescription', isset($report) ? $report->taskdescription : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Taskdescription')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Taskstatus', 'taskstatus', array('class'=>'control-label')); ?>

				<?php echo Form::input('taskstatus', Input::post('taskstatus', isset($report) ? $report->taskstatus : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Taskstatus')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>