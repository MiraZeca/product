SRB:
Za pokretanje ove aplikacije potrebno da upalite XAMPP, pokrenete start na Apache i MySQL, i da izvršite sledeće komande u terminalu:

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
7. php artisan migrate
8. php artisan db:seed
9. php artisan storage:link
10. php artisan serve

####################################################################################

ENG:
To run this application, you need to enable XAMPP, start Apache and MySQL, and execute the following commands in the terminal:

1. cd C:\Users\PC\Desktop\laravel_product-master
2. composer install
3. cp .env.example .env
4. php artisan key:generate
5. In the .env file, make sure you set DB_CONNECTION=mysql
6. Then, uncomment and set the following values in the .env file:
    DB_HOST=127.0.0.1  
    DB_PORT=3306  
    DB_DATABASE=product  
    DB_USERNAME=root  
    DB_PASSWORD=  
7. php artisan migrate
8. php artisan db:seed
9. php artisan storage:link
10. php artisan serve

