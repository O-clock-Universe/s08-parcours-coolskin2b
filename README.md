# Parcours de la saison 8 :star2:

C'est la dernière saison du socle PHP, et donc, le dernier parcours :sob:

Je sais... c'est pas facile... :cry:  

Bon, il va bien falloir avancer malgré tout... :rocket:

Comme d'habitude, le parcours va porter sur une ou plusieurs notions vues au cours de cette saison :

- Wordpress
- Mise en production sur un serveur Web (bonus :wink:)

## Sujet

En saison 4, nous avons mis en place _oBlog_.  
C'est un blog pour les étudiants O'clock, pour qu'ils puissent y écrire leurs ressentis.

**Problème** !  
Nous n'avions mis en place que la partie visible du site. Il n'y avait rien pour l'administrer et pouvoir ajouter facilement des catégories, des pages, etc.

**Solution** ?  
Wordpress, bien entendu :nerd_face:

## Etapes

- L'intégration HTML/CSS de _oBlog_ est fournie dans le répertoire `inte-html-css`
- Les pages `article.html` et `category.html` sont des exemples, des gabarits pour 1 article ou 1 catégorie
- Dans ce dépôt, on va installer Wordpress et mettre en place le thème pour cette intégration

### #1 - On s'installe :pizza:

- installer Wordpress
- créer le thème
- découper et placer le code HTML dans le(s) template(s) du thème

<details><summary>Indice</summary>

On pourra utiliser le même template pour les pages et les articles :+1:

</details>

### #2 - On remplit :beer:

- ajouter le contenu du site dans l'admin Wordpress
- s'assurer que les contenus ajoutés s'affichent correctement côté site

### #3 - On dynamise :fireworks:

- afficher dynamiquement la page d'accueil à partir des contenus ajoutés
- modifier les liens "en dur" pour qu'ils pointent vers la bonne URL dynamiquement
- faire en sorte que les menus suivants soit gérés dynamiquement via Wordpress :
    - navigation en haut
    - catégories dans la sidebar
    - liens en bas de page

### #4 - On vérifie :see_no_evil:

- naviguer sur le site et s'assurer que chaque lien est correctement configuré

## Bonus :astonished:

Comme pour les challenges, les bonus ne sont que des bonus :sunglasses:

### Préambule

- les classes CSS `sans-bonus` et `avec-bonus` permettent de cacher des éléments destinés ou non aux bonus
- cacher les éléments ayant la classe `sans-bonus`
- afficher les éléments ayant la classe `avec-bonus`
- devrait apparaitre alors :
    - un champ de recherche dans la sidebar
    - des liens de pagination (`index.html` & `category.html`)
    - un formulaire de contact (`contact.html`)

### #1 - Recherche :mag_right:

- mettre en place la recherche textuelle sur le site

### #2 - Pagination :arrow_left: :arrow_right:

- activer la pagination dans la liste d'articles
- pour cela, il faut ajouter de nouveaux articles

### #3 - Formulaire de contact :email:

- installer le plugin `contact form 7`
- utiliser ce plugin pour mettre en place le formulaire de contact dont le code HTML est fourni
