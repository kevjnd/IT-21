#!/bin/bash

# Kontrolli, kas skript on käivitatud root-kasutajana
if [[ $EUID -ne 0 ]]; then
   echo "See skript peab olema käivitatud root-kasutajana." 
   exit 1
fi

# Uuenda olemasolevad paketid
echo "Uuendame olemasolevad paketid..."
apt update
apt upgrade -y
apt full-upgrade -y

# Muudame sources.list faili
echo "Muudame /etc/apt/sources.list faili..."
sed -i 's/bullseye/bookworm/g' /etc/apt/sources.list

# Uuenda pakettide nimekiri ja süsteem
echo "Uuendame pakettide nimekirja ja alustame süsteemi uuendamist..."
apt update
apt upgrade -y
apt full-upgrade -y

# Eemaldame mittevajalikud paketid
echo "Eemaldame mittevajalikud paketid..."
apt --purge autoremove -y

# Taaskäivitame süsteemi
echo "Taaskäivitame süsteemi uuenduste rakendamiseks..."
reboot
