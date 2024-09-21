<?php  include 'entete.php';?>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
  
   <p class="a rotatedFloralHeartBullet"></p>

   <p>
   <h1>3 - Opérations sur les vecteurs</h1>

<h2>Addition de vecteurs</h2>
<h3>Les vecteurs peuvent toujours être ajoutés entre eux.</h3>
A partir du moment où ils sont de même dimension. On ne peut a priori pas ajouter un vecteur du plan avec un vecteur de l'espace. Bien que par une astuce mathématiques très simple, cela soit possible. Voir les exercices. Toute somme de vecteurs est un vecteur. Soient les vecteurs :
	$\overrightarrow{u}$ et $\overrightarrow{v}$, alors: 
	$$
	\overrightarrow{u} + \overrightarrow{v} = \overrightarrow{w}
	$$
	Où $\overrightarrow{w}$ est toujours un vecteur. Il peut éventuellement être le vecteur nul : $\overrightarrow{0}$. 
</p>

<p>
Il existe plusieurs manières d'ajouter les vecteurs entre eux: 
<ul>
	<li>avec leurs points et la relation de Chasles;</li> 
	<li>avec leurs coordonnées cartésiennes ou polaires.</li> 
</ul>

</p>

<p>
<h3>Associativité</h3>
Soient trois vecteurs $\overrightarrow{u}$, $\overrightarrow{v}$ et $\overrightarrow{w}$. Alors on a toujours : 
$$
(\overrightarrow{u}+\overrightarrow{v})+\overrightarrow{w} = \overrightarrow{u}+(\overrightarrow{v}+\overrightarrow{w})
$$
</p>

<p>
<h3>Commutativité</h3>
Soient deux vecteurs $\overrightarrow{u}$ et $\overrightarrow{v}$. Alors on a toujours : 
$$
\overrightarrow{u}+\overrightarrow{v}= \overrightarrow{v}+\overrightarrow{u}
$$
</p>

<p>
<h3>Élément Neutre</h3>
Soit $\overrightarrow{u}$ un vecteur quelconque. Alors : 
$$
\overrightarrow{u}+\overrightarrow{0}=\overrightarrow{0}+\overrightarrow{u}=\overrightarrow{u}
$$
$\overrightarrow{0}$ est le vecteur nul, l'élément neutre pour l'addition des vecteurs. 
</p>

<p>
<h3>Opposé</h3>
Soit $\overrightarrow{u}$ un vecteur quelconque. Son opposé est le vecteur  $\overrightarrow{v}$ tel que 
$$
\overrightarrow{u}+\overrightarrow{v}=\overrightarrow{v}+\overrightarrow{u}=\overrightarrow{0}
$$
Pour trouver l'opposé d'un vecteur, on change son sens. Comme vu dans l'exemple sur la soustraction des vecteurs ci-dessous sur la soustraction des vecteurs. 

<p>
   Par définition : $\overrightarrow{v} = - \overrightarrow{u}$, <i>i.e</i> l'opposé de $\overrightarrow{u}$ est $- \overrightarrow{u}$. 
</p>

<hr/>
<h3>Soustraction de vecteurs</h3>
La soustraction de deux vecteurs est encore un vecteur. Soustraire deux vecteurs revient à ajouter l'un à l'opposé de l'autre. 
</p>

<p>
	Soient les vecteurs $\overrightarrow{u}$ et $\overrightarrow{v}$, alors: 
	$$
	\overrightarrow{u} - \overrightarrow{v} = \overrightarrow{w}
	$$
	Où $\overrightarrow{w}$ est toujours un vecteur. </p>


   <p>
Un signe moins devant un vecteur revient à opposer le sens du vecteur. Une autre manière de voir ce théorème serait de dire la chose suivante : 
Dans la contexte du théorème, posons:
$$
\overrightarrow{z} = -\overrightarrow{v} 
$$
La soustraction peut alors être vue comme une addition : 
$$
\overrightarrow{u} - \overrightarrow{v} = \overrightarrow{u} + \overrightarrow{z} = \overrightarrow{w}
$$

Il est vrai que cette manière de montrer les choses peut sembler tordue, mais elle est assez rigoureuse et juste. Il faut simplement se rappeler ici que pour sous traire deux <vecteur class=""></vecteur>
<strong>Vecteur défni avec deux points : </strong> pour définir correctement l'opposé d'un vecteur : 


		Soient deux points $A$ et $B$ qui définissent le vecteur $\overrightarrow{AB}$, alors: 
	$$
	- \overrightarrow{AB} = \overrightarrow{BA}
	$$
   
<hr/></p>

<p>
<h3>Multiplication de vecteurs par un scalaire</h3>
Un scalaire est l'autre nom pour nombre réel. La multiplication de vecteur par un tel nombre reste un vecteur. 
	Soient $\vec{u}$ un vecteur et $\lambda$ un scalaire. Alors $\lambda \cdot \vec{u}$ est un vecteur. 
</p>
Conséquences :</p>

<p>

<ul>
	<li>La norme de $ \vec{u}$ est multipliée par $|\lambda| $</li> 
	<li>si $\lambda$ est positif, alors le sens de  $ \vec{u}$ est conservé, si $\lambda$ est négatif, alors sens de  $\lambda \vec{u}$ est opposé; </li> 
	<li>du point de vue des coordonnées, chacune est multipliée par $\lambda$. Si $\vec{u} = (x;y)$ alors $\lambda\vec{u} = (\lambda x;\lambda y)$  </li> 
</ul>
<hr/>
</p>

<p>
<h3>Multiplication de deux vecteurs : le produit scalaire</h3>
En revanche, la multiplication des vecteurs entre eux s'appelle le produit scalaire :le résultat du produit de deux vecteurs est un nombre (un scalaire!). Lorsque l'on multiple deux vecteurs entre eux, le résultat est toujours un nombre réèl. 


	Soient $\vec{u}$ et $\vec{v}$ deux vecteurs. Alors il existe un nombre réèl $a$ tel que  : 
	$$
	\vec{u} \cdot \vec{v} = a
	$$
   
</p>
$\vec{u}  .\vec{v} = x_{u}.x_{v}+y_{u}.y_{v}$ du point de vue des coordonnées. 

<p>

</p>Ou encore : 
$\vec{u}  .\vec{v} = \|\vec{u}\|.\|\vec{v}\|.\cos (\vec{u};\vec{v})$ . 

<p>



Le produit scalaire en tant que tel est expliqué dans le chapitre éponyme. On verra par exemple que le produit scalaire est un outil de comparaison des vecteurs.
</p>

<hr/>
<h3>Division de vecteurs</h3>
<p>


On a jusque là parlé d'addition, soustraction et multiplication de vecteurs. Reste la division, dont on parle peu. Son résultat n'est que peu intéressant. La division de vecteurs à ceci de particulier qu'elle n'est que peu utilisée et est difficile à manier et surtout ne présente pas grand intérêt. Diviser des vecteurs entre eux permet d'obtenir des résultats, mais la non unicité du résultat de la division d'un vecteur par un autre  rend le principe peu pratique et utile.\\
Diviser les vecteurs entre eux revient à répondre à la question de savoir si il est possible de trouver un inverse à n'importe quel vecteur, en dehors du vecteur nul.\\
autrement dit, soit $\vec{u}$ un vecteur. L'inverse de ce vecteur serait un autre ue l'on nomme par exemple $\vec{v}$, tel que l'on ait :
$$
\vec{u} \cdot \vec{v} = 1
$$

Il n'existe pas d'unique vecteur $\vec{v}$ qui remplisse cette condition. Mais une infinité. Pour le prouver, voir les exercices. 


<hr/>
<h3>TL;DR</h3>
D'un point de vue général, les résultats obtenus ici se résument en listant les principes et lois suivantes : 

<ul></ul>
   <li> Les opérations sur les vecteurs respectent l'associativité, la commutativité, l'élément neutre et l'opposé d'un vecteur pour l'addition est un vecteur de sens opposé. </li>
   <li> Une somme de vecteur est encore un vecteur. </li>
   <li> Une différence de vecteur est encore un vecteur. </li>
   <li> Plus généralement toute combinaison linéiare de vecteurs est un vecteur. Au pire c'est le vecteur nul. </li>
   <li>Le produit de deux vecteurs donne un nombre, que l'on appelle scalaire. </li> 
   <li>On peut trouver l'inverse d'un vecteur, mais la non unicité empêche la pertinence de ce résultat.</li>  

   
<hr/>

<h4>Remarque : comment ajouter des vecteurs de dimensions différentes</h4>
<p>
   A priori c'est impossible. Mais grâce à une petite astuce, parfaitement justifiée. Soient deux vecteurs, $\vec{u}$ et $\vec{v}$, où $\vec{u}$ est un vecteur du plan, avec deux coordonnées: $(x_{u};y_{u})$ et $\vec{v}$ est un vecteur de l'espace où  $\vec{v} = (x_{v};y_{v};z_{v})$. Alors il suffit d'ajouter une troisième coordonnée à $\vec{u}$ qui sera nulle, on aura donc $\vec{u} = (x_{u};y_{u};z_{u})$ avec $z_{u} = 0$. Et le tour est joué. 
</p>

<p>
    En résumé, quand on doit combiner plusieurs vecteurs qui n'ont pas la même dimension, on doti choisir celui qui a le plus de composantes, et ajouter une composante nulle à chaque vecteur de dimension inférieure. 
</p>
   <br>
   <hr>
   <a href="chapitre-7.4-les-vecteurs-produit-scalaire-et-comparaison-des-vecteurs.php">Page suivante &rarr;</a><br>
   <a href="index.php">Index &uarr;</a><br>
   
<?php  include 'pieddepage.php';?>