<?php

return Symfony\CS\Config\Config::create()
    ->setUsingCache(true)
    ->finder(
        Symfony\CS\Finder\DefaultFinder::create()
            ->in(__DIR__.'/Tests')
            ->in(__DIR__.'/Controller')
            ->in(__DIR__.'/DependencyInjection')
    )
;
