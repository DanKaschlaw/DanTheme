<?php

namespace DanTheme\Providers;

use IO\Extensions\Functions\Partial;
use IO\Helper\CategoryKey;
use IO\Helper\CategoryMap;
use IO\Helper\TemplateContainer;
use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Templates\Twig;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\ConfigRepository;
use IO\Helper\ComponentContainer;


class DanThemeServiceProvider extends ServiceProvider
{
    const EVENT_LISTENER_PRIORITY = 99;
    /**
     * Register the service provider.
     */

    public function register() {
         
    }

    public function boot(Twig $twig, Dispatcher $eventDispatcher, ConfigRepository $config)
    {

        // provide template to use for homepage
        $eventDispatcher->listen('IO.tpl.home', function(TemplateContainer $container, $templateData) {
            $container->setTemplate("DanTheme::Homepage.Homepage");
            return false;
        });
    }
}