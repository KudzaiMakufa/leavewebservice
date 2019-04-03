<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Username', 'username', array('class'=>'control-label')); ?>

				<?php echo Form::input('username', Input::post('username', isset($loginn) ? $loginn->username : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Username')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Password', 'password', array('class'=>'control-label')); ?>

				<?php echo Form::input('password', Input::post('password', isset($loginn) ? $loginn->password : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Password','type'=>'password')); ?>

		</div>
		<div class="form-group" align="center">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Login', array('class' => 'btn btn-primary' )); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>