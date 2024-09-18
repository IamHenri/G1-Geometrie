<?php  include 'entete.php';?>
  <p class="a rotatedFloralHeartBullet">
    <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% whiteRightPointingIndex -->
  </p>
  <p>
    <h1>Le déterminant</h1>
    <ul>
      <li><a href="#contexte">Contexte</a></li>
      <li><a href="#lfddeterminant">La formule du déterminant</a></li>
      <li><a href="#explicationSchema">Schémas explicatifs</a></li>
      <li><a href="#prllgrm">Un parallélogramme</a></li>
      <li><a href="#prllgrsens">Un parallélogramme orienté</a></li>
      <li><a href="#produitvectoriel">Le produit vectoriel</a></li><!-- 
      <li><a href="#applicationmatrice">Calcul du déterminant des matrices</a></li> -->
      <li><a href="#applicationsysteme">Résolution des système linéaires</a></li>
      <li><a href="#applicationsystemededimensionN">Résolution des système linéaires de taille $n\geq 3$</a></li>
	</ul>
	  </p>

	  <p>
	  
      <h2 id="contexte">Contexte</h2>
	  Bien que les matrices existent depuis presque $2500$ ans, Ce n'est que beaucoup plus tard que le déterminant fit son apparition. Au $XIX^{ème}$ siècle avec Jacobi ou Cauchy. Son utilisation est multiple, il permet de résoudre des systèmes d'équations, de dire si une matrice a un inverse, de calculer des surfaces. Cet outil est une des briques des mathématiques, aussi fondamental que le reste. Pour une histoire plus complète et détaillée sur le déterminant et les matrices <a href="https://sinegre.pagesperso-orange.fr/hist/det.pdf" target="_blank">voir ce texte</a>. 
	  </p>

	  <p>
	  
	  Cette vidéo sur Youtube explique bien ce qu'est le déterminant d'un point de vue visuel. La suite de cette page web vous permettra d'avoir l'essentiel des formules et de pouvoir les travailler. 
	  </p>

	  <p>
	  <iframe width="560" height="315" src="https://www.youtube.com/embed/Ip3X9LOh2dk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <h2 id="lfddeterminant">La formule du déterminant</h2>
	  Soient deux vecteurs dans le plans munis de leurs coordonnées cartésiennes. Soient 
	  
      $$
      \begin{align}
      \vec{u} =
      \left( \begin{array}{ccc}
      u_{x} \\
      u_{y} \\
      \end{array} \right) ; \text{ et } 	
	  \vec{v} =
      \left( \begin{array}{ccc}
      v_{x} \\
      v_{y} \\
      \end{array} \right)  ;
      \end{align}
      $$
	  Alors, le déterminant des deux vecteurs $ \vec{u} $ et $  \vec{v} $ est donné par la formule suivante : 
	  $$
      \begin{align}
      \det(\vec{u},\vec{v}) =u_{x} .  v_{y} - u_{y} .  v_{x}
      \end{align}
      $$
	  On note : 
	  $$
	  \det(\vec{u},\vec{v}) = \begin{vmatrix} u_{x} & u_{y} \\ v_{x} & v_{y} \end{vmatrix}
	  $$
	  Le résultat du déterminant de deux vecteurs est un nombre réel. Qui peut être positif, négatif ou nul. 
	  </p>

	  <p> 

	  <p> 
	  
      <h2 id="explicationSchema">Schemas explicatifs - <a href="#">up</a></h2>
	  
	  En détail et en image pour être le plus clair possible. Tout d'abord, soit la matrice $M$, carrée, de dimension $2 \times 2$. Où $a, b, c$ et $d$ sont des nombres réels. 
	  </p>

	  <p> 
	   Le déterminant d'une matrice est noté de manière générique $\det(M)$ soit on utilise la forme matricielle encadrée par deux lignes verticales, une de chaque coté comme on le voit à droite de l'égalité. 
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/Determinant-matrice-01.png?raw=true" width=30%>
   
	  </p>

	  <p> 
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/Determinant-notation-matrice-2x2.png?raw=true" width=50%>
   
   
	  </p>

	  <p> 
   
   Pour finir, la méthode de calcul du déterminant d'une matrice carrée de dimension $2 \times 2$: 
   <ul>
      <li>On calcule le produit $a$ par $d$;</li>
      <li>On calcule le produit $b$ par $c$;</li>
      <li>On retranche le deuxième du premier.</li>
   </ul>
   
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/Determinant-formule-construction.png?raw=true" width=40%>
	  </p>
	  <p>
	  Cette formule donne le déterminant des deux vecteurs :
	  $$
      \begin{align}
      \vec{u} =
      \left( \begin{array}{ccc}
      a\\
      b \\
      \end{array} \right) ; \text{ et } 	
	  \vec{v} =
      \left( \begin{array}{ccc}
      c \\
      d \\
      \end{array} \right)  ;
      \end{align}
      $$
	
	  
	    </p>

	  <p> 
	  
 
      <h2 id="lfddeterminant">Proprietes du determinant - <a href="#">up</a></h2>
	  <h3>Non commutativité</h3>
	  $$
	  det(\vec{u},\vec{v}) = - det(\vec{v},\vec{u})
	  $$
	  Démonstration triviale.
	  
	  $$	  
      \begin{align}
		det(\vec{u},\vec{v}) & = u_{x} .  v_{y} - u_{y} .  v_{x} \\
		& = -(-u_{x} .  v_{y} + u_{y} .  v_{x}) \\
		& 	  =  -(u_{y} .  v_{x}-u_{x} .  v_{y}) \\
		& 	  =  -( v_{x}. u_{y}  - v_{y}.u_{x} ) \\
		& = - det(\vec{v},\vec{u})
      \end{align}
	  $$
	  
	  
	  <h3>Colinéarité</h3>
	 Si $det(\vec{u},\vec{v}) = 0$ alors les vecteurs sont colinéaires. 
	  </p>

	  <p>
	  La démonstration est laissée en exercice. 
	  </p>

	  
	  <h3>Inversibilité</h3>
	  <p>
	  Une matrice est inversible si et seulement si son déterminant est non nul. 
	  </p>

	  
	  <h3>Liberté d'une famille de vecteurs</h3>
	  <p>Le déterminant permet de savoir si une famille de vecteurs est libre. En calculant le déterminant de cette famille de vecteurs, si il est nul la famille n'est pas libre. On renvoie aux notions d'algèbre linéaire et plus particulièrement des espaces vectoriels, de leurs bases, des familles génératrices et autres notions dont le nom est aussi compliqué qu'elles sont simples. 
	 
	 
	  <h3>Déterminant d'une matrices</h3>
	  Le déterminant est à la base du calcul des matrices de tailles supérieures. La première fois que l'on voit la formule, elle peut être surprenante dans sa construction. Son principe est relativement simple quand on a compris la paterne sous jacente. Avant le calcul du déterminant d'une matrice, on se consacrera au produit vectoriel, dont le déterminant est à la base pour le déterminer. 
	  </p>

	  <p>
	  
      <h2 id="prllgrm">Aire des parallelogrammes - <a href="#">up</a></h2>
	  Soit un parallélogramme, défini par les deux vecteurs ci dessus : 
	   $$
      \begin{align}
      \vec{u} =
      \left( \begin{array}{ccc}
      a\\
      b \\
      \end{array} \right) ; \text{ et } 	
	  \vec{v} =
      \left( \begin{array}{ccc}
      c \\
      d \\
      \end{array} \right)  ;
      \end{align}
      $$
	  A l'aide de ces deux vecteurs, on peut construire un parallélogramme. Comme représenté ci-dessous. La surface de ce parallélogramme est donnée par le déterminant des deux vecteurs $\vec{u}$ et $\vec{v}$. Plus exactement par la valeur absolue de ce déterminant. 
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/Determinant-parallelogramme-surface.png?raw=true" width=50%>
   Soit $\mathcal{A}$ l'aire du parallélogramme, alors on a toujours : 
	$$
	\mathcal{A} = \det (\vec{u};\vec{v}) = |ad-bc|
	$$
	  </p>

	  <p>
	  
      <h2 id="prllgrsens">Un parallelogramme oriente - <a href="#">up</a></h2>
	  En revanche si on regarde la valeur de la surface avec le signe, sans la valeur absolue autrement dit, on s'aperçoit que l'on peut trouver des valeurs négatives. D'où la valeur absolue. On en mesure pas des surfaces négativement. En revanche ici, le déterminant peut avoir une valeur négative. Par exemple si on prend : 
	     $$
      \begin{align}
      \vec{u} =
      \left( \begin{array}{ccc}
      1\\
      2 \\
      \end{array} \right) ; \text{ et } 	
	  \vec{v} =
      \left( \begin{array}{ccc}
      2 \\
      1 \\
      \end{array} \right)  \text{ avec  }  \det (\vec{u};\vec{v}) = 1.1-2.2 = -3
      \end{align}
      $$
	  L'aire du parallélogramme défini par ces deux vecteurs est égale à $3$. En revanche que signifie la valeur $-3$. Le signe porte ici une information caractéristique de toute surface : il en donne le sens. Autrement dit, si deux vecteurs définissent une surface, le signe du déterminant dit si on se trouve face ou derrière cette surface : on a la position de l’observateur par rapport à la surface. 
	  
	  </p>
		
	  <p>
	  
	  Le déterminant de deux vecteurs permet de déterminer l'orientation d'une surface représentée dans le plan. Cette surface, est vue du dessus ou du dessous selon que le signe est positif ou négatif respectivement. 
	  
	  </p>
		  <p>

      <h2 id="produitvectoriel">Le produit vectoriel - <a href="#">up</a></h2>
	  On calcul le produit vectoriel des vecteurs de l'espace. Si on ne dispose que de vecteurs dans le plan, on rajoute une troisième coordonnée valant 0 pour avoir des vecteur à trois dimensions. On peut alors aussi en calculer le produit vectoriel. Cette opération est une combinaison des coordonnées des deux vecteurs pour en construire un troisième, les trois formant un trièdre direct. 
	  
	  </p>
		
	  <p> Soient deux vecteurs de $\mathbb{R}^{3}$ : 
	        $$
      \begin{align}
      \vec{u} =
      \left( \begin{array}{ccc}
      u_{x} \\
      u_{y} \\
      u_{z} \\
      \end{array} \right) ; \text{ et } 	
	  \vec{v} =
      \left( \begin{array}{ccc}
      v_{x} \\
      v_{y} \\
      v_{z} \\
      \end{array} \right)  ;
      \end{align}
      $$
	  Alors le résultat du produit vectoriel de ces deux vecteurs est un vecteur ayant la particularité d'être <span title="Perpendiculaire">orthogonal</span> aux deux vecteurs $\vec{u}$ et $\vec{v}$. 
	  $$
	  \vec{u} \wedge \vec{v} = \begin{vmatrix} u_{y} & v_{y}  \\ u_{z}& v_{z} \end{vmatrix} . \vec{i} +\begin{vmatrix} u_{z} & v_{x}\\ u_{x}  & v_{y} \end{vmatrix} . \vec{j} +\begin{vmatrix} u_{x} &  v_{x} \\ u_{y}& v_{y} \end{vmatrix} . \vec{k}  
	  $$
	  On a :  
	  $$
	  \vec{u} \wedge \vec{v} =  ( u_{y} v_{z} - u_{z} v_{y}) . \vec{i} +( u_{z}  v_{y}  - u_{x} v_{x} ) . \vec{j} +( u_{x}   v_{y} - u_{y} v_{x} ) . \vec{k}  
	  $$
	   Si on pose $\vec{w} = \vec{u} \wedge \vec{v}$ alors le trièdre $(\vec{u} ; \vec{v} ; \vec{w})$ est direct. Si $\vec{u}$ et $\vec{v}$ sont de plus orthogonaux, tous les axes du trièdre sont orthogonaux entre eux. 
	  </p>
		
	  <p>Il existe plusieurs moyen mnémotechniques pour se rappeler cette formule. Une première méthode est de prendre les deux vecteurs  $\vec{u}$ et $\vec{v}$, de "copier/coller" les deux premières coordonnées pour les rajouter à la fin, comme ceci:
	     $$
      \begin{align}
      \vec{u} =
      \left( \begin{array}{ccc}
      u_{x} \\
      u_{y} \\
      u_{z} \\
      \end{array} \right) ; \text{ et } 	
	  \vec{v} =
      \left( \begin{array}{ccc}
      v_{x} \\
      v_{y} \\
      v_{z} \\
      \end{array} \right)  \text{ donnent respectivement :  } 
	  
      \vec{u} =
      \left( \begin{array}{ccc}
      u_{x} \\
      u_{y} \\
      u_{z} \\
      u_{x} \\
      u_{y} \\
      \end{array} \right) ; \text{ et } 	
	  \vec{v} =
      \left( \begin{array}{ccc}
      v_{x} \\
      v_{y} \\
      v_{z} \\
      v_{x} \\
      v_{y} \\
      \end{array} \right) 
      \end{align}
      $$
	  Pour obtenir la première composante (coordonnée) de $\vec{w}$, on calcul le déterminant des deux suivantes : 
	  $$
	  \begin{vmatrix} u_{y} & v_{y}  \\ u_{z}& v_{z} \end{vmatrix}
	  $$
	  Pour la deuxième composante, en $\vec{j}$, on calcul le déterminant suivant : 
	  
	  $$
	  \begin{vmatrix} u_{z} & v_{x}\\ u_{x}  & v_{y} \end{vmatrix}
	  $$
	  Et pour la dernière, $\vec{z}$, on a : 
	  $$
	  \begin{vmatrix} u_{x} &  v_{x} \\ u_{y}& v_{y} \end{vmatrix}
	  $$
	  
	  
	  On obtient alors, la première composante et  donnée par le déterminant des deux suivantes, etc  : 
	  $$
      \begin{align}
      \begin{array}{ccc}
        & u_{x}&  & v_{x} &\begin{vmatrix} u_{y} & v_{y}  \\ u_{z}& v_{z} \end{vmatrix}\\
       & u_{y}&  & v_{y} & \begin{vmatrix} u_{z} & v_{x}\\ u_{x}  & v_{y} \end{vmatrix} \\
       & u_{z}&  & v_{z} & \begin{vmatrix} u_{x} &  v_{x} \\ u_{y}& v_{y} \end{vmatrix}\\
       & u_{x}&  & v_{x} & \\
       & u_{y}&  & v_{y} & \\
      \end{array}
      \end{align}
      $$
	  
	  Avec des couleurs pour ceux que ça peut aider: 
	  $$
      \begin{align}
      \begin{array}{ccc}
        & u_{x}				&  & v_{x} 				& & 			\color{red}{\begin{vmatrix} u_{y} & v_{y}  \\ u_{z}& v_{z} \end{vmatrix}}\\
       & \color{red}{u_{y}}&  & \color{red}{v_{y}} 	& \rightarrow & \begin{vmatrix} u_{z} & v_{x}\\ u_{x}  & v_{y} \end{vmatrix} \\
       & \color{red}{u_{z}}&  & \color{red}{v_{z}} 	& \rightarrow & 			\begin{vmatrix} u_{x} &  v_{x} \\ u_{y}& v_{y} \end{vmatrix}\\
       & u_{x}				&  & v_{x} 				& & 			\\
       & u_{y}				&  & v_{y} 				& & 			\\
      \end{array}
	  ;
      \begin{array}{ccc}
        & u_{x}					&  & v_{x} 					& & 			 				\begin{vmatrix} u_{y} & v_{y}  \\ u_{z}& v_{z} \end{vmatrix}\\
       & u_{y}					&  & v_{y} 					& &  \color{olive}{\begin{vmatrix} u_{z} & v_{x}\\ u_{x}  & v_{y} \end{vmatrix}} \\
       & \color{olive}{u_{z}}	&  & \color{olive}{v_{z}} 	& \rightarrow & 			 \begin{vmatrix} u_{x} &  v_{x} \\ u_{y}& v_{y} \end{vmatrix}\\
       & \color{olive}{u_{x}}	&  & \color{olive}{v_{x}} 	& \rightarrow & 			 \\
       & u_{y}					&  & v_{y} 					& & 			 \\
      \end{array}
	  ;
	  \begin{array}{ccc}
        & u_{x}					&  & v_{x} 						& & 			 				\begin{vmatrix} u_{y} & v_{y}  	\\ u_{z}	& v_{z} 	\end{vmatrix}\\
       & u_{y}					&  & v_{y} 						& &  				\begin{vmatrix} u_{z} & v_{x}	\\ u_{x}  	& v_{y} 	\end{vmatrix} \\
       & u_{z} 					&  & v_{z}    					& & 			 \color{blue}{\begin{vmatrix} u_{z} & v_{x}\\ u_{x}  & v_{y} \end{vmatrix}}\\
       & \color{blue}{u_{x}}	&  & \color{blue}{v_{x}} 		& \rightarrow& 			 \\
       & \color{blue}{u_{y}}		&  & \color{blue}{v_{y}} 	& \rightarrow & 			 \\
      \end{array}
      \end{align}
      $$
	  
<!-- 	  
	  
	 $$
      \begin{align}
      \begin{array}{ccc}
        & u_{x}&  & v_{x} & \color{orange}{\begin{vmatrix} u_{y} & v_{y}  \\ u_{z}& v_{z} \end{vmatrix}}\\
       & \color{orange}{u_{y}}&  & \color{orange}{v_{y}} & \begin{vmatrix} u_{z} & v_{x}\\ u_{x}  & v_{y} \end{vmatrix} \\
       & \color{orange}{u_{z}}&  & \color{orange}{v_{z}} & \begin{vmatrix} u_{x} &  v_{x} \\ u_{y}& v_{y} \end{vmatrix}\\
       & u_{x}&  & v_{x} & \\
       & u_{y}&  & v_{y} & \\
      \end{array} ; 
      \end{align}
      $$
	  
	   -->
	  
	  
	  </p>
		
	  <p>

	  
<!-- 	  
	  </p>
	  <h2 id="applicationmatrice">Calcul du determinant des matrices - <a href="#">up</a></h2>
	  <p>
	  
	  
	  
	  <h4>La matrice des cofacteurs</h4>
		Cette matrice est un tableau de signes, dont la répétiton suit une paterne très simple : la première case est positive, la deuxième, à droite est négative, etc. Un exemple est explicite : 
	 
		$$
		C=\left|
		\begin{array}
		+ & - & + \\
		- & + & - \\
		+ & - & + \\
		\end{array}
		\right|
		$$
	 Lorsque l'on calcule le déterminant d'une matrice $M$ d'ordre supérieur à 2, par exemple une matrice carré $3 \times 3$, on doit appliquer cette matrice des cofacteur comme un calque qui vient se superposer à $M$.
	  </p> -->
	  
	  <p>
	  
	  <h2 id="applicationsysteme">Resolution des systemes lineaires - <a href="#">up</a></h2>
	  La résolution des systèmes de $n$ équations à $n$ inconnues est rendue simple et automatisable (ce n'est pas la seule méthode) à l'aide d'une méthode appelée la méthode de Cramer. Pour commencer, on va prendre un système linéaire de deux équations à deux inconnues. Et le résoudre à l'aide de cette méthode. 
	  <p>
	  Soit le système $\mathcal{S}$ : 
	  $$
	  \begin{aligned}
		 \alpha x + \beta y & =  b_1 \\
		 \gamma x + \delta y & = b_2 \\
	 \end{aligned}
		$$
		Première chose, écrivons ce système sous forme matricielle: 
		
	  $$
	  M.X = B
		$$
		Où l'inconnue est $X$ un vecteur de $\mathbb{R}^{2}$. $M$ une matrice carrée à deux lignes et deux colonnes. Et $B$ ce que l'on appelle le second membre, un vecteur quelconque de $\mathbb{R}^{2}$. On a donc : 
	  $$
      \begin{align}
      M =
      \left( \begin{array}{ccc}
     \alpha & \beta \\
      \gamma & \delta \\
      \end{array} \right) ;	
	  X =
      \left( \begin{array}{ccc}
      x \\
      y \\
      \end{array} \right)  ; \text{ et } 	
	  B =
      \left( \begin{array}{ccc}
       b_1 \\
       b_2\\
      \end{array} \right)  ;
      \end{align}
      $$
	  </p>
	  <p>
	  La première étape de la résolution du système est de s'assurer qu'il est possible de le résoudre. A savoir, a-t-il des solutions? Pour répondre à cela on se sert du déterminant. Si le déterminant de la matrice $M$ est différetn de $0$ alors le système admet un couple de solutions. 
	  </p>
	  <p>
	  Le déterminant de $M$ : $\det (M) = \alpha \delta -\gamma \beta$. On pose $\Delta = \alpha \delta -\gamma \beta$. 
	  </p>
	  <p>
	  Il maintenant calculer le déterminant de deux autres matrice que l'on va créer à l'aide du second membre. A savoir les matrices : 
	  $$
      \begin{align}
      M_x =
      \left( \begin{array}{ccc}
      b_1 & \beta \\
      b_2 & \delta \\
      \end{array} \right)
      \end{align}
		$$
		et 
		$$	  
      \begin{align}
      M_y =
      \left( \begin{array}{ccc}
     \alpha & b_1 \\
      \gamma & b_2 \\
      \end{array} \right)	
      \end{align}
      $$
	  et
	  
	  Dont les déterminants sont respectivement : 
	  
	  
	  $$	  
      \begin{align}
		\det(M_x) & = b_1 \delta - b_2 \beta = \Delta_x \\
		\det(M_y) & = b_2 \alpha - b_1 \gamma = \Delta_y\\
      \end{align}
	  $$	  
	  </p>
	  <p>
		On obtient les solutions du système $\mathcal{S}$ : 
			  $$	  
      \begin{align}
		x = \dfrac{\Delta_x}{\Delta} \\
		y = \dfrac{\Delta_y}{\Delta}\\
      \end{align}
	  $$
	D'où l'importance que le déterminant de la matrice du système $M$ soit non nul. 
	  </p>
	  <p>
	  L'extrapolation aux systèmes de dimensions supérieures est relativement facile. Le prérequis nécessaire est de savoir calculer le déterminant des matrices d'ordre supérieur. On montre le cas général dans la suite. 
	  </p>
	  
	  
	  <h2 id="applicationsystemededimensionN">Resolution des systeme lineaires de taille $n\geq 3$- <a href="#">up</a></h2>

	<p>
	
<p>Nous pouvons maintenant généraliser la méthode ci-dessus à un système de Cramer de taille $n\geq 3$.</p>

<p>Soit $A\in M_n(\mathbf{K})$, les matrice carrée de taille $n$, $B, X \in \mathbb{R}^{n}.$ 
Soit le système d’équations à $n$ équations et $n$ inconnues, ou variables : </p>

$$
\begin{align}
a_{11}x_1 + a_{12}x_2 + \dots +a_{1n}x_n \, \,= b_1 \\
a_{21}x_1 + a_{22}x_2 + \dots +a_{2n}x_n \, \,= b_2 \\
 \, \,= \vdots \\
a_{n1}x_1 + a_{n2}x_2 + \dots +a_{nn}x_n \, \,= b_n \\
\end{align}
$$

<p>représenté sous forme d’un produit matriciel:</p>

$$
\begin{pmatrix}
 a_{11} \, \, a_{12} \, \, \dots \, \, a_{1n}  \\
 a_{21}\, \, a_{22} \, \, \dots \, \, a_{2n} \\
 \vdots \, \, \vdots \, \, \ddots \, \, \vdots \\
 a_{n1} \, \, a_{n2} \, \,  \dots \, \, a_{nn} 
 \end{pmatrix} \begin{pmatrix}
 x_{1}  \\
 x_2 \\
 \vdots  \\
 x_n \end{pmatrix}  = \begin{pmatrix}
 b_{1}  \\
 b_2 \\
 \vdots  \\
 b_n \end{pmatrix} \Leftrightarrow AX = B.
 $$
 Avec: 
 $$
 A = 
\begin{pmatrix}
 a_{11} \, \, a_{12} \, \, \dots \, \, a_{1n}  \\
 a_{21}\, \, a_{22} \, \, \dots \, \, a_{2n} \\
 \vdots \, \, \vdots \, \, \ddots \, \, \vdots \\
 a_{n1} \, \, a_{n2} \, \,  \dots \, \, a_{nn} 
 \end{pmatrix} , X =  \begin{pmatrix}
 x_{1}  \\
 x_2 \\
 \vdots  \\
 x_n \end{pmatrix} , B  = \begin{pmatrix}
 b_{1}  \\
 b_2 \\
 \vdots  \\
 b_n \end{pmatrix}
 $$

<p>
Ce système admet une solution unique   $X = (x_1, x_2, \dots, x_i, \dots, x_n)$ si seulement si la matrice $A$ est inversible $\Leftrightarrow \det(A) \neq 0$. On peut exprimer chaque $x_i$ sous la forme:</p>

$$
x_i = \frac{\det(A_i)}{\det(A)}, \quad i = 1, \dots, n,
$$

<p>où $A_i$ est la matrice carrée formée en remplaçant la $i$-ème colonne de $A$ par le vecteur $B$. Un exemple en dimension $3$ est plus parlant, bien que celui en dimension $2$ résume bien le principe. </p>
	</p>
  <br>
  <hr>
  <a href="index.php">Retour à l'accueil &rarr;</a><br>

  <script src="jsfile/jquery.js"></script>
  <script src="jsfile/modernizr.js"></script>
  <script src="jsfile/dih5.js"></script>
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