1. In this final level, there is absolutely nothing.
2. So the only thing left is the getflag executable, the one that gives us the flags.
3. If it gives us the flags, it means it contains them.
4. So I downloaded it to my machine and opened it in a debugger. Indeed, it contains all the flags, but in an encrypted form whose algorithm I couldn't understand. But no need to understand it!
5. I set a breakpoint very early in the main function and copied the address of the code where the program puts the return of getuid in eax.
6. I stepped through the debugger.
7. I modified eax to the ID of the user whose flag I wanted to get (3004).
8. I let the program run to completion and the flag to connect to flag14 was displayed.
9. I connected to flag14 and a congratulatory message was displayed.
