# Notes

- https://windows.php.net/downloads/releases/ (PHP for windows)

```
    8/30/2022  6:40 PM     27585271 php-8.1.10-nts-Win32-vs16-x86.zip
```

- Keep `php/php.ini` and remove -> copy new php version files to `php`
- Using in-built PHP CLI : `./php/php.exe -v`
- Add to `composer.json`

```
....
    "config": {
        "platform-check": false,
        "platform": {
            "php": "8.1"
        },
.....
```