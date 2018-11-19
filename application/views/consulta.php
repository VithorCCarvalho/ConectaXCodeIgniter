<!DOCTYPE html>
<html>

<?php $this->load->view('head'); ?>

<body>
	<div class="contentconsulta">
		<div class="boxleftconsulta">

			<div class="boxleftformulario">
				<h2>Faça sua consulta</h2>
				<h3></h3>
				
				<?php echo form_open(); ?>
					<div class="group">      
	      				<?php echo form_input('nome', '', array('required' => '')); ?>
	      				<span class="bar"></span>
	      				<label>Nome Completo</label>
    				</div>
    				<div class="group">      
	      				<?php echo form_input('telefone', '', array('required' => '')); ?>
	      				<span class="bar"></span>
	      				<label>Whatsapp ou Telefone</label>
    				</div>
    				<div class="group">      
	      				<?php echo form_input('bairro', '', array('required' => '')); ?>
	      				<span class="bar"></span>
	      				<label>Bairro</label>
    				</div>
    				<div class="group">      
	      				<?php echo form_input('rua', '', array('required' => '')); ?>
	      				<span class="bar"></span>
	      				<label>Rua</label>
    				</div>
    				<div class="group">      
	      				<?php echo form_input('numero', '', array('required' => '')); ?>
	      				<span class="bar"></span>
	      				<label>Número</label>
    				</div>
    				<div class="group">      
	      				<?php echo form_input(array('type' => 'date', 'name' => 'nascimento'), ''); ?>
	      				<span class="bar"></span>
	      				<label>Data de nascimento</label>
    				</div>
    				<div class="row form-group">
						<div class="col-md-12">
							<select class="form-control select-cidades" value="" name="cidade">
								<option value=""></option>
							</select>
						</div>
					</div>
			  		<button type="submit" class="btn btn-primary">Consultar</button>
				<?php echo form_close(); ?>
			</div>

		</div>

		<div class="boxrightconsulta">

			<div class="box">
				<h2>Plano</h2>
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



	