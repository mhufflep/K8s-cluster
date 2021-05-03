FROM alpine:3.7

LABEL maintainer="mhufflep@student.21-school.ru"

RUN apk update && apk upgrade

#-- utilities
RUN apk install install nano nginx wget  \
	php-fpm php-mysql php-curl php-gd php-intl \
	php-mbstring php-soap php-xml php-xmlrpc php-zip \

#-- phpmyadmin --
RUN wget https://files.phpmyadmin.net/phpMyAdmin/4.9.7/phpMyAdmin-4.9.7-english.tar.gz && \
    tar -xzf phpMyAdmin-4.9.7-english.tar.gz && \
    rm -rf phpMyAdmin-4.9.7-english.tar.gz && \
    mv phpMyAdmin-4.9.7-english /var/www/html/phpmyadmin

COPY srcs/config.inc.php /var/www/html/phpmyadmin/

RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/*

#-- nginx conf --
COPY srcs/default /etc/nginx/sites-available/default
RUN rm -rf /etc/nginx/sites-enabled/default
RUN ln -s /etc/nginx/sites-available/default /etc/nginx/sites-enabled/	

#-- scripts --
COPY srcs/start.sh ./
RUN chmod 755 start.sh

EXPOSE 5000
	
ENTRYPOINT ./start.sh