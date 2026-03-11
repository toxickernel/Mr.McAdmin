#!/bin/bash
cd /home/anthony/mc/
if pgrep -x "java" > /dev/null
then
    echo "Minecraft Server is running."
else
    echo "Minecraft Server  is not running ... Attempting Start ..."
tmux new-session -d -s mc 'java -Xmx1024M -Xms1024M -jar paper-1.21.11-126.jar nogui'
fi
