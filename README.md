# PHP desktop framework with Phinx / PHP 8.1

![Maintainer](https://img.shields.io/badge/maintainer-fadilxcoder-blue)

<img src="https://raw.githubusercontent.com/MikeCodesDotNET/ColoredBadges/master/svg/dev/languages/php.svg" alt="php" style="max-width: 100%;"> <img src="https://raw.githubusercontent.com/MikeCodesDotNET/ColoredBadges/master/svg/dev/frameworks/nodejs.svg" alt="nodejs" style="max-width: 100%;">

- Source https://github.com/cztomczak/phpdesktop.git
- https://windows.php.net/downloads/releases/ (PHP for windows)

```
    8/30/2022  6:40 PM     27585271 php-8.1.10-nts-Win32-vs16-x86.zip
```

- Keep `php/php.ini` and remove -> copy new php version files to `php`
- Using in-built PHP CLI : `./php/php.exe -v` in root **OR** `./php bin/console .....` in `www` folder
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

- Documentation : https://github.com/fadilxcoder/helifox.git (HFX4)
- Create datbase if not created in `<APP>\www\db` : `echo "" > database.db`
- Database migration schema : `vendor/bin/phinx migrate`
- Database seed : `vendor/bin/phinx seed:run`
- Database rollback : `vendor/bin/phinx rollback`
- Compiling assets
- - `npm run js-build` : compile JS
- - `npm run css-build` : compile CSS
- - `npm run js-build-watch` : compile JS in watch mode
