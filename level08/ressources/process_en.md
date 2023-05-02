1. Decompiled the binary and found that it prints 1024 characters from a file.
2. Discovered that if the filename contains the string "token," the file will not be opened.
3. Found a file called token in the home directory of level08 that probably contains something interesting.
4. Created a symbolic link in /tmp with a different name using the command: `ln -sf $(pwd)/token /tmp/coucou`
5. Exploited the binary by launching it with the modified filename: `./level08 /tmp/coucou`
6. The contents of the token file were displayed in STDOUT.
7. The password for level09 is not in the token file; it is actually the password for flag08.
8. Once logged into the flag08 account, we can obtain the flag.
