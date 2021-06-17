FROM alpine:3.7

LABEL maintainer="mhufflep@student.21-school.ru"

RUN apk update && apk upgrade

EXPOSE 3000

RUN apk add bash wget

ADD https://dl.grafana.com/oss/release/grafana-7.5.4.linux-amd64.tar.gz /

RUN wget -q -O /etc/apk/keys/sgerrand.rsa.pub https://alpine-pkgs.sgerrand.com/sgerrand.rsa.pub && \
    wget https://github.com/sgerrand/alpine-pkg-glibc/releases/download/2.33-r0/glibc-2.33-r0.apk && \
    apk add glibc-2.33-r0.apk

RUN tar -xzf grafana-7.5.4.linux-amd64.tar.gz && \
    rm -rf grafana-7.5.4.linux-amd64.tar.gz


RUN mkdir /grafana-7.5.4/data/

# COPY ./srcs/grafana.db /grafana-7.5.4/data/grafana.db
COPY ./srcs/start.sh /

CMD bash start.sh


