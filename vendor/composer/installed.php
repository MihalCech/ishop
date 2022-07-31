<?php return array(
    'root' => array(
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => NULL,
        'name' => '__root__',
        'dev' => true,
    ),
    'versions' => array(
        '__root__' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => NULL,
            'dev_requirement' => false,
        ),
        'dg/dibi' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'dibi/dibi' => array(
            'pretty_version' => 'v4.1.5',
            'version' => '4.1.5.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../dibi/dibi',
            'aliases' => array(),
            'reference' => '0d2f643795734aa9b6310d90324473da0dd2f9d2',
            'dev_requirement' => false,
        ),
    ),
);
