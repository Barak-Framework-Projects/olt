<!-- first section - Slides -->

<div id="carousel-example-generic1" class="carousel slide" data-ride="carousel" style="color:white; font-size:14px;">

	<?php $slides = Slide::all(); ?>
	<?php if ($slides) { ?>

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">

		<?php $active = "active"; ?>
		<?php foreach ($slides as $slide) { ?>


		<div class="item <?= $active; ?>" style="
			background-image:url(<?= $slide->bg_image; ?>);
			background-position:center;
			min-height:479px;
			max-height:479px;
			">

			<center style="padding-top:80px">
				<img class="img-responsive hidden-xs animated zoomInLeft" src="<?= $slide->image; ?>" style="max-width:200px; max-height:200px;" />
			</center>
			<div class="carousel-caption" style="bottom:0;left:0;right:0; margin-bottom:-40px;">
				<div class="background-transparent" style="min-height:80px;">
					<h3 class="animated bounceInDown"><?= $slide->subject; ?></h3>
					<h4 class="hidden-sm hidden-xs animated bounceInUp"><?= $slide->content; ?></h4>
				</div>
			</div>

		</div>
		<?php $active = ""; ?>
		<?php } ?>

	</div>
	<!-- Controls -->
	<a class="left carousel-control" href="#carousel-example-generic1" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic1" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>

	<?php } ?>

</div>

<!-- morphext start -->
<!-- source: https://github.com/MrSaints/Morphext -->
<link href="/app/assets/css/morphext.css" rel="stylesheet" />
<script src="/app/assets/js/morphext.min.js"></script>
<!-- morphext end -->

<script>
$(document).ready(function() {
	$("#js-rotating").Morphext({
      // The [in] animation type. Refer to Animate.css for a list of available animations.
      animation: "flipInX",
      // An array of phrases to rotate are created based on this separator. Change it if you wish to separate the phrases differently (e.g. So Simple | Very Doge | Much Wow | Such Cool).
      separator: ",",
      // The delay between the changing of each phrase in milliseconds.
      speed: 2000,
      complete: function () {
        // Called after the entrance animation is executed.
      }
    });
});
</script>

<div class="well well-sm">
	<div style="border-bottom: 1px solid #e7e7e7;">
		<div class="container">
			<div class="text-center">
				<img src="<?= Setting::unique(['name' => 'image_emblem'])->value; ?>" style="width: 80px; height: 80px;"/>
				<h2>
					<?= Setting::unique(["name" => "site_short_title"])->value; ?> İLE TELEKOM İŞLERİ <b id="js-rotating">HIZLI, SÜREKLİ, PRATİK, KARARLI</b><br/>
				</h2>
				<h4>
					ve her gün daha iyisi olmak için çalışıyoruz!<br/><br/>
					<a href="/home/about" class="btn btn-info" role="button"><?= Setting::unique(["name" => "site_short_title"])->value; ?> HAKKINDA</a>
				</h4>
			</div>
		</div>
	</div>

	<!-- /first section -->

	<!-- second section - Solutions -->

	<div class="container">

		<h2 class="text-center">Ürünlerimiz</h2> <hr/>

		<style>
		.thumbnail {
			position: relative;

		}
		.caption {
			position: absolute;
			left: 0;
			bottom: 0;
			width: 100%;
		}
		.caption h5 {color:white;}
		</style>

		<?php $products = Product::last(3); ?>
		<?php if ($products) { ?>
		<div class="row">
			<?php foreach ($products as $product) { ?>

			<div class="col-md-4">

				<div class="thumbnail img-rounded" style="
				background-image: url('<?= $product->image; ?>');
				background-repeat:no-repeat;
				background-position:center;
				background-size: 100% auto;
				min-height:250px;
				max-height:250px;
				">
				<a href="/home/products/show/<?= $product->id; ?>" class="btn btn-primary pull-right" role="button">İncele</a>

				<div class="caption background-transparent">
					<h5><?= $product->name; ?></h5>
				</div>
			</div>

		</div>

		<?php } ?>
	</div>
	<?php } ?>
	<center>
		<h4>
			<?= Setting::unique(["name" => "site_short_title"])->value; ?>
			Olarak Fiber Optik ve Networkle alakalı <br/>
			özel üretim ve bol çeşitli ürün yelpazesine sahibiz.<br/>
		</h4>
		<a href="/home/products" class="btn btn-info" role="button">
			Tüm Ürünlerimiz
		</a>
	</center>
</div>

<br/>
<!-- /second section -->

<!-- third section - Partners -->
<div class="container">

	<h2 class="text-center">Partnerlerimiz</h2> <hr/>
	<?php $partners = Partner::all(); ?>
	<?php if ($partners) { ?>
	<center>
		<?php foreach ($partners as $partner) { ?>
		<i class="gray_scale_box img-hover">
			<img src="<?= $partner->image; ?>" class="gray_scale" style="padding:1em; max-height:100px; max-width:300px;"/>
		</i>
		<?php } ?>
	</center>
	<?php } ?>
</div>

<!-- /third section -->

</div>
