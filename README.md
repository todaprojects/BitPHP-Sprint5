# BitPHP-Sprint5

## Laravel CRUD application
  - used for quiz publishing and solving;
  - with user & admin interfaces.
  
#### v1.0

Registered users can view their recent quizzes (see results of solved quizzes and continue the unfinished quizzes). Administrator can add, update and delete questions to be used in quizzes. 

## Installation

1. Clone this repository to the **`{app-directory}`** on your host:

```
git clone https://github.com/todaprojects/BitPHP-Sprint5.git
```

And run this CLI command inside of the **`{app-directory}`**:

```
composer install
```
###### _* if `composer` is not installed globally, run command: "php composer.phar install"_

2. Create a **new schema** in your database. Copy the **`'.env.example'`** files and rename it to the **`'.env'`** file:
```
copy .env.example .env
```
Then fill your database configuration data to the **`'.env'`** file:

```php
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE={database_name}
DB_USERNAME={username}
DB_PASSWORD={password}
```

3. Finnally, run these remaining CLI commands:
```
php artisan migrate
```
```
php artisan db:seed
```
```
php artisan key:generate
```
The above commands will create database tables and fill some demo data.

4. Now open **`localhost/{app-directory}`** in your web browser to run the app. 
The pre-installed login details of 2 users:

    4.1 for **`admin`** access:
    * ##### **admin** (_as username_)
    * ##### **admin** (_as password_)

    4.2 for **`user`** access:
    * ##### **user** (_as username_)
    * ##### **user** (_as password_)

![image](https://user-images.githubusercontent.com/70706753/100552106-b564ed00-328d-11eb-9086-a9867b67dc78.png)
