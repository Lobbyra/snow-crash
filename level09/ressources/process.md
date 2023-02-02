1. Bonjour, alors déjà je vous demanderais de ne pas me juger sur ce process
2. J'ai décompiler le binaire et j'ai vu qu'il vérifiais des lib preload et qu'il ouvrait /proc/self/maps
3. Je n'ai aucune idée pourquoi le programme fais ca et en quoi ca peut être un exploit malgré mes recherches
4. J'essaye donc de comprendre ce qu'il fait de mon argv[1] et je comprends que c'est tout le temps le même résultat pour le même texte.
5. J'essaye donc, de manière très refléchie la chaine "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa".
6. Et le resultat est une transformation de la chaine, le programme itère chaque octet du nombre d'octet déjà lus.
7. Je m'apercois qu'on peut lire le fichier ~/token.
8. Ce qu'il y a dedans ressemble fortement à une transformation du genre.
9. Je decide donc de faire un script python qui fais l'inverse de la transformation. Script que vous retrouverez dans ce dossier
10. Je passe le token dans mon script et je vais le tester en mot de passe de l'utilisateur flag09 et ca fonctionne !
11. Je doute fortement que c'était la facon de faire attendu, mais je possède le drapeau et c'est ca qui compte.
12. Ce niveau signe la fin de la partie obligatoire
