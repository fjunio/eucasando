<?php
/**
 * Configuration file generated by ZFTool
 * The previous configuration file is stored in application.config.old
 *
 * @see https://github.com/zendframework/ZFTool
 */
return array(
    'modules' => array(
        'Application',
        'DoctrineModule',
        'DoctrineORMModule',
//        'ZfcBase',
//        'ZfcUser',
//        'ZfcRbac',
//        'ZfcUserDoctrineORM',
//        'AssetManager',
        'LosBase',
//        'LosUi',
//        'LosLog',
        'Dashboard',
        'Pagamento',
        'ListaVirtual',
    ),
    'module_listener_options' => array(
        'module_paths' => array(
            './module',
            './vendor',
        ),
        'config_glob_paths' => array(
            'config/autoload/{{,*.}global,{,*.}local}.php',
        ),
    ),
);
