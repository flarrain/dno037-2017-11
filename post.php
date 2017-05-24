<?php include('header.php')?>
<?php
$blog = array_map('str_getcsv', file('data/blog.csv'));
array_walk($blog, function(&$a) use ($blog) {$a = array_combine($blog[0], $a);});
array_shift($blog);
$id = $_GET['url'];
?>

<div class="col-sm-12">
<h2>Título del Post</h2>
</div>

<?php include('footer.php')?>
