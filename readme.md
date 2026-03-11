# Mr. MC Admin

A dangerously simple series of scripts that provide a web interface for basic functions running a Minecraft Server.

## Requirements and Dependencies

In addition to all requirements to run a Minecraft server, use the following packages:

```bash
tmux unzip PHP 8.3
```
Update the 2nd line of each bash file changing cd /home/anthony/mc/ to your own server directory.

## Usage

```bash
cd mc/

# Start Server
bash start.bash

# Stop Server
bash stop.bash

# Backup Server
bash backup.bash

# Restore Server
bash restore.bash

```
## Web Interface

A web server with PHP 8.3 is required and it must be on the same machine as the Minecraft Server. Once you have placed all the files on the server use command chmod +x to make them all executable.

On the same server, place the admin/ folder in a working web directory.

Use a service like https://htpasswd.utils.com/ to generate a ".htpassword" file and store it NOT in your web directory.

Modify the ".htaccess" file  in the admin/ directory and update the .htpassword location.

Use the following .htaccess:

```
AuthUserFile /home/anthony/.htpasswd
AuthType Basic
AuthName "GO AWAY"
Require valid-user
```

Edit the "serverhome" definition to your path to your server.jar file.

## Contributing

Pull requests are welcome. For major changes, please open an issue first
to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License

DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE
