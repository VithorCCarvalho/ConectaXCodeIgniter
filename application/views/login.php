<!DOCTYPE html>
<html lang="en">

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
                        </div>
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
                                    <?php echo form_input('login', set_value('login'), array('class'=>'au-input au-input--full', 'placeholder'=>'Email')); ?>
                                </div>
                                <div class="form-group">
                                    <?php echo form_label('Senha'); ?>
                                    <?php echo form_input(array('name'=>'senha', 'type'=>'password'), '', array('class'=>'au-input au-input--full', 'placeholder'=>'Senha')); ?>
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