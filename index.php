<<<< HEAD
﻿<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

    
    <?php
  
    
    //---------CONTADOR DE ACESSOS-------//

    $arquivo = "contador.txt";
    $handle = fopen($arquivo, "r+");
    $data = fread($handle, 512);
    $contador = $data + 1;
    fseek($handle, 0);
    fwrite($handle, $contador);
    fclose($handle);
    ?>
    <!------------------------------------>


    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>LabTeC</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
        <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
        <meta name="author" content="FREEHTML5.CO" />

        <!-- 
              //////////////////////////////////////////////////////
      
              FREE HTML5 TEMPLATE 
              DESIGNED & DEVELOPED by FREEHTML5.CO
                      
              Website: 		http://freehtml5.co/
              Email:            info@freehtml5.co
              Twitter: 		http://twitter.com/fh5co
              Facebook: 	https://www.facebook.com/fh5co
      
              //////////////////////////////////////////////////////
        -->

        <!-- Facebook and Twitter integration -->
        <meta property="og:title" content=""/>
        <meta property="og:image" content=""/>
        <meta property="og:url" content=""/>
        <meta property="og:site_name" content=""/>
        <meta property="og:description" content=""/>
        <meta name="twitter:title" content="" />
        <meta name="twitter:image" content="" />
        <meta name="twitter:url" content="" />
        <meta name="twitter:card" content="" />

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" type="image/png" href="iconlab.ico">

        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet' type='text/css'>

        <!-- Animate.css -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="css/icomoon.css">
        <!-- Simple Line Icons -->
        <link rel="stylesheet" href="css/simple-line-icons.css">
        <!-- Magnific Popup -->
        <link rel="stylesheet" href="css/magnific-popup.css">
        <!-- Bootstrap  -->
        <link rel="stylesheet" href="css/bootstrap.css">

        <!-- 
        Default Theme Style 
        You can change the style.css (default color purple) to one of these styles
        
        1. pink.css
        2. blue.css
        3. turquoise.css
        4. orange.css
        5. lightblue.css
        6. brown.css
        7. green.css

        -->
        <link rel="stylesheet" href="css/style.css">

        <!-- Styleswitcher ( This style is for demo purposes only, you may delete this anytime. ) -->
        <link rel="stylesheet" id="theme-switch" href="css/style.css">
        <!-- End demo purposes only -->


        <style>
            /* For demo purpose only */

            /* For Demo Purposes Only ( You can delete this anytime :-) */
            #colour-variations {
                padding: 10px;
                -webkit-transition: 0.5s;
                -o-transition: 0.5s;
                transition: 0.5s;
                width: 140px;
                position: fixed;
                left: 0;
                top: 100px;
                z-index: 999999;
                background: #fff;
                /*border-radius: 4px;*/
                border-top-right-radius: 4px;
                border-bottom-right-radius: 4px;
                -webkit-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
                -moz-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
                -ms-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
                box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
            }
            #colour-variations.sleep {
                margin-left: -140px;
            }
            #colour-variations h3 {
                text-align: center;;
                font-size: 11px;
                letter-spacing: 2px;
                text-transform: uppercase;
                color: #777;
                margin: 0 0 10px 0;
                padding: 0;;
            }
            #colour-variations ul,
            #colour-variations ul li {
                padding: 0;
                margin: 0;
            }
            #colour-variations li {
                list-style: none;
                display: block;
                margin-bottom: 5px!important;
                float: left;
                width: 100%;
            }
            #colour-variations li a {
                width: 100%;
                position: relative;
                display: block;
                overflow: hidden;
                -webkit-border-radius: 4px;
                -moz-border-radius: 4px;
                -ms-border-radius: 4px;
                border-radius: 4px;
                -webkit-transition: 0.4s;
                -o-transition: 0.4s;
                transition: 0.4s;
            }
            #colour-variations li a:hover {
                opacity: .9;
            }
            #colour-variations li a > span {
                width: 33.33%;
                height: 20px;
                float: left;
                display: -moz-inline-stack;
                display: inline-block;
                zoom: 1;
                *display: inline;
            }


            .option-toggle {
                position: absolute;
                right: 0;
                top: 0;
                margin-top: 5px;
                margin-right: -30px;
                width: 30px;
                height: 30px;
                background: #0acac3;
                text-align: center;
                border-top-right-radius: 4px;
                border-bottom-right-radius: 4px;
                color: #fff;
                cursor: pointer;
                -webkit-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
                -moz-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
                -ms-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
                box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
            }
            .option-toggle i {
                top: 2px;
                position: relative;
            }
            .option-toggle:hover, .option-toggle:focus, .option-toggle:active {
                color:  #fff;
                text-decoration: none;
                outline: none;
            }

            section#fh5co-home{
                background: url("images/LabTeC.png") center center/100% no-repeat;
                width: 100%;                
            }

            #fh5co-home img{
                width: 200px;
                
            }

            /*SMALL DEVICES - TABLETS & DESKTOPS*/
            @media screen and (min-width: 960px){
                .lag{
                    width: 32.4%;
                }
            }

            @media screen and (max-width: 960px){
               section#fh5co-home{
                background: url("images/labtec_mob.png") center center/100% no-repeat;
                width: 100%;                
            }
            }
            
             @media screen and (max-width: 760px){
               .col-md-8 .to-animate{
                   color:#0000ff !important;
                   
               }
            }
            
        </style>
        <!-- End demo purposes only -->
        
        <!-- Modernizr JS -->
        <script src="js/modernizr-2.6.2.min.js"></script>
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
        <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript">
            console.log("LabTec");
            function chamaEvento(){
                window.location = "https://labtecifpa.com.br/prosel";
                console.log("eventos");
            }
        </script>

    </head>
    <body>
        <header role="banner" id="fh5co-header">
            <div class="container">
                <!-- <div class="row"> -->
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <!-- Mobile Toggle Menu Button -->
                        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
                        <a class="navbar-brand" href="index.php">LabTeC</a> 
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                       <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#" data-nav-section="home"><span><b>Início</b></span></a></li>
                            <li><a  href="#" data-nav-section="work"><span><b>Projetos</b></span></a></li>
                            <li><a href="#" data-nav-section="testimonials"><span><b>Testemunhas</b></span></a></li>
                            <li><a href="#" data-nav-section="services"><span><b>Serviços</b></span></a></li>
                            <li><a href="#" data-nav-section="about"><span><b>Sobre</b></span></a></li>
                            <li><a href="#" data-nav-section="contact"><span><b>Contatos</b></span></a></li>
                        </ul>
                    </div>
                </nav>
                <!-- </div> -->
            </div>
        </header>

        <section id="fh5co-home" data-section="home" data-stellar-background-ratio="1">
           <!-- <div class="gradient"></div>-->
            <div class="container">
                <div class="text-wrap">
                    <div class="text-inner">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <h1 class="to-animate" >Seja bem-vindo ao LabTeC!</h1>
                                <h2 class="to-animate" > IFPA - Campus Óbidos</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slant"></div>
        </section>

        <section id="fh5co-intro">
            <div class="container">
                <div class="row row-bottom-padded-lg">
                    <div class="fh5co-block to-animate" style="background-image: url(images/img_7.jpg);">
                        <div class="overlay-darker"></div>
                        <div class="overlay"></div>
                        <div class="fh5co-text">
                            <i class="fh5co-intro-icon icon-login"></i>
                            <h2>Planejamento</h2>
                            <p>O planejamento é um exercício de buscar respostas. Mas, antes, é preciso ter certeza de que você está fazendo as perguntas certas.</p>

                        </div>
                    </div>
                    <div class="fh5co-block to-animate" style="background-image: url(images/img_8.jpg);">
                        <div class="overlay-darker"></div>
                        <div class="overlay"></div>
                        <div class="fh5co-text">
                            <i class="fh5co-intro-icon icon-umbrella"></i>
                            <h2>Desenvolvimento</h2>
                            <p>É o processo de evolução, implementação e codificação de um produto de acordo com o planejado.


                                <br></p>

                        </div>
                    </div>
                    <div class="fh5co-block to-animate" style="background-image: url(images/img_10.jpg);">
                        <div class="overlay-darker"></div>
                        <div class="overlay"></div>
                        <div class="fh5co-text">
                            <i class="fh5co-intro-icon icon-rocket"></i>
                            <h2>Publicação</h2>
                            <p>Lançamento do produto, serviço e artigo.



                                <br>
                                <br>
                                <br></p>

                        </div>
                    </div>
                </div>


                <!--
                <div class="row watch-video text-center to-animate">
                    <span>Fotos</span>
                    <a href=""><i class="icon-camera"></i></a>
                </div>
                -->
            </div>    
        </section> 



        <section id="fh5co-work" data-section="work">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 section-heading text-center">
                        <h2 class="to-animate">PROJETOS</h2>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 subtext to-animate">
                                <h3>Projetos em execução e finalizados.</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-bottom-padded-sm">
                    <div class="col-md-4 col-sm-6 col-xxs-12 lag">
                        <a href="projetos/jnd2.html" class="fh5co-project-item"> <!-- image-popup to-animate"-->
                            <img src="images/projeto1.jpg" alt="Image" class="img-responsive">
                            <div align="justify" class="fh5co-text">
                                <h2>JND² System</h2>
                                <span>Sistema de Informação Gerencial desenvolvido para ACCDAR, pelos alunos do curso Técnico em Manutençao e Suporte em Informática.</span>
                            </div>
                        </a>
                    </div>
                    <div class="clearfix visible-sm-block"></div>
                    <div class="col-md-4 col-sm-6 col-xxs-12 lag">
                        <a href="/horarios" class="fh5co-project-item">
                            <img src="images/horarios.png" alt="Image" class="img-responsive">
                            <div align="justify" class="fh5co-text">
                                <h2>Consulta de Horários</h2>
                                <span>Sistema Web desenvolvido pelos estagiários do LabTeC de Manutenção e Suporte em Informática para a turma de Informática.</span>
                            </div>
                        </a>
                    </div>

                    <div class="clearfix visible-sm-block"></div>

                    <div class="col-md-4 col-sm-6 col-xxs-12 lag">
                        <a href="projetos/evapotranspiracao.html" class="fh5co-project-item">
                            <img src="images/projeto3a.png" alt="Image" class="img-responsive">
                            <div align="justify" class="fh5co-text">
                                <h2>Evapotranspiração</h2>
                                <span>Sistema Web onde calcula-se a quantidade de água transformada em um fenômeno físico chamado evapotranspiração.</span>
                            </div>
                        </a>
                    </div>

                    <div class="clearfix visible-sm-block"></div>

                    <div class="col-md-4 col-sm-6 col-xxs-12 lag">
                        <a href="projetos/sigma-obidos.html" class="fh5co-project-item">
                            <img src="images/projeto4a.png" alt="Image" class="img-responsive">
                            <div align="justify" class="fh5co-text">
                                <h2>Sigma-Óbidos</h2>
                                <span>Sistema de informação geográfico para o monitoramento de alagamentos em Óbidos/Pará. </span>
                            </div>
                        </a>
                    </div>

                    <div class="clearfix visible-sm-block"></div>

                    <div class="col-md-4 col-sm-6 col-xxs-12 lag">
                        <a href="projetos/visionControl.html" class="fh5co-project-item">
                            <img src="images/projeto5a.png" alt="Image" class="img-responsive">
                            <div align="justify" class="fh5co-text">
                                <h2>VisionControl</h2>
                                <span>Sistema Desktop para informatização do controle de funcionamento das reuniões em igrejas em células. </span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xxs-12 lag">
                        <a href="projetos/hortaControl.html" class="fh5co-project-item">
                            <img src="images/projeto6a.png" alt="Image" class="img-responsive">
                            <div align="justify" class="fh5co-text">
                                <h2>Horta Control</h2>
                                <span>Sistema Web desenvolvido visando o controle de plantações de sementes no ambiente externo do IFPA-Campus Óbidos.</span>
                            </div>
                        </a>
                    </div>

                    <div class="clearfix visible-sm-block"></div>

                    <div class="col-md-4 col-sm-6 col-xxs-12 lag">
                        <a href="projetos/sicopBio.html" class="fh5co-project-item">
                            <center><img src="images/projeto7.png" alt="Image" class="img-responsive"> </center>
                            <div align="justify" class="fh5co-text">
                                <h2>Sicop-Bio</h2>
                                <span>Sistema de controle presencial por biometria da impressão digital dos alunos do IFPA - Campus Óbidos.</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xxs-12 lag">
                        <a href="projetos/talesAmazon.html" class="fh5co-project-item">
                            <center><img src="images/TalesAmazon.png" alt="Image" class="img-responsive"></center>
                            <div class="fh5co-text">
                                <h2>Tales Amazon</h2>
                                <span>Game que estimula o vasto conhecimento da Literatura Brasileira através da biografia de Inglês de Sousa.</span>
                            </div>
                        </a>
                    </div>

                    <div class="clearfix visible-sm-block"></div>

                    <div class="col-md-4 col-sm-6 col-xxs-12 lag">
                        <a href="projetos/cont-ar-condicionado.html" class="fh5co-project-item">
                            <center><img src="images/fotoArduino.jpg" alt="Image" class="img-responsive"></center>
                            <div align="justify" class="fh5co-text">
                                <h2>Controlador de Ar Condicionado</h2>
                                <span>Sistema automatizado de baixo custo para monitorar e controlar a temperatura dos condicionadores de ar nas salas do IFPA.</span>
                            </div>
                        </a>
                    </div>

                </div>

            </div>
        </section>

        <section id="fh5co-testimonials" data-section="testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 section-heading text-center">
                        <h2 class="to-animate">Testemunhas</h2>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 subtext to-animate">
                                <h3>Comentários de pessoas sobre o nosso site.</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="box-testimony">
                            <blockquote class="to-animate-2">
                                <p align="justify" >&ldquo;A criatividade, a dedicação e o empenho são características marcantes na concepção de ferramentas inovadoras para melhora das condições de vida das comunidades do entorno do IFPA. O LabTeC assume o papel de "agente" promotor do desenvolvimento econômico social&rdquo;.</p>
                            </blockquote>
                            <div class="author to-animate">
                                <figure><img src="images/Juliana.png" alt="Juliana"></figure>
                                <p>
                                    Juliana Silva <span class="subtext">Professora<br>IFPA</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-testimony">
                            <blockquote class="to-animate-2">
                                <p align="justify" >&ldquo;Site muito bem recomendado, encontra-se todos os dados que precisamos para conhecer vários projetos tecnológicos do IFPA&rdquo;.</p>
                            </blockquote>
                            <div class="author to-animate">
                                <figure><img src="images/Debora.png" alt="Debora Andrade"></figure>
                                <p>
                                    Debora Andrade  <span class="subtext">Estagiária<br>LabTec</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="box-testimony">
                            <blockquote class="to-animate-2">
                                <p align="justify" >&ldquo;Ajudou muito no meu Projeto Integrador&rdquo;.</p>
                            </blockquote>
                            <div class="author to-animate img">
                                <figure><img src="images/narciso.png" alt="Narciso Gomes"></figure>
                                <p>
                                    Narciso Gomes <span class="subtext">Estagiário<br>LabTec</span>
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>


        <section id="fh5co-services" data-section="services">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 section-heading text-left">
                        <h2 class=" left-border to-animate">Serviços</h2>
                        <div class="row">
                            <div class="col-md-8 subtext to-animate">
                                <h3>O LabTeC oferta vários serviços para os alunos do IFPA-Campus Óbidos, como citaremos abaixo.</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 fh5co-service to-animate">
                        <i class="icon to-animate-2 icon-anchor"></i>
                        <h3>Cursos</h3>
                        <p>O LabTeC disponibilizará de cursos voltados a comunidade geral, buscando sempre a educação Tecnológica da população.</p>
                    </div>
                    <div class="col-md-6 col-sm-6 fh5co-service to-animate">
                        <i class="icon to-animate-2 icon-layers2"></i>
                        <h3>Desenvolvimento Web e Desktop</h3>
                        <p>O desenvolvimento Web e Desktop é feito pelos alunos do LabTeC e orientado pelos professores do IFPA, buscando melhor satisfazer as devidas necessidades da população local.</p>
                    </div>

                    <div class="clearfix visible-sm-block"></div>

                    <div class="col-md-6 col-sm-6 fh5co-service to-animate">
                        <i class="icon to-animate-2 icon-camera2"></i>
                        <h3>Fotos e Vídeos</h3>
                        <p>Feito pelos alunos do laboratório que trabalham na edição de fotos e vídeos buscando sempre fazerem o melhor.</p>
                    </div>
                    <div class="col-md-6 col-sm-6 fh5co-service to-animate">
                        <i class="icon to-animate-2 icon-monitor"></i>
                        <h3>Desenvolvimento de Sites</h3>
                        <p>A construção de sites é feita de mesmo modo pelos alunos com a orientação dos professores envolvidos no LabTeC.</p>
                    </div>

                </div>
            </div>
        </section>

        <section id="fh5co-about" data-section="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 section-heading text-center">
                        <h2 class="to-animate">Sobre</h2>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 subtext to-animate">
                                <h3>Os colaboradores e representantes do LabTeC.</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="fh5co-person text-center to-animate"> <p>
                            <figure><img src="images/personn.jpg" alt="Image"></figure>
                            <h3>Victor Peres</h3>
                            <span class="fh5co-position">Professor</span>
                            <p>Atualmente é Professor do Instituto Federal do Pará - Campus Óbidos. Possui Graduação em Sistema de Informação pela Universidade Federal Rural da Amazônia. Tem experiência na área de Ciência da Computação, com ênfase em Inteligência Artificial, atuando principalmente nos seguintes temas: Redes Neurais Artificiais, Reconhecimento de Padrões e Reengenharia de Software.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="fh5co-person text-center to-animate"> <p>
                            <figure><img src="images/person8.jpg" alt="Image"></figure>
                            <h3>Fabrício Ribeiro</h3>
                            <span class="fh5co-position">Professor</span>
                            <p>Graduado em Sistemas de Informação do Centro Universitário Luterano de Santarém (CEULS/ULBRA) e pós-graduado em Engenharia de Sistemas, pela ESAB, e em Docência para o Magistério Superior, pela FAI. Professor no Instituto Federal de Educação Ciência e Tecnologia do Pará.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="fh5co-person text-center to-animate"> 
                            <figure><img src="images/person9.png" alt="Image"></figure>
                            <h3><br>Luiz Reinoso</h3>
                            <span class="fh5co-position">Professor</span>
                            <p>Luiz Fernando Reinoso é professor e pesquisador em Sistemas de Informação. Formado em Tecnologia de Análise e Desenvolvimento de Sistemas pelo Instituto Federal de Educação, Ciência e Tecnologia do Espírito Santo (IFES), campus Santa Teresa em 2012. Pós-graduado em Novas tecnologias na educação na Escola Superior do Brasil (ESAB), em Vila Velha, 2014. Mestre em Informática na educação, LIEd/UFES, Vitória, 2016.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="fh5co-person text-center to-animate"> 
                            <figure><img src="images/natanael.jpg" alt="image"></figure>
                            <h3><br>Natanael Pires</h3>
                            <span class="fh5co-position">Professor</span>
                            <p>Possui graduação em Tecnologia em Análise e Desenvolvimento de Sistema pela Faculdade de Ciências Sociais Aplicadas de Cascavel (2010). Atualmente é professor do Instituto Federal de Educação Ciência e Tecnologia do Pará. Tem experiência na área de Ciência da Computação, com ênfase em Sistemas de Computação.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="fh5co-person text-center to-animate"> 
                            <figure><img src="images/person5.jpg" alt="image"></figure>
                            <h3><br>Leonne Alves</h3>
                            <span class="fh5co-position">Professor</span>
                            <p>Mestre em Sociologia e Antropologia pela Universidade Federal do Pará (UFPA). Especialista em Agricultura Familiar e Desenvolvimento Agroambiental na Amazônia (UFPA). Graduado em Ciências Sociais - Antropologia (UFPA). Professor no Instituto Federal de Educação Ciência e Tecnologia do Pará.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                    <div class="fh5co-person text-center to-animate"> 
                            <figure><img src="images/person.png" alt="Natanael"></figure>
                            <h3><br>Edinelson Júnior</h3>
                            <span class="fh5co-position">Professor</span>
                            <p>Acadêmico do Curso de Ciência da Computação da Universidade Federal do Oeste do Pará.Tem experiência na área de Educação, com ênfase em Educação, atuando principalmente nos seguintes temas: tecnologia, redes socias, cibercultura, software livre e inclusão digital.Professor no Instituto Federal de Educação Ciência e Tecnologia do Pará.</p>
                        </div>
                    </div>  
                </div>
            </div>
        </section>

        <section id="fh5co-counters" style="background-image: url(images/full_6.jpg);" data-stellar-background-ratio="0.5">
            <div class="fh5co-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 section-heading text-center to-animate">
                        <h2>Números</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="fh5co-counter to-animate">
                            <i class="fh5co-counter-icon icon-briefcase to-animate-2"></i>
                            <span class="fh5co-counter-number js-counter" data-from="0" data-to="09" data-speed="5000" data-refresh-interval="50">10</span>
                            <span class="fh5co-counter-label">Projetos em Execução</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="fh5co-counter to-animate">
                            <i class="fh5co-counter-icon icon-download2 to-animate-2"></i>
                            <span class="fh5co-counter-number js-counter" data-from="0" data-to="03" data-speed="5000" data-refresh-interval="50">3</span>
                            <span class="fh5co-counter-label">Projetos Finalizados</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="fh5co-counter to-animate">
                            <i class="fh5co-counter-icon icon-monitor to-animate-2"></i>
                            <span class="fh5co-counter-number js-counter" data-from="0" data-to=<?php echo $contador;?> data-speed="5000" data-refresh-interval="50">0</span>
                            <span class="fh5co-counter-label">Acessos</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="fh5co-counter to-animate">
                            <i class="fh5co-counter-icon icon-people to-animate-2"></i>
                            <span class="fh5co-counter-number js-counter" data-from="0" data-to="30" data-speed="5000" data-refresh-interval="50">20</span>
                            <span class="fh5co-counter-label">Alunos</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="fh5co-contact" data-section="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 section-heading text-center">
                        <h2 class="to-animate">Contatos</h2>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 subtext to-animate">
                                <h3>Para entrar em contato basta nos procurar no Instituto Federal de Educação, Ciência e Tecnologia do Pará - Campus Óbidos</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-bottom-padded-md">
                    <div class="col-md-6 to-animate">
                        <h3>Informações de contato</h3>
                        <ul class="fh5co-contact-info">
                            <li class="fh5co-contact-address ">
                                <i class="icon-home"></i>
                                Localizado na PA-254, Instituto Federal de Educação, Ciência e Tecnologia do Pará - Campus Óbidos.
                            </li>
                            <li><i class="icon-envelope"></i>labtec@labtecifpa.com.br</li>
                            <li><i class="icon-globe"></i> <a href="http://labtecifpa.com.br/" target="_blank">labtecifpa.com.br</a></li>
                        </ul>
                    </div>


                </div>
            </div>
            <div id="map" class="to-animate"></div>
        </section>


        <footer id="footer" role="contentinfo">
            <a href="#" class="gotop js-gotop"><i class="icon-arrow-up2"></i></a>
            <div class="container">
                <div class="">
                    <div class="col-md-12 text-center">
                        <p>Desenvolvido por <i class="fa fa-love"></i><a href="http://labtecifpa.com.br/">LabTeC</a></p>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="social social-circle">
                            <li><a href="https://m.facebook.com/IFPACampusObidos/"  target="_blank"><i class="icon-facebook" ></i></a></li>
                            <li><a href="http://obidos.ifpa.edu.br/" target="_blank"><i class="icon-globe"></i></a></li>



                        </ul>
                    </div>
                </div>
            </div>
        </footer>


        <!-- For demo purposes Only ( You may delete this anytime :-) -->
        <!-- End demo purposes only -->


        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        <!-- jQuery Easing -->
        <script src="js/jquery.easing.1.3.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Waypoints -->
        <script src="js/jquery.waypoints.min.js"></script>
        <!-- Stellar Parallax -->
        <script src="js/jquery.stellar.min.js"></script>
        <!-- Counter -->
        <script src="js/jquery.countTo.js"></script>
        <!-- Magnific Popup -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/magnific-popup-options.js"></script>
        <!-- Google Map -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
        <script src="js/google_map.js"></script>

        <!-- For demo purposes only styleswitcher ( You may delete this anytime ) -->
        <script src="js/jquery.style.switcher.js"></script>
        <script>
            $(function () {
                $('#colour-variations ul').styleSwitcher({
                    defaultThemeId: 'theme-switch',
                    hasPreview: false,
                    cookie: {
                        expires: 30,
                        isManagingLoad: true
                    }
                });
                $('.option-toggle').click(function () {
                    $('#colour-variations').toggleClass('sleep');
                });
            });

        </script>
        <!-- End demo purposes only -->

        <!-- Main JS (Do not remove) -->
        <script src="js/main.js"></script>

    </body>
</html>
=======
<?php

// Page created by Shepard [Fabian Pijcke] <Shepard8@laposte.net>
// Arno Esterhuizen <arno.esterhuizen@gmail.com>
// and Romain Bourdon <rromain@romainbourdon.com>
// and Hervé Leclerc <herve.leclerc@alterway.fr>
// Icons by Mark James <http://www.famfamfam.com/lab/icons/silk/>
// Version 2.5 -> 3.0.0 by Dominique Ottello aka Otomatic
// Update 3.0.6
// Check duplicate ServerName
// Support of VitualHost by IP


$server_dir = "../";

require $server_dir.'scripts/config.inc.php';
require $server_dir.'scripts/wampserver.lib.php';

//chemin jusqu'aux fichiers alias
$aliasDir = $server_dir.'alias/';

//Fonctionne à condition d'avoir ServerSignature On et ServerTokens Full dans httpd.conf
$server_software = $_SERVER['SERVER_SOFTWARE'];
$error_content = '';

// on récupère les versions des applis
$phpVersion = $wampConf['phpVersion'];
$apacheVersion = $wampConf['apacheVersion'];
$doca_version = 'doca'.substr($apacheVersion,0,3);
$mysqlVersion = $wampConf['mysqlVersion'];

//On récupére la valeur de urlAddLocalhost
$suppress_localhost = ($wampConf['urlAddLocalhost'] == 'off' ? true : false);

//On récupère la valeur de VirtualHostMenu
$VirtualHostMenu = $wampConf['VirtualHostSubMenu'];

//on récupère la valeur de apachePortUsed
$port = $wampConf['apachePortUsed'];
$UrlPort = $port !== "80" ? ":".$port : '';
//on récupère la valeur de mysqlPortUsed
$Mysqlport = $wampConf['mysqlPortUsed'];


// répertoires à ignorer dans les projets
$projectsListIgnore = array ('.','..','wampthemes','wamplangues');

// images
$pngFolder = <<< EOFILE
iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAA3NCSVQICAjb4U/gAAABhlBMVEX//v7//v3///7//fr//fj+/v3//fb+/fT+/Pf//PX+/Pb+/PP+/PL+/PH+/PD+++/+++7++u/9+vL9+vH79+r79+n79uj89tj89Nf889D88sj78sz78sr58N3u7u7u7ev777j67bL67Kv46sHt6uP26cns6d356aP56aD56Jv45pT45pP45ZD45I324av344r344T14J734oT34YD13pD24Hv03af13pP233X025303JL23nX23nHz2pX23Gvn2a7122fz2I3122T12mLz14Xv1JPy1YD12Vz02Fvy1H7v04T011Py03j011b01k7v0n/x0nHz1Ejv0Hnuz3Xx0Gvz00buzofz00Pxz2juz3Hy0TrmznzmzoHy0Djqy2vtymnxzS3xzi/kyG3jyG7wyyXkwJjpwHLiw2Liw2HhwmDdvlXevVPduVThsX7btDrbsj/gq3DbsDzbrT7brDvaqzjapjrbpTraojnboTrbmzrbmjrbl0Tbljrakz3ajzzZjTfZijLZiTJdVmhqAAAAgnRSTlP///////////////////////////////////////8A////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////9XzUpQAAAAlwSFlzAAALEgAACxIB0t1+/AAAAB90RVh0U29mdHdhcmUATWFjcm9tZWRpYSBGaXJld29ya3MgOLVo0ngAAACqSURBVBiVY5BDAwxECGRlpgNBtpoKCMjLM8jnsYKASFJycnJ0tD1QRT6HromhHj8YMOcABYqEzc3d4uO9vIKCIkULgQIlYq5haao8YMBUDBQoZWIBAnFtAwsHD4kyoEA5l5SCkqa+qZ27X7hkBVCgUkhRXcvI2sk3MCpRugooUCOooWNs4+wdGpuQIlMDFKiWNbO0dXTx9AwICVGuBQqkFtQ1wEB9LhGeAwDSdzMEmZfC0wAAAABJRU5ErkJggg==
EOFILE;
$pngFolderGo = <<< EOFILE
iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAJISURBVDjLpZPLS5RhFIef93NmnMIRSynvgRF5KWhRlmWbbotwU9sWLupfCBeBEYhQm2iVq1oF0TKIILIkMgosxBaBkpFDmpo549y+772dFl5bBIG/5eGch9+5KRFhOwrYpmIAk8+OjScr29uV2soTotzXtLOZLiD6q0oBUDjY89nGAJQErU3dD+NKKZDVYpTChr9a5sdvpWUtClCWqBRxZiE/9+o68CQGgJUQr8ujn/dxugyCSpRKkaw/S33n7QQigAfxgKCCitqpp939mwCjAvEapxOIF3xpBlOYJ78wQjxZB2LAa0QsYEm19iUQv29jBihJeltCF0F0AZNbIdXaS7K6ba3hdQey6iBWBS6IbQJMQGzHHqrarm0kCh6vf2AzLxGX5eboc5ZLBe52dZBsvAGRsAUgIi7EFycQl0VcDrEZvFlGXBZshtCGNNa0cXVkjEdXIjBb1kiEiLd4s4jYLOKy9L1+DGLQ3qKtpW7XAdpqj5MLC/Q8uMi98oYtAC2icIj9jdgMYjNYrznf0YsTj/MOjzCbTXO48RR5XaJ35k2yMBCoGIBov2yLSztNPpHCpwKROKHVOPF8X5rCeIv1BuMMK1GOI02nyZsiH769DVcBYXRneuhSJ8I5FCmAsNomrbPsrWzGeocTz1x2ht0VtXxKj/Jl+v1y0dCg/vVMl4daXKg12mtCq9lf0xGcaLnA2Mw7hidfTGhL5+ygROp/v/HQQLB4tPlMzcjk8EftOTk7KHr1hP4T0NKvFp0vqyl5F18YFLse/wPLHlqRZqo3CAAAAABJRU5ErkJggg==
EOFILE;
$gifLogo = <<< EOFILE
iVBORw0KGgoAAAANSUhEUgAAAGAAAABTCAYAAABgdgI7AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJ
bWFnZVJlYWR5ccllPAAAA2RpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdp
bj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6
eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEz
NDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJo
dHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlw
dGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEu
MC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVz
b3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1N
Ok9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo1ODg0QkM3NUZBMDhFMDExODkyQ0U2NkE5ODVB
M0Q2OSIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDoyMEQ2RDU5MDA5M0UxMUUwOUUwRkYwRTg2
NjQyMzQzQyIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDoyMEQ2RDU4RjA5M0UxMUUwOUUwRkYw
RTg2NjQyMzQzQyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1IFdpbmRvd3Mi
PiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo1ODg0QkM3NUZB
MDhFMDExODkyQ0U2NkE5ODVBM0Q2OSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo1ODg0QkM3
NUZBMDhFMDExODkyQ0U2NkE5ODVBM0Q2OSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRG
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
EOFILE;
$pngPlugin = <<< EOFILE
iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsSAAALEgHS3X78AAAABGdBTUEAALGOfPtRkwAAACBjSFJNAAB6JQAAgIMAAPn/AACA6QAAdTAAAOpgAAA6mAAAF2+SX8VGAAABmklEQVR42mL4//8/AyUYIIDAxK5du1BwXEb3/9D4FjBOzZ/wH10ehkF6AQIIw4B1G7b+D09o/h+X3gXG4YmteA0ACCCsLghPbPkfm9b5PzK5439Sdg9eAwACCEyANMBwaFwTGIMMAOEQIBuGA6Mb/qMbABBAEAOQnIyMo1M74Tgiqf2/b3gVhgEAAQQmQuKa/8ekdYMxyLCgmEYMHJXc9t87FNMAgACCGgBxIkgzyDaQU5FxQGQN2AUBUXX/vULKwdgjsOQ/SC9AAKEEYlB03f+oFJABdSjYP6L6P0guIqkVjt0DisEGAAQQigEgG0AhHxBVi4L9wqvBBiEHtqs/xACAAAIbEBBd/x+Eg2ObwH4FORmGfYCaQRikCUS7B5YBNReBMUgvQABBDADaAtIIwsEx9f/Dk9pQsH9kHTh8XANKMAIRIIDAhF9ELTiQQH4FaQAZCAsskPNhyRpkK7oBAAEEMSC8GsVGkEaYIlBghcU3gbGzL6YBAAEEJnzCgP6EYs/gcjCGKQI5G4Z9QiswDAAIIAZKszNAgAEAHgFgGSNMTwgAAAAASUVORK5CYII=
EOFILE;
$pngWrench = <<< EOFILE
iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAA3NCSVQICAjb4U/gAAABO1BMVEXu7u7n5+fk5OTi4uLg4ODd3d3X19fV1dXU1NTS0tLPz8+7z+/MzMy6zu65ze65zu7Kysq3zO62zO3IyMjHx8e1yOiyyO2yyOzFxcXExMSyxue0xuexxefDw8OtxeuwxOXCwsLBwcGuxOWsw+q/v7+qweqqwuqrwuq+vr6nv+qmv+m7u7ukvumkvemivOi5ubm4uLicuOebuOeat+e0tLSYtuabtuaatuaXteaZteaatN6Xs+aVs+WTsuaTsuWRsOSrq6uLreKoqKinp6elpaWLqNijo6OFpt2CpNyAo92BotyAo9+dnZ18oNqbm5t4nt57nth7ntp4nt15ndp3nd6ZmZmYmJhym956mtJzm96WlpaVlZVwmNyTk5Nvl9lultuSkpKNjY2Li4uKioqIiIiHh4eGhoZQgtVKfNFdha6iAAAAaXRSTlMA//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////914ivwAAAACXBIWXMAAAsSAAALEgHS3X78AAAAH3RFWHRTb2Z0d2FyZQBNYWNyb21lZGlhIEZpcmV3b3JrcyA4tWjSeAAAAKFJREFUGJVjYIABASc/PwYkIODDxBCNLODEzGiQgCwQxsTlzJCYmAgXiGKVdHFxYEuB8dkTOIS1tRUVocaIWiWI8IiIKKikaoD50kYWrpwmKSkpsRC+lBk3t2NEMgtMu4wpr5aeuHcAjC9vzadjYyjn7w7lK9kK6tqZK4d4wBQECenZW6pHesEdFC9mbK0W7otwsqenqmpMILIn4tIzgpG4ADUpGMOpkOiuAAAAAElFTkSuQmCC
EOFILE;
$favicon = <<< EOFILE
iVBORw0KGgoAAAANSUhEUgAAAB8AAAAfCAYAAAAfrhY5AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJ
bWFnZVJlYWR5ccllPAAAA2RpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdp
bj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6
eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEz
NDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJo
dHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlw
dGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEu
MC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVz
b3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1N
Ok9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo1ODg0QkM3NUZBMDhFMDExODkyQ0U2NkE5ODVB
M0Q2OSIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDoxRkI1ODNGRTA5MDMxMUUwQjAwNEEwODc0
OTk5N0ZEOCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDoxRkI1ODNGRDA5MDMxMUUwQjAwNEEw
ODc0OTk5N0ZEOCIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1IFdpbmRvd3Mi
PiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo1ODg0QkM3NUZB
MDhFMDExODkyQ0U2NkE5ODVBM0Q2OSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo1ODg0QkM3
NUZBMDhFMDExODkyQ0U2NkE5ODVBM0Q2OSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRG
PiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PiUukzAAAAHHSURBVHja5FfRccIwDLVz
/W+7QdggbJBM0HQCwg+/LRNwTJDymx9ggmYDsgEZwRuUDVI5ET1XyE5CuIa76k7ABVtPluQnRVZV
JcYST4woD85/ZRbC5wxUf/sdbZagBehGVAvlNM+GXWYaaIugQ+QDdA1OnLqByyyAzwPo042iqyMx
BwdKN7jMNODREWKFyonv2KdPPqERoDlPGQMKQ7drPWPjfAy6Inb080/QiK/2Js8JMacBpzWwzGIs
QFdxhujkFMNtSkj3m1ftjTnxEg0f0XNXAYb1mmatwFPSFM1s4NTwuUp18QU9CiyonWj2rhkHWXAK
kNeh7gdMQ5wzRdnKcAo9DwZcsRBtqL70qm7Ior3B/5zbI0IKrvv8mxarhXSsXtrY8m5OfjB+F5SN
BkhKrpi8635uaxAvkO9HpgZSB/v57f2cFpEQzz+UeZ28Yvq+bMXpkb5rSgwLc+Z5Fylwb+y68x4p
MlNW2CLnPUmnrE/d7F1dOGXJ+Qb0neQqre9ptZiAscTI38ng7YTQ8g6Budlg75pktkxPV9idctss
1mGYOKciupsxatQB8pJkmkUTpgCvHZ0jDtg+t4/60vAf3tVGBf8WYAC3Rq8Ub3mHyQAAAABJRU5E
rkJggg==
EOFILE;

// Recherche des différents thèmes disponibles
$styleswitcher = '<select id="themes">'."\n";
$themes = glob('wampthemes/*', GLOB_ONLYDIR);
foreach ($themes as $theme) {
    if (file_exists($theme.'/style.css')) {
        $theme = str_replace('wampthemes/', '', $theme);
        $styleswitcher .= '<option id="'.$theme.'">'.$theme.'</option>'."\n";
    }
}
$styleswitcher .= '</select>'."\n";

//affichage du phpinfo
if (isset($_GET['phpinfo']))
{
	phpinfo();
	exit();
}

//affichage des images
if (isset($_GET['img']))
{
    switch ($_GET['img'])
    {
        case 'pngFolder' :
        header("Content-type: image/png");
        echo base64_decode($pngFolder);
        exit();

        case 'pngFolderGo' :
        header("Content-type: image/png");
        echo base64_decode($pngFolderGo);
        exit();

        case 'gifLogo' :
        header("Content-type: image/gif");
        echo base64_decode($gifLogo);
        exit();

        case 'pngPlugin' :
        header("Content-type: image/png");
        echo base64_decode($pngPlugin);
        exit();

        case 'pngWrench' :
        header("Content-type: image/png");
        echo base64_decode($pngWrench);
        exit();

        case 'favicon' :
        header("Content-type: image/x-icon");
        echo base64_decode($favicon);
        exit();
    }
}

// Language
$langue = $wampConf['language'];

if (isset($_GET['lang']))
  $langue = htmlspecialchars($_GET['lang'],ENT_QUOTES);

// Recherche des différentes langues disponibles
$langueswitcher = '<form method="get" style="display:inline-block;"><select name="lang" id="langues" onchange="this.form.submit();">'."\n";
$i_langues = glob('wamplangues/index_*.php');
$selected = false;
foreach ($i_langues as $i_langue) {
  $i_langue = str_replace(array('wamplangues/index_','.php'), '', $i_langue);
  $langueswitcher .= '<option value="'.$i_langue.'"';
  if(!$selected && $langue == $i_langue) {
  	$langueswitcher .= ' selected ';
  	$selected = true;
  }
  $langueswitcher .= '>'.$i_langue.'</option>'."\n";
}
$langueswitcher .= '</select></form>';

include('wamplangues/index_english.php');
if(file_exists('wamplangues/index_'.$langue.'.php')) {
	$langue_temp = $langues;
	include('wamplangues/index_'.$langue.'.php');
	$langues = array_merge($langue_temp, $langues);
}

//initialisation
$aliasContents = '';

// récupération des alias
if (is_dir($aliasDir))
{
    $handle=opendir($aliasDir);
    while (($file = readdir($handle))!==false)
    {
	    if (is_file($aliasDir.$file) && strstr($file, '.conf'))
	    {
		    $msg = '';
		    $aliasContents .= '<li><a href="'.str_replace('.conf','',$file).'/">'.str_replace('.conf','',$file).'</a></li>';
	    }
    }
    closedir($handle);
}
if (empty($aliasContents))
	$aliasContents = "<li>".$langues['txtNoAlias']."</li>\n";

//Récupération des ServerName de httpd-vhosts.conf
$addVhost = "<li><a href='add_vhost.php?lang=".$langue."'>".$langues['txtAddVhost']."</a></li>";
if($VirtualHostMenu == "on") {
	$vhostError = false;
	$vhostErrorCorrected = true;
	$error_message = array();
    $allToolsClass = "four-columns";
	$virtualHost = check_virtualhost();
	$vhostsContents = '';
	if($virtualHost['include_vhosts'] === false) {
		$vhostsContents = "<li><i style='color:red;'>Error Include Apache</i></li>";
		$vhostError = true;
		$error_message[] = sprintf($langues['txtNoIncVhost'],$wampConf['apacheVersion']);
	}
	else {
		if($virtualHost['vhosts_exist'] === false) {
			$vhostsContents = "<li><i style='color:red;'>No vhosts file</i></li>";
			$vhostError = true;
			$error_message[] = sprintf($langues['txtNoVhostFile'],$virtualHost['vhosts_file']);
		}
		else {
				if($virtualHost['nb_Server'] > 0) {
				$port_number = true;
				$nb_Server = $virtualHost['nb_Server'];
				$nb_Virtual = $virtualHost['nb_Virtual'];
				$nb_Document = $virtualHost['nb_Document'];
				$nb_Directory = $virtualHost['nb_Directory'];
				$nb_End_Directory = $virtualHost['nb_End_Directory'];

				foreach($virtualHost['ServerName'] as $key => $value) {
					if($virtualHost['ServerNameValid'][$value] === false) {
						$vhostError = true;
						$vhostErrorCorrected = false;
						$vhostsContents .= '<li>'.$value.' - <i style="color:red;">syntax error</i></li>';
						$error_message[] = sprintf($langues['txtServerName'],"<span style='color:black;'>".$value."</span>",$virtualHost['vhosts_file']);
					}
					elseif($virtualHost['ServerNameValid'][$value] === true) {
						if($virtualHost['ServerNameIp'][$value] !== false) {
							$vh_ip = $virtualHost['ServerNameIp'][$value];
							if($virtualHost['ServerNameIpValid'][$value] !== false) {
								$vhostsContents .= '<li><a href="http://'.$vh_ip.$UrlPort.'">'.$vh_ip.'</a> <i>('.$value.')</i></li>';
							}
							else {
								$vhostError = true;
								$vhostErrorCorrected = false;
								$vhostsContents .= '<li>'.$vh_ip.' for '.$value.' - <i style="color:red;">IP not valid</i></li>';
								$error_message[] = sprintf($langues['txtServerNameIp'],"<span style='color:black;'>".$vh_ip."</span>","<span style='color:black;'>".$value."</span>",$virtualHost['vhosts_file']);
							}
						}
						else
							$vhostsContents .= '<li><a href="http://'.$value.$UrlPort.'">'.$value.'</a></li>';
					}
					else {
						$vhostError = true;
						$error_message[] = sprintf($langues['txtVhostNotClean'],$virtualHost['vhosts_file']);
					}
				}
				//Check number of <Directory and </Directory equals to number of ServerName
				if($nb_Directory < $nb_Server || $nb_End_Directory != $nb_Directory) {
					$vhostError = true;
					$vhostErrorCorrected = false;
					$error_message[] = sprintf($langues['txtNbNotEqual'],"&lt;Directory or &lt;/Directory&gt;","ServerName",$virtualHost['vhosts_file']);
				}
				//Check number of DocumentRoot equals to number of ServerName
				if($nb_Document != $nb_Server) {
					$vhostError = true;
					$vhostErrorCorrected = false;
					$error_message[] = sprintf($langues['txtNbNotEqual'],"DocumentRoot","ServerName",$virtualHost['vhosts_file']);
				}
				//Check validity of DocumentRoot
				if($virtualHost['document'] === false) {
					foreach($virtualHost['documentPath'] as $value) {
						if($virtualHost['documentPathValid'][$value] === false) {
							$documentPathError = $value;
							$vhostError = true;
							$vhostErrorCorrected = false;
							$error_message[] = sprintf($langues['txtNoPath'],"<span style='color:black;'>".$value."</span>", "DocumentRoot", $virtualHost['vhosts_file']);
							break;
						}
					}
				}
				//Check validity of Directory Path
				if($virtualHost['directory'] === false) {
					foreach($virtualHost['directoryPath'] as $value) {
						if($virtualHost['directoryPathValid'][$value] === false) {
							$documentPathError = $value;
							$vhostError = true;
							$vhostErrorCorrected = false;
							$error_message[] = sprintf($langues['txtNoPath'],"<span style='color:black;'>".$value."</span>", "&lt;Directory ...", $virtualHost['vhosts_file']);
							break;
						}
					}
				}
				//Check number of <VirtualHost equals or > to number of ServerName
				if($nb_Server != $nb_Virtual && $wampConf['NotCheckDuplicate'] == 'off') {
					$port_number = false;
					$vhostError = true;
					$vhostErrorCorrected = false;
					$error_message[] = sprintf($langues['txtNbNotEqual'],"&lt;VirtualHost","ServerName",$virtualHost['vhosts_file']);
				}
				//Check number of port definition of <VirtualHost *:xx> equals to number of ServerName
				if($virtualHost['nb_Virtual_Port'] != $nb_Virtual && $wampConf['NotCheckDuplicate'] == 'off') {
					$port_number = false;
					$vhostError = true;
					$vhostErrorCorrected = false;
					$error_message[] = sprintf($langues['txtNbNotEqual'],"port definition of &lt;VirtualHost *:xx&gt;","ServerName",$virtualHost['vhosts_file']);
				}
				//Check validity of port number
				if($port_number && $virtualHost['port_number'] === false) {
					$port_number = false;
					$vhostError = true;
					$vhostErrorCorrected = false;
					$error_message[] = sprintf($langues['txtPortNumber'],"&lt;VirtualHost *:port&gt;",$virtualHost['vhosts_file']);
				}
				//Check if duplicate ServerName
				if($virtualHost['nb_duplicate'] > 0) {
					$DuplicateNames = '';
					foreach($virtualHost['duplicate'] as $NameValue)
						$DuplicateNames .= " ".$NameValue;
					$vhostError = true;
					$vhostErrorCorrected = false;
					$error_message[] = "Duplicate ServerName <span style='color:blue;'>".$DuplicateNames."</span> into ".$virtualHost['vhosts_file'];
				}
				//Check if duplicate Server IP
				if($virtualHost['nb_duplicateIp'] > 0) {
					$DuplicateNames = '';
					foreach($virtualHost['duplicateIp'] as $NameValue)
						$DuplicateNames .= " ".$NameValue;
					$vhostError = true;
					$vhostErrorCorrected = false;
					$error_message[] = "Duplicate IP <span style='color:blue;'>".$DuplicateNames."</span> into ".$virtualHost['vhosts_file'];
				}
			}
		}
	}
	if(empty($vhostsContents)) {
		$vhostsContents = "<li><i style='color:red:'>No VirtualHost</i></li>";
		$vhostError = true;
		$error_message[] = sprintf($langues['txtNoVhost'],$wampConf['apacheVersion']);
	}
	if(!$c_hostsFile_writable){
		$vhostError = true;
		$error_message[] = sprintf($langues['txtNotWritable'],$c_hostsFile);
	}
	if($vhostError) {
		$vhostsContents .= "<li><i style='color:red;'>Error(s)</i> See below</li>";
		$error_content .= "<p style='color:red;'>";
		foreach($error_message as $value) {
			$error_content .= $value."<br />";
		}
		$error_content .= "</p>\n";
		if($vhostErrorCorrected)
			$addVhost = "<li><a href='add_vhost.php?lang=".$langue."'>".$langues['txtAddVhost']."</a> <span style='font-size:0.72em;color:red;'>".$langues['txtCorrected']."</span></li>";
	}
}
else {
    $allToolsClass = "three-columns";
}

//Fin Récupération ServerName

// récupération des projets
$handle=opendir(".");
$projectContents = '';
while (($file = readdir($handle))!==false)
{
	if (is_dir($file) && !in_array($file,$projectsListIgnore))
	{
		$projectContents .= '<li><a href="';
		if($suppress_localhost)
			$projectContents .= 'http://'.$file.$UrlPort.'/"';
		else
			$projectContents .= 'http://localhost'.$UrlPort.'/'.$file.'/"';
		$projectContents .= '>'.$file.'</a></li>';
	}
}
closedir($handle);
if (empty($projectContents))
	$projectContents = "<li>".$langues['txtNoProjet']."</li>\n";
else {
	if(strpos($projectContents,"http://localhost/") !== false) {
		$projectContents .= "<li><i style='color:blue;'>Warning:</i> See below</li>";
		if(!isset($error_content))
			$error_content = '';
		$error_content .= "<p style='color:blue;'>".sprintf($langues['nolocalhost'],$wampConf['apacheVersion'])."</p>";
	}
}

//initialisation
$phpExtContents = '';

// récupération des extensions PHP
$loaded_extensions = get_loaded_extensions();
// classement alphabétique des extensions
setlocale(LC_ALL,"{$langues['locale']}");
sort($loaded_extensions,SORT_LOCALE_STRING);
foreach ($loaded_extensions as $extension)
	$phpExtContents .= "<li>${extension}</li>";

//vérifications diverses - Quel php.ini est chargé ?
$phpini = strtolower(trim(str_replace("\\","/",php_ini_loaded_file())));

$c_phpConfFileOri = strtolower($c_phpVersionDir.'/php'.$wampConf['phpVersion'].'/'.$phpConfFileForApache);
$c_phpCliConf = strtolower($c_phpVersionDir.'/php'.$wampConf['phpVersion'].'/'.$wampConf['phpConfFile']);

if($phpini != strtolower($c_phpConfFile) && $phpini != $c_phpConfFileOri) {
	$error_content .= "<p style='color:red;'>*** ERROR *** The PHP configuration loaded file is: ".$phpini." - should be: ".$c_phpConfFile." or ".$c_phpConfFileOri;
	$error_content .= "<br>You must perform: <span style='color:green;'>Right-click icon Wampmanager -> Refresh</span><br>";
	if($phpini == $c_phpCliConf || $phpini == $c_phpCliConfFile)
		$error_content .= " - This file is only for PHP in Command Line - Maybe you've added 'PHPIniDir' in the 'httpd.conf' file. Delete or comment this line.";
	$error_content .= "</p>";
}
if($filelist = php_ini_scanned_files()) {
	if (strlen($filelist) > 0) {
		$error_content .= "<p style='color:red;'>*** ERROR *** There are too much php.ini files</p>";
		$files = explode(',', $filelist);
		foreach ($files as $file) {
			$error_content .= "<p style='color:red;'>*** ERROR *** There are other php.ini files: ".trim(str_replace("\\","/",$file))."</p>";
		}
	}
}

$pageContents = <<< EOPAGE
<!DOCTYPE html>
<html>
<head>
	<title>{$langues['titreHtml']}</title>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
	<link id="stylecall" rel="stylesheet" href="wampthemes/classic/style.css" />
	<link rel="shortcut icon" href="index.php?img=favicon" type="image/ico" />
</head>

<body>
  <div id="head">
    <div class="innerhead">
	    <h1><abbr title="Windows">W</abbr><abbr title="Apache">A</abbr><abbr title="MySQL">M</abbr><abbr title="PHP">P</abbr></h1>
		   <ul>
		    <li>PHP 5</li>
			   <li>Apache 2.4</li>
			   <li>MySQL 5</li>
		   </ul>
     </div>
		<ul class="utility">
		  <li>Version ${c_wampVersion} - ${c_wampMode}</li>
      <li>${langueswitcher}${styleswitcher}</li>
	  </ul>
	</div>

	<div class="config">
	    <div class="innerconfig">

	        <h2> {$langues['titreConf']} </h2>

	        <dl class="content">
		        <dt>{$langues['versa']}</dt>
		            <dd>${apacheVersion}&nbsp;&nbsp;-&nbsp;<a href='http://{$langues[$doca_version]}'>Documentation</a></dd>
		        <dt>{$langues['versp']}</dt>
		            <dd>${phpVersion}&nbsp;&nbsp;-&nbsp;<a href='http://{$langues['docp']}'>Documentation</a></dd>
		        <dt>{$langues['server']}</dt>
		            <dd>${server_software}&nbsp;-&nbsp;{$langues['portUsed']}{$port}</dd>
		        <dt>{$langues['phpExt']}</dt>
		            <dd>
			            <ul>
			                ${phpExtContents}
			            </ul>
		            </dd>
		        <dt>{$langues['versm']}</dt>
		            <dd>${mysqlVersion}&nbsp;-&nbsp;{$langues['mysqlportUsed']}{$Mysqlport}&nbsp;-&nbsp; <a href='http://{$langues['docm']}'>Documentation</a></dd>
	        </dl>
        </div>
    </div>

    <div class="divider1">&nbsp;</div>

    <div class="alltools ${allToolsClass}">
	    <div class="inneralltools">
	        <div class="column">
	            <h2>{$langues['titrePage']}</h2>
	            <ul class="tools">
		            <li><a href="?phpinfo=1">phpinfo()</a></li>
		            <li><a href="phpmyadmin/">phpmyadmin</a></li>
		            {$addVhost}
	            </ul>
	        </div>
	        		<div class="column">
	            <h2>{$langues['txtProjet']}</h2>
	            <ul class="projects">
	                ${projectContents}
	            </ul>
	        </div>
	        	<div class="column">
	            <h2>{$langues['txtAlias']}</h2>
	            <ul class="aliases">
	                ${aliasContents}
	            </ul>
	        </div>
EOPAGE;
if($VirtualHostMenu == "on") {
$pageContents .= <<< EOPAGEA
	        <div class="column">
	            <h2>{$langues['txtVhost']}</h2>
	            <ul class="vhost">
	                ${vhostsContents}
	            </ul>
	        </div>
EOPAGEA;
}
if(!empty($error_content)) {
$pageContents .= <<< EOPAGEB
	<div id="error" style="clear:both;"></div>
	${error_content}
EOPAGEB;
}
$pageContents .= <<< EOPAGEC
        </div>
    </div>

	<div class="divider2">&nbsp;</div>

	<ul id="foot">
		<li><a href="{$langues['forumLink']}">{$langues['forum']}</a></li>
	</ul>

<script>
var select = document.getElementById("themes");
if (select.addEventListener) {
    /* Only for modern browser and IE > 9 */
    var stylecall = document.getElementById("stylecall");
    /* looking for stored style name */
    var wampStyle = localStorage.getItem("wampStyle");
    if (wampStyle !== null) {
        stylecall.setAttribute("href", "wampthemes/" + wampStyle + "/style.css");
        selectedOption = document.getElementById(wampStyle);
        selectedOption.setAttribute("selected", "selected");
    }
    else {
        localStorage.setItem("wampStyle","classic");
        selectedOption = document.getElementById("classic");
        selectedOption.setAttribute("selected", "selected");
    }
    /* Changing style when select change */

    select.addEventListener("change", function(){
        var styleName = this.value;
        stylecall.setAttribute("href", "wampthemes/" + styleName + "/style.css");
        localStorage.setItem("wampStyle", styleName);
    })
}
</script>
</body>
</html>
EOPAGEC;

echo $pageContents;

?>
>>>>>>> 9aadf11b444816eb94db757c01dbf37cc689a0ff
