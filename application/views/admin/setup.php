<!DOCTYPE html>
<html lang="pt-br">

<?php $this->load->view('admin/head'); ?>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="<?php echo base_url('assets/admin/'); ?>images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>a
                        <?php
                            if($msg = get_msg())
                            {
                                echo $msg;
                            }
                        ?>
                        <div class="login-form">
                            <?php echo form_open('', 'post'); ?>
                                <div class="form-group">
                                    <?php echo form_label('Login'); ?>
                                    <?php echo form_input('login', set_value('login'), array('class'=>'au-input au-input--full', 'placeholder'=>'Login')); ?>
                                </div>
                                <div class="form-group">
                                    <?php echo form_label('Nome'); ?>
                                    <?php echo form_input('nome', set_value('nome'), array('class'=>'au-input au-input--full', 'placeholder'=>'Nome')); ?>
                                </div>
                                <div class="form-group">
                                    <?php echo form_label('Email'); ?>
                                    <?php echo form_input(array('name'=>'email', 'type'=>'email'), set_value('email'), array('class'=>'au-input au-input--full', 'placeholder'=>'Email')); ?>
                                </div>
                                 <div class="form-group">
                                    <?php echo form_label('Senha'); ?>
                                    <?php echo form_password(array('name'=>'senha'), '', array('class'=>'au-input au-input--full', 'placeholder'=>'Senha')); ?>
                                </div>
                                <div class="form-group">
                                    <?php echo form_label('Repita a senha'); ?>
                                    <?php echo form_password(array('name'=>'senha2'), '', array('class'=>'au-input au-input--full', 'placeholder'=>'Senha')); ?>
                                </div>
                                <?php echo form_submit('', 'Logar', array('class'=>'au-btn au-btn--block au-btn--green m-b-20')); ?>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?php $this->load->view('admin/js'); ?>

</html>
<!-- end document-->