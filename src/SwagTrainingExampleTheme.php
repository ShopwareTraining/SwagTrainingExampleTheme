<?php declare(strict_types=1);

namespace SwagTraining\ExampleTheme;

use Shopware\Core\Framework\Plugin;
use Shopware\Storefront\Framework\ThemeInterface;

class SwagTrainingExampleTheme extends Plugin implements ThemeInterface
{
    public function getThemeConfigPath(): string
    {
        return 'theme.json';
    }
}
