Watch the Snow Crash video from the intra.
Notice that it displays a readme which unfortunately is not in the home directory of the account.
Read the video's readme and understand that I need to look for the only file readable by the user flag00.
Write the following find command: find / -type f -user flag00 2> /dev/null.
Read the first file found with cat -> 'cdiiddwpgswtgt'.
Paste the string into dcode.fr and find out that this string is encoded in a disk cipher, and that decoding it gives: 'nottoohardhere'.
Succeed in connecting to flag00 with the found password.
Run getflag: 'x24ti5gi3x0ol2eh4esiuxias'.
