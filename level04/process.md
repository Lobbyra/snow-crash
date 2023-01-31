1. ls -lah, il y a un fichier level04.pl
2. J'ai regardé le fichier et appris sur internet les notions de perl que je ne connaissais pas
3. J'ai vu que le paramètre x d'un formulaire était injecté dans une commande système
4. J'ai vu en commentaire de ce même fichier que le fichier perl était executé en CGI depuis Apache sur le port 4747
5. J'ai donc testé une requête envoyant x=$(getflag) en formulaire x-www-form-encoded dans un requête HTTP
6. Le code est donc executé en tant que flag04 ce qui retourne le flag en réponse HTTP
