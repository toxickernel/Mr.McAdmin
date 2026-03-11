#!/bin/bash
cd /home/anthony/mc/
tmux send-keys -t mc.0 "/say &c SERVER BACKING UP ..." ENTER

zip -r "world.zip" ./world

tmux send-keys -t mc.0 "/say &c SERVER BACKED UP ... " ENTER

tmux send-keys -t mc.0 "/say &c /home/idiot/backups/world.zip ... " ENTER

#tmux send-keys -t mc.0 "/say &c " $date ENTER

