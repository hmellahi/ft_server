apt update  -y 
apt upgrade -y 
apt install -y wget 
apt-get install -y  vim php7.3 lsb-release gnupg 
apt-get install -y php7.3-fpm php7.3-gd php7.3-mysql php7.3-curl php7.3-imap php7.3-mbstring php7.3-xml;\
# install nginx 
apt -y update 
apt-get -y install nginx ;\
wget https://files.phpmyadmin.net/phpMyAdmin/4.9.4/phpMyAdmin-4.9.4-all-languages.tar.gz;\
tar -xvf phpMyAdmin-4.9.4-all-languages.tar.gz 
rm -rf phpMyAdmin-4.9.4-all-languages.tar.gz ;\
rm -rf /var/www/html/index.html;\
mv phpMyAdmin-4.9.4-all-languages /var/www/html/wordpress/phpmyadmin;\
chown -R www-data:www-data /var/www/html/wordpress/phpmyadmin;\