Found a binary in ~.
Used ls -lah to see that the owner of the binary is flag03.
Opening the binary with gdb, found a main function where the setresuid and setresgid functions are used.
Understand that the binary changes the user and group with which it is used to the current file's permissions.
At this point, the binary is being executed as flag03.
Then, the binary calls the system() function to execute the echo command.
Created a malicious echo in /tmp/echo with a script that runs the getflag command.
Changed the permissions of the flag03 user to 777 to enable them to execute this script.
Added this path to the PATH environment variable so that the binary would execute /tmp/echo instead of /bin/echo.
Finally, when the binary is executed, it runs my script instead of echo, which displays the flag.
