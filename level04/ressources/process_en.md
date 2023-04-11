Ran "ls -lah" and found a file named "level04.pl"
Examined the file and learned about Perl concepts that I didn't know before
Found that the "x" parameter of a form was injected into a system command
Found a comment in the file indicating that the Perl file was being executed as a CGI from Apache on port 4747
Tested a request sending "x=$(getflag)" in x-www-form-encoded form data in an HTTP request
The code was executed as "flag04", which returned the flag in an HTTP response.
