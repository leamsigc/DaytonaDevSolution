# WordPress Development  Whit Docker 

docker-compose.yml
```javascript
version: '3'
services:
   db:
     image: mariadb
     volumes:
       - db_data:/var/lib/mysql
     restart: always
     environment:
       MYSQL_ROOT_PASSWORD: ismael
       MYSQL_DATABASE: wordpress
       MYSQL_USER: leamsigc
       MYSQL_PASSWORD: leamsigc
   wordpress:
     depends_on:
       - db
     image: wordpress:latest
     ports:
       - "8080:80"
     restart: always
     volumes:
       - .:/var/www/html/ 
     environment:
       WORDPRESS_DB_HOST: db:3306
       WORDPRESS_DB_USER: leamsigc
       WORDPRESS_DB_PASSWORD: leamsigc
volumes:
  db_data:

![Daytona Dev Solutions][screenshot]

[screenshot]: ./screenshot.png