<?php

namespace DanTheme\Containers;

use Plenty\Plugin\Templates\Twig;

class DanTheme
{
    public function call(Twig $twig):string
    {
        return $twig->render('DanTheme::DanTheme');
    }
}
