## Requisitos previos
- Debe terner instaldo en su equipo nodejs
- Debe tener instalado en su equipo docker
## Descarga e instalción
- Abrir una ventana de consola del sistema y ejecutar: 
```
 git clone git@github.com:mauricioloayzas/commonpeople.git.
```
- Navegar en la consola hasta la caperta del proyecto: 
```
 cd commponpeople
```
- ejecutar:
```
 docker-compose build
 docker-compose up -d
```
- Abrir otra pestaña de consola y ejecutar el siguiente comando para poder ingresar al contendor:
```
 docker exec -it app-commonpeople bash
```
- Una vez adentro del contenedor ejecutar:
```
 cp .env.example .env
 php composer install
 php artisan ui bootstrap
 php artisan ui bootstrap --auth
 php artisan migrate
 php artisan db:seed --class=ProjectsSeeder
 php artisan db:seed --class=ImagesSeeder
```
- Retornamos hacia la primera pestaña de consola y ejecutamos
```
 npm install
 npm run build
```
- para probar la aplicacion ingresar a estew [link](http://localhost/home).
