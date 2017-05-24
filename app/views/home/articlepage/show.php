<h4 class="page-title"><?= t("home.articles"); ?></h4>
<ol class="breadcrumb text-right">
  <li><a href="/"><?= t("home.link"); ?></a></li>
  <li><a href="/home/articles"><?= t("home.articles"); ?></a></li>
  <li class="active"><?= $article->subject; ?></li>
</ol>


<div class="text-center">
  <h2><?= $article->subject; ?></h2>
  <h4>
    <span class="label label-default"><i class="fa fa-calendar"></i> <?= $article->created_at; ?></span>
  </h4>
</div>
<hr>

<?= $article->content; ?>

<hr>

<!-- Next_Previous start -->
<ul class="pager">

  <?php
  $next = Article::load()->where("created_at", $article->created_at, ">")->order("created_at", "DESC")->take();
  $next = $next[0];
  ?>

  <?php
  $previous = Article::load()->where("created_at", $article->created_at, "<")->order("created_at", "DESC")->take();
  $previous = $previous[0];
  ?>

  <?php if ($previous) { ?>
  <li class="previous">
    <a href="/home/articles/show/<?= $previous->id; ?>">&larr; <?= $previous->subject; ?></a>
  </li>
  <?php } ?>

  <?php if ($next) { ?>
  <li class="next">
    <a href="/home/articles/show/<?= $next->id; ?>"><?= $next->subject; ?> &rarr;</a>
  </li>
  <?php } ?>

</ul>
<!-- Next_Previous end -->