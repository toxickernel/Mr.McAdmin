#!/bin/bash
DATE=$(date +"%Y-%m-%d")
BACKUP_NAME="world-$DATE.zip"
cd /home/anthony/mc/
tmux send-keys -t mc.0 "/say &c SERVER BACKING UP ..." ENTER

zip -r "$BACKUP_NAME" ./world

tmux send-keys -t mc.0 "/say &c SERVER BACKED UP ... " ENTER

tmux send-keys -t mc.0 "/say &c /home/idiot/backups/world.zip ... " ENTER

#tmux send-keys -t mc.0 "/say &c " $date ENTER

