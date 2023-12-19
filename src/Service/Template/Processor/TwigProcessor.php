<?php

declare(strict_types=1);

namespace PrestaShop\Module\ModuleFrontTwig\Service\Template\Processor;

use PrestaShop\Module\ModuleFrontTwig\Service\Template\TemplateProcessorInterface;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

final class TwigProcessor implements TemplateProcessorInterface
{
    private $twig;
    public function __construct()
    {
        $this->twig = new Environment(new FilesystemLoader(_PS_MODULE_DIR_.'modulefronttwig/views/templates/front/twig'));
    }

    public function render(string $templateFilePath, array $templateVars = []): string
    {
        return $this->twig->render($templateFilePath, $templateVars);
    }
}
