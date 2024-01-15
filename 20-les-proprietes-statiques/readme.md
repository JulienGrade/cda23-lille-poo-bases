<h1 align="center" id="title">
LES PROPRIÉTÉS STATIQUES
</h1>

<p id="description">
Les propriétés statiques, en POO, sont des attributs associés à une classe plutôt qu'à une instance
individuelle de cette classe. Ces propriétés sont partagées entre toutes les instances de la classe ;
ainsi, si la propriété statique est modifiée dans une instance ou dans la classe elle-même, le
changement est reflété dans toutes les autres instances.
La différence entre propriété statique et constante :
Une constante est une valeur qui ne change pas une fois qu'elle est définie. En PHP, les constantes
de classe sont définies à l'intérieur d'une classe avec le mot-clé const. Elles sont accessibles sans
avoir besoin d'instancier la classe.
Une propriété statique appartient à la classe elle-même plutôt qu'à une instance spécifique de cette
classe. En PHP, elles sont définies avec le mot-clé static. : Utilisées pour stocker des données qui
doivent être partagées entre toutes les instances d'une classe ou pour les valeurs qui doivent être
conservées entre différents appels de méthode. Mais à l’inverse d’une constante sa valeur pourra
être modifiée.
Par exemple un taux de TVA dans une constante et un compteur dans une propriété statique.
Pourquoi utiliser une propriété statique ?
- Disponible partout dans votre programme
- Facile d’accession et à régler
- La même valeur est partagée à toutes les instances de cet objet
</p>