FROM alpine:3.18

RUN apk add --no-cache nginx && \
	apk add vim openssl && \
	mkdir -p /var/www/html/ 

COPY conf/kichlee.crt /etc/nginx/ssl/self-signed.crt
COPY conf/kichlee.key /etc/nginx/ssl/self-signed.key
COPY conf/default.conf /etc/nginx/http.d/default.conf

COPY tools/tools.sh /tmp/script.sh
RUN chmod 777 /tmp/script.sh

EXPOSE 443

CMD [ "/tmp/script.sh"]