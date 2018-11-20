<!DOCTYPE html>
<html lang="pt-br">

<?php $this->load->view('admin/head'); ?>

<body class="animsition">
    <div class="page-wrapper">

    <?php $this->load->view('admin/nav'); ?>

        <div class="page-container2">

        <?php $this->load->view('admin/header'); ?>
        <?php $this->load->view('admin/breadcrumb'); ?>
        <?php $this->load->view('admin/table-clientes.php'); ?>
        <?php $this->load->view('admin/footer-copyright.php'); ?>

        </div>
    </div>

</body>

<?php $this->load->view('admin/js'); ?>

</html>