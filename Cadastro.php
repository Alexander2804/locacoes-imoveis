<? php
    inclui  $ _SERVER [ 'DOCUMENT_ROOT' ]. '/locadora/app/db/conexao.php' ;

    $ queryImovel        = $ conexao -> query ( "SELECT IMOVEL_CODIGO, IMOVEL_MODELO FROM TB_IMOVEL WHERE IMOVEL_DISPONIVEL = 's'" );
    $ queryClientes       = $ conexao -> query ( "SELECT CLI_CODIGO, CLI_NOME FROM TB_CLIENTES" );
   
?>

< form  action = " /locadora/app/funcoes/locacoes/cadastrar.php " method = " post " >
    < div  class = " imovel " >
        < div  class = " imovel-header " >
            Cadastrar locação
        </ div >
        < div  class = " imovel-body " >
            < div  class = " row " >
                < div  class = " col " >
                    < label  for = " loc_data_locacao " > Dados da locação </ label >
                    < input  type = " date " value = "" class = " form-control " name = " loc_data_locacao " imovelfocus > 
                </ div >
                < div  class = " col " >
                    < label  for = " loc_odometro_inicial " > Odômetro inicial </ label >
                    < input  type = " number " value = "" class = " form-control " name = " loc_odometro_inicial " imovelfocus > 
                </ div >
            </ div >
            < div  class = " row " >
                < div  class = " col " >
                    < label  for = " loc_imovel_codigo " > Imovel </ label >
                    < select  name = " loc_imovel_codigo " class = " form-control " >
                    <? php  while ( $ imovel = $ queryImovel -> fetch ( PDO :: FETCH_ASSOC )) { ?>
                        < option  value = " <? php  echo  $ imovel [ 'Imovel_CODIGO' ]; ?> " >
                            <? php  echo  $ imovel [ 'IMOVEL_MODELO' ]; ?>
                        </ opção >
                    <? php } ?>
                    </ select >
                </ div >
            </ div >
            < div  class = " row " >
                < div  class = " col " >
                    < label  for = " loc_cli_codigo " > Cliente </ label >
                    < select  name = " loc_cli_codigo " class = " form-control " >
                    <? php  while ( $ cliente = $ queryClientes -> fetch ( PDO :: FETCH_ASSOC )) { ?>
                        < option  value = " <? php  echo  $ cliente [ 'CLI_CODIGO' ]; ?> " >
                            <? php  echo  $ cliente [ 'CLI_NOME' ]; ?>
                        </ opção >
                    <? php } ?>
                    </ select >
                </ div >
            </ div >
            < div  class = " row " >
                < div  class = " col " >
                   
