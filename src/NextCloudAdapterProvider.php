<?php
namespace Roland\NextCloudAdapter;

use Illuminate\Filesystem\FilesystemAdapter;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;
use League\Flysystem\Filesystem;
use League\Flysystem\WebDAV\WebDAVAdapter;
use Sabre\DAV\Client;

class NextCloudAdapterProvider extends ServiceProvider
{
    public function boot()
    {
        Storage::extend('nextCloud', function ($app, $config) {

            $pathPrefix = array_key_exists('pathPrefix', $config) ? $config['pathPrefix'] : null;
            $client = new Client([
                'baseUri' => $config['baseUri'],
                'userName' => $config['userName'],
                'password' => $config['password']
            ]);
            $adapter = new WebDAVAdapter($client, $pathPrefix);

            return new FilesystemAdapter(
                new Filesystem($adapter, $config),
                $adapter,
                $config
            );
        });
    }

    public function register()
    {

    }
}
