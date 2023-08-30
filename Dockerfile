# Usar una imagen base de PHP con Apache
FROM php:8.1-apache

# Copiar los archivos de la aplicación al directorio de documentos web de Apache
COPY ./Dentista-mvc /var/www/html/

# Instalar extensiones PHP y otras dependencias si es necesario
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Exponer el puerto 80
EXPOSE 8080

# Comando de inicio: inicia el servicio Apache en primer plano
CMD ["apache2ctl", "-D", "FOREGROUND"]