#!/bin/bash
cd /home/anthony/mc/
mv start.bash start.bash.back
echo "Stopping Server ... "
tmux send-keys -t mc.0 "/say &c SERVER STOPPING FOR RESTORE ..." ENTER
tmux send-keys -t mc.0 "/stop" ENTER

echo "Temporarily moving old WORLD... "
mv world/ world.old
echo "Unzipping backup ... "
unzip world.zip
mv start.bash.back start.bash
echo "Restarting Server ... "
bash start.bash

