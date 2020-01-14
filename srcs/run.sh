#!/bin/sh
chown -R mysql: /var/lib/mysql
service mysql start
service nginx reload
service php7.3-fpm start
nginx -g "daemon off;"