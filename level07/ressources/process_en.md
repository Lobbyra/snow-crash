1. Decompiled the executable in the home directory of level07
2. Discovered that the executable takes the environment variable LOGNAME and executes it after escalating privileges
3. Developed an exploit: `export LOGNAME="$(getflag)" ; ./level07`
4. Added a backslash to prevent executing the command in the level07 shell
5. Cautioned to be careful while executing the exploit
