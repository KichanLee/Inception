#! /bin/sh
sleep 1
if [ ! -d /var/lib/mysql/mysql ]; then
	mysql_install_db --user=mysql --datadir=/var/lib/mysql
	mysqld --user=mysql --bootstrap <<-HEREDOC
		FLUSH PRIVILEGES;
		USE mysql;
		DELETE FROM user WHERE user='';
		GRANT ALL ON *.* TO 'root'@'localhost' IDENTIFIED BY '$MYSQL_ROOT_PASSWORD' WITH GRANT OPTION;
		DROP DATABASE IF EXISTS test;
		CREATE DATABASE IF NOT EXISTS \`$MYSQL_NAME\`;
		CREATE USER '$MYSQL_USER'@'%' IDENTIFIED BY '$MYSQL_PASSWORD';
		GRANT ALL ON \`$MYSQL_NAME\`.* to '$MYSQL_USER'@'%' IDENTIFIED BY '$MYSQL_PASSWORD';
		FLUSH PRIVILEGES;
	HEREDOC
fi

exec mysqld_safe --user=mysql --datadir=/var/lib/mysql

