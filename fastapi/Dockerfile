FROM      python:3.12.0b4-alpine3.18
RUN       mkdir   app  startup_script
COPY      nginx/default.conf      /etc/nginx/http.d/default.conf
COPY      docker_cmd_script.sh    /startup_script/docker_cmd_script.sh
COPY      src                     /app
RUN       apk   update                                                 &&\
          apk   add               nginx=1.24.0-r6                      &&\
          pip   install           uvicorn==0.23.0  fastapi==0.100.0    &&\
          chmod +x                /startup_script/docker_cmd_script.sh
WORKDIR   /app
CMD       ["/startup_script/docker_cmd_script.sh"]


