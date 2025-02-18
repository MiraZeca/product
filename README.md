Za pokretanje ove aplikacije potrebno je da izvršite sledeće komande u terminalu:

1. cd C:\Users\PC\Desktop\laravel_product-master
2. composer install
3. cp .env.example .env
4. php artisan key:generate
5. u .env fajlu stavite da vam stoji DB_CONNECTION=mysql
6. zatim u .env fajlu odtagujte sledece stavke:
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=product
    DB_USERNAME=root
    DB_PASSWORD=
8. php artisan migrate
9. php artisan db:seed
10. php artisan storage:link
11. php artisan serve
12. I naravno, potrebno je da imate instaliran XAMPP da bi se pokrenule migracije. Ako XAMPP nije instaliran, uradite to kao prvo, a zatim sve ove korake redom.
