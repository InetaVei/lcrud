# Sprint5
### Content management system application with LARAVEL

CRUD (create/read/update/delete) application.
This app is built with Laravel framework. 

## Project features
- Admin is able to login and logout;
- After login, admin can navigate through pages;
- Admin can manage projects table: add/delete/update project data;
- Admin can manage employees table: add/delete/update employee data and assign project to the employee;

## Installation & Configuration
1. Clone this git repository;
2. Run **composer install**;
3. Use AMPPS or other open-source platform;
4. Create new schema 'lcrud' in your database; 
5. Rename **.env example** file to **.env** and configure Database:<br>
DB_CONNECTION=mysql<br>
DB_HOST=127.0.0.1<br>
DB_PORT=3306<br> 
DB_DATABASE=lcrud<br> 
DB_USERNAME=root<br>
DB_PASSWORD=mysql<br>
5. Run **php artisan migrate** to create tables.
6. To open project, run **php artisan serve** and follow the link.
7. To login add e-mail: **aaa@aaa.com** password: **amin123**.

## How does it looks like

<img width="829" alt="1" src="https://user-images.githubusercontent.com/74532995/115245657-d8554800-a12d-11eb-8442-0eab7f7b4ae2.png">
<br>
<img width="845" alt="2" src="https://user-images.githubusercontent.com/74532995/115245686-e2774680-a12d-11eb-89d3-c2693b7ffd64.png">
<br>
<img width="850" alt="3" src="https://user-images.githubusercontent.com/74532995/115245691-e2774680-a12d-11eb-97a3-c642a1cfc5f6.png">
<br>
<img width="846" alt="4" src="https://user-images.githubusercontent.com/74532995/115245694-e30fdd00-a12d-11eb-9c57-5776505fe219.png">
<br>
<img width="850" alt="5" src="https://user-images.githubusercontent.com/74532995/115245696-e3a87380-a12d-11eb-9a39-ea659e9eb7bf.png">
<br>
<img width="849" alt="6" src="https://user-images.githubusercontent.com/74532995/115245697-e3a87380-a12d-11eb-82a7-90c56e9704b2.png">

## Authors
[Ineta](https://github.com/InetaVei)
