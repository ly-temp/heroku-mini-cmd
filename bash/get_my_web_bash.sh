#!/bin/bash

chmod +x ./unzip
wget https://github.com/ly-temp/my_bash/archive/refs/heads/main.zip -O my_bash.zip && ./unzip my_bash.zip && rm my_bash.zip \
	&& mv my_bash-main/*.sh ./ && rm -r my_bash-main

wget https://github.com/ly-temp/static-binaries/raw/master/binaries/linux/x86_64/nano
wget https://github.com/ly-temp/static-binaries/raw/master/binaries/linux/x86_64/socat
wget https://github.com/ly-temp/static-binaries/raw/master/binaries/linux/x86_64/ncat
chmod +x ./*
