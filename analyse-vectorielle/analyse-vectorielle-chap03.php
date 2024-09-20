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
  <h3>Les opérateurs de l'analyse vectorielle</h3>
   <p>Les opérateurs étudiés ici sont :
   <ul>
      <li> $\overrightarrow{grad}$ : le gradient d'un champ scalaire définit un champ de vecteurs ;                               </li>
      <li> $div$ : la divergence, d'un champ de vecteurs est un scalaire en chaque point où elle est définie ;                      </li>
      <li> $\overrightarrow{rot}$ : le rotationnel  d'un champ de vecteurs est lui même un champ de vecteurs ;                    </li>
      <li> $\Delta$ : le laplacien d'un fonction scalaire, lui même un scalaire.                                                  </li>
   </ul>
   </p>
   Pour décrire au mieux ces opérateurs, il faut préciser le cadre dans lequel ils s'appliquent : les champs scalaires ou vectoriels que l'on définit juste après, dans le prochain chapitre ainsi que les notions de flux, de circulation de vecteurs sur des contours. </p>
   <p>
      On verra que ces opérateurs permettent de mesurer et estimer différents paramètres sur les champs scalaires et de vecteurs. Par exemple, <b>le gradient</b> permet de construire un champ de vecteurs sur un champs scalaire, définissant les directions de plus grandes pentes (pour le champs scalaire définit à l'aide de fonctions dérivables). <b>La divergence</b> permet de regarder si un flux est compressible ou non. <b>Le rotationnel</b> permet de regarder si dans un champs de vecteurs tout objet subit une rotation dans son mouvement. LE laplacien est une mesure de la courbure d'un champ scalaire. On pourra faire le parallèle avec les fonctions de la variable réelles et leur dérivées secondes (quand elle existe).  
   </p>
   <p>
      Ces explications très résumées sont ici pour donner un point d'accroche entre ces opérateurs et ce qu'ils sont censés représentés. Ces éléments seront explicités tout le long du document. 
   </p>
   <p>Par ailleurs, on observe que ces opérateurs sont soit des vecteurs, soit des scalaires. Le gradient $\overrightarrow{grad}$ et le rotationnel $\overrightarrow{rot}$  sont des vecteurs. Et  la divergence $div$ et le laplacien $\Delta$ sont des scalaires. On le verra dans des exemples. 
   </p>
      <br>
      <hr>
   <a href="analyse-vectorielle-chap04.html">Page suivante : Champs scalaires et vectoriels &rarr;</a><br>
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