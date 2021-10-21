<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;

class Filters extends BaseConfig
{
    /**
     * Configures aliases for Filter classes to
     * make reading things nicer and simpler.
     *
     * @var array
     */
    public $aliases = [
        'csrf'     => CSRF::class,
        'toolbar'  => DebugToolbar::class,
        'honeypot' => Honeypot::class,
        'SesionAdmin' => \App\Filters\SesionAdmin::class
    ];

    /**
     * List of filter aliases that are always
     * applied before and after every request.
     *
     * @var array
     */
    public $globals = [
        'before' => [
            // 'honeypot',
            // 'csrf',
        ],
        'after' => [
            'toolbar',
            // 'honeypot',
        ],
    ];

    /**
     * List of filter aliases that works on a
     * particular HTTP method (GET, POST, etc.).
     *
     * Example:
     * 'post' => ['csrf', 'throttle']
     *
     * @var array
     */
    public $methods = [];

    /**
     * List of filter aliases that should run on any
     * before or after URI patterns.
     *
     * Example:
     * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
     *
     * @var array
     */
    public $filters = [
        "SesionAdmin"=>[
            "before"=>[
                "/admin",
                "/admin/configuraciones",
                "/admin/helados",
                "/admin/helados/insertar",
                "/admin/categorias",
                "/admin/categorias/insertar",
                "/admin/categorias/actualizar",
                "/admin/roles",
                "/admin/roles/insertar",
                "/admin/roles/actualizar",
                "/admin/usuarios'",
                "/admin/usuarios/insertar",
                "/admin/usuarios/actualizar",
                "/admin/ventas",
                "/admin/perfil",
                "/admin/caja",
                "/admin/caja/insertar",
                "/admin/caja/actualizar",
                "/admin/caja/vaciar",
                "/admin/caja/vender",
                "/admin",
                "/admin",
            ]
        ]
    ];
}
