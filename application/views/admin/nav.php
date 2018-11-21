<!-- MENU SIDEBAR-->
<aside class="menu-sidebar2">
    <div class="logo">
        <a href="#">
            <img src="<?php echo base_url('assets/admin/'); ?>images/icon/logo-white.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar2__content js-scrollbar1">
        <div class="account2">
            <h4 class="name"><?php echo $admin_nome; ?></h4>
            <a href="<?php echo base_url('login/logout'); ?>">Deslogar</a>
        </div>
        <nav class="navbar-sidebar2">
            <ul class="list-unstyled navbar__list">
                <li class="has-sub"><a href="#"><i class="fa fa-users"></i>Clientes</a><span class="inbox-num"><?php echo $cadastros_recentes; ?></span></li>
                <li class="has-sub"><a class="js-arrow" href="#"><i class="fas fa-trophy"></i>Serviços<span class="arrow"><i class="fas fa-angle-down"></i></span></a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li><a href=""><i class="fas fa-table"></i>Modalidades</a></li>
                        <li><a href=""><i class="far fa-check-square"></i>Planos</a></li>
                        <li><a href="#"><i class="fa fa-map-marker"></i>Cidades</a></li>
                    </ul>
                </li>
                <li><a href=""><i class="fa fa-bar-chart-o"></i>Estatísticas</a></li>
                <li class="has-sub">
                    <a class="js-arrow" href="#"><i class="fa fa-puzzle-piece"></i>Avançado<span class="arrow"><i class="fas fa-angle-down"></i></span></a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li><a href="#"> <i class="fa fa-users"></i>Vendedores</a></li>
                        <li><a href="#"><i class="fa fa-unlock-alt"></i>Níveis de acesso</a></li>
                        <li><a href="<?php echo base_url('setup/alterar') ?>"><i class="fa fa-gear"></i>Alterar Configurações</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->