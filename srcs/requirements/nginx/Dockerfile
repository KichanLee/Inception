FROM alpine:3.18

RUN apk add --no-cache nginx && \
	apk add vim openssl && \
	mkdir -p /var/www/html/ 

ADD https://github.com/just-containers/s6-overlay/releases/download/v3.1.6.2/s6-overlay-noarch.tar.xz /tmp

RUN tar -C / -Jxpf /tmp/s6-overlay-noarch.tar.xz

ADD https://github.com/just-containers/s6-overlay/releases/download/v3.1.6.2/s6-overlay-x86_64.tar.xz /tmp

RUN tar -C / -Jxpf /tmp/s6-overlay-x86_64.tar.xz

COPY conf/kichlee.crt /etc/nginx/ssl/self-signed.crt
COPY conf/kichlee.key /etc/nginx/ssl/self-signed.key
COPY conf/default.conf /etc/nginx/http.d/default.conf

COPY tools/tools.sh /tmp/script.sh
RUN chmod 777 /tmp/script.sh

EXPOSE 443

ENTRYPOINT [ "/init" ]

CMD [ "/tmp/script.sh"]