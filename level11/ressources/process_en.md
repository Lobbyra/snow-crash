1. Found a Lua script in the home directory.
2. Attempted to run it but received an error that the address is already in use.
3. Concluded that the script is already running.
4. Discovered that the script listens on localhost on port 5151 and injects client input into a command.
5. Connected to the server using telnet and entered the command to execute as flag10: $(getflag > /tmp/coucou)
6. Logged in as level10 and retrieved the flag by reading the contents of /tmp/coucou.
