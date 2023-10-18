# laravel-nextcloud 

Credits on the idea go to : https://github.com/protonemedia/laravel-webdav#laravel-webdav

## Install

Via Composer

```bash
$ composer require rolandalla/laravel-nextcloud
```



Create a NextCloud filesystem disk:

```php
// config/filesystems.php

'disks' => [
	...
	'nextCloud' => [
            'driver' => 'nextCloud',
            'baseUri' =>  env('NEXT_CLOUD_URL','https://your-web-dat-domain.com'), //replace by yours baseUri
            'userName' => env('NEXT_CLOUD_USERNAME','web-dav-username'),
            'password' => env('NEXT_CLOUD_PASSWORD','web-dav-password'),
            'pathPrefix' => env('NEXT_CLOUD_PATH_PREFIX',false), // Default value is null
    ],
	...
];
```

## Security

If you discover any security related issues, please email jakub.jedlikowski@gmail.com instead of using the issue tracker.

## Credits

- [Roland Alla][link-author]
- [Porto Media][link-original-author]

## License

The MIT License (MIT).

[link-author]: https://github.com/rolandalla
[link-original-author]:  https://github.com/protonemedia/laravel-webdav#laravel-webdav
