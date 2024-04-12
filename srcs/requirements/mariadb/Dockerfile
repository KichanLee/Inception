FROM alpine:3.18

RUN apk update && \
    apk upgrade && \
    apk add --no-cache mariadb mariadb-client vim\
    && chown -R mysql:mysql /var/lib/mysql 

ADD https://github.com/just-containers/s6-overlay/releases/download/v3.1.6.2/s6-overlay-noarch.tar.xz /tmp

RUN tar -C / -Jxpf /tmp/s6-overlay-noarch.tar.xz

ADD https://github.com/just-containers/s6-overlay/releases/download/v3.1.6.2/s6-overlay-x86_64.tar.xz /tmp

RUN tar -C / -Jxpf /tmp/s6-overlay-x86_64.tar.xz

COPY tools/entry.sh /tmp/entry.sh

RUN chmod 777 /tmp/entry.sh && \
    mkdir -p /run/mysqld && \
    chown mysql:mysql /run/mysqld && \
    sed -i "s/skip-networking/# skip-networking/g" /etc/my.cnf.d/mariadb-server.cnf

EXPOSE 3306

ENTRYPOINT  [ "/init"]

CMD [ "/tmp/entry.sh" ]

