<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

if (!defined('_PS_VERSION_')) {
    exit;
}

class ModuleFrontTwig extends Module
{
    public Environment $twig;

    public function __construct()
    {
        $this->name = 'modulefronttwig';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'VotreNom';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Module Front Twig');
        $this->description = $this->l('Description du module Front twig.');

        $this->confirmUninstall = $this->l('Êtes-vous sûr de vouloir désinstaller ?');

        $loader = new FilesystemLoader(_PS_MODULE_DIR_. $this->name.'/views/templates/front');
        $this->twig = new Environment($loader);
    }
}