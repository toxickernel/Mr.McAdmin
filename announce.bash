#!/bin/bash
#date = du -h /home/anthony/mc/world.zip
cd /home/anthony/mc/
tmux send-keys -t mc.0 '/tellraw @a ["",{"text":"We have a "},{"text":"w","color":"red"},{"text":"e","color":"gold"},{"text":"b","color":"yellow"},{"text":"s","color":"green"},{"text":"i","color":"blue"},{"text":"t","color":"light_purple"},{"text":"e","color":"dark_purple"},{"text":"!","color":"red"},{"text":" --> "},{"text":"https://mc.findtoledo.com/","color":"red","clickEvent":{"action":"open_url","value":"https://mc.findtoledo.com/"}}]' ENTER
sleep 10
tmux send-keys -t mc.0 '/tellraw @a ["",{"text":"For help, go to our "},{"text":"D","color":"red"},{"text":"i","color":"gold"},{"text":"s","color":"yellow"},{"text":"c","color":"green"},{"text":"o","color":"blue"},{"text":"r","color":"light_purple"},{"text":"d","color":"dark_purple"},{"text":" --> "},{"text":"https://mc.findtoledo.com/discord","color":"red","clickEvent":{"action":"open_url","value":"https://mc.findtoledo.com/discord"}}]' ENTER
tmux send-keys -t mc.0 '/tellraw @a {"text":"(If no one is online) ..."}' ENTER

