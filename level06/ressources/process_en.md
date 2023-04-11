In the level06.php file, we see the use of preg_replace with the /e flag.
Considered a security vulnerability in the latest versions of PHP, it allows code to be executed in the replacement string.
The level06 executable elevates privileges before executing the level06.php file.
After much research on how to execute a function in a variable expansion, I found the command to exploit the two executable files:
echo '[x {${system('getflag')}}]' > /tmp/getflag ; ./level06 /tmp/getflag
