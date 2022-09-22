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