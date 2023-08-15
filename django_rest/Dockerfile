FROM    python:3.11-alpine
RUN     mkdir   app             &&\
        mkdir   startup_script 
COPY    src                     /app
COPY    nginx/default.conf      /etc/nginx/http.d/default.conf
COPY    docker_cmd_script.sh    /startup_script
RUN     apk update                                                                  &&\  
        apk add                 nginx=1.24.0-r6   postgresql15-client=15.3-r0       &&\
        pip install             --upgrade pip                                       &&\
        pip install             gunicorn==20.1.0              Django==4.2.3           \
                                psycopg2-binary==2.9.6        python-dotenv==1.0.0    \
                                djangorestframework==3.14.0   pika==1.3.2           &&\
        chmod +x                /startup_script/docker_cmd_script.sh
WORKDIR /app
CMD     ["/startup_script/docker_cmd_script.sh"]



