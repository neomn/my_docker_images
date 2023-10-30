FROM      python:3.11-alpine
RUN       mkdir   app             startup_script
COPY      nginx/default.conf      /etc/nginx/http.d/default.conf
COPY      docker_cmd_script.sh    /startup_script/docker_cmd_script.sh
COPY      src                     /app
RUN       apk   update    &&\
                          apk   add       nginx=1.24.0-r7                                 
RUN       pip   install   uvicorn==0.23.0         fastapi==0.100.0          \
                          sqlalchemy==2.0.19      python-dotenv==1.0.0      \
                          pyjwt==2.8.0            psycopg2-binary==2.9.7    \
                          itsdangerous==2.1.2     python-multipart==0.0.6   \
                          influxdb==5.3.1         pytest==7.4.2             \
                          PyYAML==6.0.1           aioredis==2.0.1           \
                          pyotp==2.9.0            qrcode==7.4.2             \
                          redis-om==0.2.1         
RUN      pip    install   fastapi_cache==0.1.0
RUN       chmod +x        /startup_script/docker_cmd_script.sh
WORKDIR   /app
CMD       ["/startup_script/docker_cmd_script.sh"]


