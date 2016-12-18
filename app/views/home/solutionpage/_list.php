<?php $page = basename($_SERVER["REQUEST_URI"]); ?>

<div class="list-group">
<a href="/home/solutions/network" class="list-group-item <?php if (in_array($page, ['network', 'solutions'])) echo 'active'; ?>"><?= t("home.solutions.network"); ?></a>
<a href="/home/solutions/server" class="list-group-item <?php if ($page == 'server') echo 'active'; ?>"><?= t("home.solutions.server"); ?></a>
<a href="/home/solutions/security" class="list-group-item <?php if ($page == 'security') echo 'active'; ?>"><?= t("home.solutions.security.link"); ?></a>
<a href="/home/solutions/wireless/" class="list-group-item <?php if ($page == 'wireless') echo 'active'; ?>"><?= t("home.solutions.wireless"); ?></a>
<a href="/home/solutions/video_conference/" class="list-group-item <?php if ($page == 'video_conference') echo 'active'; ?>"><?= t("home.solutions.video_conference"); ?></a>
<a href="/home/solutions/structural_cabling" class="list-group-item <?php if ($page == 'structural_cabling') echo 'active'; ?>"><?= t("home.solutions.structural_cabling"); ?></a>
<a href="/home/solutions/fiber_optic_infrastructure" class="list-group-item <?php if ($page == 'fiber_optic_infrastructure') echo 'active'; ?>"><?= t("home.solutions.fiber_optic_infrastructure"); ?></a>
</div>