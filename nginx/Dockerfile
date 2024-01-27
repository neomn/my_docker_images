FROM alpine:3.18.3
RUN  apk update && apk add nginx=1.24.0-r7
RUN  touch /var/log/nginx/access.log /var/log/nginx/error.log
CMD  ["sh", "-c","nginx -g \"daemon off;\" "]
