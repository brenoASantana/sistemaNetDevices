<!DOCTYPE html>
<html lang="pt">
   <head>
      <DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <title>Botão WhatsApp - Canal TI</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
   <style>
      .whatsapp-link {
         position: fixed;
         width: 60px;
         height: 60px;
         bottom: 40px;
         right: 40px;
         background-color: #25d366;
         color: #fff;
         border-radius: 50px;
         text-align: center;
         font-size: 30px;
         box-shadow: 1px 1px 2px #888;
         z-index: 1000;
      }
 
      .fa-whatsapp {
         margin-top: 16px;
      }
   </style>
</head>
<body>
   <a class="whatsapp-link" href="https://web.whatsapp.com/send?phone=5599111112222" target="_blank">
      <i class="fa fa-whatsapp"></i>
   </a>
</body>
</html>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Net Devices</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <div class="wrapper">
      <!-- end loader -->
      <div class="sidebar">
         <!-- Sidebar  -->
         <nav id="sidebar">
            <div id="dismiss">
               <i class="fa fa-arrow-left"></i>
            </div>
            <ul class="list-unstyled components">
               <li class="active"> <a href="pagina2.php">Home</a> </li>
               <li><a href="FORM.html">Serviço De Campo </a> </li>
               <li><a href="acesso remoto.php">Acesso Remoto</a> </li>
               <li><a href="#contact">Chat Online </a> </li>
               
               <?php 

session_start();
$token = md5(session_id());
if(isset($_GET['token']) && $_GET['token'] === $token) {
   // limpe tudo que for necessário na saída.
   // Eu geralmente não destruo a seção, mas invalido os dados da mesma
   // para evitar algum "necromancer" recuperar dados. Mas simplifiquemos:
   session_destroy();
   header("location: http://exemplo.com.br/index.php%22");
   exit();
} else {
   echo '<a href="doLogout.php?token='.$token.'>Confirmar logout</a>';
}

 echo '<a href="doLogout.php?token='.md5(session_id()).'">Sair</a>';
 // sim, MD5 é seguro suficiente nesse contexto (e é apenas exemplo).
  if(isset($_SESSION['logado'])){
    session_destroy();
    header("Location:index.php");
}

if(isset($_SESSION['logado'])){
    // se você possui algum cookie relacionado com o login deve ser removido
    session_destroy();
    header("location: http://www.dominio.com.br/index.php%22");
    exit();
}




?>
            </ul>
         </nav>
      </div>
      <div id="content">
         <!-- header -->
         <header>
            <!-- header inner -->
            <div class="header">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                           <div class="center-desk">
                              <div class="logo">
                                 <a href="pagina2.php"><img src="images/logo.png" alt="#" /></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <ul class="btn">
                           <li><a href="cadastroelogin.html">Login</a></li>
                           <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                           <li><button type="button" id="sidebarCollapse">
                              <img src="images/menu_icon.png" alt="#" />
                              </button>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </header>
         <!-- end header inner -->
         <!-- end header -->
         <!-- banner -->
         <div id="myCarousel" class="carousel slide banner_main" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container-fluid">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                              <div class="text-bg">
                                 <h1>Atendimento Rápido,<br> Prático <br>e Eficiente.</h1>
                                 <p>Equipes de desenvolvimento, operações de TI e negócios para colaboração em alta velocidade. Reaja a mudanças e tenha as melhores experiências de atendimento ao cliente, com funcionários com excelência e rapidez.</p>
                              </div>
                           </div>
                           <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                              <div class="images_box">
                                 <figure><img src="images/img2.png"></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
         <!-- end banner -->
               </div>
            </div>
         </div>
         <!-- end about -->
         <!-- choose  section -->
         
         <!-- end choose  section -->
         <!-- work -->
         <div id="work"  class="work">
            <div class="container-fluid">
               <div class="row d_flex">
                  <div class="col-md-7">
                     <div class="titlepage">
                        <h2>Gestão de Serviços <span class="blu">em Alta Velocidade</span></h2>
                        <p>oferecendo suporte aos processos para que a gente trabalhe junto na mesma ferramenta, do mesmo jeito... agora a gente tem uma fonte única de informações de onde pode extrair dados e que pode usar de base para relatórios. Assim a gente tem uma visão geral mais ampla e um entendimento comum em toda a empresa". </p>
                     </div>
                  </div>
                  <div class="col-md-5">
                     <div class="work_img">
                        <figure><img src="images/work_img.jpg" alt="#"/></figure>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end work -->
         <!--  footer -->
         <footer>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="copyright">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                           <p>Copyright 2022 All Right Reserved By <a href="https://html.design/"> Giovanna e Lucas</a></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!-- end footer -->
      </div>
      <div class="overlay"></div>
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script type="text/javascript">
         $(document).ready(function() {
             $("#sidebar").mCustomScrollbar({
                 theme: "minimal"
             });
         
             $('#dismiss, .overlay').on('click', function() {
                 $('#sidebar').removeClass('active');
                 $('.overlay').removeClass('active');
             });
         
             $('#sidebarCollapse').on('click', function() {
                 $('#sidebar').addClass('active');
                 $('.overlay').addClass('active');
                 $('.collapse.in').toggleClass('in');
                 $('a[aria-expanded=true]').attr('aria-expanded', 'false');
             });
         });
      </script>
      <script>
         $(document).ready(function() {
             $(".fancybox").fancybox({
                 openEffect: "none",
                 closeEffect: "none"
             });
         
             $(".zoom").hover(function() {
         
                 $(this).addClass('transition');
             }, function() {
         
                 $(this).removeClass('transition');
             });
         });
      </script>
    
   </body>
</html>

