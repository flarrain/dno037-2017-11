<?php include('header.php')?>
<?php
$blog = array_map('str_getcsv', file('data/blog.csv'));
array_walk($blog, function(&$a) use ($blog) {$a = array_combine($blog[0], $a);});
array_shift($blog);
$archivo = $_GET['url'];
?>

<div class="col-sm-4">
<article>
<figure>
  <img src="images/ejemplo-01.jpg">
  <figcaption>Categoría: <a href="archive.php?url=referente">referente</a> o <a href="archive.php?url=antecedente">antecedente</a></figcaption>
<figure>
<h3><a href="post.php?url=id">Nombre del referente o antecedente</a></h3>
<p>Texto descriptivo breve del referente. Tipo "excerpt". <a href="post.php?url=id">Ver más detalles</a></p>
</article>
</div><!--/col-sm-4-->


<?php include('footer.php')?>
