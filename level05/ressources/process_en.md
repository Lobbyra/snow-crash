1. Upon logging into the system, a message appeared stating "You have a mail".
2. Attempting to access this mail through the mail command was unsuccessful, as the command was not installed on the system.
3. A search for any suspicious files or directories began in order to identify any potential leads.
4. The command "find / -name "mail" 2> /dev/null" was executed, leading to the discovery of an unusual directory located in /var/mail.
5. This directory contained a file named "level05" which contained a standard crontab configuration that suggested it was owned by the user flag05.
6. The crontab executed the script "openarenaserver", which in turn executed all scripts located in /opt/openarenaserver and subsequently deleted them.
7. A malicious script was crafted to execute the "getflag" command and pipe the output to the "wall" command.
8. The script was placed in the /opt/openarenaserver directory, and the crontab successfully executed the script.
9. The output of the "getflag" command was displayed on the terminal as the user level05.
