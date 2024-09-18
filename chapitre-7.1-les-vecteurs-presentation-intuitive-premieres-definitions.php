<?php  include 'entete.php';?>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
  
   <p class="a rotatedFloralHeartBullet"></p>

   <p>
   <h1>1 - Les vecteurs : Premières notions et présentation intuitive</h1>

   <h2>Introduction et premières définitions</h2>
</p>
</p>
<p>
   En guise de description intuitive, on peut voir que les vecteurs, bien que purs objets mathématiques ont une réelle signification dans la vie courante. 
</p>
<h2>Les vecteurs, comme notion utilisée hors des mathématiques</h2>
<p>Avant toute définition théorique, on s'aperçoit que la notion de vecteur est utilisée avant tout ailleurs qu'en mathématiques. Ces utilisations permettent de s'approprier pleinement de cette notion.  
</p>
<p class="definitionBox">
   Un vecteur, c'est un moyen de transporter de l'information  ou de l'action. 
</p>
<p>Le moustique est le vecteur de certaines maladies. Ils transportent une information : le virus,  qu'ils la déposent sur un hôte. Un bras de levier agit sur le point de contact en appliquant une force, représentée par un vecteur. L'image d'une flèche permet de se donner une représentation assez juste de ce qu'est un vecteur.</p>

<p>
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/vect02.jpg?raw=true" width=50%>
   </p>
   Les vecteurs sont donc de purs objets mathématiques abstraits, dont la représentation proposée avant est malgré tout juste,  pouvant représenter les versions plus concrètes comme en biologie, mécanique, informatique...</p>
   <p>
   En biologie on parle de vecteur de transmission pour ne maladie, avec par exemple le moustique pour le paludisme. Des postillons pour la grippe.  </p>
   <p>
   
   En mécanique un vecteur permet de représenter une force, une vitesse, une position, une accélération, un moment...</p>
   <p>
   
   Et finalement, en informatique, où il est constamment utilisé. </p>
   <p>L'étude de ses aspects mathématiques permet de comprendre et appréhender la nature de cet objet, des manières d'interagir avec.</p>
   <p>
   
   Les vecteurs sont  des éléments clés et fondamentaux en mathématiques. Tout vient à être représenté par un vecteur. Ils permettent de modéliser tout ce qui peut être représenté, dans des espaces appropriés. Ces derniers peuvent n'exister que dans l'abstraction pure.</p>
   <p>
   
   Pour l'instant, le cadre est donné par le plan ou l'espace. Soit respectivement $\mathbb{R}^{2}$ , le plan, ou $\mathbb{R}^{3}$, l'espace. Toute la suite est très facilement extrapolable à $\mathbb{R}^{n}$, les espaces de dimensions $n$.
   
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/cart3D.jpg?raw=true" width=50%>
</p>
<h4>Approche Théorique</h4>
<h4>Existence des vecteurs dans le plan</h4>

<p>
   Point sur la représentation des vecteurs dans le plan. Tous les vecteurs sont exprimés à l'aide de coordonnées dont la référence, l'origine à partir de laquelle on se place, définit l'origine de tous les vecteurs. Il n'existe pas de vecteurs se baladant dans le plan. tous les vecteurs partent de l'origine. Après, ce qui est pratique avec un vecteur c'est qu'on peut l'appliquer où on veut. Si on a un point et un vecteur, on peut très bien appliquer ce vecteur à ce point  pour obtenir de nouvelles coordonnées. 
</p>
<p>
<img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/vect-xn-plan.jpg?raw=true" width=50%>

   Dorénavant, tout n'est que vecteur. On a un point $M$ dans le plan. On l'associe immédiatement au vecteur $\overrightarrow{OM}$. Autrement dit, quand on dit "Soit le point $M$", il faut entendre le vecteur $\overrightarrow{OM}$. 
</p>

<h4>Rôles en mathématiques</h4>
<p>
Le vecteur est un élément essentiel des mathématiques. Il existe dans des expaces de dimensions $n$, $n > 0$. Ce qui nous intéresse pour l'instant ce sont les espace où $n=2$ ou $3$. Autrement dit le plan ou l'espace. 

En général pour représenter un vecteur, on se place dans le plan ou dans l'espace. Que l'on appelle $\mathbb{R}^{2}$ et $\mathbb{R}^{3}$ respectivement.</p>
<p>

Soit $\vec{AB}$ un vecteur du plan. Ce vecteur est uniquement défini à l'aide de deux informations: ses coordonnées. Ces deux paramètres définissent un unique vecteur du plan.</p>
<p>
De la même manière, soit $\vec{AB}$ un élément de $\mathbb{R}^{3}$. Ce vecteur est défini à l'aide de trois informations.</p>
<p class="definitionBox">
Dans le plan muni d'un système de coordonnées cartésiennes, Le $\vec{AB}$ s'écrit : $\vec{AB} = (x;y)$ où $x$ et $y$ sont les cordonnées du $\vec{AB}$ dans le plan.</p>
<p class="definitionBox">

un vecteur $\vec{AB}$ dans l'espace s'écrit $\vec{AB} = (x;y;z)$. </p>
   <p>

   On identifiera facilement la définition mathématiques d'un vecteur avec sa version informatique. Sachant qu'en général, un vecteur en informatique a beaucoup plus de trois composantes. Pour jouer avec ces notions, il faut se rapprocher de notions telles que l'algèbre linéaire. </p>
   <p>

     
   </p>
<hr/>
<!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
<!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
<!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
<!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
<!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
<!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
<!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->

<h3>Première définition</h3>
<h4>A l'aide des parallélogrammes</h4>
<p>
   Cette définition permet de comprendre qu'un vecteur peut exister partout dans le plan. En revanche lorsqu'on désigne un vecteur, on considère toujours que son origine est au centre du repère. Ainsi tous les vecteurs du plan peuvent être représentés comme montré dans le dernier schéma. 


</p>
<p >
   <p class="definitionBox">
      Soit le vecteur  $\overrightarrow{AB}$ du plan. Ce vecteur est l'ensemble des points $A'$ et $B'$ tels que la figure $ABB'A'$ soit un parallélogramme. 
      <p >
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/def-vect1.jpg?raw=true" width=50%><br/>
   
   
   Une autre manière de le dire serait de voir le couple $AB$ qui définit le vecteur $\overrightarrow{AB}$, comme pouvant exister partout dans le plan. Bien que l'on représente un vecteur, sa représentation en est une parmi une infinité. Dans le dessin ci dessous, on voit le vecteur $\overrightarrow{AB}$ et quatre de ses copies, formant à chaque fois exactement un parallélogramme.
   
   La définition d'un vecteur dans le contexte informatique proposée par le <strong>Larousse</strong>  est très générique :<br/>

<p >
   En informatique on considère qu'un vecteur est un ensemble de données présentées sous la forme d'une suite de mot de mémoire tous séparé par le même incrément (en vue de leur traitement par un ordinateur vectoriel).
</p>

<p >
Cette deuxième définition, plus parlante pour les initiés en informatique, correspond dans le fond exactement à sa version mathématiques. En informatique, chaque suite de mots de mémoire n'est pas forcément une valeur numérique. Les valeurs peuvent être très diverses et avoir des formats différents de ceux habituellement retrouvés en mathématiques.
</p>

<p >

Dans notre contexte, un vecteur en mathématiques est un ensemble de données dont le nombre correspond à la dimension de l'espace dans lequel ce vecteur existe.
</p>

<p >

L'algèbre linéaire est par exemple un domaine où les vecteurs sont la matière première de toutes les définitions, théorèmes et autres propriétés. 
</p>
   <hr/>
   
   
<!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
<!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
<!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->

<h3>Une définition canonique</h3>

<p >
On le rappelle, canonique, signifie particulièrement en mathématiques : le meilleur qui soit. En l'occurrence, la définition d'un vecteur est déclinée en quatre informations. 
	Soit le vecteur  $\overrightarrow{AB}$. 
   
<img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/vect01.jpg?raw=true" width=50%>
</p>

<div class="theoremBox">
   <p>
      Tout vecteur du plan est défini par : 
      <ul>
         <li>origine</li>
         <li>direction</li>
         <li>sens</li>
         <li>norme</li>
      </ul>
   
   </p>
</div>
<p >
<strong>L'origine d'un vecteur</strong>
</p>

<p >
L'origine d'un vecteur n'est autre que son point de départ. Dans la figure \ref{vect01}, l'origine du vecteur est le point A.<br/>
C'est le point initial pour le tracé d'une représentation de ce vecteur.<br/>
On rappelle que l'on dit une représentation car chaque vecteur en possède une infinité. Le vecteur $\overrightarrow{AB}$ peut être placé partout dans le plan, du moment que les trois autres paramètres sont égaux. L'explication de ce qui fait que deux vecteur sont égaux sera présentée dans la suite.<br/>
En physique l'origine à beaucoup de sens. Si un vecteur représente une force, il s'applique sur un point donné. Toutefois, les caractéristiques mathématiques du vecteur permettent de le traiter comme un objet théorique abstrait répondant aux lois des mathématiques. 

</p>

<p >
<strong>La direction</strong>
</p>

<p >
La direction d'un vecteur est la droite qui le porte. Quand on demande son chemin il est abusif de demander dans quelle direction il faut aller. Car en ligne droite il y en a forcément deux. Si on vit au $21^{\text{ème}}$ on est assez au courant de la rondeur de notre planète.<br/>
Dans la figure ci dessus, si on ne considère que les points $A$ et $B$, on peut définir une unique droite $(AB)$. Cette droite est la direction de $\overrightarrow{AB}$. Cette droite $(AB)$ porte aussi par exemple le vecteur $\overrightarrow{AB}$.

</p>

<p >
<strong>Le sens</strong>
</p>

<p >
Le sens d'un vecteur est la troisième information qui permet de donner son orientation. Ce sens permet de savoir où partir lorsque l'on se trouve à son origine sur la droite qui porte sa direction. Bien faire la différence entre le sens d'un vecteur, que l'on peut connaître entièrement et le sens de la vie qui lui ne se mesure pas avec des instruments mathématiques.  

</p>

<p >

<strong>La norme</strong>
</p>

<p >
La norme est le nom mathématiques pour la longueur d'un vecteur, sa taille plus prosaïquement. Longueur ou taille sont des termes restrictifs. La norme d'un vecteur peut aussi signifier une position, une vitesse, une force, un flux, ...<br/>
Donner la norme d'un vecteur c'est donner sa mesure.  
</p>

   <br>
   <hr>
   <a href="chapitre-7.2-les-vecteurs-coordonnees-cartesiennes-et-polaires-des-vecteurs.php">Page suivante &rarr;</a><br>
   <a href="index.php">Index &uarr;</a><br>
   <?php  include 'pieddepage.php';?>
