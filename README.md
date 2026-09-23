# ta23ablog
Generated Laravel readme: [Laravel.md](Laravel.md) <br>
<br>
Start services in docker
```Bash
docker compose up -d
```
Install packages
```Bash
composer install
npm install
```
Generate key
```Bash
php artisan key:generate
```
Seed the database and link public storage
```Bash
php artisan migrate --seed
php artisan storage:link
```
Start project
```bash
composer run dev
```