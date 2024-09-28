<?php  include 'entete.php';?>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
  
   <p class="a rotatedFloralHeartBullet"></p>

   <p>
   <h1>1 - Les barycentres</h1>

   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h2>Première approche</h2>
   On peut voir les barycentres comme la traduction en termes mathématiques de la notion d'équilibre : ils sont une généralisation du centre de gravité. L'étude des barycentres, c'est quelque part étudier l'équilibre de ce qui pèse. 
   </p>
   <p>
      Cette définition mathématiques, dont les autres sciences se servent aussi, est plus large et plus générale. Elle englobe cette notion d'équilibre et la représente à l'aide des vecteurs. 
   </p>
   <p>
      Comme expliqué avant, on aborde ce concept par des notions assez intuitives dans le plan puis dans l'espace,  pour ensuite exposer les formules théoriques qui permettent les calculs. 
      Barycentre vient de Barus = pesant lourd en grec et centre. Donc très grossièrement le centre de ce qui pèse. 
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/d000.jpg?raw=true" width=50%>
   </p>
   <p>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h2>Contexte Informatique</h2>
   Dans le jeu vidéo par exemple, la notion de barycentre est utilisée pour donner du réalisme aux mouvements des objets dans leur environnement.
   </p>
   <p>
      Que ce soit un personnage, on monstre ou un vaisseau spatial, la manière de bouger, tourner, aura plus ou moins de réalisme si les mouvements sont centrés sur le centre de gravité. Un personnage qui aurait pour point d'équilibre ses pieds rendraient beaucoup de déplacements peu réaliste. Sauf dans le cas par exemple du film Matrix, quand Néo évite les balles par des contorsions impossibles, rendues possibles mathématiquement, en affectant un pondération faible ou nulle au haut du corps. Cette interprétation ne reflète certainement pas la réalité de ce qui a été fait, c'est uniquement pour illustrer l'idée. 
   </p>
   <p>
      En revanche pour des  mouvements particuliers, il peut être astucieux de jouer avec les coordonnées de ce centre de gravité pour permettre ces actions qui sont propres à l'univers du jeu. L'idée de travailler dans un univers de jeu implique une certaine dynamique, ou des mouvements. 
   </p>
   <p>
      Par conséquent, un personnage qui bouge, voit son centre de gravité modifié selon sa position. Avec les différents éléments présentés dans ce document, il sera possible d'utiliser ces formules pour piloter en temps réel la position du centre de gravité de l'objet considéré : personnage, vaisseau spatial, projectile,... 
   </p>
   <p>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h2>Applications mathématiques des Barycentres</h2>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   Dans le cadre de l'étude des barycentres, on suppose toute le temps qu'à chaque point on associe une valeur. Cette dernière est  intimement lié à ce point et n'existe pas par elle même. On peut se représenter dans certains cas ce coefficient comme le poids. Selon certaines hypothèses (spoiler : si tous les poids sont positifs), cette vison est juste et permet de se familiariser avec cette notion de barycentre. Quoi qu'il en soit quand on analyse un système de points pour déterminer leur barycentre il faut supposer qu'à chaque point est toujours associé à nombre. Si on est confronté par hasard à une système de point sans aucune donnée sur leur poids, on peut supposer que chaque point a un poids de un (kilogramme, tonne, gramme, Newton, l'unité n'importe pas pour les calculs). 
   </p>
   <p>
      Lorsque l'on étudie au moins deux points, voir plus, on étudie ce qu'on appelle un système de points. Par définition, un ensemble de points est appelé    
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h3>Système de points</h3>
   En admettant que ce système de point a un poids total non nul, on peut en déterminer son  barycentre : son point d'équilibre si adopte le point de vue du physicien. 
   </p>
   <p>
      On peut associer dans un premier temps la notion de centre de gravité avec celle de barycentre. Ces derniers étant une notion plus générale, il faut se détacher de la  notion de centre de gravité pour à la place comprendre celle de point d'équilibre. Ceci du au fait que les pondérations peuvent être de signes différents, venant au fond contredire la notion de gravité. 
   </p>
   <p>
      Lorsque l'on considère un système d'au moins deux points (dans le plan ou dans l'espace) à chaque point est associé un poids, dont la valeur que l'on pense a priori positive peut prendre en fait toute valeur réelle possible. Rien n'empêche d'être confronté à un système de points ou l'un d'eux ait un poids de $1 000 000 000$ et un autre un poids de $-7,42$. 
   </p>
   <p>
      Considérons une barre en fer parfaitement homogène. Pour la faire tenir en équilibre, il faut la poser sur son milieu:
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/d1-equilibrebarrefer.png?raw=true" width=50%>
      D'un point de vue beaucoup plus empirique, on tous cherché avec un objet quelconque du quotidien à le poser en équilibre au bout de l'index. C'est la recherche par les sens du barycentre de l'objet. 
   </p>
   <p>
      D'un point de vue plus général, on peut donner le barycentre de tout ensemble de points du moments qu'ils ont une valeur (qui peut être négative), dont la somme totale est non nulle. Dans le cas de la barre de fer, son barycentre est ce que l'on appelle son centre de masse, ce qui sera précisé dans 'exercice dédié.
   </p>
   <p>
      La notion de barycentre vient au dessus de celle de centre de gravité. La définition d'un barycentre est basée sur des notions de vecteurs. 
   </p>
   <p>
      Dans la suite on approche les barycentres de manière plus théorique.
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h3>Exemple pratique</h3>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h4>Système de deux points dans le plan</h4>
   On se place dans le plan, dans un repère orthonormal, avec deux points : $M_{1}$ et $M_{2}$. A chacun de ces points est associé un poids : $\alpha_{1}$ et $\alpha_{2}$ respectivement. 
   Schématiquement on a :
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/d3-deuxpointsBAR.png?raw=true" width=50%>
   On a ici un système de deux points avec leurs poids qui semblent égaux. Le barycentre est placé entre les deux points, au milieu de ces derniers si les poids sont exactement les mêmes. 
   </p>
   <p>
      Un autre schéma présente deux points avec deux poids sensiblement différents (représentés sur le schéma):  
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/d3-deuxpointsBAR2.png?raw=true" width=50%>
      On s'aperçoit ici que le barycentre des deux points est plus proche de $M_{1}$ que de  $M_{2}$. Le poids étant représenté par la "taille" des points, le point d'équilibre du système $\{(M_{1};\alpha_{1});(M_{2};\alpha_{2})\}$ est naturellement plus proche de $M_{1}$ que de  $M_{2}$.
   </p>
   <p>
      Si on dispose d'informations supplémentaires il est possible de calculer la position précise du barycentre d'un couple de points ayant chacun un poids et dont la somme ne vaut pas zéro. Autrement dit : 
      \begin{eqnarray}
      \alpha_{1} + \alpha_{2} \neq 0
      \end{eqnarray}
      On dispose de plus des coordonnées des deux points $M_{1}$ et $M_{2}$ : 
      \begin{align*}
      &M_{1}  = (x_{1};y_{1})         && \text{et son poids } \alpha_{1}\\
      &M_{2} = (x_{2};y_{2}) && \text{et son poids } \alpha_{2}
      \end{align*}
      Sachant cela, les coordonnées du barycentre de ces deux points sont données par les formules qui suivent. Soit $G$ le barycentre : 
      \begin{eqnarray*}
      G  = (x_{G};y_{G}) ;  
      \end{eqnarray*}
      Alors on peut déterminer $x_{G}$ et $y_{G}$ :
      \begin{align}
      &x_{G}  = \displaystyle\frac{\alpha_{1}.x_{1} + \alpha_{2}.x_{2}}{\alpha_{1} + \alpha_{2}} \\
      &y_{G} =  \displaystyle\frac{\alpha_{1}.y_{1} + \alpha_{2}.y_{2}}{\alpha_{1} + \alpha_{2}}
      \end{align} 
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h5>Commentaires sur la formule</h5>
    pour chaque composante $x$, en abscisse ou $y$ en ordonnée du point $G$ on remarque qu'elles sont déterminée à laide d'un rapport où au numérateur on a la somme des coordonnées des points en jeu multipliée par le poids associé à chaque point. Au dénominateur, on a la somme des poids. 
   </p>
   <p>
      On peut voir cette formule comme une moyenne. Moyenne des coordonnées des points, où les coefficients sont les poids respectifs de chaque point. Cela vaut pour l'abscisse et l'ordonnée du barycentre de tout système de point. Comme nous allons le voir dans la suite. 
   </p>
   <p>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h3>Relations Vectorielles</h3>
   </p>
   <p>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h5>Première relation </h5>
   Si $G$ est le barycentre des points $M_{1}  = (x_{1};y_{1})$ et $M_{2}  = (x_{2};y_{2})$ alors : 
   \begin{eqnarray}
   \alpha_{1}.\overrightarrow{M_{1}G} + \alpha_{2}.\overrightarrow{M_{2}G}  = \overrightarrow{0}  
   \end{eqnarray}
   Cette définition vectorielle permet de construire les coordonnées de $G$. Voir les exercices. 
   </p>
   <p>
      Représentation graphique : 
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/BRV01.png?raw=true" width=50%>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h5>Deuxième relation</h5>
   Soit $P$ un point du plan, distinct de $G$, $M_{1}$ et $M_{2}$. Alors : 
   \begin{eqnarray}
   \alpha_{1}.\overrightarrow{PM_{1}} + \alpha_{2}.\overrightarrow{PM_{2}}  = (\alpha_{1} + \alpha_{2})\overrightarrow{PG}   ;  
   \end{eqnarray}
   Représentation graphique : 
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/BRV02.png?raw=true" width=50%>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h4>Exercices d'application</h4>
   <h5>Barycentre de deux points 1</h5>
   </p>
   <p>
      Soient les points $A(2,5)$ et $B(1,3)$, $A$ ayant 3 pour pondération et $B$ la valeur 5. Donner les coordonnées du barycentre des points par le calcul. Et vérifier les formules vectorielles. 
   </p>
   <p>
      
      <h4>Solution : </h4>
      \begin{align*}
      &x_{G}  = \frac{3.2 + 5.1}{3 + 5} = \frac{11}{8} \\
      &y_{G} =  \frac{3.5 + 5.3}{3 + 5} = \frac{30}{8} = \frac{15}{4} 
      \end{align*} 
      On obtient donc : 
      \begin{align*}
      G  = (\frac{11}{8}; \frac{15}{4}) ;  
      \end{align*}
      De plus : 
      \begin{align*}
      3 .	\overrightarrow{GA} + 5 . \overrightarrow{GB}=\overrightarrow{0} ;  
      \end{align*}
      Et pour tout point $M$ du plan distinct de $A$ et $B$ : 
      \begin{align*}
      3 .	\overrightarrow{MA} + 5 . \overrightarrow{MB}= 8 . \overrightarrow{MG} ;  
      \end{align*} 
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% Deux points -->
   <h5>Barycentre de deux points 2</h5>
    
   </p>
   <p>
      Soient les points $A(1;1)$ et $B(7;4)$, $A$ ayant 2 pour pondération et $B$ la valeur 1. Donner les coordonnées du barycentre des points par le calcul. Et appliquer les formules vectorielles. 
   </p>
   <p>
      <h4>Solution : </h4>
      Après de rapides calculs on obtient : 
      \begin{align*}
      G  = (3 ; 2) ;  
      \end{align*}
      %D'autre part on a, pour  $P$ un point du plan, distinct de $G$, $A$ et $B$, on a : 
      De plus : 
      \begin{align*}
      2 .	\overrightarrow{GA} + \overrightarrow{GB}=\overrightarrow{0} ;  
      \end{align*}
      Et pour tout point $M$ du plan distinct de $A$ et $B$ : 
      \begin{align*}
      2.	\overrightarrow{MA} + \overrightarrow{MB}= 3 . \overrightarrow{MG} ;  
      \end{align*}
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/Egvect01.png?raw=true" width=50%>
      Le schéma ci-dessus représente la cas où $M$ a pour coordonnées le point $(2;3)$. Cette relation vectorielle est vraie pour tout point $M$ du plan.  
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% 3 points-->
   <h3>Système de trois  points</h3>   }
   Toujours dans le plan et le même type de repère, on dispose de trois points : $M_{1}$, $M_{2}$ et $M_{3}$. A chacun de ces points est associé un poids : $\alpha_{1}$, $\alpha_{2}$ et $\alpha_{3}$ respectivement. 
   Schématiquement on a maintenant :
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/d4-troispointsBAR.png?raw=true" width=50%>
   Ce système de trois points avec leurs poids qui semblent égaux peut être représenté comme un triangle. On part du principe que les trois points sont distincts. Le barycentre est alors le centre de gravité du triangle, que l'on détermine à l'aide des médianes : le point d'intersection de ces dernière est le barycentre du triangle $M_{1}M_{2}M_{3}$. Dans ce cas, le barycentre est le centre de gravité du triangle. Ceci car on a supposé les poids de chaque point valant 1. Ou étant égaux, ce qui revient au  même. placé entre les deux points, au milieu de ces derniers si les poids sont exactement les mêmes. 
   </p>
   <p>
      Un autre schéma présente trois points avec des poids sensiblement différents (représentés schématiquement): 
      <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/d4-troispointsBAR2.png?raw=true" width=50%>
      On s'aperçoit ici que le barycentre du triangle est plus proche de $B$ que de  $A$ ou $C$. Le poids étant représenté par la "taille" des points, le point d'équilibre du système $\{(M_{1},\alpha_{1}); (M_{2},\alpha_{2}); (M_{3},\alpha_{3})\}$ est naturellement plus proche de $M_{2}$ que des deux autres.
   </p>
   <p>
      Comme pour le système de deux points, si on dispose d'informations supplémentaires il est possible de calculer la position précise du barycentre de ce triangle, toujours sous l'hypothèse que la somme des poids n'est pas nulle. Autrement dit : 
      \begin{eqnarray}
      \alpha_{1} + \alpha_{2} + \alpha_{3} \neq 0
      \end{eqnarray}
      Le système étudié ici est donné par les trois points $M_{1}$, $M_{2}$ et $M_{3}$ ainsi que de leur poids associés. On appelle $S$ : 
      \begin{eqnarray}
      S = \{(M_{1},\alpha_{1}) ; (M_{1},\alpha_{1}) ; (M_{1},\alpha_{1}) \}
      \end{eqnarray}
      Admettons que l'on dispose des coordonnées des  points $M_{1}$, $M_{2}$ et $M_{3}$ : 
      \begin{equation*}
      \left\{
      \begin{array}{ll}
      M_{1}  = (x_{1};y_{1})     \text{ et son poids } \alpha_{1}\\
      M_{2} = (x_{2};y_{2}) \text{ et son poids } \alpha_{2} \\
      M_{3} = (x_{3};y_{3}) \text{ et son poids } \alpha_{3}
      \end{array}
      \right.
      \end{equation*}
      Bien que l'écriture soit un peu lourde, on peut écrire : 
      \begin{eqnarray*}
      S = \{(M_{1}(x_{1};y_{1}),\alpha_{1}) ; (M_{2}(x_{2};y_{2}),\alpha_{2})  ; (M_{3}(x_{3};y_{3}),\alpha_{3})  \}
      \end{eqnarray*}
      On préfèrera écrire $S = \{(M_{1},\alpha_{1}) ; (M_{2},\alpha_{2}) ; (M_{3},\alpha_{3}) \}$, pour plus de lisibilité. 
   </p>
   <p>
      Ou encore mieux : 
      \begin{eqnarray}
      \mathbf{S} = \{(M_{i};\alpha_{i}) ; i = 1, 2, 3 \} 
      \end{eqnarray}
      Sachant cela, les coordonnées du barycentre de ce triangle sont données par les formules qui suivent. Soit $G$ le barycentre de $S$ : 
      \begin{eqnarray*}
      G  = (x_{G};y_{G}) ;  
      \end{eqnarray*}
      Alors on peut déterminer $x_{G}$ et $y_{G}$ :
      \begin{equation}\label{coord2dbarycentre}
      \left\{
      \begin{array}{ll}
      &x_{G}  = \displaystyle\frac{\alpha_{1}.x_{1} + \alpha_{2}.x_{2} + \alpha_{3}.x_{3}}{\alpha_{1} + \alpha_{2} + \alpha_{3}} \\
      &\\
      &y_{G} =  \displaystyle\frac{\alpha_{1}.y_{1} + \alpha_{2}.y_{2} + \alpha_{3}.y_{3}}{\alpha_{1} + \alpha_{2} + \alpha_{3}} 
      \end{array}
      \right.
      \end{equation} 
   </p>
   <p>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h4>Commentaires sur la formule</h4>
   De la même manière qu'un système de deux points, le barycentre d'un triangle sera déterminé par les coordonnées des points pondérées par leurs poids, le tout divisé par la somme des poids. Ce qui est résumé dans les formules au dessus.  
   </p>
   <p>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h3>Relations Vectorielles</h3>
    
   </p>
   <p>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h4>Première relation</h4>
    
   Si $G$ est le barycentre des points $M_{1}  = (x_{1};y_{1})$, $M_{2}  = (x_{2};y_{2})$ et $M_{3}  = (x_{3};y_{3})$ ayant respectivement pour poids $\alpha_{1}$, $\alpha_{2}$ et $\alpha_{3}$ alors : 
   \begin{eqnarray}
   \alpha_{1}.\overrightarrow{M_{1}G} + \alpha_{2}.\overrightarrow{M_{2}G} + \alpha_{3}.\overrightarrow{M_{3}G}  = \overrightarrow{0}  
   \end{eqnarray}
   Cette définition vectorielle permet de construire les coordonnées de $G$. Voir les exercices. 
   </p>
   <p>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h4>Deuxième relation</h4>
    
   Soit $P$ un point du plan, distinct de $G$, $M_{1}$ et $M_{2}$. Alors : 
   \begin{eqnarray}
   \alpha_{1}.\overrightarrow{PM_{1}} + \alpha_{2}.\overrightarrow{PM_{2}} + \alpha_{3}.\overrightarrow{PM_{3}}  = (\alpha_{1} + \alpha_{2} + \alpha_{3})\overrightarrow{PG}   ;  
   \end{eqnarray}
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% n points-->
   <h3>Système de plus de trois points</h3>
   Ce qui a été vu pour deux points puis trois, peut facilement être étendu à une quantité $n$ de points, où $n$ peut prendre des valeurs assez grandes, ou du moins aller bien au delà de trois points. D'où la nécessité de formule générale, applicables quelque soit le nombre de points étudiés. On va donc présenter ici une formule générale pour les coordonnées du barycentre de $n$ points du plan, chacun pondéré par un coefficient représenté par un nombre. 
   </p>
   <p>
      On a donc un ensemble de $n$ points $M_{i}$ de coordonnées respectives $M_{i}  = (x_{i};y_{i})$. A chaque point $M_{i}$ on associe une valeur $\alpha_{i}$. Avec $\alpha_{i}$ nombre réel :  $\alpha_{i} \in \mathbb{R}$. 
   </p>
   <p>
      Soit maintenant le système $\mathbf{S}$ constitué de l'ensemble des points  $M_{i}$ et de leurs coefficients. Dont la formalisation mathématique est : 
      \begin{eqnarray}
      \mathbf{S} = \{(M_{i};\alpha_{i}) ; i = 1, ... n \} 
      \end{eqnarray}
      On veut donc obtenir les coordonnées du barycentre $G$ de ce système $\mathbf{S}$. Pour cela on a les formules suivantes : 
      \begin{align*}
      &x_{G}  = \displaystyle\frac{\alpha_{1}.x_{1} + \alpha_{2}.x_{2} + ... + \alpha_{i}.x_{i} + ... + \alpha_{n}.x_{n}}{\alpha_{1} + \alpha_{2} + ... + \alpha_{i} + ... + \alpha_{n}} \\
      &\\
      &y_{G} =  \displaystyle\frac{\alpha_{1}.y_{1} + \alpha_{2}.y_{2} + ... + \alpha_{i}.y_{i} + ... + \alpha_{n}.y_{n}}{\alpha_{1} + \alpha_{2} + ... + \alpha_{i} + ... + \alpha_{n}} 
      \end{align*} 
      Plus synthétiquement : 
      \begin{equation}
      \left\{
      \begin{array}{ll}
      x_{G}  = \displaystyle\frac{\sum\limits_{i=1}^n\alpha_{i}.x_{i}}{\sum\limits_{i=1}^n\alpha_{i}} \\
      y_{G} = \displaystyle\frac{\sum\limits_{i=1}^n\alpha_{i}.y_{i}}{\sum\limits_{i=1}^n\alpha_{i}}
      \end{array}
      \right.
      \end{equation}
      De la même manière que pour deux ou trois points, le barycentre est la moyenne des coordonnées associées à leurs coefficients. Autrement, si vous avez un ensemble de points qui ont chacun un coefficient, vous pouvez trouver à l'aide de ces formules les coordonnées du barycentre de tout système de point, à la condition de disposer des coordonnées de chaque point et de sa pondération. 
   </p>
   <p>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h3>Relations Vectorielles</h3>
    
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h4>Première relation</h4>
    
   Si $G$ est le barycentre des points $M_{i}  = (x_{i};y_{i})$, où chaque $M_{i}$ a un coefficient $\alpha_{i}$ qui lui est associé alors : 
   \begin{eqnarray}
   \alpha_{1}.\overrightarrow{M_{1}G} + \alpha_{2}.\overrightarrow{M_{2}G} + ... + \alpha_{i}.\overrightarrow{M_{i}G} + ... + \alpha_{n}.\overrightarrow{M_{n}G}  = \overrightarrow{0}  
   \end{eqnarray}
   Ou plus synthétiquement : 
   \begin{eqnarray}\label{sommenulle}
   \sum\limits_{i=1}^n\alpha_{i}.\overrightarrow{M_{i}G}  = \overrightarrow{0}  
   \end{eqnarray}
   Cette relation vectorielle implique que pour l'ensemble des points $M_{i}$ du système, si on construit le vecteur qui va de chaque point vers le barycentre, que l'on multiplie chacun par le coefficient du point associé au vecteur, alors la somme des vecteurs est nulle. 
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h4>Deuxième relation</h4>
   Soit $P$ un point du plan, distinct de $G$, et des  $M_{i}$. Alors : 
   \begin{eqnarray}
   \sum\limits_{i=1}^n\alpha_{i}.\overrightarrow{PM_{i}}=\left(\sum\limits_{i=1}^n\alpha_{i}\right).\overrightarrow{PG}
   \end{eqnarray}
   Si le point $P$ se confond avec $G$ alors dans ce cas, cela revient à la relation vectorielle précédente. 
   \newpage
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% Espace-->
   <h2>L'Espace</h2>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h3>Système de deux points</h3>
   Étudier les barycentres dans l'espace c'est "simplement" rajouter une dimension pour les points que l'on analyse. Soit un point de l'espace $M$, alors ses coordonnées sont  : 
   \begin{eqnarray*}
   M  = (x ; y ; z)  
   \end{eqnarray*}
   Où $x$ représente l'abscisse, le $y$ l'ordonnée et le $z$ la cote, ou hauteur. On va donc choisir deux points de l'espaces qui s'écrivent de la forme : 
   \begin{eqnarray*}
   M_{i}  = (x_{i} ; y_{i} ; z_{i})  \text{ pour } i = 1,  2 ;
   \end{eqnarray*}
   Dans ce premier cas, on a $i$ qui vaut $1$ ou $2$, si on dispose d'un système de deux points.  $M_{1}$ et $M_{2}$, chacun affecté d'une pondération $\alpha_{1}$ et $\alpha_{2}$ respectivement. On dispose donc d'un système de deux points pondérés par des coefficients : 
   \begin{equation}
   \mathbf{S} = \{(M_{1},\alpha_{1});(M_{2},\alpha_{2}) \} 
   \end{equation}
   Pour calculer les coordonnées du barycentre de ces deux points, la formule utilisée est une extension de celle en deux dimensions aux trois dimensions de l'espace. On obtient donc les trois coordonnées du barycentre de $	\mathbf{S} $ : 
   \begin{eqnarray}
   x_{G}  = \displaystyle\frac{\alpha_{1}.x_{1} + \alpha_{2}.x_{2}}{\alpha_{1} + \alpha_{2}} && \text{ = l'abscisse de } G \\
   y_{G} =  \displaystyle\frac{\alpha_{1}.y_{1} + \alpha_{2}.y_{2}}{\alpha_{1} + \alpha_{2}} && \text{ = l'ordonnée de } G \\
   z_{G} =  \displaystyle\frac{\alpha_{1}.z_{1} + \alpha_{2}.z_{2}}{\alpha_{1} + \alpha_{2}} && \text{ = la hauteur de } G 
   \end{eqnarray} 
   De la même manière qu'en dimension deux, on obtient les coordonnées dans l'espace du point $G$ barycentre du système défini par les points $M_{1}$ et $M_{2}$ associé à leurs coefficients réels. 
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h3>Système de trois points   </h3>
   Le système à étudier est maintenant composé de trois points : $M_{1}$, $M_{2}$ et $M_{3}$. Avec leurs coefficients respectifs : $\alpha_{1}$, $\alpha_{2}$ et $\alpha_{3}$. 
   </p>
   <p>
      Alors le système s'écrit : 
      \begin{equation}
      \mathbf{S} = \{(M_{1},\alpha_{1});(M_{2},\alpha_{2});(M_{3},\alpha_{3}) \} 
      \end{equation}
      Et les coordonnées du barycentre de ces trois points est donné par ces formules : 
      \begin{eqnarray}\label{coord3DBar}
      x_{G}  = \frac{\alpha_{1}.x_{1} + \alpha_{2}.x_{2} + \alpha_{3}.x_{3}}{\alpha_{1} + \alpha_{2} + \alpha_{3}} && \text{ = l'abscisse de } G \\
      y_{G} =  \frac{\alpha_{1}.y_{1} + \alpha_{2}.y_{2} + \alpha_{3}.y_{3}}{\alpha_{1} + \alpha_{2} + \alpha_{3}} && \text{ = l'ordonnée de } G \\
      z_{G} =  \frac{\alpha_{1}.z_{1} + \alpha_{2}.z_{2} + \alpha_{3}.z_{3}}{\alpha_{1} + \alpha_{2} + \alpha_{3}} && \text{ = la hauteur de } G \\
      \end{eqnarray} 
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h3>Système plus de trois points</h3>
   Dan ce cas on utilise des notations permettant de jouer avec $n$ points et leur coefficients respectifs. On dispose donc de $n$ points : les points $M_{i}$ pour $i$ allant de 1 à $n$. Et les coefficients $\alpha_{i}$ pour le même $i$. 
   </p>
   <p>
      On dispose donc d'un système de $n$ points : 
      \begin{eqnarray}
      \mathbf{S} = \{(M_{i};\alpha_{i}) ; i = 1, ... n \} 
      \end{eqnarray}
      Où chaque point $M_{i}$ s'exprime comme suit, dans l'espace : 
      \begin{eqnarray*}
      M_{i}  = (x_{i} ; y_{i} ; z_{i})  \text{ pour } i = 1,  2 ;
      \end{eqnarray*}
      Et chaque $	M_{i}$ a un coefficient $\alpha_{i}$ qui lui est associé. 
      On peut  donc obtenir les coordonnées du barycentre $G$ de ce système $\mathbf{S}$. Pour cela on a les formules suivantes : 
      \begin{align*}
      &x_{G}  = \frac{\alpha_{1}.x_{1} + \alpha_{2}.x_{2} + ... + \alpha_{i}.x_{i} + ... + \alpha_{n}.x_{n}}{\alpha_{1} + \alpha_{2} + ... + \alpha_{i} + ... + \alpha_{n}} \\
      &y_{G} =  \frac{\alpha_{1}.y_{1} + \alpha_{2}.y_{2} + ... + \alpha_{i}.y_{i} + ... + \alpha_{n}.y_{n}}{\alpha_{1} + \alpha_{2} + ... + \alpha_{i} + ... + \alpha_{n}} \\
      &z_{G} =  \frac{\alpha_{1}.z_{1} + \alpha_{2}.z_{2} + ... + \alpha_{i}.z_{i} + ... + \alpha_{n}.z_{n}}{\alpha_{1} + \alpha_{2} + ... + \alpha_{i} + ... + \alpha_{n}} 
      \end{align*} 
      Noté plus synthétiquement : 
      \begin{equation}\label{barXYZ3DNpoints}
      \left\{
      \begin{array}{ll}
      x_{G}  = \displaystyle\frac{\sum\limits_{i=1}^n\alpha_{i}.x_{i}}{\sum\limits_{i=1}^n\alpha_{i}} \\
      y_{G} = \displaystyle\frac{\sum\limits_{i=1}^n\alpha_{i}.y_{i}}{\sum\limits_{i=1}^n\alpha_{i}} \\
      z_{G} = \displaystyle\frac{\sum\limits_{i=1}^n\alpha_{i}.z_{i}}{\sum\limits_{i=1}^n\alpha_{i}}
      \end{array}
      \right.
      \end{equation}

   <hr/>

      
   <br>
   <hr>
   <a href="chapitre-9-les-barycentres-et-polynomes-de-bernstein-chapitre2.php">Page suivante &rarr;</a><br>
   <a href="index.php">Index &uarr;</a><br>
   
<?php  include 'pieddepage.php';?>