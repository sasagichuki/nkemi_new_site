<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/chaos/projects/nkemi_new_site/user/config/site.yaml',
    'modified' => 1468252480,
    'data' => [
        'title' => 'Nkemi Consulting',
        'author' => [
            'name' => 'Caroline Mbui',
            'email' => 'me@chaos.co.ke'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Nkemi is a Brand Consulting Agency',
            'Other' => 'Values'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
