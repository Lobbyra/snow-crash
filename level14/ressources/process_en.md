In this final level, there is absolutely nothing.
So the only thing left is the getflag executable, the one that gives us the flags.
If it gives us the flags, it means it contains them.
So I downloaded it to my machine and opened it in a debugger. Indeed, it contains all the flags, but in an encrypted form whose algorithm I couldn't understand. But no need to understand it!
I set a breakpoint very early in the main function and copied the address of the code where the program puts the return of getuid in eax.
I stepped through the debugger.
I modified eax to the ID of the user whose flag I wanted to get (3004).
I let the program run to completion and the flag to connect to flag14 was displayed.
I connected to flag14 and a congratulatory message was displayed.
