1. Download the `.pcap` file from the `level02` home directory to your local machine using `scp`.
2. Open the `.pcap` file with Wireshark.
3. Deduce that there was an attempted connection from IP X.218 to IP X.223, and the user's password was divided into packets, one character at a time.
4. Interpret one-byte packets === 7f as ASCII DELETE characters, instead of spaces.
5. Copy the password: `ft_wandr NDRel L0L`.
6. Replace the spaces with DELETE characters to get: `ft_waNDReL0L`.
7. Use this password to log in to `flag02`.
8. Run the `getflag` command to get the flag: `kooda2puivaav1idi4f57q8iq`.
