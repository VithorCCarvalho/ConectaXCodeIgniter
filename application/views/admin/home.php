<!DOCTYPE html>
<html lang="pt-br">

<?php $this->load->view('admin/head'); ?>

<body class="animsition">
    <div class="page-wrapper">

    <?php $this->load->view('admin/nav'); ?>
    <div class="page-container2">

    <?php $this->load->view('admin/header'); ?>
    <?php $this->load->view('admin/breadcrumb'); ?>
        
	<!-- DATA TABLE-->
	<section class="p-t-20">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-12">
	                <h3 class="title-5 m-b-35">Clientes</h3>
	                <div><?php echo @Get_msg(); ?></div>
	                <div class="table-responsive table-responsive-data2">
	                    <table class="table table-data2">
	                        <thead>
	                            <tr>
	                                <th>name</th>
	                                <th>telefone</th>
	                                <th>cidade</th>
	                                <th>endereço</th>
	                                <th>data</th>
	                                <th>status</th>
	                                <th></th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                            
	                            <?php  foreach ($dados_tabela as $value): ?>
	                            
	                            <tr class="tr-shadow">
	                                <td><?php echo $value->user_nome; ?></td>
	                                <td class="desc"><?php echo $value->user_telefone; ?></td>
	                                <td><span class="block-email"><?php echo $value->user_cidade; ?></span></td>
	                                <td><?php echo $value->user_rua . ' - ' . $value->user_numero . ' - ' . $value->user_bairro; ?></td>
	                                <td><?php echo $value->data; ?></td>
	                                <td><span class="status--process"><?php echo $value->status; ?></span></td>
	                                <td>
	                                    <div class="table-data-feature">
	                                        <button type="button" class="item" data-toggle="modal" data-target="#mediumModal<?php echo $value->id; ?>">
	                                            <i class="fa fa-search"></i>
	                                        </button>
	                                    </div>
	                                </td>
	                            </tr>
	                            
	                            <tr class="spacer"></tr>

	                            <!-- MODAL INFORMAÇÕES DO CLIENTE -->
	                                <div class="modal fade" id="mediumModal<?php echo $value->id; ?>" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
	                                    <div class="modal-dialog modal-lg" role="document">
	                                        <div class="modal-content">
	                                            <div class="modal-header">
	                                                <h5 class="modal-title" id="mediumModalLabel">Cliente #<?php echo $value->id; ?></h5>
	                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                                    <span aria-hidden="true">&times;</span>
	                                                </button>
	                                            </div>
	                                            <div class="modal-body">

	                                                <div class="row">
	                                                    <div class="col-sm-6">
	                                                        <ul class="list-unstyled navbar__list">
	                                                        <form action="" autocomplete="off" method="post">
	                                                            <input type="hidden" name="id" value="<?php echo $value->id; ?>">
	                                                            <li><strong>NOME: </strong>
	                                                            <input type="text" autocomplete="false" class="form-control" name="user_nome" placeholder="Editar..." value="<?php echo $value->user_nome; ?>"></li>
	                                                            <li><strong>TELEFONE:</strong>
	                                                            <input type="text" class="form-control" name="user_telefone" placeholder="Editar..." value="<?php echo $value->user_telefone; ?>"></li>
	                                                            <li><strong>CIDADE: </strong>
	                                                            <input type="text" class="form-control" name="user_cidade" placeholder="Editar..." value="<?php echo $value->user_cidade; ?>"></li>
	                                                            <li><strong>BAIRRO: </strong>
	                                                            <input type="text" class="form-control" name="user_bairro" placeholder="Editar..." value="<?php echo $value->user_bairro; ?>"></li>
	                                                            <li><strong>RUA: </strong>
	                                                            <input type="text" class="form-control" name="user_rua" placeholder="Editar..." value="<?php echo $value->user_rua; ?>"></li>
	                                                            <li><strong>NUMERO DA CASA: </strong>
	                                                            <input type="text" class="form-control" name="user_numero" placeholder="Editar..." value="<?php echo $value->user_bairro; ?>"></li>
	                                                            <li><strong>MÃE: </strong>
	                                                            <input type="text" class="form-control" name="user_mae" placeholder="Editar..." value="<?php echo $value->user_mae; ?>"></li>
	                                                            <li><strong>CPF: </strong>
	                                                            <input type="text" class="form-control" name="user_cpf" placeholder="Editar..." value="<?php echo $value->user_cpf; ?>"></li>
	                                                            <li><strong>LOCAL REFERÊNCIA: </strong>
	                                                            <input type="text" class="form-control" name="user_refer" placeholder="Editar..." value="<?php echo $value->user_refer; ?>"></li>
	                                                        </ul>
	                                                    </div>
	                                                    <div class="col-sm-6">
	                                                        <ul class="list-unstyled navbar__list">
	                                                           	<li><strong>PLANO: </strong>
	                                                            <input type="text" class="form-control" name="servico_plano" placeholder="Editar..." value="<?php echo $value->servico_plano; ?>"></li>
	                                                            <li><strong>RG: </strong>
	                                                            <input type="text" class="form-control" name="user_rg" placeholder="Editar..." value="<?php echo $value->user_rg; ?>"></li>
	                                                            <li><strong>DATA DE NASCIMENTO: </strong>
	                                                            <input type="text" class="form-control" name="user_nascimento" placeholder="Editar..." value="<?php echo date('d-m-Y', strtotime($value->user_nascimento)); ?>"></li>
	                                                            <li><strong>DISPONIBILIDADE: </strong>
	                                                            <input type="text" class="form-control" name="status_disponibilidade" placeholder="Editar..." value="<?php echo $value->status_disponibilidade; ?>"></li>
	                                                            <li><strong>ANÁLISE DE CRÉDITO: </strong>
	                                                            <input type="text" class="form-control" name="status_credito" placeholder="Editar..." value="<?php echo $value->status_credito; ?>"></li>
	                                                            <li><strong>CONTATADO?: </strong>
	                                                            <input type="text" class="form-control" name="status_contatado" placeholder="Editar..." value="<?php echo $value->status_contatado; ?>"></li>
	                                                            <li><strong>DATA CADASTRO: </strong>
	                                                            <input type="text" disabled="" class="form-control" value="<?php echo date('d-m-Y H:i:m', strtotime($value->data)); ?>"></li>
	                                                            <li><strong>IP CIDADE: </strong>
	                                                            <input type="text" disabled="" class="form-control" value="<?php echo $value->ip_city; ?>"></li>
	                                                            <li><strong>IP CODE: </strong>
	                                                            <input type="text" disabled="" class="form-control" value="<?php echo $value->ip_code; ?>"></li>
	                                                        </ul>
	                                                        
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            <div class="modal-footer">
	                                                <div class="col-md-12">
	                                                    <div class="row">
	                                                        <div class="col-sm-8">
	                                                            <div class="rs-select2--light col-sm-8" style="border: 1px solid #f1f1f1">
	                                                                <select class="js-select2 select2-hidden-accessible" name="status" tabindex="-1" aria-hidden="true">
	                                                                    <option value="<?php echo $value->status ?>">Alterar (<?php echo $value->status ?>)</option>
	                                                                    <option value="Não atendeu">Não atendeu</option>
	                                                                    <option value="Sem interesse">Sem interesse</option>
	                                                                    <option value="Aprovado">Aprovado</option>
	                                                                    <option value="Reprovado">Reprovado</option>
	                                                                </select>
	                                                            <div class="dropDownSelect2"></div>
	                                                            </div>
	                                                        </div>
	                                                        <div class="col-md-3 ml-auto">
	                                                            <input type="submit" class="btn btn-success" value="Aplicar Alterações">
	                                                        </div>
	                                                    </form>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <!-- END MODAL -->

	                            <?php endforeach; ?>
	                        </tbody>
	                    </table>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
	<!-- END DATA TABLE-->

    <?php $this->load->view('admin/footer-copyright.php'); ?>
    </div>
    </div>

</body>
<?php $this->load->view('admin/js'); ?>
</html>