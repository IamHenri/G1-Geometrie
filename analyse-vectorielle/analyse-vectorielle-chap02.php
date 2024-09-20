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
<h3>Pré-requis</h3>
   Pour aborder l'analyse vectorielle, certains éléments ne sont pas inutiles: 
   <ul>
      <li> Fonctions à $n$  variables;       					</li>
      <li> Calcul différentiel;              					</li>
      <li> Calcul Intégral;                  					</li>
      <li> Quelques notions d'algèbre linéaire.                 </li>
   </ul>
   </p>
   <p>
      Et en même temps rien de tout ça, l'analyse vectorielle est un outil permettant de modéliser énormément de phénomènes. On retrouve ces outils dans toute la physique. 
   </p>
   <h3>Contexte Informatique</h3>
   Le contexte informatique est celui de l'analyse numérique des équations au dérivées partielles qui modélisent des phénomènes physiques, chimiques, anthropologiques, géographiques, astronomiques, on trouve des Equations aux dérivées partielles, appelées EDP dans quasiment tous les modélisations de systèmes dynamiques. L'outil informatique est utilisé pour étudier ces équations sous le prisme de l'analyse numérique. L'analyse numérique est un domaine très vaste. En résumé elle analyse les phénomènes continus de manière discrète (découpé en petits bouts). 
   <h3>Exemples d'EDP</h3>
   On présente ici les briques élémentaires des Équations au Dérivées Partielles, sorte d'extension des équations différentielles étendues à plus d'une dimension souvent appelées EDP. Quelques exemples d'équations aux dérivées partielles issues de la physique ou autre phénomène naturel, où on omet les hypothèses et conditions aux limites pour se concentrer sur la structure de ces équations, qui n'ont pas de représentation unique. On propose ici une représentation de ces équations : 
   <p>Équation de la chaleur : 
      $$
      \dfrac{\partial f}{\partial t} = \Delta f 
      $$
   </p>
   <p>Équation des ondes : 
      \begin{align*}
      & \dfrac{\partial^{2} f}{\partial t^{2}} = c^{2}.\nabla^{2} f ;
      \end{align*}
   <p>Équation de Poisson : </p>
   \begin{align*}
   & \Delta f  = h ;
   \end{align*}
   <p>Équation de Laplace : </p>
   <p>
      Cas particulier de l'équation de Poisson ;
      \begin{align*}
      & \Delta f  = 0 ;
      \end{align*}
   <p>Équation de Klein-Gordon : </p>
   <p>
      \begin{align*}
      &  \dfrac{1}{c^{2}}.\dfrac{\partial^{2} f}{\partial t^{2}} - \nabla^{2} f +  \dfrac{m^{2}c^{2}}{\hbar^{2}}. f = 0
      \end{align*}
   <p>Équations de l'électromagnétisme : </p>
   <p>
      $\overrightarrow{E}$, $\overrightarrow{B}$, $\overrightarrow{j}$ trois champs de vecteurs dépendant du temps et $\rho$ une fonction réelle dépendante du temps. 
   <p>Équations de Maxwell-Gauss :
      \begin{align*}
      & \overrightarrow{\nabla}.\overrightarrow{E} = \dfrac{\rho}{\epsilon_{0}}
      \end{align*}
   <p>Équations de Maxwell-Thomson : </p>
   <p>
      \begin{align*}
      & \overrightarrow{\nabla}.\overrightarrow{B} = 0
      \end{align*}
   <p>Équations de Maxwell-Faraday : </p>
   <p>
      \begin{align*}
      & \overrightarrow{\nabla}\wedge\overrightarrow{E} = -\dfrac{\partial \overrightarrow{B}}{\partial t}
      \end{align*}
   <p>Équations de Maxwell-Ampère : </p>
   <p>
      \begin{align*}
      & \overrightarrow{\nabla}\wedge\overrightarrow{B} = \mu_{0}.\vec{j} + \mu_{0}.\epsilon_{0}.\dfrac{\partial \overrightarrow{E}}{\partial t}
      \end{align*}
   <p>Équations de Navier-Stokes : </p>
   <p>
      \begin{align*}
      & \rho \left[\dfrac{\partial \overrightarrow{\nu}}{\partial t} + (\overrightarrow{\nu} . \overrightarrow{\nabla} ) \overrightarrow{\nu}  \right] = -\nabla P + \rho \overrightarrow{g} + \eta \Delta \overrightarrow{\nu}  
      \end{align*}
      Pour information, il en existe plusieurs formulations dépendantes des paramètres intrinsèques des fluides étudiés. Une description de cette formule sera vue en cours. 
   <h2>Objectifs : </h2>
   <p>
      Ce cours doit vous permettre de comprendre chaque équation ci-dessus ou d'autres qui utiliseraient ce formalisme. Le rôle de ces EDP ici est uniquement en tant que combinaisons linéaires d'opérateurs. Ce cours tente d'expliquer le rôle de chacun de ces opérateurs pour comprendre explicitement les équations vues au dessus. 
   </p>
   <p>
      Il faut savoir qu'il n'existe pas de méthode générale pour résoudre ces équations, fonctionnant dans tout les ca. Des approches existent, elles ont toutes une marge d'erreur plus ou moins maîtrisées.  
   </p>
   <p>
      Pour beaucoup d'EDP on arrive à trouver des solutions approchées suffisamment justes pour permettre aux avions de voler, aux fusées de décoller, à votre téléphone à l'aide de satellites de vous donner votre position à quelques mettre près, aux centrales nucléaires de fonctionner, à tout ce qui nécessite de l'ingénierie mathématiques. Les EDP sont quasiment partout et sont utilisées dès qu'il s'agit de modéliser un système dynamique. 
   </p>
   <p>
      D'un point de vue purement culturel, Ivar Ekeland, un chercheur en mathématiques a travaillé sur la modélisation des villes, on trouve son article ici : 
   </p>
   <p> <a href="https://www.sciencedirect.com/science/article/abs/pii/S1468121806000174" target="_blank">https://www.sciencedirect.com/science/article/abs/pii/S1468121806000174</a>. </p>
   <p> Histoire d'illustrer l’importance et la nécessité des Équations aux dérivées partielles dans la représentation des phénomènes complexes. Et la limite, où on s'aperçoit qu'elles n'ont pas souvent de solution!</p>
   <p>
      Pour attaquer le vaste sujet de l'analyse vectorielle, on commence par un opérateur: $\nabla$, servant dans 95% des équations (estimation purement personnelle ne reposant que sur mon opinion). Disons que l'on peut très souvent s'y ramener et il est beaucoup utilisé dans les EDP.
      <!--
         %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
         %Intro
         %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
         %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
         %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
         %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
         -->
 
      <br>
      <hr>
   <a href="analyse-vectorielle-chap03.php">Page suivante : présentation des opérateurs &rarr;</a><br>
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