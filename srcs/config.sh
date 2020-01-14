chmod 660 /var/www/html/wordpress/phpmyadmin/config.sample.inc.php
chown -R www-data:www-data /var/www/html/wordpress/phpmyadmin
DEBIAN_FRONTEND=noninteractive echo "mysql-apt-config mysql-apt-config/select-server select mysql-5.7" | /usr/bin/debconf-set-selections
DEBIAN_FRONTEND=noninteractive dpkg -i mysql-apt-config_0.8.10-1_all.deb
apt-get -qq -y update
DEBIAN_FRONTEND=noninteractive apt-get install -qq -y mysql-server
chown -R mysql: /var/lib/mysql
service mysql start
mysql -u root -e "CREATE USER 'hamza'@'localhost' IDENTIFIED BY '1234'"
mysql -u root -e "CREATE DATABASE wordpress;use wordpress;source wordpress.sql;"
mysql -u root -e "GRANT ALL PRIVILEGES ON wordpress.* TO hamza@localhost; FLUSH PRIVILEGES;"
mv var/www/html/wordpress/* var/www/html/