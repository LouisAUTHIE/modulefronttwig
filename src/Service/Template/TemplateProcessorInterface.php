<?php

declare(strict_types=1);

namespace PrestaShop\Module\ModuleFrontTwig\Service\Template;

interface TemplateProcessorInterface
{
    public function render(string $templateFilePath, array $templateVars = []): string;
}
