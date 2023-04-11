There is a binary in the home directory.
I understand that the binary checks its permissions on the argument and sends it over the network later.
I have to exploit the fact that permission checking and file opening are done in two separate steps.
So, I write a script that will execute the binary in a loop (sender.pl).
I write another script that will continuously overwrite the /tmp/malicious path with a new file and then overwrite this file with a symbolic link to the token.
After running these two scripts in parallel, I launch a netcat -lk localhost 6969 that will listen to the file sent by ./level10.
Netcat receives the read file, the token, which I use to log into flag10.
