1. Il y a un binaire dans le home
2. Je comprends que le binaire test ses droits sur l'argument et l'envoie plus tard en réseau
3. Je dois exploiter le fait que la vérification des droits et l'ouverture du fichier soient fait en deux temps.
4. Je fais donc un script qui va executer le binaire en boucle (sender.pl)
5. Je fais un autre script qui va en boucle ecraser le chemin /tmp/maliciou par un nouveau fichier et ensuite ecraser ce fichier d'un lien symbolique sur le token
6. Après avoir lancer ces deux scripts en parallèle, le lance un `netcat -lk localhost 6969` qui va écouter le fichier qu'envoie ./level10
7. netcat recois donc le fichier lu, le token, qui me sert à me log sur flag10
