1. Dans ce dernier niveau, il n'y a rien. DU TOUT
2. Donc la seule chose qui reste est l'executable getflag, celui qui nous donne les drapeaux
3. Si il nous donne les drapeaux, c'est qu'il les contient.
4. Je l'ai donc télechargé sur ma machine et l'ai ouvert dans un debugger. Effectivement il contient tous les flags mais sous une forme chiffré dont je n'ai pas réussis à comprendre l'algorithme. Mais pas besoins de le comprendre !
5. J'ai posé un breakpoint très tot dans le main et j'ai copié l'adresse de la partie du code ou le programme met le retour de getuid dans eax
6. Je passe un step du debugger
7. Je modifie eax vers l'ID de l'utilisateur dont je veux avoir le drapeau (3004)
8. Je laisse le programme s'executer complètement et le flag pour se connecter à flag14 s'affiche
9. Je me connecte à flag14 et un message de félicitation s'affiche
