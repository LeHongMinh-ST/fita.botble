## Requirements

- PHP >= 7.4
- OpenSSL PHP Extension.
- PDO PHP Extension.
- Mbstring PHP Extension.
- Tokenizer PHP Extension.
- XML PHP Extension.
- Ctype PHP Extension.
- JSON PHP Extension.
- BCMath PHP Extension.
- Laravel Mix.

## Usage

1. Clone project.
2. Create .env file, copy content from .env.example to .env file and config your database in .env:
``` bash
Change APP_URL in .env to APP_URL= (your Domain)

DB_CONNECTION=mysql
DB_HOST=database_server_ip
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=username
DB_PASSWORD=password
```
And config email:
``` bash
MAIL_DRIVER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your_email_address
MAIL_PASSWORD=your_email_password
MAIL_ENCRYPTION=tls
```
3. Run
``` bash
-Run: composer install
- Using sample data:
	Option 1: Import database from database.sql.
	Option 2: Run php artisan migrate --seed
- Don't use sample data:
	Run: php artisan cms:user:create (create admin user).
	Run: php artisan cms:theme:activate fita
- If you're pulled source code from GIT server:
	Run: php artisan vendor:publish --tag=cms-public --force
	Run: php artisan cms:publish:assets
-Run: php artisan route:clear
-Run: php artisan config:clear
```
4. Local development server
- Run
``` bash
$ php artisan serve
```
- In your browser, go to [http://127.0.0.1:8000/admin/login](http://127.0.0.1:8000/admin/login) to run your project.
- If you're using sample data, the default admin account is botble - 159357.

## Dev additional
Move to root of project and run below command line:
``` bash
composer require --dev squizlabs/php_codesniffer
cp pre-commit .git/hooks/pre-commit
chmod +x .git/hooks/pre-commit
```

