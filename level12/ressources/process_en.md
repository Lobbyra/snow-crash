1. Found a Perl file in the home directory of level12, which is executed as a CGI on port 4646.
2. Discovered a command execution in a sub-process where we can inject a variable.
3. Found that the variable comes from the x parameter of the parsed HTTP request and is converted to uppercase, keeping only the first group before a white-space.
4. Realized that we can execute a script with a path containing a wildcard like /*/MALICIOUS.
5. Created a script in /tmp that will execute getflag and place its STDOUT in /tmp/flag.
6. Sent the HTTP request described in ./request and read the contents of /tmp/flag to find the flag.
