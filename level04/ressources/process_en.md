1. Ran "ls -lah" and found a file named "level04.pl".
2. Examined the file and learned about Perl concepts that were not known before.
3. Found that the "x" parameter of a form was being injected into a system command.
4. Found a comment in the file indicating that the Perl file was being executed as a CGI from Apache on port 4747.
5. Tested a request by sending "x=$(getflag)" in x-www-form-encoded form data in an HTTP request.
6. The code was executed as "flag04", which returned the flag in an HTTP response.
