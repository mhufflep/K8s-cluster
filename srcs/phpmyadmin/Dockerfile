FROM alpine:3.7

LABEL maintainer="mhufflep@student.21-school.ru"

RUN apk update && apk upgrade

#-- utilities
RUN apk add nano nginx wget supervisor \
	php7 php7-fpm php7-mysqli php7-zip php7-gd \
    php7-mbstring php7-cli php7-opcache php7-zlib php7-curl php7-json php7-iconv php7-gettext php7-session php7-phar

#-- phpmyadmin --
ADD https://files.phpmyadmin.net/phpMyAdmin/4.9.7/phpMyAdmin-4.9.7-english.tar.gz /


RUN mkdir -p /run/nginx
RUN mkdir -p /run/php
RUN mkdir -p /var/log/supervisor

RUN tar -xzf phpMyAdmin-4.9.7-english.tar.gz && \
    rm -rf phpMyAdmin-4.9.7-english.tar.gz && \
    mv phpMyAdmin-4.9.7-english /var/www/phpmyadmin

COPY srcs/config.inc.php /var/www/phpmyadmin/

# RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/*

#-- nginx conf --
COPY srcs/default /etc/nginx/conf.d/default.conf
# RUN rm -rf /etc/nginx/sites-enabled/default
# RUN ln -s /etc/nginx/sites-available/default /etc/nginx/sites-enabled/	
EXPOSE 5000

COPY srcs/supervisord.conf /etc/supervisord.conf
CMD /usr/bin/supervisord -c /etc/supervisord.conf

#-- scripts --
# COPY srcs/start.sh ./
# RUN chmod 755 start.sh


# ENTRYPOINT ./start.sh