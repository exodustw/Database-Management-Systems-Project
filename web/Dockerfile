FROM ubuntu:22.04

ARG DEBIAN_FRONTEND=noninteractive

RUN apt update
RUN apt install -y apache2 
RUN apt install -y apache2-utils
RUN apt install -y php libapache2-mod-php php-mysql
RUN apt install -y php-mbstring

RUN apt clean

EXPOSE 80
CMD ["apache2ctl", "-D", "FOREGROUND"]