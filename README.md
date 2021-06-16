# Stephen's PHP Boiler Plate

A boilerplate similar to Symfony's architecture using Twig and VueJs for frontend and MySQL

## Installation

- Git clone this repo to the root of your site.
```bash
git clone https://github.com/itsYoungFox/stephens-php-boilerplate.git
```
- Change the parameters in the .htaccess file to match the configuration of your server.
```
2  | SetEnv HTTP_APP_ENV         "dev" or "prod" <accepts-either-dev-or-prod>
3  | SetEnv HTTP_SERVER_ROOT     "<server-root-path>"
   |
5  | DirectoryIndex /<put-your-production-dev-site-path-here>/index.php
   |
12 | RewriteBase /<put-your-production-dev-site-path-here>/
   |
19 | RewriteRule ^(.*)$ /<put-your-production-dev-site-path-here>/index.php [QSA]
```
- run `composer update` to install composer dependencies.
- That's all! simple stuff.



## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
