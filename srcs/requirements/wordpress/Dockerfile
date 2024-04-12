FROM alpine:3.18

RUN apk update && apk add --no-cache \
	php81 php81-fpm php81-mysqli php81-curl php81-phar php81-iconv mariadb-client

RUN apk add curl

ADD https://github.com/just-containers/s6-overlay/releases/download/v3.1.6.2/s6-overlay-noarch.tar.xz /tmp

RUN tar -C / -Jxpf /tmp/s6-overlay-noarch.tar.xz

ADD https://github.com/just-containers/s6-overlay/releases/download/v3.1.6.2/s6-overlay-x86_64.tar.xz /tmp

RUN tar -C / -Jxpf /tmp/s6-overlay-x86_64.tar.xz

RUN apk add iproute2

WORKDIR /tmp

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar

RUN mv wp-cli.phar /usr/local/bin

RUN chmod +x /usr/local/bin/wp-cli.phar

# wp 명령을 /usr/local/bin 디렉토리에 생성하여 사용할 수 있도록 설정
RUN ln -sf /usr/local/bin/wp-cli.phar /usr/local/bin/wp

RUN mkdir -p /var/www/html

WORKDIR /var/www/html 

RUN sed -i 's/listen = 127.0.0.1:9000/listen = 9000/g' /etc/php81/php-fpm.d/www.conf

COPY ./tools/wp.sh /tmp/wp.sh

RUN chmod +x /tmp/wp.sh


EXPOSE 9000

ENTRYPOINT ["/init"]

CMD ["sh", "/tmp/wp.sh"]