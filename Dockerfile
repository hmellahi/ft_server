FROM   debian:buster

EXPOSE 80 443 3306


COPY    srcs/setup-nginx.sh ./


RUN     rm -rf /var/www/html/*
COPY    srcs/wordpress/ /var/www/html/wordpress
RUN     chown www-data:www-data /var/www/html/wordpress/
RUN     chmod -R 755 /var/www/html/wordpress/
COPY    /srcs/wp-config.php /var/www/html/wordpress/

RUN      chmod 777 setup-nginx.sh && /bin/bash  setup-nginx.sh

COPY    /srcs/wordpress.sql /
RUN     mkdir /etc/nginx/ssl/
COPY    /srcs/nginx.key /etc/nginx/ssl/nginx.key
COPY    /srcs/nginx.crt /etc/nginx/ssl/nginx.crt

COPY    /srcs/default  /etc/nginx/sites-available
COPY    /srcs/index.php  /var/www/html/ 
COPY    /srcs/config.sh /config.sh
COPY    /srcs/run.sh /run.sh
COPY    /srcs/mysql-apt-config_0.8.10-1_all.deb /mysql-apt-config_0.8.10-1_all.deb
RUN     sh config.sh
CMD     sh run.sh
#RUN     mv var/www/html/wordpress/* var/www/html/
#RUN     mv var/www/html/wp-config-sample.php var/www/html/wp-config.php
#RUN     rm -rf  var/www/html/wordpress/
