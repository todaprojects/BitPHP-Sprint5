# BitPHP-Sprint5

## Laravel CRUD application
  - used for quiz publishing and solving;
  - with user & admin interfaces.
  
#### v1.0

Registered users can view their recent quizzes (see results of solved quizzes and continue the unfinished quizzes). Administrator can add, update and delete questions to be used in quizzes. 

## Installation

1. Clone this repository to the **'`{app-directory}`'** on your host:

```
git clone https://github.com/todaprojects/BitPHP-Sprint5.git
```

And run this CLI command inside of **'`{app-directory}`'**:

```
composer install
```
###### * if composer is not installed globally, run command: "php composer.phar install"

2. After Laravel and other dependencies are installed, the following CLI commands:

```
php artisan ui vue --auth
```
```
npm install && npm run dev
```
3. Create a **new schema** in your database. Copy the **'`.env.example`'** files and rename it to the **'`.env `'**:
```
copy .env.example .env
```
Then write your database configuration data to the **'`.env`'** file:

```php
DB_CONNECTION=mysql
DB_HOST=127.0.0.1     // host IP
DB_PORT=3306          // port
DB_DATABASE={laravel} // database name
DB_USERNAME={root}    // username
DB_PASSWORD={root}    // password
```

4. Afterwards, run these CLI commands:
```
php artisan migrate
```
```
php artisan db:seed
```
```
php artisan key:generate
```
These few commands will create database tables and fill some demo data.

6. Open **`localhost/{app-directory}`** in web browser. The pre-installed login details of 2 users:

    6.1 for **`admin`** access:
    * ##### **admin** (_as username_)
    * ##### **admin** (_as password_)

    6.2 for **`user`** access:
    * ##### **user** (_as username_)
    * ##### **user** (_as password_)

![image](https://user-images.githubusercontent.com/70706753/100552106-b564ed00-328d-11eb-9086-a9867b67dc78.png)
