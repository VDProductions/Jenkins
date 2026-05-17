# Requisito: Imagen base php:8.2-apache
FROM php:8.2-apache

# Instalamos la extensión mysqli para que PHP pueda comunicarse con MariaDB
RUN docker-php-ext-install mysqli

# Requisito: Crear un usuario del sistema sin privilegios llamado [USER]
RUN useradd -m usuariolocal

# Requisito: Cambiar el propietario del directorio /var/www/html a este usuario
RUN chown -R usuariolocal:usuariolocal /var/www/html

# Requisito: Usar la instrucción USER para que el proceso no sea root
USER usuariolocal

# Copiamos nuestro script al directorio de trabajo del servidor web
COPY index.php /var/www/html/