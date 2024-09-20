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
   
   
   
      <!--  %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
         %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
         %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
         %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
         %L'opérateur <i>Nabla}
         %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <p>
   <h2>L'opérateur <i>Nabla</i>: $\nabla$</h2>
   <h3>Présentation</h3>
   L'opérateur  $\nabla$  est un vecteur dont les composantes sont des "opérations" ou "transformations" appliquées aux fonctions, comme par exemple la dérivation et non des nombres ou des fonctions numériques. On sort du cadre habituel des vecteurs à composantes réelles avec l'opérateur $\nabla$ on peut définir une grande quantité d'opérateurs différentiels. Notamment ceux cités ici. </p>
   <p>
      Cet opérateur permet de définir chaque opérateur vu ici, la divergence c'est le produit scalaire appliqué à un champ de vecteur, le gradient est une multiplication du $\nabla$ par une fonction scalaire et le rotationnel est le produit vectoriel du $\nabla$ par un champ de vecteur. Ces notations seront présentées ici.
   <h3>Théorie</h3>
   Cet opérateur est défini selon la fonction à laquelle il s'applique. On se place dans $\mathbb{R}^{3}$, muni de sa base canonique  $(\vec{i} ; \vec{j}$ ; $\vec{k})$, alors, l'opérateur $\nabla$ s'écrit : 
   \begin{align}
   \nabla = \frac{\partial}{\partial x}.\vec{i} + \frac{\partial}{\partial y}.\vec{j} + \frac{\partial}{\partial z}.\vec{k}
   \end{align}
   On peut appliquer cet opérateur à toute fonction à n variables, qu'elle soit scalaire ou qu'elle définisse un champ de vecteurs. </p>
   <p>
   <h4>Application à une fonction scalaire</h4>
   Soit une fonction scalaire $f$ définie comme suit : 
   \begin{align*}
   f : &\mathbb{R}^{3}    \longrightarrow   \mathbb{R}\\
   &(x;y;z)  \longmapsto   f(x;y;z)\\
   \end{align*}
   Alors $f$ définit ici un champ de vecteur de $\mathbb{R}^{3}$ dans $\mathbb{R}$ : 
   \begin{align*}
   \overrightarrow{\nabla} . f =  \frac{\partial f(x;y;z)}{\partial x}.\vec{i} + \frac{\partial f(x;y;z)}{\partial y}.\vec{j} + \frac{\partial f(x;y;z)}{\partial z}.\vec{k}
   \end{align*}
   <b>Lorsque l'on applique l'opérateur $\nabla$ à une champ scalaire, on obtient un champ de vecteurs, dont les composantes sont les dérivées partielles de la fonction scalaire par rapport à chacune de ses variables.</b>
   </p>
   <p>
   <h4>Application à un champ de vecteurs</h4>
   Soit  $\overrightarrow{E}$ le champ de vecteurs défini par  : 
   \begin{align*}
   E : &\mathbb{R}^{3}    \longrightarrow   \mathbb{R}^{3} \\
   &(x;y;z)  \longmapsto   (\overrightarrow{E}_{1}(x;y;z);\overrightarrow{E}_{2}(x;y;z);\overrightarrow{E}_{3}(x;y;z))\\
   \end{align*}
   Alors $\overrightarrow{E}$ définit ici un champ de vecteur de $\mathbb{R}^{3}$ dans $\mathbb{R}^{3}$ : 
   \begin{align*}
   \overrightarrow{\nabla} . \overrightarrow{E} =  \frac{\partial \overrightarrow{E}_{1}(x;y;z)}{\partial x} + \frac{\partial \overrightarrow{E}_{2}(x;y;z)}{\partial y} + \frac{\partial \overrightarrow{E}_{3}(x;y;z)}{\partial z}
   \end{align*}
   Lorsque l'on applique l'opérateur $\nabla$ à un champ de vecteur, on obtient un scalaire. On peut voir l'opération $\overrightarrow{\nabla} . \overrightarrow{E}$ comme un produit scalaire. Le résultat est donc un nombre réel. 
   </p>
   <p>
   <h3>Application</h3>
   L'opérateur $\nabla$ est un opérateur qui permet de noter les opérateurs utilisés en physique et présentés dans ce document. </p>
   <p>
      Soit une fonction scalaire $f$ et  $\overrightarrow{E}$ un champ de vecteurs. On peut ainsi définir les trois opérateurs décrits dans ce document : 
      <!-- 
         %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
         %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
         %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
         %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
         %L'opérateur Divergence
         %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h4>Divergence</h4>
      }
      On note : 
      \begin{align*}
      \nabla . f = \overrightarrow{div.f}
      \end{align*}
      $\longmapsto $ un vecteur appliqué à un scalaire donne un vecteur. 
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
         %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
         %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
         %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
         %L'opérateurGradient
         %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
     <h4>Gradient</h4>
      On note : 
      \begin{align*}
      \nabla . \overrightarrow{E} = \overrightarrow{grad}.\overrightarrow{E}
      \end{align*}
      $\longmapsto $ un vecteur appliqué à un vecteur  donne un scalaire. 
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
         %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
         %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
         %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
         %L'opérateur Rotationnel
         %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
     <h4>Rotationnel</h4>
      On note : 
      \begin{align*}
      \nabla \wedge \vec{A} = \overrightarrow{rot\overrightarrow{E}}
      \end{align*}
      $\longmapsto $ le produit vectoriel de deux vecteurs est un vecteur. 
    </p>
   <p><h5>Notations
   </h5>
      La manière de noter l'application du $\nabla$ peut avoir différentes notations. Surtout avec les opérateurs littéraux tels que "$\overrightarrow{div}$" ou "$div"$, $"\overrightarrow{grad}"$ et "$\overrightarrow{rot}$". A partir du moment ou on sait l'objet sur lequel on applique le $\nabla$, on sait l'objet que l'on obtient. Il faut bien noter que certaines opérations sont impossibles. Par exemple on ne peut pas calculer le rotationnel de la divergence d'un champ de vecteur... 
   <h5>Exercice
   </h5> Le vérifier. 
   <h5>Solution
   </h5> : La divergence d'un champ de vecteurs est un scalaire. Le rotationnel s'obtient en opérant un produit vectoriel entre le $\nabla$ et le vecteur auquel il est censé s'appliquer. Le produit vectoriel d'un vecteur par un scalaire est impossible. . 
   <!-- 
      %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
      %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
      %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
      %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
      %L'opérateur Divergence
      %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
       -->
   <h2>Divergence</h2>
   <h3>Présentation</h3>
   Comme nous l'avons vu, pour un champ de vecteur $\overrightarrow{F}$. La divergence d'un champ de vecteur donne un scalaire. On suppose $\overrightarrow{F}$ dérivable au moins deux fois sur tout $\mathbb{R}^{3}$. </p>
   <p>
      Cet opérateur permet de mesurer ce qu'on pourrait appeler (abusivement) la densité du champ vectoriel. 
      <!-- 
         %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
         %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
         %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h3>Théorie</h3>
   Pour exprimer la divergence d'un champ de vecteurs on se place soit dans le plan soit dans l'espace. Dans le plan, on va étudier des champs de vecteur définis par des fonctions de $\mathbb{R}^{3}$ dans $\mathbb{R}^{3}$ et dans l'espace, de $\mathbb{R}^{3}$ dans $\mathbb{R}^{3}$
   <h4>Dans le plan</h4>
   \begin{align*}
   F : &\mathbb{R}^{2}    \longrightarrow   \mathbb{R}^{2}\\
   &(x;y)  \longmapsto 	\left( \begin{array}{ccc}
   f_{1}(x;y) \\
   f_{2}(x;y) \\
   \end{array} \right) ;\\
   \end{align*}
   On chaque point du plan $(x;y)$ on associe un vecteurs $\overrightarrow{V_{f}}$ de coordonnées
   $$ 
   \overrightarrow{V_{f}} =f_{1}(x;y).\vec{i} + f_{2}(x;y).\vec{j} = 	\left( \begin{array}{ccc}
   f_{1}(x;y) \\
   f_{2}(x;y) \\
   \end{array} \right) ;\\
   $$
   <h4>Dans l'espace</h4>
   \begin{align*}
   F : &\mathbb{R}^{3}    \longrightarrow   \mathbb{R}^{3}\\
   &(x;y;z)  \longmapsto 	\left( \begin{array}{ccc}
   f_{1}(x;y;z) \\
   f_{2}(x;y;z) \\
   f_{3}(x;y;z)\\
   \end{array} \right) ;\\
   \end{align*}
   On  peut aussi écrire $\overrightarrow{F}$:
   \begin{align}
   \overrightarrow{F} =f_{1}(x;y;z).\vec{i} + f_{2}(x;y;z).\vec{j} + f_{3}(x;y;z).\vec{k}
   \end{align}
   On a : 
   \begin{align*}
   \nabla . \overrightarrow{F} = \overrightarrow{div.}.\overrightarrow{F} \,\, \in \mathbb{R} ; 
   \end{align*}
   Comme : 
   \begin{align}
   \nabla = \frac{\partial}{\partial x}.\vec{i} + \frac{\partial}{\partial x}.\vec{j} + \frac{\partial}{\partial x}.\vec{k}
   \end{align}
   Donc : 
   \begin{align*}
   \nabla . \overrightarrow{F}  = \frac{\partial f_{1}}{\partial x} + \frac{\partial f_{2}}{\partial x} + \frac{\partial f_{3}}{\partial x} \,\, \,\, \forall (x;y;z) \in \mathbb{R}^{3} ; 
   \end{align*}
   On notera souvent $div\overrightarrow{F}$ au lieu de $\overrightarrow{div}.\overrightarrow{F}$.
   <!-- 
      %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
      %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
      %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
	  <hr>
   <h3>Application</h3>
   <h4>Exercices corrigés</h4> <p>
   <h5>Dans le plan</h5>
   <h5>Énoncés et hypothèses   </h5>
      Soit les champs de vecteurs de $\mathbb{R}^{2}$ dans $\mathbb{R}^{2}$: 
      \begin{align*}
      F_{0}(x;y)  = 	\left( \begin{array}{ccc}
      3y \\
      -5\\
      \end{array} \right) ;\\
      F_{1}(x;y)  = 	\left( \begin{array}{ccc}
      -x+y \\
      2.x-y\\
      \end{array} \right) ;\\
      F_{2}(x;y) = 	\left( \begin{array}{ccc}
      -3.x+y^{2} \\
      x^{2}+y\\
      \end{array} \right) ;\\
      F_{3}(x;y) = 	\left( \begin{array}{ccc}
      x^{2}.y^{2} + x \\
      2xy^{2}+y\\
      \end{array} \right) ;\\
      F_{4}(x;y) = 	\left( \begin{array}{ccc}
      x^{2}y^{3} + x \\
      (x+1).y^{2}-x\\
      \end{array} \right) ;\\
      \end{align*}
      Pour chacun de ce champs de vecteurs, calculer la divergence de la fonction et préciser le domaine sur lequel elle est définie. Donner une valeur de la divergence aux points $(1;1)$ et $(2;-1)$. </p>
   <h5>Solutions
   </h5>
  <hr>
<!--       %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%1
 -->      \begin{align*}
      F_{0}(x;y)  = 	\left( \begin{array}{ccc}
      3y \\
      -5\\
      \end{array} \right) ;
      \end{align*}
      Alors : 
      \begin{align*}
      F_{0}(x;y)  = 	\left( \begin{array}{ccc}
      3y \\
      -5
   </p>
   <p>
      \end{array} \right) ;
      \end{align*}
      \begin{align}
      \frac{\partial 3.y}{\partial x} = 0 \text{ et }  \frac{\partial (-5)}{\partial y} = 0
      \end{align}
      Donc 
      \begin{align}
      div F_{0}  = 0 ; div F_{0}(1;1)  = 0 ; div F_{0}(2;-1)  = 0
      \end{align}
      <hr>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%2222222222222 -->
      \begin{align*}
      F_{1}(x;y)  = 	\left( \begin{array}{ccc}
      -x+y \\
      2.x-y \\
      \end{array} \right) ;
      \end{align*}
      Alors : 
      \begin{align}
      \frac{\partial (-x+y)}{\partial x} = -1 \text{ et }  \frac{\partial (2.x-y)}{\partial y} = -1
      \end{align}
      Donc 
      \begin{align}
      div F_{1}  = -2 ; div F_{1}(1;1)  = -2 ; div F_{1}(2;-1)  = -2
      \end{align}
      <hr>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%33333333333333 -->
      \begin{align*}
      F_{2}(x;y)  = 	\left( \begin{array}{ccc}
      -3.x+y^{2} \\
      x^{2}+y \\
      \end{array} \right) ;
      \end{align*}
      Alors : 
      \begin{align}
      \frac{\partial (-3.x+y^{2})}{\partial x} = -3 \text{ et }  \frac{\partial (x^{2}+y)}{\partial y} = 1
      \end{align}
      Donc 
      \begin{align}
      div F_{2}  = -2 ; div F_{2}(1;1)  = -2 ; div F_{2}(2;-1)  = -2
      \end{align}
      <hr>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%44444444444444 -->
      \begin{align*}
      F_{3}(x;y)  = 	\left( \begin{array}{ccc}
      x^{2}.y^{2} + x \\
      2xy^{2}+y \\
      \end{array} \right) ;
      \end{align*}
      Alors : 
      \begin{align}
      \frac{\partial (x^{2}.y^{2} + x)}{\partial x} = x +1 \text{ et }  \frac{\partial (2xy^{2}+y)}{\partial y} = 4.x.y+1
      \end{align}
      Donc 
      \begin{align}
      div F_{3}  = 4.x.y +x + 2 ; div F_{3}(1;1)  = 7 ; div F_{3}(2;-1)  = -7
      \end{align}
      <hr>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%55555555555555 -->
      \begin{align*}
      F_{4}(x;y)  = 	\left( \begin{array}{ccc}
      x^{2}y^{3} + x  \\
      (x+1).y^{2}-x \\
      \end{array} \right) ;
      \end{align*}
      Alors : 
      \begin{align}
      \frac{\partial (x^{2}y^{3} + x)}{\partial x} = 2.x.y^{3} + 1 \text{ et }  \frac{\partial ((x+1).y^{2}-x)}{\partial y} = 2.(x+1).y ;
      \end{align}
      Donc 
      \begin{align}
      div F_{4}  = 2.x.y^{3}+ 2.(x+1).y + 1 ; div F_{4}(1;1)  = 7 ; div F_{4}(2;-1)  = -9
      \end{align}
      Ces quelques calculs permettent de se familiariser avec le calcul de la divergence d'un champ de vecteur dans le plan en tout point et en deux point spécifiques à chaque fois. Calculer la divergence c'est faire la somme des dérivées partielles par rapport à chaque variable d'une fonction vectorielle, où le nombre de variable initiales vaut la dimension de l'espace d'arrivée. On va maintenant faire quelques calculs dans l'espace.
      <hr>
      <!-- 
         %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
      <h5>Dans l'espace</h5>
      Soit les champs de vecteurs de $\mathbb{R}^{3}$ dans $\mathbb{R}^{3}$: 
      \begin{align*}
      G_{0}(x;y;z)=\left( \begin{array}{ccc}
      -3.x^{3}+z^{2}  \\
      2.x^{2}-2.y^{3} \\
      y^{3} +z^{2} \\
      \end{array} \right) ; \\
      G_{1}(x;y;z)=	\left( \begin{array}{ccc}
      x^{2}-y^{2}-z^{2} \\
      -x^{2}+y^{2}-z^{2} \\
      -x^{2}-y^{2}+z^{2} \\
      \end{array} \right) ; \\
      G_{2}(x;y;z)=	\left( \begin{array}{ccc}
      y^{3}-z^{2} \\
      x^{2}-z^{2} \\
      x^{2}-y^{2} \\
      \end{array} \right) ; \\
      \end{align*}
      <hr>
      <!-- 
         %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%000000gggggggggggggg -->
      \begin{align*}
      G_{0}(x;y;z)  = 	\left( \begin{array}{ccc}
      -3.x^{3}+z^{2}  \\
      2.x^{2}-2.y^{3} \\
      y^{3} +z^{2} \\
      \end{array} \right) ;
      \end{align*}
      Alors : 
      \begin{align}
      \frac{\partial (-3.x^{3}+z^{2} )}{\partial x} = -9.x^{2}  \text{ et }  \frac{\partial (2.x^{2}-2.y^{3})}{\partial y} = -6.y^{2} \text{ et }  \frac{\partial (y^{3} +z^{2})}{\partial z} = 2.z ;
      \end{align}
      Donc 
      \begin{align}
      div G_{0}  =  -9.x^{2} -6.y^{2} + 2.z
      \end{align}
      <hr><!-- 
         %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%1111gggggggg -->
      \begin{align*}
      G_{1}(x;y;z)  = 	\left( \begin{array}{ccc}
      x^{2}-y^{2}-z^{2} \\
      -x^{2}+y^{2}-z^{2} \\
      -x^{2}-y^{2}+z^{2} \\
      \end{array} \right) ;
      \end{align*}
      Alors : 
      \begin{align}
      \frac{\partial (x^{2}-y^{2}-z^{2})}{\partial x} = 2.x  \text{ et }  \frac{\partial (-x^{2}+y^{2}-z^{2})}{\partial y} = 2.y \text{ et }  \frac{\partial (-x^{2}-y^{2}+z^{2})}{\partial z} = 2.z ;
      \end{align}
      Donc 
      \begin{align}
      div G_{1}  =  2.(x+y+z)
      \end{align}
      <hr><!-- 
         %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%22222gggggg -->
      \begin{align*}
      G_{2}(x;y;z)  = 	\left( \begin{array}{ccc}
      y^{3}-z^{2} \\
      x^{2}-z^{2} \\
      x^{2}-y^{2} \\
      \end{array} \right) ;
      \end{align*}
      Alors : 
      \begin{align}
      \frac{\partial (y^{3}-z^{2})}{\partial x} = 0  \text{ et }  \frac{\partial (x^{2}-z^{2} )}{\partial y} = 0 \text{ et }  \frac{\partial (x^{2}-y^{2} )}{\partial z} = 0 ;
      \end{align}
      Donc 
      \begin{align}
      div G_{2}  =  0
      \end{align}<!-- 
         %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
      <hr>
   <h4>Problème corrigés</h4>
   <!-- 
      %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
      %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
      %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
      %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
      %L'opérateur Gradient
      %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
       -->
   <h2>Gradient</h2>
   <h3>Présentation</h3>
   Le gradient permet de mesurer la variation d'un champ scalaire, ce dernier mesurant une grandeur physique, comme par exemple la température, la pression. </p>
   <p>
      On le voit par exemple sur les courbes isobares, chaque courbe représente une pression constante. Le gradient représente les changements de valeurs, la différence entre des valeurs qui mesurent une grandeur physique. 
   </p>
   <p>
      Un autre représentation du gradient est permise à l'aide des courbes de niveaux que l'on voit sur les cartes topographiques.  
   </p>
   <p>
      Le gradient représente la direction de plus forte pente. Le vecteur gradient obtenu en dériavtn toutes les composantes d'une fonction scalaire est perpendiculaire aux lignes de niveau du champ. 
   </p>
   <p>
      Le gradient est un champ de vecteur qui dérive d'un champ scalaire. 
      <a href="https://www.youtube.com/watch?v=vB5KJJawLvs">
         {Explication supplémentaire par un youtuber}
   <h3>Théorie</h3>
   <h4>Dans le plan ou l'espace</h4>
   Considérons un champ scalaire défini par deux variables à valeur dans $\mathbb{R}$: 
   \begin{align*}
   f : &\mathbb{R}^{2}    \longrightarrow   \mathbb{R} \\
   &(x;y)  \longmapsto 	f(x;y);\\
   \end{align*}
   Ou encore un champ scalaire défini de $\mathbb{R}^{3}$ dans $\mathbb{R}$
   \begin{align*}
   f : &\mathbb{R}^{3}    \longrightarrow   \mathbb{R} \\
   &(x;y;z)  \longmapsto 	f(x;y;z);\\
   \end{align*}
   <h4>Formule du gradient</h4>
   Alors le gradient définit un champ de vecteur dans l'espace dans lequel on le définit. Pour un champ scalaire en deux dimensions, le gradient est un champ de vecteurs en deux dimensions. De la même manière pour un champ scalaire définit dans l'esapce, le gradient aura trois coordonnées. 
   Comme : 
   \begin{align}
   \nabla = \frac{\partial}{\partial x}.\vec{i} + \frac{\partial}{\partial y}.\vec{j} + \frac{\partial}{\partial z}.\vec{k}
   \end{align}
   Donc, pour $f = f(x;y;z)$ : 
   \begin{align*}
   \overrightarrow{\nabla . f}  = &\left(\frac{\partial f}{\partial x} ;\frac{\partial f}{\partial y};\frac{\partial f}{\partial z}\right)
   &\,\, \,\, \forall (x;y;z) \in \mathbb{R}^{3} \text{ \, où la fonction f est différentiable ;}
   \end{align*}
   Pour un champ scalaire bidimensionnel,  pour $f = f(x;y)$  : 
   \begin{align*}
   \overrightarrow{\nabla . f}  = & \left(\frac{\partial f}{\partial x} ;\frac{\partial f}{\partial y}\right)&\,\, \,\, \forall (x;y) \in \mathbb{R}^{2} \text{ \, où la fonction f est différentiable ;}
   \end{align*}
   <h3>Application</h3>
   <h4>En deux dimensions</h4>
   Donner le gradient des fonctions de $\mathbb{R}^{2}$ dans $\mathbb{R}$ suivantes : 
   \begin{align*}
   f_{1}(x ; y) & = x^{2} + y^{2}\\
   f_{2}(x ; y) & = x^{3}.y^{2} + y^{3}.x^{2}\\
   f_{3}(x ; y) & = x^{2}.y- y^{2}.x^{4}\\
   f_{4}(x ; y) & = e^{-x^{2}} + e^{-y^{2}}\\
   f_{5}(x ; y) & = x^{2}.\ln(y^{2}-1) + y^{2}.\ln(y)\\
   f_{6}(x ; y) & = 2.x+y-2\\
   f_{7}(x ; y) & = x^{2} - y^{2}\\
   f_{8}(x ; y) & = x^{2}.y^{3} + y^{2}.x - y 
   \end{align*}\\
   Solution : 
   \begin{align*}
   \overrightarrow{\nabla . f_{1} } & = \left(\frac{\partial (x^{2} + y^{2})}{\partial x} ;\frac{\partial (x^{2} + y^{2})}{\partial y}\right) = \left(2.x;2.y\right)\\
   \overrightarrow{\nabla . f_{2} } & =  \left(3.x^{2}.y^{2} + 2.y^{3}.x; 2.x^{3}.y+ 3.y^{2}.x^{2} \right)\\
   \overrightarrow{\nabla . f_{3} } & =  \left(2.x.y- 4.y^{2}.x^{3};x^{2}- 2.y.x^{4} \right)\\
   \overrightarrow{\nabla . f_{4} } & =  \left(-2.x.e^{-x^{2}} ;-2.y.e^{-y^{2}}\right)\\
   \overrightarrow{\nabla . f_{5} } & = \left(2.x..\ln(y^{2}-1);\frac{2.x^{2}.y}{y-1}+y.(2.\ln(y)+1)\right) \\
   \overrightarrow{\nabla . f_{6} } & = \left(2;1\right) \\
   \overrightarrow{\nabla . f_{7} } & = \left(2.x;-2.y\right)\\
   \overrightarrow{\nabla . f_{8} } & = \left(2.x.y^{3}+.y^{2};3.x^{2}.y^{3}+2.x.y-1\right)  
   \end{align*}</p>
   <p>
   <h4>Dans l'espace</h4>
   Donner le gradient des fonctions de $\mathbb{R}^{2}$ dans $\mathbb{R}$ suivantes : 
   \begin{align*}
   g_{1}(x ; y ; z) & = x^{2} + y^{2} + z^{2}\\
   g_{2}(x ; y ; z) & = x^{3}.z^{2} - x^{3}.y^{2}  + z^{3}.y^{2}\\
   g_{3}(x ; y ; z) & = x^{2}.y.z^{3}- z^{3}.y^{4}\\
   g_{4}(x ; y ; z) & = e^{-x^{2}-y^{2}-z^{2}}\\
   g_{5}(x ; y ; z) & = z^{2}.\ln(x^{2}.y^{2}.z^{2}-1) \\
   g_{6}(x ; y ; z) & = \ln(x.y.z)\\
   g_{7}(x ; y ; z) & = \frac{x^{2} - y^{2}}{x^{2} + y^{2}}\\
   g_{8}(x ; y ; z) & = \frac{x^{2}}{y.z}
   \end{align*}</p>
   <p><!-- 
      %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
      %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
      %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
      %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
      %L'opérateur Rotationnel
      %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
       -->
   Solution : <b>To be done</b>
   \begin{align*}
   \overrightarrow{\nabla . g_{1} } & = \left( ; ; \right)\\
   \overrightarrow{\nabla . g_{2} } & = \left( ; ; \right)\\
   \overrightarrow{\nabla . g_{3} } & = \left( ; ; \right)\\
   \overrightarrow{\nabla . g_{4} } & =  \left( ; ; \right)\\
   \overrightarrow{\nabla . g_{5} } & =  \left( ; ; \right)\\
   \overrightarrow{\nabla . g_{6} } & =  \left( ; ; \right)\\
   \overrightarrow{\nabla . g_{7} } & =  \left( ; ; \right)\\
   \overrightarrow{\nabla . g_{8} } & =  \left( ; ; \right)\\
   \end{align*}</p>
   <p>
   <h2>Rotationnel</h2>
   <h3>Présentation</h3>
   Le rotationnel est un opérateur qui définit des ligne de champ autour desquelles les éléments du système ont tendance à tourner. 
   <h3>Théorie</h3>
   Le rotationnel d'un champ de vecteurs est donné par le produit vectoriel de $\nabla$ avec le champ de vecteurs en question: 
   $$
   \nabla \times \vec{A} = \overrightarrow{rot}\vec{V}
   $$
   Où $\times$ représente le produit vectoriel. 
   Avec $V$ le champ de vecteurs définit comme suit, dans le plan : 
   \begin{align*}
   V : &\mathbb{R}^{2}    \longrightarrow   \mathbb{R}^{2} \\
   &(x;y)  \longmapsto 	\left( \begin{array}{ccc}
   V_{1}(x;y)  \\
   V_{2}(x;y)  \\
   \end{array} \right) ;\\
   \end{align*}
   Ou dans l'espace : 
   \begin{align*}
   V : &\mathbb{R}^{3}    \longrightarrow   \mathbb{R}^{3} \\
   &(x;y;z)  \longmapsto 	\left( \begin{array}{ccc}
   V_{1}(x;y;z)  \\
   V_{2}(x;y;z)  \\
   V_{3}(x;y;z) \\
   \end{array} \right) ;\\
   \end{align*}
   Alors, ce produit vectoriel peut être donné grâce au déterminant suivant : 
   \begin{align*}
   \nabla \times \vec{A} = & \begin{array}{|rcl|}
   \vec{i} & \vec{j} & \vec{k} \\
   \frac{\partial }{\partial x} & \frac{\partial }{\partial y} & \frac{\partial }{\partial z} \\
   V_{1} & V_{2} & V_{3}
   \end{array}
   \end{align*}
   \begin{align*}
   \nabla \times \vec{A} = & \begin{array}{|rl|}
   \frac{\partial }{\partial y} & \frac{\partial }{\partial z} \\
   V_{2} & V_{3}
   \end{array} . \vec{i} - \begin{array}{|rl|}
   \frac{\partial }{\partial x} & \frac{\partial }{\partial z} \\
   V_{1}  & V_{3}
   \end{array} . \vec{j} + \begin{array}{|rl|}
   \frac{\partial }{\partial x} & \frac{\partial }{\partial y}  \\
   V_{1} & V_{2} 
   \end{array} . \vec{k}\\
   = &(\frac{\partial V_{3} }{\partial y} -\frac{\partial V_{2} }{\partial z}). \vec{i} - (\frac{\partial V_{3} }{\partial x} -\frac{\partial V_{1} }{\partial z}). \vec{j} + (\frac{\partial V_{2} }{\partial x} -\frac{\partial V_{1} }{\partial y}).\vec{k}\\
   = &(\frac{\partial V_{3} }{\partial y} -\frac{\partial V_{2} }{\partial z}). \vec{i} + (\frac{\partial V_{1} }{\partial z} - \frac{\partial V_{3} }{\partial x} ). \vec{j} + (\frac{\partial V_{2} }{\partial x} -\frac{\partial V_{1} }{\partial y}).\vec{k}
   \end{align*}
   Dans le cas où on a un champ de vecteur bidimensionnel : 
   \begin{align*}
   V : &\mathbb{R}^{2}    \longrightarrow   \mathbb{R}^{2} \\
   &(x;y)  \longmapsto 	\left( \begin{array}{ccc}
   V_{1}(x;y)  \\
   V_{2}(x;y)  \\
   \end{array} \right) ;\\
   \end{align*}
   On pose $W$, le champ de vecteur tel que : 
   \begin{align*}
   W : &\mathbb{R}^{3}    \longrightarrow   \mathbb{R}^{3} \\
   &(x;y;z)  \longmapsto 	\left( \begin{array}{ccc}
   W_{1}(x;y;z)   = V_{1}(x;y)  \\
   W_{2}(x;y;z)   = V_{2}(x;y)  \\
   W_{3}(x;y;z)   = 0  \\
   \end{array} \right) ;\\
   \end{align*}
   Naturellement la formule du rotationnel d'un tel champ de vecteurs est simplifiée :
   \begin{align*}
   \nabla \times \vec{A} = & (\frac{\partial V_{2} }{\partial x} -\frac{\partial V_{1} }{\partial y}).\vec{k}
   \end{align*}
   Ce résultat est assez naturel. Le champ  de vecteur à partir duquel le rotationnel est calculé est un champ dans le plan, ou plus généralement, sur une surface. Ce rotationnel, s'il n'est pas nul, est un vecteur orthogonal à la surface en chaque point. On part toujours du principe que les fonctions étudiées au moins dérivable deux fois de dérivée seconde continue. 
   <h3>Application</h3>
   <h4>Exercices corrigés</h4>
   <h5>Champ conservatif</h5>
   %source : http://math.univ-lyon1.fr/~frabetti/Math2-2018/CF1-2018-corrige.pdf
   Un champ de vecteur est dit conservatif si son Rotationnel est nul, si les variables appartiennent à un ensemble connexe (d'un seul tenant). </p>
   <p> 
   Donc soit $\overrightarrow{E}$ un champ de vecteur défini sur $D \in \mathbb{R}^{3}$ : $D = \{(x;y;z) \in \mathbb{R}^{3} | z > 0\}$, avec :
   \begin{align*}
   \overrightarrow{E} : &\mathbb{R}^{3}    \longrightarrow   \mathbb{R}^{3} \\
   &(x;y;z)  \longmapsto 	\left( \begin{array}{ccc}
   2.x.z  \\
   \ln z  \\
   x^{2}+\frac{y}{z}  \\
   \end{array} \right) ;\\
   \end{align*}
   Autre écriture : 
   \begin{align*}
   \overrightarrow{E}  & = E_{x}(x;y;z) . \vec{i}  + 	E_{y}(x;y;z) . \vec{j}  + E_{z}(x;y;z) . \vec{k} \\
   & =  2.x.z . \vec{i}  +  \ln z  . \vec{j}  + x^{2}+\frac{y}{z} . \vec{k} \\
   \end{align*}
   \begin{align*}
   \nabla \times \overrightarrow{E}  = & \begin{array}{|rcl|}
   \vec{i} & \vec{j} & \vec{k} \\
   \frac{\partial }{\partial x} & \frac{\partial }{\partial y} & \frac{\partial }{\partial z} \\
   2.x.z & \ln z  & x^{2}+\frac{y}{z} 
   \end{array} \\  
   = &\begin{array}{|rl|}
   \frac{\partial }{\partial y} & \frac{\partial }{\partial z} \\
   \ln z & x^{2}+\frac{y}{z}
   \end{array} . \vec{i} - \begin{array}{|rl|}
   \frac{\partial }{\partial x} & \frac{\partial }{\partial z} \\
   2.x.z   & x^{2}+\frac{y}{z}
   \end{array} . \vec{j} + \begin{array}{|rl|}
   \frac{\partial }{\partial x} & \frac{\partial }{\partial y}  \\
   2.x.z  & \ln z
   \end{array} . \vec{k}\\
   = &(\frac{\partial x^{2}+\frac{y}{z} }{\partial y} -\frac{\partial  \ln z  }{\partial z}). \vec{i} - (\frac{\partial x^{2}+\frac{y}{z}}{\partial x}  -\frac{\partial2.x.z }{\partial z}). \vec{j} + (\frac{\partial  \ln z  }{\partial x} -\frac{\partial 2.x.z }{\partial y}).\vec{k}\\
   = &(\frac{1 }{z} -\frac{1}{z}). \vec{i} + (2.x - 2.x). \vec{j} + (0-0).\vec{k}\\
   = & \vec{0}
   \end{align*}
   Dans notre cas, l'ensemble $D$ auquel appartiennent les variable $x$, $y$ et $z$ est connexe. </p>
   <p>
   D'après un lemme démontré par H Poincaré, il est dit que lorsqu'un champ est conservatif sur un domaine connexe, alors ce champ est un champ de gradient. Autrement dit, il existe une fonction scalaire $f$ :
   \begin{align*}
   f : &\mathbb{R}^{3}    \longrightarrow   \mathbb{R} \\
   &(x;y;z)  \longmapsto 	f(x;y;z)
   \end{align*}
   Où $f$ est telle que : 
   \begin{align*}
   \overrightarrow{E} = \nabla f(x;y;z) = 	\overrightarrow{grad} (f)
   \end{align*}
   L'idée est maintenant de chercher $f$. Pour ce faire, on se sert de l'expression de $	\overrightarrow{E} $ pour identifier ses composantes avec les dérivées partielles de $f$. 
   On obtient donc : 
   \begin{align*}
   \overrightarrow{E} = \nabla f(x;y;z) \implies & \begin{array}{rl}
   \frac{\partial f }{\partial x} =  & 2.x.z \\
   \frac{\partial f }{\partial y} =  &  \ln z   \\
   \frac{\partial f }{\partial z} = &  x^{2}+\frac{y}{z} 
   \end{array} \\  
   \end{align*}
   On prend : 
   \begin{align*}
   \frac{\partial f }{\partial x} =   2.x.z & \implies  f(x;y;z) = \int  2.x.z dx + g(y;z) = x^{2}.z +  g(y;z)
   \end{align*}
   Comme : 
   \begin{align*}
   \frac{\partial f }{\partial y} =   0 + \frac{\partial g(y;z) }{\partial y} = \ln z  & \implies  g(y;z) = \int  \ln z dy  + h(z) =  y.\ln z  + h(z) 
   \end{align*}
   Donc : 
   \begin{align*}
   f(x;y;z) =   x^{2}.z + y.\ln z + h(z)
   \end{align*}
   Maintenant comme : 
   \begin{align*}
   \frac{\partial f }{\partial z} =  x^{2} + \frac{y}{z} + h'(z)
   \end{align*}
   Et que : 
   \begin{align*}
   \frac{\partial f }{\partial z} =  x^{2} + \frac{y}{z}
   \end{align*}
   On obtient que $h'(x) = 0$ d'où : 
   \begin{align*}
   h(x) = C \text{\, avec $C$ constante réelle.}
   \end{align*}
   Pour finir, la fonction $f$ telle que son gradient donne le champ de vecteur $\overrightarrow{E}$ est :  
   \begin{align*}
   f(x;y;z) =   x^{2}.z + y.\ln z + C
   \end{align*}
   <h4>Problèmes corrigés</h4>
   %<h5>Champ conservatif</h5>
   TBD<!-- 
      %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
      %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
      %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
      %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
      %L'opérateur laplacien
      %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
      
      
       -->
   <h2>Laplacien</h2>
   <h3>Présentation</h3>
   Il représente la courbure d'un champ scalaire. 
   <a href="https://youtu.be/EW08rD-GFh0">"Laplacian intuition" </a> et plus généralement beaucoup de très bons contenus sur <b><a href="https://www.youtube.com/c/khanacademy/playlists">Khan Academy</a></b>
   
      <h3>Théorie</h3>
      }
      Par définition, on a : 
      $$
      \nabla^{2}  = \Delta
      $$
      Qu'est ce que vaut $\nabla^{2}  $? 
      \begin{align}
      \nabla^{2}  = \nabla.\nabla = 
      \left( \begin{array}{ccc}
      \frac{\partial}{\partial x}  \\
      \frac{\partial}{\partial y}  \\
      \frac{\partial}{\partial z}  \\
      \end{array} \right) . 	\left( \begin{array}{ccc}
      \frac{\partial}{\partial x}  \\
      \frac{\partial}{\partial y}  \\
      \frac{\partial}{\partial z}  \\
      \end{array} \right) = \frac{\partial^{2}}{\partial x^{2}} +\frac{\partial^{2}}{\partial y^{2}} +\frac{\partial^{2}}{\partial z^{2}} ;
      \end{align}
      Donc le laplacien d'une fonction est un scalaire, qui vaut la somme des dérivées seconde de la fonction  en $(x;y;z)$. On peut très bien utiliser la forme générale en $(x;y;z)$ ou sa valeur en chaque point $(x_{0};y_{0};z_{0})$
      <h3>Application</h3>
      }
      Soit $f$ une fonction scalaire : 
      \begin{align*}
      f : &\mathbb{R}^{}    \longrightarrow   \mathbb{R} \\
      &(x;y)  \longmapsto   f(x;y) = x^{2}+y^{2}\\
      \end{align*}
      Alors : 
      \begin{align*}
      \Delta f = &\frac{\partial^{2} f(x;y)}{\partial x^{2}} +\frac{\partial^{2} f(x;y)}{\partial y^{2}}\\
      &= \frac{\partial^{2}  (x^{2}+y^{2})}{\partial x^{2}} +\frac{\partial^{2}  (x^{2}+y^{2})}{\partial y^{2}}\\
      &= 4\\
      \end{align*}
      Comme : 
      \begin{align*}
      \frac{\partial^{2}  (x^{2}+y^{2})}{\partial x^{2}} = 2 & \text{ et } \frac{\partial^{2}  (x^{2}+y^{2})}{\partial y^{2}} = 2
      \end{align*}
      Donc : 
      \begin{align*}
      \Delta f(x;y) = &\frac{\partial^{2} f(x;y)}{\partial x^{2}} +\frac{\partial^{2} f(x;y)}{\partial y^{2}} = 4
      \end{align*}
   


      <br>
      <hr>
   <a href="analyse-vectorielle-chap06.php">Page suivante : TL;DR &rarr;</a><br>
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