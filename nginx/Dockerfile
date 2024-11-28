FROM wyveo/nginx-php-fpm:php82
EXPOSE 88
RUN mkdir -p /var/log/nginx/
RUN mkdir -p /var/www/
RUN chmod -R 777 /var/www/
RUN chmod -R 777 var/log/nginx/
COPY ./default.conf /etc/nginx/conf.d/
COPY ./locations.conf /etc/nginx/