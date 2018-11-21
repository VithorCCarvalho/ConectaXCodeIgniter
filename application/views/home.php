<!DOCTYPE html>
<html>

<?php $this->load->view('head'); ?>
    
<body>
    <div class="gtco-loader"></div>
    <div id="page">
    <div class="page-inner">
    
    <?php $this->load->view('nav'); ?>
    
    <header id="gtco-header" class="gtco-cover" role="banner" style="background-image: url(<?php echo base_url('assets/images/') ?>family-watching.jpg)">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-left">
                    <div class="row row-mt-15em">
                        <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
                            <span style="margin: -45px 0 20px 0px" class="intro-text-small">Bem vindo à ConectaX</span>
                            <h1 style="margin: -10px 0">Os melhores planos de Internet e TV do Brasil.</h1> 
                        </div>
                        
                        <div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
                            <div class="form-wrap">
                                <div class="tab">
                                    <ul class="tab-menu">
                                        <li class="active gtco-first"><a href="#" data-tab="signup">Faça sua consulta</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-content-inner active" data-content="signup">
                                            <form action="<?php echo base_url('consulta'); ?>" method="post">
                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <label for="nome">Nome Completo</label>
                                                        <input type="text" class="form-control" name="user_nome" required>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <label for="telefone">Whatsapp ou Telefone</label>
                                                        <input type="number" class="form-control" name="user_telefone" required>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <label for="cidade">Cidade</label>
                                                        <select class="form-control select-cidades" value="Selecione uma cidade" name="user_cidade">
                                                        <option value="">Seleciona sua cidade</option>
                                                        <?php foreach($cidades as $nome): ?>
                                                        <?php echo '<option value="'.$nome.'">'.$nome.'</option>';  ?>
                                                        <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <input type="submit" class="btn btn-primary consultar-formulario-home" value="Consultar">
                                                    </div>
                                                </div>
                                            </form> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="gtco-section border-bottom">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                    <h2>Conheça as modalidades de planos</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="<?php echo base_url('assets/images/img_2.jpg') ?>') ?>" class="fh5co-project-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="<?php echo base_url('assets/images/internet.jpeg') ?>" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2>OI TOTAL PLAY</h2>
                            <p>Internet de alta velocidade e milhares de filmes e séries com o Coleção OI</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="<?php echo base_url('assets/images/img_3.jpg') ?>" class="fh5co-project-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="<?php echo base_url('assets/images/tv.jpg') ?>" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2>OI TV RESIDENCIAL</h2>
                            <p>Diversos canais de filmes e séries para se divertir com a familia</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="<?php echo base_url('assets/images/img_4.jpg') ?>" class="fh5co-project-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="<?php echo base_url('assets/images/celular.jpg') ?>" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2>OI TOTAL CONECTADO</h2>
                            <p>Internet dentro e fora de casa com ligações ilimitadas para todo o Brasil</p>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
    
    <div class="gtco-section border-bottom">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                    <h2>Oi Total Play</h2>
                    <p>Internet de alta velocidade e milhares de filmes e séries com o Coleção OI</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="price-box animate-box">
                        <h2 class="pricing-plan">Total Play</h2>
                        <div class="price">R$ 119,90<small>/mês</small></div>
                        <p></p>
                        <ul class="pricing-info">
                            <li><div class="pricing-info-icon"><img width="26" src="<?php echo base_url('assets/images/icons/banda-larga.svg') ?>"></div>Internet 15 MB</li>
                            <li><div class="pricing-info-icon"><img width="32" src="<?php echo base_url('assets/images/icons/fixo.svg') ?>"></div>Telefone Fixo Ilimitado</li>
                            <li><div class="pricing-info-icon"><img width="26" src="<?php echo base_url('assets/images/icons/internet-celular.svg') ?>"></div>OI WIFI Fora de casa</li>
                            <li><div class="pricing-info-icon"><img width="34" src="<?php echo base_url('assets/images/icons/icon-oiplay.svg') ?>"></div>+ de 20 mil títulos</li>
                            
                            <li style="margin: 0 auto; text-align: center;">
                                <img style="width: 100px; padding-top: 10px;" src="<?php echo base_url('assets/images/icons/logo-colecao-oi-oi-play.png') ?>">
                            </li>
                        </ul>
                        <a href="produto.php" class="btn btn-primary btn-sm">Consultar</a>
                        <hr>
                        <a href="totalplay.php">Veja os planos</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="price-box popular animate-box">
                        <div class="popular-text">Popular</div>
                        <h2 class="pricing-plan">Total Residencial</h2>
                        <div class="price">R$ 204,90<small>/mês</small></div>
                        <p></p>
                        <ul class="pricing-info">
                            <li><div class="pricing-info-icon"><img width="30" src="<?php echo base_url('assets/images/icons/tv.svg') ?>"></div>168 canais 56 em HD</li>
                            <li><div class="pricing-info-icon"><img width="26" src="<?php echo base_url('assets/images/icons/banda-larga.svg') ?>"></div>Internet 15 MB</li>
                            <li><div class="pricing-info-icon"><img width="32" src="<?php echo base_url('assets/images/icons/fixo.svg') ?>"></div>Telefone Fixo Ilimitado</li>
                            <li><div class="pricing-info-icon"><img width="26" src="<?php echo base_url('assets/images/icons/internet-celular.svg') ?>"></div>OI WIFI Fora de casa</li>
                            <li><div class="pricing-info-icon"><img width="30" src="<?php echo base_url('assets/images/icons/tv.svg') ?>"></div>1 ponto adicional prátis</li>
                        </ul>
                        <a href="produto.php?plano=oiresidencialintermediario" class="btn btn-primary btn-sm">Consultar</a>
                        <hr>
                        <a href="totalresidencial.php">Veja os planos</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="price-box animate-box">
                        <h2 class="pricing-plan">Conectado Light</h2>
                        <div class="price">R$ 164,90<small>/mês </small></div>
                        <p></p>
                        <ul class="pricing-info">
                            <li><div class="pricing-info-icon"><img width="26" src="<?php echo base_url('assets/images/icons/banda-larga.svg') ?>"></div>Internet 15 MB</li>
                            <li><div class="pricing-info-icon"><img width="24" src="<?php echo base_url('assets/images/icons/internet-celular.svg') ?>"></div>Ligações Ilimitadas no Celular</li>
                            <li><div class="pricing-info-icon"><img width="24" src="<?php echo base_url('assets/images/icons/internet-celular.svg') ?>"></div>8gb Internet Celular</li>
                            <li><div class="pricing-info-icon"><img width="30" src="<?php echo base_url('assets/images/icons/icon-oiplay.svg') ?>"></div>+ de 20 mil títulos</li>

                            <li style="margin: 0 auto; text-align: center;">
                                <img style="width: 100px; padding-top: 10px;" src="<?php echo base_url('assets/images/icons/logo-colecao-oi-oi-play.png') ?>">
                            </li>
                        </ul>
                        <a href="produto.php" class="btn btn-primary btn-sm">Consultar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="gtco-section">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0">
                    <ul class="fh5co-faq-list">
                        <li class="animate-box">
                            <h2 style="font-weight: 700; font-size: 35px; max-width: 450px">Oi Play: O melhor da TV quando você quiser</h2>
                            <div class="oiplay">
                                <div class="icons-oiplay">
                                    <p>Além de todos os canais da sua Oi TV HD, a família toda pode assistir online a milhares de filmes, séries, desenhos, esportes e muito mais. E dá pra curtir tudo isso quando quiser, com total conforto, pelo computador, tablet ou celular. Você também pode aproveitar o Oi Play direto na sua TV.</p>
                                    <img src="<?php echo base_url('assets/images/icons/hbo-go.png') ?>">
                                    <img src="<?php echo base_url('assets/images/icons/logo-colecao-oi-oi-play.png') ?>">
                                    <img src="<?php echo base_url('assets/images/icons/crackle.png') ?>">
                                    <img src="<?php echo base_url('assets/images/icons/espn.png') ?>">
                                    <img src="<?php echo base_url('assets/images/icons/noggin.png') ?>">
                                    <img src="<?php echo base_url('assets/images/icons/discovery-kids.png') ?>">
                                    <img src="<?php echo base_url('assets/images/icons/fox-app-traco.png') ?>">
                                </div>

                                <div style="max-width: 450px; margin: 0 40px">
                                    <img style="width: 100%" src="<?php echo base_url('assets/images/oi-play_TV.png') ?>">
                                </div>
                            </div>
                        </li>

                        <div class="row" style="border-top: 3px solid #f1f1f1; padding: 30px 0">
                            <div class="col-sm-4">
                                <li class="animate-box">
                                <h2>Vai incluso</h2>
                                </li>
                            </div>
                            
                            <div class="col-sm-8">
                                <li class="animate-box">
                                    <h2>Modem WiFi: dentro de casa</h2>
                                    <p>1 modem de internet WiFi cedido em regime de comodato. Perfeito para conectar seus aparelhos dentro de casa: computadores, tablets, celulares, Vs, videogames e mais</p>
                                </li>
                                <li class="animate-box">
                                    <h2>Oi WiFi: fora de casa</h2>
                                    <p>Mais de 2 milhões de pontos de internet pelo Brasil pra você navegar fora de casa em aeroportos, restaurantes e em muitos outros locais.</p>
                                </li>
                            </div>
                        </div>

                        <div class="row" style="border-top: 3px solid #f1f1f1; padding: 30px 0">
                            <div class="col-sm-4">
                                <li class="animate-box">
                                        <h2>Você pode adicionar</h2>
                                </li>
                            </div>
                            <div class="col-sm-8">
                                <li class="animate-box">
                                    <div class="row">
                                        <div class="col-sm-8"><h2>Internet Banda Larga 25 Mega</h2></div>
                                        <div class="col-sm-4"><h2>+10,00/mês</h2></div>
                                    </div>
                                </li>
                                <li class="animate-box">
                                    <div class="row">
                                        <div class="col-sm-8"><h2>Internet Banda Larga 35 Mega</h2></div>
                                        <div class="col-sm-4"><h2>+20,00/mês</h2></div>
                                    </div>
                                </li>
                                <li class="animate-box">
                                    <div class="row">
                                        <div class="col-sm-8"><h2>Pontos adicionais pra TV*</h2></div>
                                        <div class="col-sm-4"><h2>+24,90/mês</h2></div>
                                    </div>
                                </li>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="gtco-features" class="border-bottom">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                    <h2>Veja algumas vantagens</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <span class="icon">
                            <i class="ti-vector"></i>
                        </span>
                        <h3>OI PLAY</h3>
                        <p>Filmes, séries e desenhos com total conforto, pelo computador, tablet ou celular. Você também pode aproveitar o Oi Play direto na sua TV</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <span class="icon">
                            <i class="ti-tablet"></i>
                        </span>
                        <h3>OI WIFI</h3>
                        <p>Mais de 2 milhões de pontos de internet pelo Brasil pra você navegar fora de casa em aeroportos, restaurantes e em muitos outros locais.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <span class="icon">
                            <i class="ti-settings"></i>
                        </span>
                        <h3>MODEM WIFI GRÁTIS</h3>
                        <p>1 modem de internet WiFi Grátis. Perfeito para conectar seus aparelhos dentro de casa: computadores, tablets, celulares, TVs e videogames</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <span class="icon">
                            <i class="ti-ruler-pencil"></i>
                        </span>
                        <h3>INSTALAÇÃO RÁPIDA</h3>
                        <p>Até 48 horas para instalar (dias úteis que contam a partir do agendamento). De segunda a sábado, das 8h às 20h.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('footer'); ?>

    </body>
</html>