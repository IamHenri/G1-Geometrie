<?php  include 'entete.php';?>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
  
   <p class="a rotatedFloralHeartBullet"></p>

   <p>
   <h1>2 - Les barycentres</h1>

   <h2>Hypothèses, Définitions et théorèmes</h2>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h3>Hypothèses</h3>
   Cette section théorique reprend les différentes définitions et théorèmes de ce document pour en faire un résumé. L'ensemble de ce qui est cité dans cette section est déjà dit dans le document. Ici vous retrouverez le condensé des définitions et formules nécessaires à l'utilisation des barycentres. 
   </p>
   <p>
      Soit un ensemble d'au moins deux points :
   </p>
   <p>
      $\{M_{1}, ... , M_{n}\}\text{ , } \text{avec } n \text{ entier tel que } n \geq 2$.
   </p>
   <p>
      Appelons chaque point  $M_{1}$ à $M_{n}$ et le point  $M_{i}$ pour $i$ prenant ses valeurs entières entre $1$ et $n$. Et posons maintenant les coordonnées de ces points dans le plan :
      \begin{eqnarray*}
      M_{i} = (x_{i};y_{i}) \text{ dans le repère } (O;\vec{i};\vec{j})
      \end{eqnarray*}
      Dans l'espace :
      \begin{eqnarray*}
      M_{i} = (x_{i};y_{i};z_{i}) \text{ dans le repère } (O;\vec{i};\vec{j};\vec{k})
      \end{eqnarray*}
      Par exemple si $i=2$ et $n=3$, alors on parle du point $M_{2}$ alors ses coordonnées sont $M_{2} = (x_{2};y_{2})$, dans le plan, parmi un ensemble de $3$ points ($n=3$ implique trois points $M_{1}, M_{2} \text{ et }  M_{3}$). $M_{2} = (x_{2};y_{2};z_{2})$ dans l'espace.
   </p>
   <p>
      On dispose donc de $n$ points $M_{i}$. 
   </p>
   <p>
      A chacun de ces points, on associe maintenant un poids, en général non nul, qui peut prendre des valeurs négatives. Appelons pour chaque point  $M_{i}$ son poids :  $\alpha_{i}$. 
   </p>
   <p>
      On a donc un système de $n$ points, ayant chacun un poids. 
   </p>
   <p>
      Pour déterminer le barycentre d'un système de points, il faut vérifier un élément : la somme des poids du système doit être non nulles. 
   </p>
   <p>
      Autrement dit: 
      \begin{eqnarray*}
      \alpha_{1} + \alpha_{2} + \alpha_{3} + ... + \alpha_{i} +  ... + \alpha_{n} \neq 0
      \end{eqnarray*}
      Ce que l'on écrit de manière plus concise : 
      \begin{eqnarray}
      \sum_{i=1}^n\alpha_{i} \neq 0
      \end{eqnarray}
      Si jamais la somme de toutes les pondérations $\alpha_{i}$ est nulle, alors il n'est pas possible de déterminer le barycentre de ce système : tout point du plan de l'espace est un barycentre de ce système. On peut voir ce système comme ne pesant rien. 
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   </p>
      
   <p>
      Pour ce système $\mathbf{S}$ des points  $M_{i}$ et de leurs coefficients. On a : 
      \begin{eqnarray}
      \mathbf{S} = \{(M_{i};\alpha_{i}) ; i = 1, ... n \} 
      \end{eqnarray}
      On a coordonnées du barycentre $G$ de ce système $\mathbf{S}$ dans $\mathbb{R}^{3}$ : 
     

      \begin{equation}
      \left\{
      \begin{array}{ll}
      x_{G}  = \displaystyle\frac{\sum\limits_{i=1}^n\alpha_{i}.x_{i}}{\sum\limits_{i=1}^n\alpha_{i}} \\
      y_{G} = \displaystyle\frac{\sum\limits_{i=1}^n\alpha_{i}.y_{i}}{\sum\limits_{i=1}^n\alpha_{i}} \\
      z_{G} = \displaystyle\frac{\sum\limits_{i=1}^n\alpha_{i}.z_{i}}{\sum\limits_{i=1}^n\alpha_{i}}
      \end{array}
      \right.
      \end{equation}   </p>

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
   <p>
   <h3>Définitions</h3>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h4>Repère :</h4>
      Par repère il est entendu repère cartésien orthonormé direct. Dans le cas où un repère ne correspond pas à ces critères cela sera explicitement signifié.
   </p>
   <p>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h4>Coordonnées : </h4>
   </p>
   <p>
      Toutes les coordonnées utilisées sont les coordonnées cartésiennes. Elles sont déclinées selon l'espace dans lequel on travail : la droite, le plan, l'espace tridimensionnel, ou au delà. 
   </p>
   <p>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h4>Point : </h4>
   </p>
   <p>
      Un point est définit par des coordonnées dans un repère donné. Un point n'a pas de taille. Dans les dessins, la taille des points représente le poids théorique, mais ne correspond pas à la réalité. On assimilera tout objet pondéré à un point. Si on considère un champ dans lequel paissent des vaches. En admettant qu'on ait $n$ vaches, le barycentre des vaches sera un point donné, du moment que la somme du poids des vaches est non nul. Et dans ce cas on assimile chaque vache à un point. En général son centre de gravité. Mais la question se pose, comment calculer le centre de gravité d'une vache. Cela vient à calculer le barycentre pour des milieux continus. 
   </p>
   <p>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h4>Système de points : </h4>
   </p>
   <p>
      Un système de points est un ensemble de points dont chacun a un coefficient réel. i.e un ensemble de points qui ont un poids qui peut être négatif. 
   </p>
   <p>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h4>Pondération : </h4> 
   </p>
   <p>
      Une pondération est toujours associée à un point. Réciproquement, lorsque l'on étudie les barycentres, à tout point est associé une telle valeur. Elle est quelconque et appartient à $\mathbb{R}$. 
   </p>
   <p>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h4>Barycentre : </h4>
   </p>
   <p>
      Soit le système $\mathbf{S} $ définit comme un ensemble de points $M_{i}$ et de leurs coefficients $\alpha_{i}$ respectifs. On écrit : 
      \begin{eqnarray}
      \mathbf{S} = \{(M_{i};\alpha_{i}) ; i = 1, ... n \} 
      \end{eqnarray}
      A partir de ceci,  le point $G$ est le barycentre du système $\mathbf{S}$ si la relation vectorielle suivante est vérifiée : 
      \begin{eqnarray}
      \alpha_{1}.\overrightarrow{M_{1}G} + \alpha_{2}.\overrightarrow{M_{2}G} + ... + \alpha_{i}.\overrightarrow{M_{i}G} + ... + \alpha_{n}.\overrightarrow{M_{n}G}  = \overrightarrow{0}  
      \end{eqnarray}
      Ou plus synthétiquement : 
      \begin{eqnarray}
      \sum\limits_{i=1}^n\alpha_{i}.\overrightarrow{M_{i}G}  = \overrightarrow{0}  
      \end{eqnarray}
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h4>Isobarycentre : </h4>
   </p>
   <p>
      Un isobarycentre est caractérisé par les poids affectés aux points du système. Si tous les poids sont égaux, alors le barycentre du système est appelé isobarycentre. 
   </p>
   <p>
      Dans le cas d'un segment, où chacun des points a le même poids, le barycentre de ce segment sera le milieu de celui-ci. 
   </p>
   <p>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h4>Segment : </h4>
   </p>
   <p>
      Soient maintenant deux points $A$ et $B$. Pour définir le segment $\left[AB\right]$ on peut encore utiliser la notion de barycentre. Il faut faire une hypothèse préalable : les deux poids sont de mêmes signes. Alors, dans ce cas, ce segment est l'ensemble des barycentres de ces deux points. 
   </p>
   <p>
      De la même manière qu'une droite, il faut imaginer que les poids peuvent prendre toutes les valeurs possibles, du moment qu'ils ont le même signe. Dans ce cas, on peut remarquer que pour deux points, si leurs coefficients sont de mêmes signes alors le barycentre sera toujours entre ces deux points. 
   </p>
   <p>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h4>Droite : </h4>
   </p>
   <p>
      Une droite est définie par deux points. Posons $A$ et $B$ ces deux points. On peut définir la droite $(AB)$ comme étant l'ensemble des barycentres de ces deux points. 
   </p>
   <p>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h5>Explication</h5> 
   Fixons deux points dans le plan : $A$ et $B$. Chaque coefficient de chaque point est une valeur réelle. C'est à dire que chaque coefficient peut prendre n'importe quelle valeur réelle. Pour chaque couple de valeurs affectées aux deux points, on trouvera un barycentre. Si on calcule chaque barycentre de chaque combinaison possible de coefficients, alors l'ensemble de tous ces barycentres définissent la droite $(AB)$. Une manière réciproque de voir les choses, est de se dire que quelque soit un point de la droite $(AB)$, il existera toujours deux coefficients associés à $A$ et à $B$ tels que le point choisit soit le barycentre. 
   Cette notion de droite est valable quelque soit la dimension de l'espace dans lequel on travaille. 
   </p>
   <p>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h4>Plan : </h4>
   </p>
   <p>
      Soient trois points distincts $A$, $B$ et $C$ de l'espace. Alors le plan $(ABC)$ est l'ensemble des barycentres de ces trois points. 
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h2>Théorèmes</h2>
   L'ensemble des théorèmes et propositions citées ici sont appliqués en trois dimensions, quelque soit le nombre de points en jeu et la valeur de leurs coefficients. 
   </p>
   <p>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h3>Hypothèses : </h3>
   On dispose de $n$ points $M_{i}$ dans l'espace à trois dimensions. Chaque point $M_{i}$ a un coefficient $\alpha_{i}$ et ses coordonnées sont  $M_{i} = ( (x_{i} ; y_{i} ; z_{i})$ pour $i = 1, ...,  n ;$.
   </p>
   <p>
      De plus la somme des coefficients du système est non nulle : 
      \begin{eqnarray}
      \alpha_{1} +  ... + \alpha_{n} \neq 0
      \end{eqnarray}
      Ce que l'on écrit de manière plus concise : 
      \begin{eqnarray}
      \sum_{i=1}^n\alpha_{i} \neq 0
      \end{eqnarray}
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h3>Proposition :</h3>
   Soit un ensemble de points pondérés dont la somme est non nulle et leur barycentre. Alors, si on multiplie toutes les pondérations des points par un même nombre, alors le barycentre des points reste le même. 
   </p>
   <p>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h3>Proposition :</h3>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h4>Associativité des Barycentres</h4>
   </p>
   <p>
      Soient deux systèmes de points $\mathbf{S_{1}}$ et $\mathbf{S_{2}}$. On pose : 
      \begin{eqnarray}
      \mathbf{S_{i}} = \{(M^{i}_{j};\alpha^{i}_{j}) ; j = 1, ... n \} \text{ pour } i = 1, 2 ;
      \end{eqnarray}
      Soient $G_{1}$ et $G_{2}$ les barycentres des systèmes  $\mathbf{S_{1}}$ et $\mathbf{S_{2}}$ respectivement, alors, si : 
      \begin{eqnarray}
      \sum\limits_{i=1}^n\alpha^{1}_{i} + \sum\limits_{i=1}^n\alpha^{2}_{i} =		\sum\limits_{j=1}^2\sum\limits_{i=1}^n\alpha^{j}_{i}  \neq 0
      \end{eqnarray}
      Alors si $G$ est le barycentre de  $G_{1}$ et $G_{2}$ alors il est le barycentre du système $\mathbf{S}$, où 
      \begin{eqnarray}
      \mathbf{S} = \mathbf{S_{1}} \bigcup \mathbf{S_{2}}
      \end{eqnarray}
      Autrement dit, le barycentre de  $G_{1}$ et $G_{2}$ est aussi celui de tous les points des deux systèmes $\mathbf{S_{1}}$ et $\mathbf{S_{2}}$. A la condition que la somme de tous les points des deux système ne soit pas nulle. 
   </p>
   <hr/>

      
   <br>
   <hr>
   <a href="chapitre-9-les-barycentres-et-polynomes-de-bernstein-chapitre3.php">Page suivante &rarr;</a><br>
   <a href="index.php">Index &uarr;</a><br>
   
<?php  include 'pieddepage.php';?>