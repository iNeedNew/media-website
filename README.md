### DEPLOY PROJECT

What ports are used on the host system?
* 2000 - Nginx
  * if you want to change, change in docker compose, in service "web-server" directive ports. And rebuild services `docker-compose up --build --force-recreate`

* 8080 - PhpMyAdmin
  * If you want you can remove this service "adminer" from docker compose. And rebuild services `docker-compose up --build --force-recreate`

~~~
git clone https://github.com/iNeedNew/media-website.git
~~~

~~~
cd media-website
~~~
~~~
cp .env.example .env
~~~
Resolve Permission denied to storage folder
~~~
chmod 777 -R storage
~~~
~~~
docker-compose build
~~~

~~~
docker-compose up -d
~~~

~~~
docker exec -it app composer update
~~~

~~~
docker exec -it app php artisan key:generate
~~~

~~~
docker exec -it app php artisan migrate
~~~
If you need test data on a project
~~~
docker exec -it app php artisan db:seed 
~~~

### Site http://localhost:2000
### PhpMyAdmin http://localhost:8080

## DB Structure
![image](https://github.com/iNeedNew/media-website/assets/60880948/034663f9-f099-4cd5-a8e3-3fdb1495f47d)



