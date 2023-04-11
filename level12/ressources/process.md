1. Dans le home de level12 il y a un fichier perl executé en CGI sur le port 4646
2. Dans ce CGI il y a une execution de commande en sous-process où on peut y injecter une variable
3. Cette variable provient du paramètre x de la requête HTTP parsé et avant d'être injecté dans la commande, son contenu est mis en majuscule et le seul premier groupe avant un white-space est gardé
4. Cette transformation fait qu'on ne peut pas directement executer de commande mais on peut executer un script avec un chemin contenant une wildcard comme /*/MALICIOUS
5. J'ai donc placé un script dans /tmp/ qui va executé getflag et placer son STDOUT dans /tmp/flag
6. J'envoie donc la requête HTTP décrit dans ./request et lis ensuite le contenu de /tmp/flag où je trouve le flag
