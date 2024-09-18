<!DOCTYPE html>
<head>
   <meta charset="utf-8">
   <title>Mathématiques | Géométrie analytique | Repères, vecteurs et outils de mesure</title>
   <link rel="stylesheet" href="screen.css">
   <style>
      body{counter-reset:h1 7}
   </style>
   <script type="text/x-mathjax-config">
      MathJax.Hub.Config({tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}});
   </script>
   <script type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.1/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
</head>
<body>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
  
   <p class="a rotatedFloralHeartBullet"></p>

   <p>
   <h1>2 - Coordonnées des vecteurs</h1>
<p >
   Jusqu'à présent, on a pu voir les vecteurs représentés dans des repères. Ces derniers sont particulièrement utiles pour déterminer les coordonnées des vecteurs. Pour ce faire, on se place dans un repère orthonormé.<br>
   Dans ce schéma, on peut lire les coordonnées du vecteur selon deux systèmes~: 
   <ul>
<li>le système de coordonnées cartésiennes </li>
<li>celui des coordonnées polaires</li>
   </ul>>
   
   <img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/vect-cart-pol.jpg?raw=true" width=50%>
   Ces deux systèmes de coordonnées sont très différents, tant dans leur notation que dans leur définition. Toutefois, il est possible de passer d'un système de coordonnées à l'autre comme il est expliqué dans la suite. 
   
   </p>
<h2>Coordonnées cartésiennes</h2>
   Soit A un point du plan, de coordonnées $(x_{A};y_{A})$. On note : 
   $$
   A = (x_{A};y_{A})
   $$
   Soit maintenant le vecteur $\overrightarrow{OA} $ où $O$ est l'origine du repère. Ce vecteur a les mêmes coordonnées que celles du point $A$ mais l'écriture diffère un peu, on note : 
   $$
   \overrightarrow{OA} = 
   \begin{pmatrix}
   x_{A}-x_{0} \\
   y_{A}-y_{0} \\
   \end{pmatrix}
   =
   \begin{pmatrix}
   x_{A}\\
   y_{A}\\
   \end{pmatrix}
   $$ 
   Donc le vecteur $\overrightarrow{OA}$ est noté : 
   $$
   \overrightarrow{OA} =
   \begin{pmatrix}
   x_{A}\\
   y_{A}\\
   \end{pmatrix}
   $$
   Et le point $A$ est noté : 
   $$
   A = (x_{A};y_{A})
   $$
   
   Cette convention permet de distinguer d'un coup d'œil un vecteur d'un point. De savoir d'un coup d'œil si un élément est un point ou un vecteur. La flèche sur les vecteurs est obligatoire. La manière d'écrire les coordonnées est un indicateur visuel plus qu'une obligation incontournable.<br>
   
<h2>Coordonnées polaires</h2>

Pour définir les coordonnées polaires d'un vecteur, on  besoin de sa norme : $\rho$ et de son angle par rapport à l'axe des abscisses : $\alpha$.  

   Soit $\overrightarrow{OA}$, on écrit : 
   
   $$
   \overrightarrow{OA} =
   \begin{pmatrix}
   \rho\\
   \alpha\\
   \end{pmatrix}
   $$
   
   et pour tout  point $M$ :
   
   $$
   M =(\rho ~ ;  \alpha)
   $$
   <br>
   Par convention, un vecteur est toujours noté avec une flèche.  Pour distinguer vecteurs et points on pourra écrire les coordonnées des vecteurs verticalement. 
<hr/>

<h2>Relation de Chasles</h2>
La relation de Chasles appliquée dans le cadre des coordonnées cartésiennes est une formule qui permet de trouver le vecteur résultant à l'aide de la valeur des coordonnées des vecteurs initiaux.<br>

<img src="https://github.com/IamHenri/G1-Geometrie/blob/main/images/vectchasles.jpg?raw=true" width=50%><br>
Dans cette représentation à main levée, on peut voir trois points : $A$, $B$ et $C$ et la formule de Chasles dans ce contexte : 

$$
\overrightarrow{AB} + \overrightarrow{BC} = \overrightarrow{AC}
$$

La relation de Chasles permet soit de décomposer des vecteurs en somme de plusieurs autres. Ou de rassembler plusieurs vecteurs en un seul. 

<h2>Vecteur à partir de deux points</h2>
On définit un vecteur à l'aide de deux points. Pour déterminer les coordonnées d'un vecteur à l'aide de ces deux points, il faut soustraire les coordonnées du deuxième point à celles du premier. <br>
Autrement dit, soient les points $A$ et $B$ les points de coordonnées respectives~:
$$
A = (x_{A};y_{A})
$$
et 
$$
B = (x_{B};y_{B})
$$
dès lors pour avoir le vecteur $\overrightarrow{AB} $, il faut calculer la différence des coordonnées : 

$$
\overrightarrow{AB}  =
\begin{pmatrix}
x_{B}-x_{A}\\
y_{B}-y_{A}\\
\end{pmatrix}
$$
\emph{Exemple:}\\
soient les point $A$ et $B$ suivant : 

$$
A = (2;-3)
$$
et 
$$
B = (-3;5)
$$
Alors : 

$$
\overrightarrow{AB}  =
\begin{pmatrix}
2-(-3)\\
-3-(-5)\\
\end{pmatrix}
$$
Et donc : 

$$
\overrightarrow{AB}  =
\begin{pmatrix}
5\\
2\\
\end{pmatrix}
$$



<!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
<!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->

<p>
    
</p>

   <br>
   <hr>
   <a href="chapitre-7.3-les-vecteurs-operation-sur-les-vecteurs.php">Page suivante &rarr;</a><br>
   <a href="index.php">Index &uarr;</a><br>
   <?php  include 'pieddepage.php';?>
