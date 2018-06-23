## Getting Started

### Install On your local PC

#### Download Sources

use git

```bash
git clone https://github.com/ulises58/API-ANDROID.git
```

Or download from [Here](https://github.com/ulises58/API-ANDROID/archive/master.zip)

1- In the root folder execute.
```
composer install
```
2-  Then execute.
```
php artisan migrate
```
This command will migrate all the tables that we have in our project LARAVEL has our database of our choice

3 - Already to finish we will install passport, which is the one that will help us generate tokens
```
php artisan passport:install
```
