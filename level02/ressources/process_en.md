Downloaded the .pcap file from the home directory of level02 to my local machine using scp.
Opened this file with Wireshark.
Deduced that there was an attempted connection from IP X.218 to IP X.223.
The user enters their password which is divided into packets, one character at a time.
I interpreted one-byte packets === 7f as spaces, but they are actually ASCII DELETE characters.
I then copied this password: ft_wandr NDRel L0L.
I replaced the spaces with DELETE characters which gives: ft_waNDReL0L.
I tried this password to log in to flag02.
Ran getflag -> kooda2puivaav1idi4f57q8iq.
