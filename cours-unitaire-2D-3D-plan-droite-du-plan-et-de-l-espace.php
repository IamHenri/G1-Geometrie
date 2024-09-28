<?php  include 'entete.php';?>
  <p class="a rotatedFloralHeartBullet">
    <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
  </p>
  <p>
    <h1>Plan et droite de l'espace - présentation</h1>
    <ul>
      <li><a href="#warmup">Les droites dans le plan</a></li>
      <li><a href="#lvdle">Les vecteur de l'espace</a></li>
      <li><a href="#cldv">Combinaison linéaire de vecteurs</a></li>
      <li><a href="#lesplans">Les plans de l'espace</a></li>
      <li><a href="#lesplansupedv">Un point et deux vecteurs</a></li>
      <li><a href="#upeuv">Un point et un vecteur</a></li>
      <li><a href="#eqcartimpl">Equation cartésienne, ou équation implicite</a></li>
      <li><a href="#eqexpl">Equation explicite</a></li>
      <li><a href="#eqparamq">Equations paramétriques</a></li>
      <li><a href="#liensversexos">Liens vers des exercice</a></li>
	  <p>
	  
	  
    <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
  </p>
	  <h3>Deux mondes très différents</h3>
	  En premier lieux, je vous présente les différentes formules et équations qui permettent de représenter des droites dans un plan, puis je passe dans l'espace, avec les plans, et la manière de définir une droite dans l'espace.
  </p>
  <p>
On voit que comprendre les droites dans le plan n'a rien à voir avec celles dans l'espace du point de vue des formules. 
  </p>
  <p>
	  <h3 id="warmup">Les droites dans le plan</h3>
	  On rappel que dans le plan, les droites sont soit affines soit linéaires. L'expression générale de l’équation d'une droite sous sa forme réduite : $ y = mx+p$ ou cartésienne : $ax+by+c=0$ permettent de caractériser ces droites dans le plan par leur tableau de signe, de les représenter, des les comparer entre elles.

  </p>
  <p>Voici un court timelapse de quelques notes sur ces deux types de droites (c'est rapide, pause pour prendre des notes pause nécessaire): 
	  <iframe width="560" height="315" src="https://www.youtube.com/embed/PUR2UdlsZng" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	  
  </p>
  <p>
  <h2>Quelques précisions sur les paramètres de ces droites </h2>
  Soit une droite d'équation cartésienne $ax+by+c=0$, on rappelle que cette formulation on peut extraire le vecteur normal de la droite : $\vec{n} = (a ; b)$. 
  </p>
  <p>
  Soit $y = mx+p$ l'équation réduite générique de droite. On rappelle que $m$ représente la pente de la droite, autrement dit son inclinaison. Plus $m$ est grand plus la droite monte fortement. Plus $m$ s'approche de $0$ plus la droite est plate. Plus $m$ devient négatif, plus la droite va vite vers le bas (les $y$ négatifs). $p$ est l'ordonnée à l'origine, autrement dit, c'est la valeur de $y$ quand $x=0$. Si $p=0$ la droite est linéaire. Sinon affine. Son vecteur directeur est donné par $\vec{n} = (1 ; m)$, $m$ avec son signe.
	  
  </p>
  <p>
	  <h3 id="lvdle">Les vecteurs  de l'espace</h3>
	  Ce n'est pas le titre d'un livre de science fiction chiant, c'est pire : c'est un objet mathématiques bien connu dans le plan. Il existe aussi naturellement l'espace ou dans n'importe quel espace vectoriel de dimension $n$. Ici, on se place en $3D$, où pour se repérer on utilise des systèmes de coordonnées. <a href="chapitre-2-les-coordonnees-cartesiennes.html" target="_blank">Voir ici pour commencer par les coordonnées cartésiennes</a>. Ici on va se placer dans le repère cartésien, avec sa base canonique $(\vec{i},\vec{j},\vec{k})$. Tout point $M$ de l'espace possède trois coordonnées $(x,y,z)$. Dans une réflexion plus globale, lorsqu'un point est donné comme ici, il faut en fait lire que en plus d'avoir les coordonnées du point $M$, on a celle du vecteur $\overrightarrow{OM}$ où $O$ est l'origine du repère. Soit : 
	  $$
	  \overrightarrow{OM} \left (\begin{array}{c}x_{M}\\y_{M}\\z_{M}\end{array}\right )
	  $$
	  Il est plus facile de travailler avec des vecteurs qu'avec des points. Pour dire les choses autrement, on oublie la notion de point et toute coordonnée doit être vue comme celle d'un vecteur. Du moins dans les espaces vectoriels. Ils définissent le cadre dans lequel on se trouve pour ces différentes pages de ce site.
	  </p>
	  <p>
	  <b> Tout élément d'un espace est un vecteur.</b> 
	  </p>
	  <p>
	  Pour Rappel, prenons deux élément $A$ et $B$ de l'espace, on peut définir à partir de ces deux point un vecteur dont les coordonnées sont : 
	  
	  $$
	  \overrightarrow{AB} \left (\begin{array}{c}x_{B}-x_{A}\\y_{B}-y_{A}\\z_{B}-z_{A}\end{array}\right )
	  $$
	  De la même manière on peut voir les points $A$ et $B$ comme l'extrémité des vecteurs $\overrightarrow{OA}$ et $\overrightarrow{OB}$
	  $$
	  \overrightarrow{OA} = \left (\begin{array}{c}x_{A}\\y_{A}\\z_{A}\end{array}\right ) \text{ et }\overrightarrow{OB} = \left (\begin{array}{c}x_{B}\\y_{B}\\z_{B}\end{array}\right )
	  $$
	  
	  $$
	  \overrightarrow{AB} = \overrightarrow{AO} + \overrightarrow{OB} = - \overrightarrow{OA} + \overrightarrow{OB}  = \overrightarrow{OB}  - \overrightarrow{OA}  = \left (\begin{array}{c}x_{B}-x_{A}\\y_{B}-y_{A}\\z_{B}-z_{A}\end{array}\right )
	  $$
	  Donc en résumé, on repère chaque point de l'espace par trois coordonnées, et chaque point doit être vu comme un vecteur. 
	  </p>
	  <p>
	  <h3 id="cldv">Combinaison linéaire de vecteurs</h3>
	  On fera ici un léger rappel de ce que sont les combinaisons linéaires. 
	  </p>
	  <p>
	  Une combinaison linéaire de vecteurs est l'appellation mathématique finalement très explicite qui consiste à prendre un ensemble de vecteurs, comme par exemple avec les vecteurs de la base canonique de l'espace, $(\vec{i},\vec{j},\vec{k})$, on les multiplie par des constantes réelles et on les ajoute ensemble. Par exemple, le vecteur $\vec{v}$  : 
	  $$
	  \vec{v} = 2\vec{i} -3 \vec{j} + \vec{k}
	  $$
	  est défini par une combinaison linéaire des vecteurs de la base canonique, où ses coordonnées sont donc : 
	  $$
	  \vec{v}  \left (\begin{array}{c}2\\-3\\1\end{array}\right )
	  $$
	  On utilise souvent le terme combinaison linéaire pour désigner des éléments d'un espace. D'où ce court paragraphe pour évoquer ou rappeler ce terme.
	  </p>
      <p>
	  Plus généralement, soit $E$ un espace vectoriel, et sa base constituées de $n$ vecteurs, pour $n$ fini : ${ v_{i}, \, \, i = 0, 1, ..., n}$, alors l'ensemble des combinaisons linéaires sur cet espace vectoriel est : 
	  
	  $$
	  \forall X \in E, \,\,\,\, \exists {\alpha_{i} \in \mathbb{R},\,\, 0 \leq i \leq n} \,\,\,\,:\,\,\,\, X = \sum_{i=0}^n \alpha_{i} \vec{v_{i}}.
	  $$
	  Ce qui se lit exactement : "Pour tout élément $X$ de $E$, il existe un ensemble de $n$ réels appelés $\alpha_i$ tel que la somme des $\alpha_i. \vec{v}_i$ représente $X$. 
	  <hr>
	  </p>
	  <p>
	  Exemple. Dans l'espace, soit le vecteur $X$ de coordonnées $(1 ; -2 ; 3)$. Dans la base canonique de $\mathbb{R}^3$ : $(\vec{i} ; \vec{j}  ; \vec{k} )$, $X$ s'écrit : 
	  $$
	  X =  \vec{i} - 2 \vec{j}  + 3 \vec{k}
	  $$
	$X$ est ici exprimé comme combinaison linéaire des vecteurs  $(\vec{i}$, $\vec{j}$ et $\vec{k} )$. 

	  </p>
	  <p>
	<b>Exercice :</b>
	  Soient maintenant trois vecteur : $(\vec{u}$, $\vec{v}$ et $\vec{w} )$ de coordonnées : 
	    $$
	  \vec{u} = \left (\begin{array}{c}0\\1\\1\end{array}\right ); 
	  \vec{v} = \left (\begin{array}{c}1\\0\\1\end{array}\right ) ; 
	  \vec{w} = \left (\begin{array}{c}1\\1\\0\end{array}\right )
	  $$
	<b>Question :</b> est-il possible d'exprimer $X$ à l'aide des vecteurs $(\vec{u}$, $\vec{v}$ et $\vec{w} )$? On peut poser la question autrement : Est il possible d’écrire $X$ comme une combinaison linéaire de $(\vec{u}$, $\vec{v}$ et $\vec{w} )$? Pour répondre à cela, on pourrait regarder à l'aide du déterminant si cette famille est libre. Puis répondre à la question. Indication : un système linéaire de trois équations à trois inconnues est une bonne piste pour répondre à cette question. 
	
	  </p>
	  Correction : 
	  
	  <iframe width="560" height="315" src="https://www.youtube.com/embed/wyWDEzGvV6w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	  <hr>
	  <p>
	  
	  <b>En résumé :</b> n'importe quel élément d'un espace vectoriel peut être décrit comme combinaison linéaire des vecteurs de n'importe quelle base de cet espace. Exemple dans le plan : n'importe quel point du plan peut être identifié à l'aide d'un système de coordonnées, du moment que les deux vecteurs définissant ce système ne soient pas colinéaires.  
	  </p>
	  <p>
	  <h3 id="lesplans">Les plans de l'espace</h3>
	  Dans l'espace usuel, que l'on appelle $\mathbb{R^{3}}$ on peut définir des plans. Un plan est un ensemble infini de points définissant une surface plate illimitée. Il existe plusieurs manières de définir mathématiquement un plan. Plusieurs manière qui smelbent avoir un style très différents, alors que dans le fond elles sont toutes liées. Les différentes définitions d'un plan géométriquement:
	  <ul>
	  <li>Trois points distincts de l'espace ;</li>
	  <li>Un point et une droite ne le contenant pas ;</li>
	  <li>Deux droites avec un et un seul point commun ;</li>
	  <li>Un point et deux vecteur ;</li>
	  <li>Un point et un vecteur ;</li>
	  </ul>
	  puis analytiquement (à l'aide d'expression que l'on manipuler) : 
	  <ul>
	  <li>Equation cartésienne, ou équation implicite ; </li>
	  <li>Equation explicite ;</li>
	  <li>Equations paramétriques</li>
	  <li>Liste non exhaustive mais suffisante pour l'instant. </li>
	  </ul>
	  
	  </p>

	  <p>
	  <h4>Trois points distincts de l'espace</h4>
	  Tout comme dans le plan, une seule et unique droite passe par deux points distincts, dans l'espace, trois points distincts définissent un unique plan. 
	  </p>

	  <p>
	  <h4>Un point et une droite ne le contenant pas</h4>
	  Tant que le point et la droite sont distincts, un point et une droite définissent un unique plan. Les équations de droite dans l'espaces n'étant pas triviales, cette définition ne fait qu'apporter une représentation supplémentaire. 
	  </p>

	  <p>
	  <h4>Deux droites avec un et un seul point commun</h4>
	  Cela revient à un point et deux vecteurs (depuis chaque équation de droit on peut extraire les vecteurs directeurs. 
	  </p>

	  <p>
	  <h4 id="lesplansupedv">Un point et deux vecteur</h4>
	  Soit un point $A$, $\vec{u}$ et $\vec{v}$ deux vecteurs appartenant à l'espace. Alors tout point $M$ du plan est accessible par une combinaison linéaire des deux vecteurs $\vec{u}$ et $\vec{v}$, comme un schéma tente de représenter cette construction. SSoit un point $A$ : 
	  <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/un-point-deux-vecteurs.2.png?raw=true" width=15%>
	  </p>

	  <p> 
	  On lui associe un premier vecteur $\vec{u}$:
	  <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/un-point-deux-vecteurs.3.png?raw=true" width=25%>
	  </p>

	  <p> 
	  Puis un deuxième $\vec{v}$
	  <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/un-point-deux-vecteurs.4.png?raw=true" width=25%>
	  </p>

	  <p> 
	  Ce point et ces deux vecteurs permettent de construire un unique plan.
	  <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/un-point-deux-vecteurs.5.png?raw=true" width=45%>
	  </p>

	  <p> 
	  Pour se le représenter dans l'espace : 
	  <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/un-point-deux-vecteurs.6.png?raw=true" width=50%>
	  </p>

	  <p>
	  Ceci peut s'exprimer comme suit. Si les coordonnées du points $M$ sont le résultat d'une combinaison linéaire de vecteurs $\vec{u}$ et $\vec{v}$, alors on peut supposer qu'il existe deux valeurs $\alpha$ et $\beta$, pour l'instant inconnues, qui permette d'aller sur le point $M$ en partant de $A$. On exprime donc le vecteur $\overrightarrow{AM}$ en fonction de $\vec{u}$ et $\vec{v}$.
	  $$
	  \overrightarrow{AM} = 
	\left( \begin{array}{ccc}
		x_{M} - x_{A} \\
		y_{M} - y_{A} \\
		z_{M} - z_{A} \\
	\end{array} \right)  = \alpha \vec{u} + \beta \vec{u} = \alpha \left( \begin{array}{ccc}
		x_{u} \\
		y_{u} \\
		z_{u} \\
	\end{array} \right)  + \beta 
	\left( \begin{array}{ccc}
		x_{v} \\
		y_{v} \\
		z_{v} \\
	\end{array} \right)  = 
	\left( \begin{array}{ccc}
		\alpha x_{v} + \beta x_{v} \\
		\alpha y_{v} + \beta y_{v} \\
		\alpha z_{v} + \beta z_{v} \\
	\end{array} \right)
	  $$
	  On obtient donc le système suivant : 
	  $$
	  \left( \begin{array}{ccc}
		x_{M} - x_{A} = \alpha x_{v} + \beta x_{v} \\
		y_{M} - y_{A} = \alpha y_{v} + \beta y_{v} \\
		z_{M} - z_{A} = \alpha z_{v} + \beta z_{v} \\
	  \end{array} \right)
	  $$
	  On obtient les équations paramétriques de la position du point $M$ en fonction du point $A$ - ça fonctionne avec n'importe quel point du plan - de deux vecteurs caractérisant le plan. Les variables étant $\alpha$ et $\beta$.  : 
	  $$
	  \left( \begin{array}{ccc}
		x_{M} = x_{A} + \alpha x_{v} + \beta x_{v} \\
		y_{M} = y_{A} + \alpha y_{v} + \beta y_{v} \\
		z_{M} = z_{A} + \alpha z_{v} + \beta z_{v} \\
	  \end{array} \right)
	  $$
	  </p>
<p>
	  <h5>Exemple</h5>
	  On choisit $A (1; -2 ; 3)$ puis   $\vec{u} =  (2; 1 ; 1)$ et  $\vec{v} = (-1; 1 ; 3)$, et on obtient : 
	  $$
	  \left( \begin{array}{ccc}
		x_{M} = 1 + 2\alpha - \beta  \\
		y_{M} = -2 + \alpha  + \beta  \\
		z_{M} = 3 + \alpha  + 3\beta \\
	  \end{array} \right)
	  $$
	  </p>
<p>
	  <h5>Exemple</h5>
	  On choisit $A (0; 0 ; 1)$ puis   $\vec{u} =  (1 ; 0 ; 0) = \vec{i}$ et  $\vec{v} = (0 ; 1 ; 0) = \vec{j}$, et on obtient : 
	  $$
	  \left( \begin{array}{ccc}
		x_{M} = \alpha   \\
		y_{M} = \beta  \\
		z_{M} = 1\\
	  \end{array} \right)
	  $$
	  Ce qui représente le plan parallèle à celui donné par les axes $x$ et $y$ au niveau $z=1$
	  </p>

	  <p>
	  <h4 id="upeuv">Un point et un vecteur</h4>
	  Dans ce cas on a un point, disons $A$ et un vecteur appelé en général $\vec{n}$, vecteur normal au plan. Ce vecteur permet de définir ceux du plan : il suffit de trouver vecteurs non colinéaires orthogonaux à $\vec{n}$ et on revient sur l'équation paramétrique simplement.
	  </p>

	  <p>Ce vecteur normal a une caractéristique supplémentaire : il permet de trouver rapidement l'équation cartésienne du plan. Soit $\vec{n} = (a, b, c)$ alors l'équation cartésienne de la droite est : 
	  $$
	  ax+by+cz+d = o
	  $$
	  Où la seule inconnue est $d$ que l'on trouve à l'aide des coordonnées du point connu du plan $A$. 
	  </p>

	  <p>
	  <h4 id="eqcartimpl">Equation cartésienne, ou équation implicite</h4>
	  L'équation cartésienne d'un plan est donnée par l'expression suivante :
	  $$
	  ax+by+cz+d = o
	  $$
	  avec $a,b,c,d$ quatre constantes réelles.  
	  </p>
	  L'écriture cartésienne des équations de plan contient directement les coordonnées du vecteur normal $\vec{n}$ : 
	  $$\vec{n} = \left(
	  \begin{align}
		a\\
		b\\
		c\\
	  \end{align}\right)
	  $$
	La valeur de $d$ est connue si on connaît un point du plan. Sinon, on peut la supposer nulle. Ce qui signifie que le plan passe par l'origine du repère. 

	  <p>
	  <h4 id="eqexpl">Equation explicite</h4>
	  Cette équation est à l'image de l'équation réduite d'une droite. Ici nous avons non pas un paramètre, mais deux: $x$ et $y$. 
	  </p>

	  <p>
	  Cette manière de décrire un plan prend le point de vue des fonctions à plusieurs variables. Ici deux, pour définir un plan de l'espace tridimensionnel. 
	  
	  </p>

	  <p>On a : 
	  $$
	  z = z(x,y) = mx + ny + p
	  $$
	  Où $m, n, p$ sont des réels quelconques. 
	  </p>

	  <p>
	  A partir de cette équation, on peut obtenir la version paramétrique de ce plan. Pour ce faire, à partir de cette équation, on peut appliquer la méthode suivante : 
	  
	  <ul>
		<li>On pose $x = \alpha$, </li>
		<li>et $y = \beta$, </li>
		<li>on obtient $z$ en fonction de $\alpha$ et $\beta$,</li>
		<li>on pose le tout dans un système : </li>
	  </ul>
	  
	  $$
	  \begin{align}
		x_{M} & = \alpha  \\
		y_{M} & =\beta  \\
		z_{M} & = m\alpha  + n\beta + p\\
	  \end{align}
	  $$
	  De cette écriture on peut aussi obtenir deux vecteurs et un points pour définir uniquement ce vecteur. Soient $A$ ce point et $\vec{u}$ et $\vec{v}$ ces deux vecteurs, alors on a : 
	   $$
	  \overrightarrow{OA} = 
	\left( \begin{array}{ccc}
		0 \\
		0 \\
		p \\
	\end{array} \right)  ;  \vec{u} = \left( \begin{array}{ccc}
		1 \\
		0 \\
		m \\
	\end{array} \right) ; \vec{v} =  
	\left( \begin{array}{ccc}
		0 \\
		1 \\
		n \\
	\end{array} \right)  
	$$
	  </p>

	  <p>
	  <h4 id="eqparamq">Equations paramétriques</h4>
	  On la construit à l'aide d'un point et de deux vecteurs ou de son équation. Explicite ou implicite.
	  </p>

	  <p>
	  <h4>Autre exemple de définition</h4>
	  Si on considère un espace vectoriel de dimension $n$, alors un plan sera un sous espace vectoriel de dimension $n-1$. Ceci invoque l'algèbre linéaire, outil puissant nécessaire par exemple à la compréhension des modèles en mécanique quantique. 
	  </p>

	  <p>
	  <h3 class="liensversexos">Liens vers des exercices</h3>
	  <a href="http://exo7.emath.fr/ficpdf/fic00159.pdf" target ="_blank">Des exercices corrigés sur les droites du plan, les droites et le plans de l'espace.</a>
	  </p>


  <br>
  <hr>
  <a href="index.php">Index &rarr;</a><br>

<?php  include 'pieddepage.php';?>