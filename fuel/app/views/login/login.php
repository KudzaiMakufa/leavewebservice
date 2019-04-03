<h2 align="center">SIMBA EDUCATION</h2>
<h2 align="center">Login</h2>
<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Username or email', 'goals', array('class'=>'control-label')); ?>

				<?php echo Form::input('email', Input::post('email'), array('class' => 'col-md-4 form-control', 'placeholder'=>'email')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Password', 'objectives', array('class'=>'control-label')); ?>

				<?php echo Form::input('email', Input::post('password'), array('class' => 'col-md-4 form-control', 'placeholder'=>'password','type'=>'password')); ?>

		</div>
		
	
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'login', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>`	