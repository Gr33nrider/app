FROM mysql:8.0.19
COPY ./dump/notepaddb.sql /docker-entrypoint-initdb.d/init.sql
