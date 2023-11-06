### Intro
Create a docker container for PHP demos ONLY

### Installation
`docker-compose up --build -d`

### DB

`http://localhost:3000/adminer.php`

```
docker-compose exec db /bin/sh
mysql -u root -p secret
```

### PHP
```
docker-compose exec php composer install
```

cakephp
```
composer create-project --prefer-dist cakephp/cakephp=2.x 
require cakephp/debug_kit "^2.2.0"
chown -R www-data app/tmp
chmod -R 755 app/tmp
database.php
Config/core.php
app/Config/bootstrap.php CakePlugin::loadAll();
```