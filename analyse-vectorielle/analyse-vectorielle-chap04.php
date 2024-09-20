<!DOCTYPE html>
<head>
   <meta charset="utf-8">
   <title>Mathématiques | Géométrie analytique | Repères, vecteurs et outils de mesure</title>
   <link rel="stylesheet" href="https://calculusmadeeasy.org/screen.css">
   <style>
      body{counter-reset:h1 1}
   </style>
   <script type="text/x-mathjax-config">
      MathJax.Hub.Config({tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}});
   </script>
   <script type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.1/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
</head>
<body>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->

   <p>
      <!--
         %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
         %les champs scalaires
         %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
         -->
   <h2>Les champs scalaires et vectoriels</h2>
   <h3>Les champs scalaires</h3>
   On rappelle tout d'abord qu'un scalaire est une grandeur dans un système d'unité représenté par un seul nombre i.e si $\alpha$ est un scalaire, $\alpha \in \mathbb{R}$. 
   Un <b>champ scalaire</b> est un ensemble de valeurs répartie sur un "espace". Ce dernier peut être un plan, une surface, un volume ou une section de ces derniers. </p>
   <p>
   <h4>Exemples de champs scalaires : </h4>
   <p>
      On connaît beaucoup de représentations de champs scalaires. Le premier et un des plus évident, est à partir de la carte météo : la carte des températures. En chaque point d'un espace plan, on donne une valeur : la température prévue en chaque point. Exemple de carte des températures en France : 
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/analyse-vectorielle/images/temperature.png?raw=true" width=50%>
      Un autre exemple : dans le même contexte, les pressions à chaque point d'une carte. Dans les deux exemples précédents, on parle alors de champ de températures ou champs de pression. On trouve des exemple de ces cartes de champs de valeurs sur  
      <a href="http://www.meteofrance.com/accueil" target="_blank">Météo France</a>
      <!-- Sources : https://www.superprof.fr/ressources/scolaire/physique-chimie/seconde/mecanique/champ-scalaire-vectoriel.html -->
      Un exemple de champ scalaire en trois dimensions : le WIFI de votre habitation. En chaque point de votre habitation (de son volume), on peut trouver une valeur pour la puissance de ce WIFI. On peut définir en chaque point selon l'éloignement à la borne, la puissance du signal reçue. On a alors un champs scalaire dans l'espace. A chaque point de l'habitation, une puissance peut être mesurée. 
   </p>
   <p>
      Relativement à ce que  l'on vient de voir, on pourrait dire que c'est aussi le cas pour les températures et les pressions. Effectivement, selon le choix de l'espace étudié, on se trouve soit sur une surface, soit dans un volume. On peut très bien voir la répartition des température dans l'espace: au sol, puis selon toutes les altitudes possibles. De même pour la pression. 
   </p>
   <p>
      Pour finir, un autre que l'on peut maintenant consulter en ligne : les cartes topographiques, où en plus pouvoir se placer dans le plan, on a l'indication sur l'altitude à l'aide de ce qu'on appelle des courbes de niveaux. 
   </p>
   <p>
      Voici un exemple de courbes de niveaux pour la pression atmosphérique : 
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/analyse-vectorielle/images/isobars.jpg?raw=true" width=100%>
      Chaque ligne correspond à une valeur de pression. On voit que l'écart entre chaque ligne est de $3$ mb.
   </p>
   <p>
      <b>Hypothèse sur les fonctions utilisées </b> dans les différentes formules de ce cours : on les suppose suffisamment continues et dérivables pour se permettre de leur appliquer tous outil de différentiation que l'on va utiliser par la suite. Dans tous les cas, des hypothèse les moins restrictives peuvent être appliquées. Par exemple, si pour une fonction $f(t,x)$, j'utilise $\dfrac{\delta f}{\delta t}$ on suppose que $f$ est au moins dérivable en $t$. Cette page est destinée à comprendre les mathématiques utilisées dans l'analyse vectorielle. Pour les notions de continuités et de dérivation, se reporter à ces notions (expliquées plus tard dans ce site). 
   <h4>Définitions mathématiques : </h4>
   </p>
   <p>
      Comme son nom l'indique, un champ scalaire est donné par un domaine, infini ou non. En chaque point de ce domaine est associé une valeur réelle. On peut aisément définir un champ scalaire à l'aide d'une fonction $f$ qui va de $\mathbb{R}^{n}$ dans $\mathbb{R}$:
      $$
      \begin{align*}
      f : &\mathbb{R}^{n}    \longrightarrow   \mathbb{R} \\
      &X \longmapsto  f(X)
      \end{align*}
      $$
      Avec : 
      $$
      X =
      \left( \begin{array}{ccc}
      x_{1}  \\
      \vdots \\
      x_{i} \\
      \vdots \\
      x_{n}  
      \end{array} \right) ;
      $$
      Par exemple, soit la fonction : 
      $$
      \begin{align*}
      f : &\mathbb{R}^{2}    \longrightarrow   \mathbb{R}\\
      &(x;y) \longmapsto  f(x;y) = e^{-x^{2}+2.x.y-3.y^{2}}\\
      \end{align*}
      $$
      Dont on peut avoir un aperçu sur Geogebra : 
      
         <iframe src="https://www.geogebra.org/calculator/mamygw7f?embed" width="800" height="600" allowfullscreen style="border: 1px solid #e4e4e4;border-radius: 4px;" frameborder="0"></iframe>
         
      L'ensemble des valeurs que donne la fonction $f$ sur $\mathbb{R}$ représente un champ scalaire : un ensemble de valeurs réparties sur une surface, un volume, voire une droite ou des espaces de dimensions supérieures. On s'en aperçoit assez facilement et intuitivement sur les fonctions de $\mathbb{R}^{2}$ dans $\mathbb{R}$ : 
      $$
      \begin{align*}
      f : &\mathbb{R}^{2}    \longrightarrow   \mathbb{R}\\
      &(x ; y) \longmapsto  f(x ; y)
      \end{align*}
      $$
      Pour chaque point $(x ;y)$ du plan, donné par les axes $x$ et $y$, la fonction $f$ fait correspondre une valeur $f(x ; y)$. Si on pose $ z = f(x ; y)$, alors $f$ permet de définir un triplet de point $(x ; y ; z)$ qui sous la condition que f est au moins continue et dérivable une surface lisse dans l'espace. 
      En général on verra souvent  $n = 2$ ou $n = 3$ pour les cas d'étude et d'apprentissage. C'est le contexte qui impose les dimensions. Si par exemple on se trouve à enregistrer pour certains points de l'espace la position et la vitesse, on se retrouve avec six coordonnées : $n=6$. Si on rajoute l'accélération, on arrive à $n=9$.
   </p>
   <p>
      En résumé : une fonction de $\mathbb{R^{n}}$ à valeurs dans $\mathbb{R}$, permet de définir un champ scalaire. 
   </p>
   <p>
      Ce champ scalaire aura les propriétés de la fonction qui le définit. Si il est continue, on aura une surface lisse, sinon, on peut très bien avoir une surface brisée. Il suffit de prendre la valeur absolue d'une fonction qui change de signe. Ses points d'annulation sont les points de non dérivabilité de la fonction. Ou une fonction en escalier (outil important de l'analyse numérique).
   </p>
   <p>
      Si la fonction est dérivable sur tout son domaine de définition , alors on obtient des surface plus "lisses". 
      Exemple de champ scalaire définit par une fonction de $\mathbb{R}^{2}$ dans $\mathbb{R}$ - le paraboloïde : 
      
         <iframe src="https://www.geogebra.org/calculator/j5yx4avh?embed" width="800" height="600" allowfullscreen style="border: 1px solid #e4e4e4;border-radius: 4px;" frameborder="0"></iframe>
         
      Dont l'équation explicite est : 
      $$
      \begin{align*}
      f : &\mathbb{R}^{2}    \longrightarrow   \mathbb{R}\\
      &(x ; y) \longmapsto  f(x ; y) =  0,1.x^{2} + 0,1.y^{2}
      \end{align*}
      $$
      On multiplie les termes en $x$ et en $y$ par la même constante '$01$' pour plus de visibilité.
   </p>
   <p>
      Les champs scalaires sont uniquement des fonctions à valeurs dans $\mathbb{R}$. Dès que l'on est confronté à une fonction qui va dans $\mathbb{R}^{n} \, , n \geq 2$ on est face à un champ de vecteurs.  Mais avant de parler de ces champs on va parler d'un outil de représentation des champs scalaires : les lignes de niveaux. 
   </p>
   <h4>Les courbes où lignes de niveaux : </h4>
   <h5>Description théorique :</h5>
   Soit un champ scalaire : 
   $$
   \begin{align*}
   f : &\mathbb{R}^{n}    \longrightarrow   \mathbb{R}\\
   &(x ; y) \longmapsto  f(x ; y) 
   \end{align*}
   $$
   Alors une courbe de niveau de cette fonction est la courbe correspond à l'équation $f(x ; y) = c$  où $c$ est une constante réelle quelconque. 
   <h5>Exemples pratiques : Le cercle  </h5>
   Soit  $f(x ; y) = x^{2} + y^{2}$, la courbe de niveau définie par $x^{2} + y^{2} = 1$ représente le cercle de rayon 1 et de centre l'origine du repère. </p>
   <p>
      L'équation de tout cercle peut être donné par une ligne de niveaux d'un paraboloïde. 
   <h5>Exemples pratiques : Une fonction à deux variables</h5>
   La fonction $f(x ; y) = x.y - y $ : </p>
   <p>
      Soit  $f(x ; y) = x.y - y $. Et soit la courbe de niveau : $f(x ; y) = 1 $. On a posé $c=1$. Donc on a  : $x.y - y = 1$. Pour décrire cette fonction on peut la réécrire comme suit : 
      $$
      \begin{align*}
      y = \dfrac{1}{x-1} \, , x \neq 1 ; 
      \end{align*}
      $$
      La fonction n'est autre que $y = \dfrac{1}{x-1} \, , x \neq 1 ;$ soit $ f(x) = \dfrac{1}{x-1} \, , x \neq 1 ;$.
      Cette courbe représente une hyperbole avec une asymptote en $x = 1$ et en $y=0$:
      
         <iframe src="https://www.geogebra.org/graphing/ays2af6z?embed" width="800" height="600" allowfullscreen style="border: 1px solid #e4e4e4;border-radius: 4px;" frameborder="0"></iframe>
      Et maintenant l'allure complète de la fonction  $f(x ; y) = x.y - y $:<!-- 
         <iframe src="https://www.geogebra.org/calculator/dmeanu2j?embed" width="800" height="600" allowfullscreen style="border: 1px solid #e4e4e4;border-radius: 4px;" frameborder="0"></iframe> -->
      Sur cette surface si on trace le plan $z=1$, alors on obtient la ligne de niveau vue au dessus $y(x) = \dfrac{1}{x-1}$. Dans ce cas on a pu écrire une équation explicite de la courbe de niveau obtenue, ce qui n'est pas forcément le cas avec toutes les fonction. On doit de temps en temps se restreindre à l'expression implicite des fonction $i.e$ $f(x ; y) = c$. Dans l'exemple ou on obtient le cercle de rayon 1, on ne peut pas avoir une expression explicite globale de la courbe. Tout cela est relié à un fameux théorème d'analyse : le théorème des fonctions implicites. Théorème qui nécessite une page entière pour être traité, de par son importance. 
   </p>
   <p>
      La notion des courbes de niveau est un outil supplémentaire pour comprendre les champ scalaires. Pour revenir au paraboloïde vu avant, on peut facilement s'apercevoir que les courbes de niveau du paraboloïde sont des cercles de rayon la racine carré de la constate $c$ dans $f(x ; y) = c$. 
   </p>
   <p>
      Voir le cours sur les fonctions à $n$ variables, à venir.
   </p>
   <p>
   <h5>Lignes de niveaux de $f(x ; y) = x.y - y $ :</h5>
   Pour cette même fonction  $f(x ; y) =  x.y - y$, voici quelques lignes de niveaux tracées en python :
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/analyse-vectorielle/images/lignesNiveaux01.png?raw=true" width=50%>
   <b>Remarque sur ces deux exemples : </b></p>
   <p>
      Les deux exemples précédents de courbes de niveaux, le cercle et l'hyperbole, montrent deux cas distincts : soit on a une expression explicite comme dans l'hyperbole soit elle est implicite, comme pour le cercle. 
   </p>
   <p>
      Ces deux exemples,  le cercle et celui des  hyperboles présentent deux cas distincts où on peut soit exprimer la fonction comme dans l'exemple 2 où on exprime $y$ en fonction de $x$. Dans le premier exemple on voit qu'il n'est pas possible d'avoir un représentation explicite de la fonction d'une variable en fonction de l'autre. Nous ne pouvons avoir que des paramétrage locaux et pas globaux. Ce sujet renvoie au théorème des fonctions implicites et tout ce que cela induit. 
   </p>
   <p>
      Les lignes de niveau de paraboloïde, pour reprendre l'exemple précédent : 
      <img src="https://raw.githubusercontent.com/IamHenri/G1-Geometrie/main/analyse-vectorielle/images/lignesNiveaux.png" width=80%>
      <!-- 
         %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
         %CHAMP DE VECTEURS
         %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
         
         
         
          -->
   <h2>Les champs de vecteurs</h2>
   <h3>Définition Intuitive</h3>
   Pour comprendre les champs de vecteurs, des illustrations bien connues permettent de se les représenter.
   </p>
   <p>
      La première est encore liée à la météo. Prenons la cartes des vents au sol. On voit par exemple sur ce site une représentation de ce que pourrait être un tel champ de vecteurs :   <a href="https://earth.nullschool.net/" target="_blank"> zoomez un peu et vous verrez des lignes dynamiques apparaître</a>. En chaque point du globe, il est possible de définir un vecteur qui caractérise le vent au point donné. Ce vecteur donne : la direction du vent = celle du vecteur, son sens, pour la même raison et son intensité à l'aide de sa norme. On peut étendre cette observation à l'ensemble de l'atmosphère, où en chaque point on définira de la même manière un vecteur qui caractérisera le vent en chaque endroit. On a alors un champ de vecteurs dans l'espace. Dans la réalité on étudie une fine couche d'une sphère, ce qui complique la chose. Si on se place plus localement, par exemple dans un rayon assez grand autoru d'un point donné, une ville par exemple, on peut voir ce volume comme presque "droit". Avec à l'intérieur, un vecteur définit en chacun de ses points. Vecteur donnant la vitesse du vent par exemple. Chaque vecteur étant alors caractérisé par trois coordonnées. 
   </p>
   <p>
      Parenthèse culturelle : il n'est pas possible de définir sur la surface de la terre un champ de vecteur sans singularité. Une autre version de ce principe est de d'imaginer une sphère chevelue : (en chaque point un vecteur est défini) alors il est impossible de coiffer la sphère sans faire d'épis. Comme autre application on a qu'à chaque instant, sur terre, il y a au moins un endroit où il n'y a pas de vent $\equiv$  il ne peut pas y avoir du vent partout sur terre en même temps. 
   </p>
   <p>
      Autre exemple, le champ magnétique terrestre. En chaque point du globe, on peut déterminer sa direction, son sens et son intensité. Ce qui nous intéresse ici sont la direction et le sens pour permettre de se repérer sur un plan. Néanmoins, le champ de vecteurs généré par la Terre est mesurable en chaque point de l'espace. Donc particulièrement sur la surface du globe.
   </p>
   <p>
      Explication en vidéo sur YouTube (belle vidéo instructive dont je ne suis pas l'auteur ;-). Chaîne que je vous recommande de consulter et de suivre.
   </p>
   <p>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/k3u34VEJnGI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   </p>
   <p>
   <h3>Exemple du champ magnétique terrestre vue en 3D</h3>
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/analyse-vectorielle/images/champmagnetiqueterre001.png?raw=true" width=50%>
   Pour terminer sur les exemples, prenons le plus connu empiriquement des champs de vecteurs, que nous avons toutes et tous subi au moins une fois : le champ de pesanteur terrestre. On peut se le représenter de deux manière, globalement, voir ci-dessus, ou localement : </p>
   <p>
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/analyse-vectorielle/images/champpesanteurterre001.png?raw=true" width=50%>
      Ce champ est considéré constant dans des échelles de distances 'humaines" : on considérera qu'au niveau de la mer, en haut du mont Fuji San, au fond des Mariannes, ou en montgolfière, elle est arrondie à $9.81 m.s^{-2}$. On notera qu'il y a malgré quelques différences pas si mineures  entre l'équateur et les pôles, $9.78 m.s^{-2}$ et $9.83 m.s^{-2}$ respectivement. Dans certains calcul pour simplifier on peut arrondir grossièrement $g$ à 10.
   <p>
      En revanche lorsque l'on se place du point de vue de la planète, avec ses satellites artificiels, son principal satellite naturel, la variation de la pesanteur est significative :
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/analyse-vectorielle/images/champpesanteurterre002.png?raw=true" width=50%>
   </p>
   <h4>Définition mathématiques</h4>
   Un champ vectoriel est donné par une fonction $f$ qui va de $\mathbb{R}^{n}, \, n \in \mathbb{N}^{*}$ dans $\mathbb{R}^{d}, \, d \geq 2$.
   Un champ de vecteur du point de vue mathématiques c'est donner une formulation qui permette de définir en chaque point d'un ensemble un vecteur. Pour cela on utilise des fonction à plusieurs variables à valeurs dans des espaces à plusieurs dimensions. </p>
   <p>
      Plus formellement on écrira, pour $f$ une fonction de $\mathbb{R}^{n}$  dans $\mathbb{R}^{m}$ : 
      $$
      \begin{align*}
      f : &\mathbb{R}^{n}    \longrightarrow   \mathbb{R}^{d}\\
      &X \longmapsto  f(X) = (f_{1}(X),f_{2}(X), ... , f_{j}(X) ..., f_{d}(X))\\
      \end{align*}
      $$
      Avec : 
      $$
      \begin{align}
      X =
      \left( \begin{array}{ccc}
      x_{1} \\
      x_{2} \\
      \vdots \\
      x_{i} \\
      \vdots \\
      x_{n} \\
      \end{array} \right) ; \text{ et } 	f(X) =
      \left( \begin{array}{ccc}
      y_{1} \\
      y_{2} \\
      \vdots \\
      y_{j} \\
      \vdots \\
      y_{d} \\
      \end{array} \right)  ;
      \end{align}
      $$
      Et : 
      $$
      \begin{align}
      y_{j} = f_{j}(x_{1} ; x_{2} ; ... ; x_{i} ; ... ; x_{n}) \, , 1 \leq i \leq n \text{ et }  1 \leq j \leq d
      \end{align}
      $$
      Exemple d'une fonction de $\mathbb{R}^{2}$ dans $\mathbb{R}^{3}$ : 
      $$
      \begin{align*}
      f : &\mathbb{R}^{2}    \longrightarrow   \mathbb{R}^{3}\\
      &X = (x;y;z) \longmapsto  f(x;y;z) = 	\left( \begin{array}{ccc}
      f_{1}(x;y) = x + y \\
      f_{2}(x;y) = x^{2}y\\
      f_{3}(x;y) = xy^{2}\\
      \end{array} \right)\\
      \end{align*}
      $$
      Une fonction comme celle ci-dessus modélise un champ de vecteur dans l'espace, à partir de deux paramètres. On pourrait très bien définir un champ de vecteurs de $\mathbb{R}^{2}$ dans $\mathbb{R}^{2}$. Ou de  $\mathbb{R}^{4}$ dans $\mathbb{R}^{3}$ en rajoutant le temps en paramètre. </p>
   <p>
   <h4>Exemples</h4>
   <h5>Le champ de gravité comme fonction de deux variables à valeurs dans  $\mathbb{R}^{2}$ :</h5>
   </p>
   <p>
      On pourrait très bien se placer sur une droite, qui résumer tout mouvement rectiligne, soumis uniquement au champ de gravité. Le champ de gravité est un vecteur, dirigé du plafond au sol. Il symbolise la force qui fait que tout ce qui pèse tombe. Si on se place dans une pièce, fermée, il faut alors s'imaginer qu'en chaque point de la pièce, ce champ de gravité existe : on peut placer ce vecteur qui représente la force d'attraction $g = (0 ; -g)$ dans le plan. On peut le voir comme une fonction, dont la coordonnées en abscisse est nulle et celle en ordonnée est constante et vaut $-g$.
      Soit une fonction de  $\mathbb{R}^{2}$ dans $\mathbb{R}^{2}$ qui à $(x;y) \in \mathbb{R}^{2}$ associe $(f_{1}(x;y);f_{2}(x;y))$ un autre élément de $\mathbb{R}^{2}$ : 
      $$
      \begin{align*}
      f : &\mathbb{R}^{2}    \longrightarrow   \mathbb{R}^{2}\\
      &(x;y)  \longmapsto   (f_{1}(x;y);f_{2}(x;y))\\
      \end{align*}
      $$
      où : 
      $$
      \begin{align*}
      f_{1}(x;y) & = 0\\
      f_{2}(x;y)& = -g\\
      \end{align*}
      $$
      On est ici dans une configuration assez minimaliste, où le champ de vecteur est réduit à une composante nulle en $x$ et une valeur constante en $y$. On peut identifier ce champ de vecteur avec le champ de pesanteur ressenti localement sur terre. Où $g$ est une constante positive, elle représente la valeur de la pesanteur. Chaque vecteur de ce champ de vecteur est déterminé par le vecteur $\vec{v} = (0;-g)$.
   </p>
   <p>Représentation graphique  : du champ de pesanteur vu dans le plan 
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/analyse-vectorielle/images/champpesanteurterre001.png/?raw=true" width=50%>
   <h5>Exemple d'un champ définit par un fonction de $x$ et de $y$ :</h5>
   <p>Soit une fonction de deux variables à valeurs dans  $\mathbb{R}^{2}$ :</p>
   <p>
      Soit une fonction de  $\mathbb{R}^{2}$ dans $\mathbb{R}^{2}$ qui à $(x;y) \in \mathbb{R}^{2}$ associe $(f_{1}(x;y);f_{2}(x;y))$ un autre élément de $\mathbb{R}^{2}$ : 
      $$
      \begin{align*}
      f : &\mathbb{R}^{2}    \longrightarrow   \mathbb{R}^{2}\\
      &(x;y)  \longmapsto   (f_{1}(x;y);f_{2}(x;y))\\
      \end{align*}
      $$
      où : 
      $$
      \begin{align*}
      f_{1}(x;y) & = -y\\
      f_{2}(x;y)& = x\\
      \end{align*}
      $$
      Pour représenter ce champ de vecteurs, on choisit des valeurs pour quelques couples de $x$ et de $y$ : 
      $$
      \begin{align*}
      \begin{array}{|c|c|c|c|c|} \hline
      x &  y & f_{1}(x;y)  & f_{2}(x;y) & Vecteur \, \, image\\ \hline
      0 & 0 & 0& 0 & ( \,0;\,0 )\\
      0 & 1 & -1 & 0  &   (-1 ;\,0 ) \\
      0 & 2 & -2 & 0  &   (-2 ;\,0 ) \\
      0 & 3 & -3 & 0  &   (-3 ;\,0 ) \\
      1 & 0 & 0  & 1  &   (\,0 ;\,1 )\\
      1 & 1 & -1 & 1  &   (\,-1 ;\,1 )\\
      1 & 2 & -2 & 1  &   ( -2; 1)\\
      1 & 3 & -3 & 1  &   ( -3; 1)\\
      2 & 0 & 0  & 2  &   ( \, 0 ;\,2 )\\
      2 & 1 & -1 & 2  &   (-1 ;\,2 )\\
      2 & 2 & -2 & 2  &   (\,-2;2 )\\
      2 & 3 & -3 & 2  &   (-3 ;\,2 )\\
      3 & 0 & 0  & 3  &   (\, 0 ;\,3 )\\
      3 & 1 & -1 & 3  &   (\,-1 ;\,3 )\\
      3 & 2 & -2 & 3  &   (-2 ;3 )\\
      3 & 3 & -3 & 3  &   (-3 ;\,3 )\\
      \hline
      \end{array}
      \end{align*}
      $$
   <p>Représentation graphique du tableau : </p>
   <p>
      Méthode pour tracer le champ de vecteurs : en un point $(x;y)$ on regarde les valeurs par la fonction pour obtenir les coordonnées d'un vecteur que l'on applique au point $(x;y)$. On part de $(x;y)$ et on obtient un vecteur $\overrightarrow{V} = (f_{1}(x;y);f_{2}(x;y))$ :
   </p>
   <p>
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/analyse-vectorielle/images/champvecteurexemple001.png?raw=true" width=50%>
      Pour cette représentation vous êtes invité à la répliquer pour comprendre la construction d'un champ de vecteurs. 
   </p>
   <p>
      En chaque point $M$ de coordonnées  $(x;y)$ alors le vecteur du champ en ce point est de coordonnées $(-y;x)$, il est orthogonal au vecteur $\overrightarrow{OM}$ : quelque soit $M$ du plan :  $\overrightarrow{OM}. f(x;y)=0$. 
      On pourrait modifier ce champ de vecteur en faisant en sorte que chaque vecteur ait une norme de $1$. 
      Un autre exercice serait de reprendre la même fonction et de diviser chaque  coordonnées par la longueur du vecteur. Soit, la fonction : 
      $$
      \begin{align*}
      f : &\mathbb{R}^{2}    \longrightarrow   \mathbb{R}^{2}\\
      &(x;y)  \longmapsto   (f_{1}(x;y);f_{2}(x;y))\\
      \end{align*}
      $$
      où : 
      $$
      \begin{align*}
      f_{1}(x;y) & = \dfrac{-y}{\sqrt{x^{2}+ y^{2}}}\\
      f_{2}(x;y)& =  \dfrac{x}{\sqrt{x^{2}+ y^{2}}}\\
      \end{align*}
      $$
      Dans ce cas, chaque vecteur du champ de vecteur a pour norme 1 : le vérifier. Sachant cela redessiner le graphique du champ de vecteurs. 
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/analyse-vectorielle/images/champvecteurexemple002.png?raw=true" width=50%>
   <h4>Notations</h4>
   Pour représenter un champ de vecteurs, on peut utiliser plusieurs manières de faire : 
   <ul>
      <li> Coordonnées d'un vecteurs dans une base : repère cartésien, polaire, sphérique,....</li>
      <li> Comme une combinaison linéaires des vecteurs de la base du repère dans lequel le champ est décrit. </li>
   </ul>
   <p>Notations en coordonnées: </p>
   <p>
      Soit une fonction de $\mathbb{R}^{n}$  dans $\mathbb{R}^{d}$: 
      $$
      \begin{align*}
      f : &\mathbb{R}^{n}    \longrightarrow   \mathbb{R}^{d} \\
      &X \longmapsto  f(X) = (f_{1}(X),f_{2}(X), ... , f_{j}(X) ..., f_{d}(X))\\
      \end{align*}
      $$
      Alors, on peut dire ici qu'à chaque $X$ de $\mathbb{R}^{n} $ on fait correspondre un vecteur $\overrightarrow{V}$ dans $\mathbb{R}^{d} $ donc les coordonnées sont : 
      $$
      \begin{align}
      \overrightarrow{V} = f(X) = 
      \left( \begin{array}{ccc}
      f_{1}(X) \\
      f_{2}(X) \\
      \vdots \\
      f_{i}(X) \\
      \vdots \\
      f_{n}(X) \\
      \end{array} \right) ;
      \end{align}
      $$
   <p>Notations en combinaison linaire de vecteurs: </p>
   <p>
      Pour cette notation, il faut disposer de la base dans laquelle on travaille. Comme par exemple la base données par les vecteurs $\vec{i}$, $\vec{j}$ et $\vec{k}$ dans $\mathbb{R}^{3}$. Dans $\mathbb{R}^{d}$  soit l'ensemble de $d$ vecteurs suivants : 
      \begin{align}
      \mathcal{B} =\{e_{i} \, , i \leq d \};
      \end{align}
      Pour l'analogie avec $\mathbb{R}^{3}$ on a $\vec{i} = e_{1}$, $\vec{j} = e_{2}$ et $\vec{k} = e_{3}$ . 
   </p>
   <p>
      On dispose d'une base dans laquelle écrire nos vecteurs : $\{e_{1},e_{2} ..., e_{n}\}$, on peut écrire pour $\overrightarrow{V}$ :
      \begin{align}
      \overrightarrow{V} = f_{i}e_{1}+f_{i}e_{2}+ ... + f_{i} e_{i} + ... + f_{i} e_{n} ;
      \end{align}
      Au lieu de la notation en colonne au dessus. 
      Exemple :
      \begin{align*}
      f : &\mathbb{R}^{2}    \longrightarrow   \mathbb{R}^{2}\\
      &(x;y)  \longmapsto   (f_{1}(x;y);f_{2}(x;y))\\
      \end{align*}
      Alors le vecteur  $\overrightarrow{V}$  obtenu par $f$, dans la base canonique de $\mathbb{R}^{2}$ est : 
      \begin{align}
      \overrightarrow{V} = f_{1}(x;y).\vec{e_{1}} + f_{1}(x;y). \vec{e_{2}} ;
      \end{align}
      En appliquant cela au champ de gravité terrestre on obtient : 
      \begin{align*}
      f : &\mathbb{R}^{2}    \longrightarrow   \mathbb{R}^{2}\\
      &(x;y)  \longmapsto   (0;-g)\\
      \end{align*}
      et : 
      \begin{align}
      \overrightarrow{V} = -g. \vec{e_{2}} ;
      \end{align}
      De même si :
      \begin{align*}
      f : &\mathbb{R}^{2}    \longrightarrow   \mathbb{R}^{2}\\
      &(x;y)  \longmapsto   (-y ; x)\
      \end{align*}
      et : 
      \begin{align}
      \overrightarrow{V} = -y. \vec{e_{1}} + x . \vec{e_{2}} \text{ en tout point} (x ; y) \text{  du plan } ;
      \end{align}
   </p>
   <p>
   <h3>Circulation d’un champ de vecteurs</h3>
   <h4>Représentation intuitive</h4>
   La circulation d'un vecteur le long d'un chemin représente le travail en physique. Pour que cette notion semble naturelle, imaginer que ce vecteur est une force et qu'elle soit appliquée sur un point durant un trajet : le chemin. Alors on peut assez bien se représenter cette action comme étant un "travail". Qui est exactement sa dénomination en physique : </p>
   <p>
      Le travail d'une force est la circulation de celle-ci représentée par un vecteur le long d'un chemin. Par exemple une charrette que l'on tire sur un mètre implique que le travail fournit est égal à la circulation de cette force sur ce mètre parcouru. 
   </p>
   <p>
      La circulation du vecteur sur un chemin c'est le parcours du chemin par l'origine du vecteur. Soit un chemin et un vecteur : 
   </p>
   <p>
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/analyse-vectorielle/images/travail01.png?raw=true" width=50%>
   </p>
   Le parcours du chemin par le vecteur : </p>
   <p>
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/analyse-vectorielle/images/travail02.png?raw=true" width=50%>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
         %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
         %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h4>Définition</h4>
   Soit un chemin $AB$. On décompose ce chemin en une infinité de segment infinitésimaux. Si on met bout à bout chacun de ces éléments infinitésimaux, on peut reconstituer le chemin. La circulation d'un vecteur sur un chemin du point de vue mathématiques c'est l'intégrale du produit scalaire par le vecteur circulant sur le chemin et par chaque vecteur infinitésimal composant $AB$. 
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/analyse-vectorielle/images/chemindl01.png?raw=true" width=50%>
   La circulation d'un vecteur sur un chemin $AB$ c'est faire la somme de tous les produits scalaires entre le vecteur circulant sur le chemin et chaque vecteur infinitésimal composant ce chemin. </p>
   <p>
      <b>Hypothèse sur le chemin</b> : on suppose que le chemin est au moins continue. 
   </p>
   <p>
      Cette somme donne la valeur du travail sur le chemin $AB$. On appelle $W$ le travail d ce vecteur sur ce chemin. Soit $\overrightarrow{F}$ le vecteur circulant sur le chemin. On a alors :
      \begin{align}
      W =  \int_{A}^{B}\overrightarrow{F}.\overrightarrow{dl}
      \end{align}
      Si le chemin est fermé, par exemple un cercle, alors on écrit : 
      \begin{align}
      W =  \oint\overrightarrow{F}.\overrightarrow{dl}
      \end{align}
      Pour un chemin fermé, peut importe le point de départ, on doit parcourir le chemin dans le sens positif (sens donné par le vecteur normal de la surface délimitée par le chemin).
   </p>
   <p>
      Exemples à venir. 
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
         %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
         %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h3>Flux d’un champ de vecteurs</h3>
   <h4>Représentation intuitive</h4>
   Le flux d'un champ de vecteurs est une notion qui peut être intuitive si on arrive à se représenter une surface $\mathcal{S}$ dans un champ de vecteurs, où le flux du champ de vecteurs $E$ est la mesure de la "quantité de vecteurs" qui passe par la surface. 
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
      %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
      %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h4>Définition</h4>
   Il se mesure à l'aide d'une formule qui donne comme résultat un scalaire, pour $\overrightarrow{F} $  dans $E$, $\vec{n}$ le vecteur normal à la surface : 
   \begin{align}
   \Phi = \int \int \overrightarrow{F}.\vec{n} \, d\mathcal{S}
   \end{align}
   $dS$ représente un élément infinitésimal de surface. Cette notion est liée à celle de divergence. </p>
   <p>
      Exemples à venir.
   </p> 

      <br>
      <hr>
   <a href="analyse-vectorielle-chap05.php">Page suivante : opérateurs de l'analyse vectorielle&rarr;</a><br>
   <a href="https://www.designerfonctionnel.com/notes-formation-mathematiques/">Index &uarr;</a><br>
   <script src="j/jquery.js"></script>
   <script src="j/modernizr.js"></script>
   <script src="j/dih5.js"></script>
   <!-- Global site tag (gtag.js) - Google Analytics -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=G-DSGSHE1GR2"></script>
   <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      
      gtag('config', 'G-DSGSHE1GR2');
   </script>
</body>
</html>