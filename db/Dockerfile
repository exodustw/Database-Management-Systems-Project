FROM mysql/mysql-server:8.0.32

COPY ./user.sql /docker-entrypoint-initdb.d/0_user.sql
COPY ./schema.sql /docker-entrypoint-initdb.d/1_schema.sql
COPY ./grant.sql /docker-entrypoint-initdb.d/2_grant.sql