FROM   alpine:3.22.1
RUN    apk update
RUN    apk add         ansible=11.6.0-r0   openssh=10.0_p1-r7  sshpass=1.10-r0
RUN    apk add         curl=8.14.1-r1
RUN    apk add         fish bash 
RUN    fish -c "echo run a fish command to create fish config directory"
CMD    sh -c "tail -f /dev/null"
