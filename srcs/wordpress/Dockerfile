FROM alpine:3.7
LABEL maintainer="mhufflep@student.21-school.ru"

RUN apk update && apk upgrade

#-- utilities
RUN apk install nano nginx wget openssl \
    php-fpm php-mysql php-curl php-gd php-intl \
	php-mbstring php-soap php-xml php-xmlrpc php-zip 
	# mariadb-server mariadb-client

#-- wordpress --
RUN wget http://wordpress.org/latest.tar.gz && \
    tar -xzf latest.tar.gz && \
    rm -rf latest.tar.gz && \
    mv wordpress /var/www/html/

COPY srcs/wp-config.php /var/www/html/wordpress/

RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/*

#-- nginx conf --
COPY srcs/default /etc/nginx/sites-available/default
RUN rm -rf /etc/nginx/sites-enabled/default
RUN ln -s /etc/nginx/sites-available/default /etc/nginx/sites-enabled/	

#-- scripts --
COPY srcs/start.sh ./
RUN chmod 755 start.sh

EXPOSE 5050
	
ENTRYPOINT ./start.sh