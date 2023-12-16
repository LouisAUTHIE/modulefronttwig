<?php

class ModuleFrontTwigHomeModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();
        $this->context->smarty->assign([
            'twigContent' => $this->module->twig->render("home.html.twig", [
                'name' => 'John Doe'
            ])
        ]);
        $this->setTemplate('module:'.$this->module->name.'/views/templates/front/home.tpl');
    }

    public function display()
    {
        parent::display();
    }
}