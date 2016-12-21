<?php $page = basename($_SERVER["REQUEST_URI"]); ?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <?= t("home.corporate.link"); ?>
    </h3>
  </div>

  <div class="list-group">
    <a href="/home/corporate/about" class="list-group-item <?php if (in_array($page, ['about', 'corporate'])) echo 'active'; ?>"><?= t("home.corporate.about"); ?></a>
    <a href="/home/corporate/our_focus" class="list-group-item <?php if ($page == 'our_focus') echo 'active'; ?>"><?= t("home.corporate.our_focus"); ?></a>
    <a href="/home/corporate/service_policy" class="list-group-item <?php if ($page == 'service_policy') echo 'active'; ?>"><?= t("home.corporate.service_policy"); ?></a>
    <a href="/home/corporate/human_resources" class="list-group-item <?php if ($page == 'human_resources') echo 'active'; ?>"><?= t("home.corporate.human_resources"); ?></a>
  </div>
</div>
