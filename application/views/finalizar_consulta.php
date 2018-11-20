<!DOCTYPE html>
<html>

<?php $this->load->view('head'); ?>

<body>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/consulta.css'); ?>">

	<div class="contentconsulta">
		<div class="boxleftconsulta">

			<div class="boxleftformulario">
				<h2><?php echo $user_nome; ?>, último passo</h2>
				<?php echo @Get_msg(); ?>
				
				<?php echo form_open(); ?>
					<div class="group">      
	      				<?php echo form_input('user_mae', set_value('user_mae'), array('required' => '')); ?>
	      				<span class="bar"></span>
	      				<label>Nome da Mãe</label>
    				</div>
    				<div class="group">      
	      				<?php echo form_input('user_cpf', set_value('user_cpf'), array('required' => '')); ?>
	      				<span class="bar"></span>
	      				<label>CPF</label>
    				</div>

    				<input type="submit" value="Finalizar Consulta" class="btn btn-primary">
			</div>
			  		
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</body>
</html>



	