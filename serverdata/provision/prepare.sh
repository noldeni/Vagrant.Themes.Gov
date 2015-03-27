#!/bin/sh
if [ ! -f /installed-aptkey-php54 ]; then
	touch /installed-aptkey-php54
    wget -O - http://www.dotdeb.org/dotdeb.gpg | apt-key add -
fi
