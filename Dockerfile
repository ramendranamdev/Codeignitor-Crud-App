#FROM php:7.2-apache
FROM mattrayner/lamp:latest-1404


WORKDIR /opt/app

COPY . /app

RUN echo 'set -e' > /boot.sh # this is the script which will run on boot

# Map /opt/app to the default apache home
RUN rm -rf /var/www/html/
RUN ln -s /opt/app /var/www/html

CMD sh /boot.sh && . /etc/apache2/envvars && apache2 -DFOREGROUND
CMD ["/run.sh"]
