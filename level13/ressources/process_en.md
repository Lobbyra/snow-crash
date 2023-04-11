In the home directory, there is an executable that checks if the user has ID 4242. If so, it transforms a string of characters stored in memory and displays it, otherwise it exits the program.
Since the user 4242 does not exist, I ran the program in a debugger called Cutter.
I placed a breakpoint on the comparison and ran the program.
Once the breakpoint was reached, I modified eax, which had the value of my local uid to 4242.
I continued the program's execution and the program compared 4242 with 4242 and then continued normally to display my flag, allowing me to connect to level14.
