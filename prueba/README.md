# Para el despliegue se debe ejecutar los siguientes comandos

Composer install

Se debe de configurar la cadena de conexión de la base de datos 
que en este caso es MySql

Luego de ello se debe ejecutar la migrasión para crear las tablas 

Php artisan migrate

Luego se debe poblar las tablas usando 

php artisan db:seed

y por último 

php artisan serve


Adjunto unas cosultas a nivel de base de datos que realice como prueba

---- Obtener usuario y departamentos 

SELECT u.name AS user_name, u.email, d.name AS department_name
FROM users u
LEFT JOIN departments d ON u.department_id = d.id;

---- Contar el número de usuarios por departamento

SELECT d.name AS department_name, COUNT(u.id) AS num_users
FROM departments d
LEFT JOIN users u ON d.id = u.department_id
GROUP BY d.id;


--- obtener el departamento con mas usuarios

SELECT d.name AS department_name, COUNT(u.id) AS num_users
FROM departments d
LEFT JOIN users u ON d.id = u.department_id
GROUP BY d.id