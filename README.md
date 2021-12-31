# LEVANTAR ENTORNO POR PRIMERA VEZ

- clonar proyecto
- crear archivo ~/enac_backend_laravel/.env a partir de env.example
- ir a la carpeta ~/docker
- ejecutar el comando: docker-compose up
- entrar al contenedor con el comando: docker exec -it app-enac //bin//bash
- en el contenedor, correr compose update con el comando: compose update
- // correr migrations en el contendor app-enac