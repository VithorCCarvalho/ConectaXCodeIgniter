<?php $this->load->view('head'); ?>

<body>
	<div class="gtco-loader"></div>
	<div id="page">
	<div class="page-inner">

	<?php $this->load->view('nav'); ?>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(<?php echo base_url('assets/images/img_4.jpg'); ?>)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="row">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small"></span>
							<h1>Contato</h1>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<div class="gtco-section border-bottom">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-6 animate-box">
						<h3>Preencha o formulário</h3>
						<?php
							if($form_error):
								echo $form_error;
							endif;
						?>

						<?php echo form_open('', $a = array('method'=>'post'), null); ?>
							<div class="row form-group">
								<div class="col-md-12">
									<?php echo form_label('Nome', '', array('class'=>'sr-only', 'for'=>'name')); ?>
									<?php echo form_input('nome', set_value('nome'), $a = array('class'=>'form-control', 'placeholder'=>'Nome')); ?>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<?php echo form_label('E-mail', '', array('class'=>'sr-only', 'for'=>'email')); ?>
									<?php echo form_input('email', set_value('email'), $a = array('class'=>'form-control', 'placeholder'=>'E-mail')); ?>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<?php echo form_label('Assunto', '', array('class'=>'sr-only', 'for'=>'assunto')); ?>
									<?php echo form_input('assunto', set_value('assunto'), $a = array('class'=>'form-control', 'placeholder'=>'Assunto')); ?>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<?php echo form_label('Mensagem', '', array('class'=>'sr-only', 'for'=>'message')); ?>
									<?php echo form_textarea(array('name'=>'mensagem', 'cols'=>'30', 'rows'=>'10'), set_value('mensagem'), array('class'=>'form-control', 'placeholder'=>'Mensagem')) ?>
								</div>
							</div>
							<div class="form-group">
								<?php echo form_submit('', 'Enviar', array('class'=>'btn btn-primary')); ?>
							</div>
						<?php echo form_close(); ?>
					</div>
				
					<div class="col-md-5 col-md-push-1 animate-box">
						<div class="gtco-contact-info">
							<h3>Informações de contato</h3>
							<ul>
								<li class="address">Rua Carajas, 276, Parque São José<br> Três Corações - MG</li>
								<li class="phone"><a href="tel://35988681822">(35) 988681822</a></li>
								<li class="email"><a href="mailto:consultoriaconectax@gmail.com">consultoriaconectax@gmail.com</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php $this->load->view('footer'); ?>

</body>
</html>

