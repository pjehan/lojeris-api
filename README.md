# Lojeris API

## Installation

Install dependencies

```shell script
composer install
```

Create end edit .env.local file

```shell script
cp .env .env.local
vim .env.local
```

Generate the database and fixtures

```shell script
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
php bin/console doctrine:fixtures:load
```

Start the serveur

```shell script
symfony server:start
```

## Steps to re-create the projet

```shell script
symfony new lojeris-api
```

Install Doctrine ORM

```shell script
composer req orm
```

Create and edit .env.local file

```dotenv
DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=5.7
```

Install Maker Bundle

```shell script
composer req maker
```

Create entities

```shell script
composer req security
php bin/console make:user
php bin/console make:entity
php bin/console doctrine:database:create
php bin/console make:migration
php bin/console doctrine:migrations:migrate
```

Create fixtures

```shell script
composer req orm-fixtures
composer req symfony/string symfony/translation # Used for slugger
php bin/console make:fixtures
php bin/console doctrine:fixtures:load
```