<!DOCTYPE html>
<html>

<?php $this->load->view('head'); ?>

<link rel="stylesheet" href="<?php echo base_url('assets/css/consulta.css'); ?>">

<body>
	<div class="contentconsulta">
		<div class="boxleftconsulta">

			<div class="boxleftformulario">
				<h2>Faça sua consulta</h2>
				<?php echo @Get_msg(); ?>
				
				<?php echo form_open(); ?>
					<div class="group">      
	      				<?php echo form_input('user_nome', set_value('user_nome'), array('required' => '')); ?>
	      				<span class="bar"></span>
	      				<label>Nome Completo</label>
    				</div>
    				<div class="group">      
	      				<?php echo form_input('user_telefone', set_value('user_telefone'), array('required' => '')); ?>
	      				<span class="bar"></span>
	      				<label>Whatsapp ou Telefone</label>
    				</div>
    				<div class="group">      
	      				<?php echo form_input('user_bairro', set_value('user_bairro'), array('required' => '')); ?>
	      				<span class="bar"></span>
	      				<label>Bairro</label>
    				</div>
    				<div class="group">      
	      				<?php echo form_input('user_rua', set_value('user_rua'), array('required' => '')); ?>
	      				<span class="bar"></span>
	      				<label>Rua</label>
    				</div>
    				<div class="group">      
	      				<?php echo form_input('user_numero', set_value('user_numero'), array('required' => '')); ?>
	      				<span class="bar"></span>
	      				<label>Número da Casa</label>
    				</div>
    				<div class="group">      
	      				<?php echo form_input(array('type' => 'date', 'name' => 'user_nascimento'), set_value('user_nascimento')); ?>
	      				<span class="bar"></span>
	      				<label>Data de nascimento</label>
    				</div>
    				<div class="row form-group">
						<div class="col-md-12">
							<select class="form-control select-cidades" value="Selecione uma cidade" name="user_cidade">
								<?php 
								if(set_value('user_cidade') == '')
								{
									echo '<option value="">Selecione uma cidade</option>';
								}
								else
								{
									echo '<option value="'.set_value('user_cidade').'">'.set_value('user_cidade').'</option>';
								}
								?>
								<?php foreach($cidades as $nome): ?>
								<?php echo '<option value="'.$nome.'">'.$nome.'</option>';  ?>
								<?php endforeach; ?>
							</select>
						</div>
					</div>
					<input type="hidden" name="servico_plano" value="<?php echo @$_GET['plano'] ?>">
			  		<button type="submit" class="btn btn-primary">Consultar</button>
				<?php echo form_close(); ?>
			</div>

		</div>

		<div class="boxrightconsulta">

			<div class="box">
				<h2>Algumas vantagens</h2>
				<ul class="list-group">
				  	<li class=""><span class="ti-check" style="margin: 0 10px"></span> Internet 15MB</li>
				  	<li class=""><span class="ti-check" style="margin: 0 10px"></span> Coleção OI</li>
				  	<li class=""><span class="ti-check" style="margin: 0 10px"></span> Telefone Fixo</li>
				  	<li class=""><span class="ti-check" style="margin: 0 10px"></span> OI WIFI Fora de Casa</li>
				  	<li class=""><span class="ti-check" style="margin: 0 10px"></span> Roteador Grátis</li>
				</ul>

			</div>
		</div>
	</div>
</body>
</html>
</html>



	