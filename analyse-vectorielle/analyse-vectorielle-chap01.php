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
   <p class="a rotatedFloralHeartBullet">
   <h1>Le Contexte mathématiques</h1>
   <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
   <h2>Préliminaires</h2>
   <p>Ce texte s'adresse à toute personne voulant comprendre les opérateurs de l'analyse vectorielle d'un point géométrique et analytique. </p>
   <p>
      Beaucoup de dessins sont fait à la main pour vous inciter à vous même les reproduire. Le dessin permet de se représenter les éléments dont on dispose, ce dont on a besoin, ce qu'on doit déterminer,... Dessiner ce qu'on connaît permet d'identifier ce qui manque. 
   </p>
   <p>
      Après relecture de ce document, cette version ne comprends pas encore de représentation ou de dessins pour donner un aspect plus figuratif à ces concepts. A venir dans les prochaines versions. 
   </p>
   <p>
      Le  document est décomposé selon ces  chapitres après les préliminaires et la présentation générale : 
   <ul>
      <li> Les champs scalaire										</li>
      <li> Les champs de vecteurs                                     </li>
      <li> L'opérateur $\nabla$ : "Nabla"                             </li>
      <li> Le gradient                                                </li>
      <li> La divergence                                              </li>
      <li> Le rotationnel                                             </li>
      <li> Le laplacien                                               </li>
      <li> tl;dr = une vue (extrêmement) synthétique de ce document.  </li>
   </ul>
   Le tout émaillé d'exemples et d'exercices corrigés. 
   <p>
   <iframe src="https://www.geogebra.org/calculator/wunjf4tm?embed" width="800" height="600" allowfullscreen style="border: 1px solid #e4e4e4;border-radius: 4px;" frameborder="0"></iframe>
   </p>
   <b>Méthode de travail avec ce document :</b>  le lire en se disant que ce dont il retourne est compris est une erreur trop souvent commise. Pour travailler ce sujet traité ici, il est bon de s'armer d'une feuille et d'un stylo et de reprendre chaque calcul réalisé ici, comprendre ce qui est présenté ici c'est s'approprier chaque définition, chaque formule. Comprendre un principe est une chose, savoir s'en servir en est une autre. Pour cela, les exercices proposés tout au long du document sont progressifs et permettent de bien comprendre les mécaniques mises en jeu ici. </p>
   <p>
      Si  vous avez ouvert ou commencé ce document, la probabilité pour que ce soit par nécessité plus que par plaisir est assez grande. Mon objectif est que cette découverte, ou redécouverte se fasse en annulant appréhension ou peur que vous pourriez très naturellement avoir. On fait rarement des maths par plaisir, mais bien plus souvent pour un besoin particulier, genre examen, formation pour aller vers un métier qui les nécessites. On s'étonnera facilement de voir à quel point elles interviennent à plein de niveau particuliers de manière surprenante et fortuite. 
   </p>
   <p>
      Un parti pris dans ce document est la répétition, au risque de sembler redondant. Lorsqu'une théorie ou un principe est expliqué, il est mis en situation dans plusieurs cas pratiques dans une sorte de progression de la complexité du modèle présenté. On voit le modèle en une, deux, trois, $n$ dimensions, selon un nombre de paramètres croissants. Une fois cette multitude de cas vus, une synthèse est proposée pour présenter une généralisation des définitions, formules et théorèmes dans tous les cas. 
      <br>
      <hr>
   <a href="analyse-vectorielle-chap02.php">Page suivante : les EDP&rarr;</a><br>
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