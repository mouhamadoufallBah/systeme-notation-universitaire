# systeme-notation-universitaire

### Pourquoi le dossier /vendor ne doit-il pas être versionné ?
- le dossier vendor ne doit pas etre versionne parce qu'il contient les dependance de notre projet. Ces derniers peut contenir plusieur fichier et peut prendre du temps quand on souhaite l'amener de le repository distant. Donc le plus simple c'est de l'ignorer et une fois qu'on clone le repository on fait un composer install pour qu'il install les dependance.

### Quelle différence existe entre un commit et un tag ?
- Un commit c'est une enregistrement a l'instant T du contenue des fichier modifier tandis qu'une tag c'est une version stable d'un ensemble de fonctionnalite

### Pourquoi la branche main doit-elle rester stable ?