1. Télechargement du fichier .pcap du home de level02 vers ma machine local
avec scp
2. Ouverture de ce fichier avec Wireshark
3. Déduction que c'est une tentative de connexion de l'ip X.218 vers l'ip X.223
4. L'utilisateur rentre sont mot de passe qui est divisé en paquet
un caractère par un caractère
5. J'ai interprété des paquets d'un octet === 7f pour des espaces mais ce sont des
ASCII DELETE
6. J'ai donc recopié ce mot de passe : `ft_wandr   NDRel L0L `
7. Puis remplacé les espaces par des DELETE ce qui donne : `ft_waNDReL0L`
8. J'ai essayé ce mot de passe pour me connecter à flag02
9. getflag -> `kooda2puivaav1idi4f57q8iq`
