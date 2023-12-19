<?php

class ModuleFrontTwigHomeModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();
        $this->context->smarty->assign([
            'twigContent' => $this->get('modulefronttwig.template.twig')->render("home.html.twig", [
                'name' => 'John Doe'
            ])
        ]);
        $this->setTemplate('module:'.$this->module->name.'/views/templates/front/smarty/home.tpl');
    }
}