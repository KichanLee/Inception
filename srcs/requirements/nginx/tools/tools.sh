#! bin/sh

sed -i "s|{SERVER_NAME}|$SERVER_NAME|g" /etc/nginx/http.d/default.conf

exec nginx -g "daemon off;"