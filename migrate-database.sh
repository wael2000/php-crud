mysql -h 127.0.0.1 -u $MYSQL_USER -p$MYSQL_PASSWORD -D default -e "CREATE TABLE IF NOT EXISTS employees ( id int(11) NOT NULL AUTO_INCREMENT, name varchar(100) NOT NULL, address varchar(255) NOT NULL, salary int(10) NOT NULL, PRIMARY KEY (id) );";