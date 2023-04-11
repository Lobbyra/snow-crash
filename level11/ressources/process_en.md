There's a Lua script in the home directory.
When I try to run it, it tells me that the address is already in use, so I conclude that the script is already running.
I see that this script listens on localhost on port 5151 and injects client input into a command.
So, I use telnet to connect to the server and enter this command to be executed by flag10.
I send this command: $(getflag > /tmp/coucou)
As level10, I retrieve the contents in /tmp/coucou to get the flag.
