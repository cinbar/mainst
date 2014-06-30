#!/bin/sh
DATE=`date +'%Y-%m-%d'`
rsync -rvaH --exclude data --exclude '*.zip' --exclude books --exclude jobs /data/hd-docs/v25 /data/hd-docs/Backup-$DATE
mongodump -o /data/Backup/mongo-$DATE
