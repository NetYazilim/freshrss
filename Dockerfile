FROM freshrss/freshrss:1.15.2-alpine
LABEL maintainer "Levent SAGIROGLU <LSagiroglu@gmail.com>"

VOLUME /FreshRSS-data
ADD constants.local.php /var/www/FreshRSS
