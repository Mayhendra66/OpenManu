<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Auth extends BaseConfig
{
    /**
     * Default password setelah reset
     * WAJIB diganti setelah login
     */
    public string $defaultPassword = 'admin123';
}
