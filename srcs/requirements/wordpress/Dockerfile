FROM alpine:3.18

RUN apk update && apk add --no-cache \
	php81 php81-fpm php81-mysqli php81-curl php81-phar php81-iconv mariadb-client
# curl - URL을 통해 데이터를 전송하기 위한 명령 줄 도구
RUN apk update && apk add curl
# Tini 패키지 설치
RUN apk update && apk add --no-cache curl tini

RUN apk add iproute2

WORKDIR /tmp
# WP-CLI를 설치
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN mv wp-cli.phar /usr/local/bin
RUN chmod +x /usr/local/bin/wp-cli.phar

# wp 명령을 /usr/local/bin 디렉토리에 생성하여 사용할 수 있도록 설정
RUN ln -sf /usr/local/bin/wp-cli.phar /usr/local/bin/wp

#기본 설정 폴더 변경, p옵션 - 경로에 존재하지 않는 디렉토리 자동 생성
RUN mkdir -p /var/www/html
WORKDIR /var/www/html 
#RUN mkdir -p /run/php && chown -R www-data:www-data /run/php && usermod -G www-data -a www-data && chmod -R 755 /run/php
#RUN chown -R www-data:www-data /var/www/html#\
#RUN chmod -R 755 /var/www/html

#PHP-FPM 작업폴더 /var/www/html 디렉토리를 작업 디렉토리로 설정
#RUN sed -i 's/;chdir = \/var\/www/chdir = \/var\/www\/html/g' /etc/php81/php-fpm.d/www.conf

# listen = 127.0.0.1:9000와 같이 설정된 경우, PHP-FPM은 로컬 호스트(127.0.0.1)의 9000 포트에서만 연결을 수신
#PHP-FPM은 모든 네트워크 인터페이스(로컬 루프백 및 외부 네트워크 인터페이스)에서 9000 포트로 들어오는 연결을 수신
# 웹 서버나 다른 시스템에서 PHP-FPM과 연결 가능해짐
RUN sed -i 's/listen = 127.0.0.1:9000/listen = 9000/g' /etc/php81/php-fpm.d/www.conf

COPY ./tools/wp.sh /tmp/wp.sh
# /tmp/wp.sh파일에 실행 권한을 부여
RUN chmod +x /tmp/wp.sh

# 9000 포트에서 호스트와 연결  
EXPOSE 9000
# 컨테이너의 시작점으로 Tini를 사용
ENTRYPOINT ["/sbin/tini", "--"]
# 컨테이너가 시작되면 /tmp/wp.sh 스크립트를 실행
CMD ["sh", "/tmp/wp.sh"]