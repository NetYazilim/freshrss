FROM freshrss/freshrss:1.16.0-alpine
LABEL maintainer "Levent SAGIROGLU <LSagiroglu@gmail.com>"

VOLUME /shared
ADD constants.local.php /var/www/FreshRSS
