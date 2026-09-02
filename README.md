# systeme-notation-universitaire

### Pourquoi le dossier /vendor ne doit-il pas être versionné ?
- le dossier vendor ne doit pas etre versionne parce qu'il contient les dependance de notre projet. Ces derniers peut contenir plusieur fichier et peut prendre du temps quand on souhaite l'amener de le repository distant. Donc le plus simple c'est de l'ignorer et une fois qu'on clone le repository on fait un composer install pour qu'il install les dependance.

### Quelle différence existe entre un commit et un tag ?
- Un commit c'est une enregistrement a l'instant T du contenue des fichier modifier tandis qu'une tag c'est une version stable d'un ensemble de fonctionnalite

### Pourquoi la branche main doit-elle rester stable ?

### Pourquoi placer index.php dans un dossier public ?
C'est pour ne pas donner access a notre code source de notre projet via le navigateur c'est pour la securite.

### Pourquoi toutes les requêtes devraient-elles passer par ce fichier ?
C'est point d'entre de notre application 

### Quels éléments ne devraient jamais se trouver dans le dossier public ?

### Comment avez-vous réparti les responsabilités entre vos dossiers ?

### Quelle relation avez-vous établie entre les deux classes ?
On a etablie une realtion d'heritage entre les deux classe
### Pourquoi ne peut-on pas créer directement un AbstractDocument ?
une classe abstrait ne peut pas etre instanciable.

### Pourquoi l’identifiant peut-il être absent avant la sauvegarde ?
Car c'est la base de donnee qui genere l'id

### Quel principe de conception est favorisé par la protection des propriétés ?
C'est l'encapsulation.


### Quelle classe doit être responsable de la connexion ?
C'est la classe databse.
### Faut-il créer une nouvelle connexion pour chaque requête SQL ?
Il sera en singleton c'est a dire qu'il aura une seul instance.
### Où placer les identifiants de connexion ?
Dans le fichier .env
### Pourquoi utiliser PDO ?

### Pourquoi créer un objet supplémentaire alors que $_POST contient déjà les données ?
Parce qu'on est en poo on doit utiliser des objet maintenant pourquoi on utilise pas l'entite parce que le dto va se charger d'envoyer que les donne a inserer
### Quelle différence observez-vous entre cet objet et CopieExamen ?
copi exam a tout les champs de notre table tandisque le SoumettreCopieDTO contient que les champs a inserer lors de l'ajout note
### Cet objet doit-il posséder un identifiant de base de données ?
non
### Où la conversion des chaînes de dates doit-elle avoir lieu ?
au niveau du controller

