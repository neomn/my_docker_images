FROM    python:3.11-alpine
RUN     mkdir   app             &&\
        mkdir   startup_script 
COPY    src                     /app
COPY    nginx/default.conf      /etc/nginx/http.d/default.conf
COPY    docker_cmd_script.sh    /startup_script
RUN     apk update && apk add  nginx=1.24.0-r15   postgresql15-client=15.5-r0       
RUN     pip install             --upgrade pip                                          &&\
        pip install             gunicorn==20.1.0              Django==4.2.3              \
                                psycopg2-binary==2.9.6        python-dotenv==1.0.0       \
                                djangorestframework==3.14.0   pika==1.3.2                \
                                influxdb-client==1.39.0       pyjwt==2.8.0               \
                                pytest==7.4.3                 pyyaml==6.0.1              \
                                cryptography==42.0.2          drf-access-policy==1.5.0   \
                                django-ratelimit==4.1.0       redis==5.0.1               \
                                hiredis==2.3.2
RUN     chmod +x                /startup_script/docker_cmd_script.sh
WORKDIR /app
CMD     ["/startup_script/docker_cmd_script.sh"]



