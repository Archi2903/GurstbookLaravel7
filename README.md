<h1>Установка проекта</h1>

Требования к проекту: PHP 7.2.5, Web сервер Nginx 1.17, MySQL 8

- `composer install`
- `git clone https://github.com/Archi2903/GurstbookLaravel7.git`
- `cp .env.example .env`
- `php artisan key:generate`
- Прописать `DB_DATABASE` в файле `.env`
- `php artisan migrate:fresh `
- `php artisan serve`
- Перейти по `URL` из консоли
 ![image](https://user-images.githubusercontent.com/77768569/122797612-52d64b80-d2c8-11eb-997b-b208ac661b73.png)
