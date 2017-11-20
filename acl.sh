#!/bin/bash
set -x

rm -rf var/cache/*
rm -rf var/logs/*

HTTPDUSER=`ps axo user,comm | grep -E '[a]pache|[h]ttpd|[_]www|[w]ww-data|[n]ginx' | grep -v root | head -1 | cut -d\  -f1`
sudo chmod -R +a "$HTTPDUSER allow delete,write,append,file_inherit,directory_inherit" var
sudo chmod -R +a "`whoami` allow delete,write,append,file_inherit,directory_inherit" var