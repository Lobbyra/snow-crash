I decompiled the binary and understood that it opens a file to print 1024 characters from it.
But I also saw that if the filename contained the character string "token", it would not open the file.
In the home directory of level08, there is a file called token that probably contains something cool.
So I created a symbolic link in /tmp so that the "file" has a different name.
Here is the command to create the symbolic link: ln -sf $(pwd)/token /tmp/coucou
After running this command, we can exploit the binary by launching it like this: ./level08 /tmp/coucou
The contents of the token file were displayed in STDOUT clap clap.
But it is not the password for level09, it is the password for flag08. So once connected to this account, we can get the flag.
