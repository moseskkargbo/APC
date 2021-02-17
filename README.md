# Laravel Admin Starter with AdminLTE

APC Starter Template

### Demo and user login info
[link](http://laraveladmin.juancadima.com/login)

user: demo@test.com<br>
password: demo2017

### How to install

https://github.com/yusufbrima/APC.git


(1) Install Composer
```
composer install
```


(2) Run Migrations
```
php artisan migrate
```

(3) Run DB seeder
```
php artisan db:seed
```

Seeder:
```
App\User::create([
    'name'     => 'Demo User',
    'email'    => 'demo@test.com',
    'password' => bcrypt('demo2017')
]);
```

OR

(4a) Import database
[Laravel Admin DB](https://github.com/yusufbrima/APC/blob/master/laraveladmin.sql)

Will create a user with the following credentials<br>
user: demo@test.com <br/>
pass: demo2017


### Requirements
* PHP >= 7.0.0
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension

**(If you are using Homestead you already met those requirements)**


### Todos && Features
* [X] Built with Laravel 5.5
* [X] Default Users table seeder
* [X] AdminLTE integrated
* [X] Main dashboard page
* [X] Users list in admin dashboard
* [ ] Basic user CRUD operations
