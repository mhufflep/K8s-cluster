FROM alpine:3.7
LABEL maintainer="mhufflep@student.21-school.ru"

RUN apk update && apk upgrade

#-- utilities
RUN apk add nano nginx wget supervisor \
     php7 php7-fpm php7-mysqli php7-zip php7-gd \
    php7-mbstring php7-cli php7-opcache php7-zlib php7-curl php7-json php7-iconv php7-gettext php7-session php7-phar
	# mariadb-server mariadb-client
# remove wget????
#-- wordpress --
ADD http://wordpress.org/latest.tar.gz /

RUN mkdir -p /run/nginx
RUN mkdir -p /run/php
RUN mkdir -p /var/log/supervisor

RUN tar -xzf latest.tar.gz && \
    rm -rf latest.tar.gz && \
    mv wordpress /var/www/wordpress

COPY srcs/wp-config.php /var/www/wordpress/

# RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/*

#-- nginx conf --
COPY srcs/default /etc/nginx/conf.d/default.conf

#-- scripts --
# COPY srcs/start.sh ./
# RUN chmod 755 start.sh

EXPOSE 5050


COPY srcs/supervisord.conf /etc/supervisord.conf
CMD /usr/bin/supervisord -c /etc/supervisord.conf
	
# ENTRYPOINT ./start.sh