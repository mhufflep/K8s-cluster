FROM alpine:3.7

LABEL maintainer="mhufflep@student.21-school.ru"

RUN apk update && apk upgrade

#-- utilities
RUN apk add vim 
RUN apk add openrc --no-cache
RUN apk add mysql-client --no-cache

VOLUME ["/var/lib/mysql"]

RUN mkdir -p /run/mysqld/

COPY ./srcs/my.cnf /etc/mysql/my.cnf
RUN chmod 744 /etc/mysql/my.cnf

COPY srcs/create.sql ./

#-- scripts --
COPY srcs/start.sh ./
RUN chmod 755 start.sh

EXPOSE 3306	
ENTRYPOINT ./start.sh