1. Found a binary in `~`.
2. Used `ls -lah` to see that the owner of the binary is `flag03`.
3. Opened the binary with `gdb` and found a `main` function where the `setresuid` and `setresgid` functions are used.
4. Understood that the binary changes the user and group with which it is used to the current file's permissions, which in this case is `flag03`.
5. Noticed that the binary calls the `system()` function to execute the `echo` command.
6. Created a malicious `echo` script in `/tmp/echo` that runs the `getflag` command.
7. Changed the permissions of the `flag03` user to `777` to enable them to execute this script.
8. Added `/tmp/` to the `PATH` environment variable so that the binary would execute `/tmp/echo` instead of `/bin/echo`.
9. Finally, when the binary is executed, it runs my script instead of `echo`, which displays the flag.
