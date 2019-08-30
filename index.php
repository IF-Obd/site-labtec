OCTYPE html>
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
                background: url("images/labtec_mo.png") center center/100% no-repeat;
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
                            <img src="images/horario.png" alt="Image" class="img-responsive">
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
                                <p align="justify" >&ldquo;Site muito bem recomendado, encontra-se todos os dados que precisamos para conhecer vários projetos tecnológicos do IFPA&rdquo;.</p>
                            </blockquote>
                            <div class="author to-animate">
                                <figure><img src="images/Debora.png" alt="Debora Andrade"></figure>
                                <p>
                                    Debora Andrade  <span class="subtext">Ex-Aluna<br>LabTec</span>
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
                                    Narciso Gomes <span class="subtext">Ex-Aluno<br>LabTec</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="box-testimony">
                            <blockquote class="to-animate-2">
                                <p align="justify" >&ldquo;O site é de grande ajuda para os discentes, pois, aqui eles podem obter informações sobre os projetos que já foram desenvolvidos e os que ainda estão em desenvolvimento&rdquo;.</p>
                            </blockquote>
                            <div class="author to-animate img">
                                <figure><img src="images/perfilpadrao.jpg" alt="Narciso Gomes"></figure>
                                <p>
                                    Dérick Santos <span class="subtext">Estagiário<br>LabTec</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="box-testimony">
                            <blockquote class="to-animate-2">
                                <p align="justify" >&ldquo;Site interessantissísmo e de suma importância para os discentes e docentes do Campus&rdquo;.</p>
                            </blockquote>
                            <div class="author to-animate img">
                                <figure><img src="images/perfilpadrao.jpg" alt="Narciso Gomes"></figure>
                                <p>
                                    Letícia Carvalho <span class="subtext">Estagiária<br>LabTec</span>
                                </p>
                            </div>
                        </div>
                    </div>

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