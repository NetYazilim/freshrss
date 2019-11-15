FROM freshrss/freshrss:1.15.2-alpine
LABEL maintainer "Levent SAGIROGLU <LSagiroglu@gmail.com>"

VOLUME /shared
ADD constants.local.php /var/www/FreshRSS
