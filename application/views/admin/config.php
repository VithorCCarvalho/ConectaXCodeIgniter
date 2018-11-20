<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('admin/head'); ?>

<body class="animsition">
    <div class="page-wrapper">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div>
                        <h2 style="text-align: center;">Configurações</h2>
                    </div>
                    <?php 
                        echo @get_msg();
                    ?>
                    <div class="login-form">
                        <?php echo form_open('', 'post'); ?>
                            <div class="form-group">
                                <?php echo form_label('Login'); ?>
                                <?php echo form_input('login', $login, array('class'=>'au-input au-input--full', 'placeholder'=>'Login')); ?>
                            </div>
                            <div class="form-group">
                                <?php echo form_label('Email'); ?>
                                <?php echo form_input(array('name'=>'email', 'type'=>'email'), $email, array('class'=>'au-input au-input--full', 'placeholder'=>'Email')); ?>
                            </div>
                             <div class="form-group">
                                <?php echo form_label('Senha'); ?>
                                <?php echo form_password(array('name'=>'senha'), '', array('class'=>'au-input au-input--full', 'placeholder'=>'Senha')); ?>
                            </div>
                            <div class="form-group">
                                <?php echo form_label('Repita a senha'); ?>
                                <?php echo form_password(array('name'=>'senha2'), '', array('class'=>'au-input au-input--full', 'placeholder'=>'Senha')); ?>
                            </div>
                            <?php echo form_submit('', 'Atualizar', array('class'=>'au-btn au-btn--block au-btn--green m-b-20')); ?>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?php $this->load->view('admin/js'); ?>

</html>