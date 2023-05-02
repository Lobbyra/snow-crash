1. Found a binary in the home directory that checks permissions on the argument and sends it over the network later.
2. Needs to exploit the fact that permission checking and file opening are done in separate steps.
3. Created a loop script (sender.pl) that continuously executes the binary.
4. Created another script that continuously overwrites /tmp/malicious with a new file and then overwrites it with a symbolic link to the token.
5. Ran both scripts in parallel.
6. Launched `netcat -lk localhost 6969` to listen to the file sent by ./level10.
7. Received the read file, the token, with netcat, and used it to log into flag10.
