In level12's home directory, there is a Perl file executed as a CGI on port 4646.
Inside this CGI, there is a command execution in a sub-process where we can inject a variable.
This variable comes from the x parameter of the parsed HTTP request, and before being injected into the command, its content is converted to uppercase and only the first group before a white-space is kept.
This transformation makes it impossible to directly execute a command, but we can execute a script with a path containing a wildcard like /*/MALICIOUS.
Therefore, I placed a script in /tmp that will execute getflag and place its STDOUT in /tmp/flag.
I then sent the HTTP request described in ./request and read the content of /tmp/flag, where I found the flag.
