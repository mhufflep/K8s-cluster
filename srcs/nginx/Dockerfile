FROM alpine:3.7

LABEL maintainer="mhufflep@student.21-school.ru"

RUN apk update && apk upgrade

#-- utilities
RUN apk add nginx 
RUN apk add wget openssl supervisor
RUN apk add php7 php7-fpm php7-opcache
RUN apk add nano
RUN apk add openrc --no-cache

#-- SSL --
RUN mkdir -p /run/nginx
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
		-subj "/C=ru/ST=Kazan/L=Kazan/O=no/OU=no/CN=mhuf" \
		-keyout /etc/ssl/private/mhufflep.key -out /etc/ssl/certs/mhufflep.crt

RUN rm -rf /etc/nginx/conf.d/default.conf
COPY ./srcs/default /etc/nginx/conf.d/default.conf

RUN mkdir -p /var/log/supervisor
COPY ./srcs/supervisord.conf /etc/supervisord.conf

COPY ./srcs/index.html /var/www/html/

EXPOSE 80 443
	
CMD ["/usr/bin/supervisord"]