DOMAIN_NAME=kichlee.42.fr
MYSQL_ROOT_PASSWORD=1234
MYSQL_NAME=wordpress_db
MYSQL_USER=kichlee
MYSQL_PASSWORD=1234
WORDPRESS_ADMIN_NAME=kichlee
WORDPRESS_ADMIN_PASSWORD=1234
WORDPRESS_USER_NAME=user
WORDPRESS_USER_PASSWORD=0000
WORDPRESS_TITLE=inception
WORDPRESS_ADMIN_EMAIL=kichlee@studen.42seoul.kr
WORDPRESS_USER_EMAIL=lkc0847@naver.com
WORDPRESS_DB_HOST=wordpress_db


sleep 3

if [ ! -f "/var/www/html/wp-config.php" ]; then
	mkdir -p /var/www/html
    cd /var/www/html
    sleep 1
    wp core download --allow-root
    echo "core after"
#	wp config create --dbname=$MYSQL_NAME --dbuser=$MYSQL_USER --dbpass=$MYSQL_PASSWORD --dbhost=$WORDPRESS_DB_HOST --path=/var/www/html --allow-root
    wp config create --dbname=wordpress_db --dbuser=kichlee --dbpass=1234 --dbhost=mariadb --path=/var/www/html --allow-root
    echo "config create "
    wp core install --url=localhost --title="Inception" --admin_user=kichlee --admin_password=1234 --admin_email=kichlee@studen.42seoul.kr --path=/var/www/html --allow-root
    wp user create user lkc0847@naver.com --user_pass=0000 --role="author" --path=/var/www/html --allow-root
else
    echo "WordPress is already installed."
fi
exec php-fpm81 -F