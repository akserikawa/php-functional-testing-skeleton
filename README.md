# PHP skeleton for functional testing

## Features:
- Symfony 5
- Doctrine ORM
- PHPUnit
- MySQL & SQLite for testing

## Steps:
- Run `cp .env .env.local` and set your DATABASE_URL.
- (Optional) Run `cp .env.test .env.test.local` and setup a connection for MySQL if SQLite is not enough.
- Run the following commands to setup your database:
```bash
php bin/console doctrine:database:create
php bin/console doctrine:schema:create
php bin/console doctrine:fixtures:load // purge database and load data
```
> Note: to setup the database for testing, run the above commands with the optional parameters: `--env=test`.

Once the fixtures are loaded in both databases, run 
```
php bin/phpunit --testdox
```


## Todo:
- Add example for Behat

