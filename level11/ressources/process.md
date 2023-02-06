1. Il y a un script lua dans le home
2. Quand j'essaye de le lancer, il me dit que l'adresse est déjà utilisé, j'en conclus donc que le script est déjà en cours d'execution
3. Je vois que ce script écoute sur localhost sur le port 5151 et injecte l'input client dans une commande
4. J'utilise donc telnet pour me connecter au serveur et j'entre cette commande pour qu'elle soit executé par flag10.
5. J'envoie cette commande : $(getflag > /tmp/coucou)
6. En tant que level10, je récupère donc le contenu dans /tmp/coucou pour récupérer le flag
