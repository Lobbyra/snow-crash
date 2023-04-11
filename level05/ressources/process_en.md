Upon login, I see a message "You have a mail" (or something like that).
I try the mail command but it's not installed.
Not finding any files in my home directory, I start looking for suspicious files or directories.
Using the command find / -name "mail" 2> /dev/null, I find a strange directory in /var/mail.
In this directory, there is a file with the sweet name of level05 which contains a typical crontab configuration line that the user flag05 might have.
This crontab executes the script openarenaserver, which runs all the scripts in /opt/openarenaserver and deletes them.
Being a bit of a joker, I know the wall command and decide to write a malicious script that will execute the getflag command and send it to wall so that I can retrieve the output as level05 on my terminal.
I wait a bit for the crontab to execute and voila, the flag appears on my terminal.
