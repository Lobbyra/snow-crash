I decompiled the binary and saw that it was checking for preload libs and opening /proc/self/maps.
I had no idea why the program was doing this and how it could be an exploit despite my research.
So I tried to understand what it was doing with my argv[1] and realized that it was always the same result for the same text.
I then very thoughtfully tried the string: "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa".
And the result was a transformation of the string, the program iterates through each byte of the number of bytes already read.
I noticed that we can read the file ~/token.
What's inside looks strongly like a transformation of that sort.
I decided to create a python script that does the inverse of the transformation, which you can find in this directory.
I passed the token to my script and tested it as the password for the user flag09 and it worked!
I strongly doubt that this was the intended way to do it, but I have the flag and that's what counts.
This level marks the end of the mandatory part.
