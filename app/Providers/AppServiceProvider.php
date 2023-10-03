<?php

namespace App\Providers;

use Illuminate\Filesystem\FilesystemAdapter;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;
use ImageKit\ImageKit;
use League\Flysystem\Filesystem;
use TaffoVelikoff\ImageKitAdapter\ImageKitAdapter;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Storage::extend('imagekit', function ($app, $config) {
            $adapter = new ImagekitAdapter(
    
                new ImageKit(
                    $config['public_key'],
                    $config['private_key'],
                    $config['endpoint_url']
                ),
    
                $options = [ // Optional
                    'purge_cache_update'    => [
                        'enabled'       => true,
                        'endpoint_url'  => 'your_endpoint_url'
                     ]
                ] 
    
            );
    
            return new FilesystemAdapter(
                new Filesystem($adapter, $config),
                $adapter,
                $config
            );
        });
    }
}
