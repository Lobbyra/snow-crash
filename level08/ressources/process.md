1. J'ai décompilé le fichier et compris que le binaire ouvrait un fichier pour imprimer 1024 caractère de celui-ci
2. Mais j'ai aussi vu que si le nom de se fichier contenait la chaine de char "token", il n'ouvrait pas le fichier
3. Dans le home de level08, il y a un fichier token qui contient surement un truc cool
4. J'ai donc créé un lien symbolique dans le /tmp pour que le nom du "fichier" ait un autre nom
5. Voici la commande pour créer le lien symbolique : ln -sf $(pwd)/token /tmp/coucou
6. Après avoir executé cette commande, on peut donc exploiter le binaire en le lancant comme ceci : ./level08 /tmp/coucou
7. Le contenu du fichier token s'est donc affiché en STDOUT *clap* *clap*
8. Mais ce n'est pas le mot de passe de level09 mais de flag08. Donc une fois connecté à se compte on peut getflager
