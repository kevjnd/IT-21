#!/bin/bash

# Muutujad
USER_HOME="/home/$USER"
BACKUP_DIR="/path/to/backup/dir"  # Muuda vastavalt võrguketta asukohale
LOCAL_BACKUP_DIR="/path/to/local/backup/dir"  # Muuda vastavalt lokaalse varukoopia asukohale
TIMESTAMP=$(date +%Y%m%d%H%M%S)
BACKUP_FILE="backup-$USER-$TIMESTAMP.tar.gz"

# Kontrolli, kas võrguketas on ühendatud
if mountpoint -q "$BACKUP_DIR"; then
    DEST_DIR="$BACKUP_DIR"
else
    DEST_DIR="$LOCAL_BACKUP_DIR"
fi

# Loo varukoopia
tar -czf "$DEST_DIR/$BACKUP_FILE" "$USER_HOME"

# Logi varukoopia tulemus
if [ $? -eq 0 ]; then
    echo "Varukoopia edukalt loodud: $DEST_DIR/$BACKUP_FILE" >> /var/log/backup.log
else
    echo "Varukoopia loomine ebaõnnestus: $DEST_DIR/$BACKUP_FILE" >> /var/log/backup.log
fi