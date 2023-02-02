import sys

count = 0
with open("/home/user/level09/token", "rb") as f:
    char = f.read(1);
    while char:
        sys.stdout.write(chr(ord(char) - count))
        count += 1
        char = f.read(1);
