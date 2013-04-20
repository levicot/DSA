
Podcats es una aplicación desarrollada con symfony 1.4, destinada al bradcast de archivos de audio.

Pasos para la instalación:
1- Copiar el codigo al directorio /var/www/grupo83/public_html/alumno/entrega3
2- Modificar el archivo site-available/default de apache y setear "DocumentRoot /var/www/grupo83/public_html" y "Directory /var/www/grupo83/public_html"
3- Reiniciar apache
4- Modifiar el archivo /config/databases.yml para configurar la base de datos local
5- Parado en el directorio base del proyecto ejecutar los comandos:
	php symfony doctrine:build-db
	php symfony doctrine:create-model-tables
	php symfony doctrine:data-load
	php symfony cc

Para ingresar al sistema se usar el usuario joa, clave joa