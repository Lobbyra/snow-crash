1. Decompiled the binary and found it was checking for preload libs and opening /proc/self/maps.
2. Did not understand why the program was doing this and how it could be an exploit despite research.
3. Tried to understand the program's behavior with argv[1] and found it always produced the same result for the same text.
4. Tried the string "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa" and saw the result was a transformation of the string.
5. Noticed that the program could read the file ~/token, which also looked like a similar transformation.
6. Created a Python script that reverses the transformation and placed it in the directory.
7. Tested the script with the token as the password for the user flag09, and it worked!
