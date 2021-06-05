FROM alpine:3.7

LABEL maintainer="mhufflep@student.21-school.ru"

RUN apk update && apk upgrade

#-- utilities
RUN apk add vim supervisor wget
RUN apk add influxdb --repository=http://dl-cdn.alpinelinux.org/alpine/v3.10/community/
RUN wget -q -O /etc/apk/keys/sgerrand.rsa.pub https://alpine-pkgs.sgerrand.com/sgerrand.rsa.pub
RUN wget https://github.com/sgerrand/alpine-pkg-glibc/releases/download/2.33-r0/glibc-2.33-r0.apk
RUN apk add glibc-2.33-r0.apk

RUN mkdir -p /var/log/supervisor

EXPOSE 8086	

# ADD https://dl.influxdata.com/telegraf/releases/telegraf-1.18.1_linux_amd64.tar.gz /server/

VOLUME [ "/root/.influxdb" ]

COPY srcs/supervisord.conf /etc/supervisord.conf
CMD /usr/bin/supervisord -c /etc/supervisord.conf