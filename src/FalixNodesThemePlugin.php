<?php

namespace FalixNodes\Theme;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Colors\Color;

class FalixNodesThemePlugin implements Plugin
{
    public function getId(): string
    {
        return 'falixnodes-theme';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->font('Poppins')
            ->colors([
                'primary' => Color::hex('#2c7be5'),

                'gray' => [
                    50 => '#f9fafd',
                    100 => '#edf2f9',
                    200 => '#d8e2ef',
                    300 => '#b6c1d2',
                    400 => '#9da9bb',
                    500 => '#748194',
                    600 => '#5e6e82',
                    700 => '#4d5969',
                    800 => '#344050',
                    900 => '#232e3c',
                    950 => '#0b1727',
                ],

                'danger' => Color::hex('#e63757'),

                'warning' => Color::hex('#f5803e'),

                'success' => Color::hex('#00d27a'),

                'info' => Color::hex('#27bcfd'),
            ]);
    }

    public function boot(Panel $panel): void {}
}
