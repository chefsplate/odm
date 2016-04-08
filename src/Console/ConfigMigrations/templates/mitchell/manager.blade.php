[
    'dev'  => env('APP_DEBUG'),
    'meta' => '{{{ $isFork ? $data['metadata']['driver'] : 'env(\'DOCTRINE_METADATA\', \'annotations\')' }}}',
    'connection' => {{{ $isFork ? '\''.$data['connection'].'\'' : 'config(\'database.default\')'  }}},
    'paths' => {{ var_export(\LaravelDoctrine\ODM\Utilities\ArrayUtil::get($data['metadata']['paths'], $data['metadata']), true) }},
    'repository' => {{{ \LaravelDoctrine\ODM\Utilities\ArrayUtil::get($data['repository'], '\LaravelDoctrine\ODM\EntityRepository') }}}::class,
    'proxies' => [
        'namespace' => {{{ isset($data['proxy']['namespace']) ? '\'' . $data['proxy']['namespace'] .'\'' : 'false' }}},
        'path'          => '{{{ \LaravelDoctrine\ODM\Utilities\ArrayUtil::get($data['proxy']['directory'], 'storage_path(\'proxies\')') }}}',
        'auto_generate' => '{{{ \LaravelDoctrine\ODM\Utilities\ArrayUtil::get($data['proxy']['auto_generate'], 'env(\'DOCTRINE_PROXY_AUTOGENERATE\', \'false\')') }}}'
    ],
    'events'     => [
        'listeners'   => [],
        'subscribers' => []
    ],
    'filters' => []
]
