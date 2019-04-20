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

```
![Daytona Dev Solutions](https://raw.githubusercontent.com/leamsigc/DaytonaDevSolution/master/screenshot.png "Daytona Dev Solutions logo")   

**How to add extra Class to the wordpres body**


---

``` php 

  <body 
    <?php 
      body_class( 'Custom-ClassName' ); 
    ?>
  >
```
**Dynamic Wordpress Navigation Menu**
.- Register new menu from the function.php file
```php
    function DDS_features(){
    //add title tag dynamically
    add_theme_support('title-tag');
    //Register nav menu 
    register_nav_menu($location, $description)
  }

  //register the new menu after_setup_theme and function name 
  add_action('after_setup_theme', 'DDS_features');
```

1. Create new menu from the WordPress dashboard & check where do you want the menu to be displayed.

2. Call the wp_nav_menu($location)  function where you want the menu to be displayed

```php

  //$location Is the same as the location from the register_nav_menu function
  wp_nav_menu($location) //this function Receive a Associated array for argument 

  wp_nav_menu(array(
						'theme_location' => '$location'
					));
```

_. **Add style to the current menu item that is active** 

```css
  /* Active current class */
.current_page_item {
  /* styles that you want fot the active item in the menu  */
}
```
**Add custom menus active classes to nav items id not use the dynamic wp_nav_menu**
> add if statement to element that we need the extra class
```javascript
  <li <?php if(is_page(pageSlogHere)) echo  'class="current-menu-item"'?>  >
    <a href='<?php echo  site_url(PageToGo)?>'>Page to go </a> 
  </li>
  //and  ChildPage
  // 0 mean the current page 
  //find the parent page id 
  <li <?php if(is_page(pageSlogHere) or wp_get_post_parent_id(0) == ParentPageId) echo  'class="current-menu-item"'?>  >
    <a href='<?php echo  site_url(PageToGo)?>'>Page to go </a> 
  </li>

```