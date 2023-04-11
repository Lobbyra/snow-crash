I decompiled the executable in the home directory of level07
I saw that the executable takes the environment variable LOGNAME and executes it after escalating privileges
So I wrote this exploit: export LOGNAME="$(getflag)" ; ./level07
Be careful to add the backslash to prevent executing the command in the level07 shell.
