<h1 align="center" id="title">
L’ENCAPSULATION
</h1>

<p id="description">
Le principe d’encapsulation repose sur 3 principes :
- La fonctionnalité est définie à un seul endroit et pas à de multiples endroits.
- Elle est définie à l’endroit logique, exemple au même endroit que ses données.
- Les données à l’intérieur de notre objet ne peuvent pas être modifiées de manière
volontaire ou involontaire depuis un autre endroit du programme.
L'encapsulation consiste donc à regrouper les données (propriétés) et les méthodes qui agissent sur
ces données au sein d'une même unité (classe), et à restreindre l'accès direct à certains composants
de cette unité. L'objectif de l'encapsulation est de cacher les détails d'implémentation internes
d'une classe et d'exposer uniquement ce qui est nécessaire à l'extérieur, afin de contrôler comment
les données internes sont accessibles ou modifiées.
Prenons l'exemple d'un système de gestion de comptes bancaires. Vous pourriez avoir une classe
CompteBancaire avec des propriétés comme solde et des méthodes comme depot() et retrait().
La propriété solde est encapsulée dans la classe CompteBancaire. Au lieu d'y accéder directement,
des méthodes comme depot() et retrait() sont fournies pour interagir avec cette propriété. Cela
permet de s'assurer que le solde ne peut pas être modifié de manière aléatoire ou incorrecte, car
toutes les modifications doivent passer par ces méthodes qui peuvent inclure des vérifications et
des règles métier (comme ne pas permettre un solde négatif).
</p>