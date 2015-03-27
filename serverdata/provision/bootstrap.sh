#!/usr/bin/env bash



function getTypo3FromGit {
	echo "TYPO3"
	cd /var/www/


	if [ ! -d typo3_src/.git ]; then
		echo "      Downloading"
		rm -R -f typo3_src
		git clone --branch TYPO3_6-2 --depth 50 git://git.typo3.org/Packages/TYPO3.CMS.git typo3_src
		cd typo3_src
		echo "      Done"
		git log -10 --date-order --oneline
	else
		echo "      Already there"
		cd typo3_src
		git pull
		git log -10 --date-order --oneline
		cd ..
	fi
	echo "--------------------------------------------------"
}
# ensure fast booting with grub ;)

#cp /etc/default/grub /etc/default/grub.orig
#sed -i -e 's/GRUB_TIMEOUT=\([0-9]\)\+/GRUB_TIMEOUT=0/' /etc/default/grub
#update-grub

# clean up

cp /etc/phpmyadmin/apache.conf /etc/apache2/sites-enabled/phpmyadmin
cp /serverdata/etc/phpmyadmin/config.inc.php /etc/phpmyadmin/config.inc.php

if [ ! -d "/var/www/typo3conf" ]; then

	rm -rf /var/www/*

	# checkout TYPO3 from Github


	getTypo3FromGit

	cd /var/www
	ln -s typo3_src/index.php index.php
	ln -s typo3_src/typo3 typo3

	ln -s /project/fileadmin fileadmin
	ln -s /project/uploads uploads
	mkdir typo3conf
	cd typo3conf
	ln -s /project/typo3conf/ext ext


	# checkout from git ...

	cd /var/www/typo3conf/ext/
else
	# just update TYPO3 from git here
	getTypo3FromGit
fi


# copy configuration
cp /project/typo3conf/LocalConfiguration.php /var/www/typo3conf/
cp /project/typo3conf/PackageStates.php /var/www/typo3conf/

# import db
mysql -u root           < /serverdata/data/sql/prepare.sql
mysql -u root t3-latest < /serverdata/data/sql/t3-latest.sql


# ensure extdir exists
if [ ! -d "/serverdata/project/typo3conf/ext" ]; then
	mkdir /project/typo3conf/ext
fi

cd /var/www/typo3conf/ext/

export GITTYPE=HTTP
bash /serverdata/provision/install-extensions.sh

# import database



# clear cache


chmod 777 -R /var/www/

echo "clear FS caches"
sudo rm -rf /var/www/typo3temp/Cache/*
sudo rm -rf /var/www/typo3temp/DynCss/*
sudo chmod -R 777 /var/www/

echo "restart apache to clear php opcode cache"
sudo service apache2 restart

echo "run scheduler once"
sudo php typo3/cli_dispatch.phpsh scheduler
sudo chmod 777 -R /var/www

echo "fill caches and messure time of first hit"
curl -L http://192.168.31.16 > /dev/null

echo "======================================================================="
echo "  Access the vm in your Browser via:"
echo "      - 192.168.31.16    32bit 1GB Ram    (Virtualbox Provider)"
echo "======================================================================="