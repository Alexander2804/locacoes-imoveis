<? php
    inclui  $ _SERVER [ 'DOCUMENT_ROOT' ]. '/locadora/app/db/conexao.php' ;

    $ loc_data_locacao      = $ _POST [ 'loc_data_locacao' ];
    $ loc_odometro_inicial = $ _POST [ 'loc_odometro_inicial' ];
    $ loc_imovel_codigo        = $ _POST [ 'loc_car_codigo' ];
    $ loc_cli_codigo        = $ _POST [ 'loc_cli_codigo' ];
    $ loc_fun_codigo        = $ _POST [ 'loc_fun_codigo' ];

    $ comando = $ conexao -> prepare ( "INSERT INTO TB_LOCACOES (LOC_DATA_LOCACAO, LOC_ODOMETRO_INICIAL, LOC_ODOMETRO_FINAL, LOC_IMOVEL_CODIGO, LOC_CLI_CODIGO, LOC_FUN_CODIGO) VALUES ('{$ loc_data_ligo} {$ loci_cigo} $ locigo}, $ locigo_cetro} {$ loci_data_locial} $ locigo}, $ locigo_cetro} $ locigo_cetro}, $ locação_odododom, $ 0 locigo} $ 0 locigo_odododom, 0ododododom, $ 0 locigo_odododom, odododom, 0odododom, $ 0ododododom, odododom, $ 0odododom, $ 1 / locigo_inic ododododom_INICIAL_INICIAL. }, {$ loc_fun_codigo}) " );
    $ comando -> execute ();

    cabeçalho ( 'Localização: /locadora?pagina=app/paginas/locacoes/listagem.php' ); 
