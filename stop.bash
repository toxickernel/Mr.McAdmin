#!/bin/bash
cd /home/anthony/mc/
if pgrep -x "java" > /dev/null
then
    echo "Minecraft Server is running ..."
    echo "... Stopping..."
tmux send-keys -t mc.0 "/stop" ENTER
    echo "Minecraft Server Stopped ..."
else
    echo "Minecraft Server is not running ..."

fi
