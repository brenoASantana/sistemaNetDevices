<?php
//Exclui linhas não ativadas em até 24h
function vinte_e_quatro () {

 $tempo_agora = time();

 $query = DBDrop('tabela', "ativo='0' AND (data_ts + 86400) <= '$tempo_agora' "); 

}
?>