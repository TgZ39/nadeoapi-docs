<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="en">
	<head>
		<meta charset="utf-8">

		<title><?= $title ?></title>

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="apple-touch-icon" sizes="180x180" href="/img/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">
		<link rel="manifest" href="/manifest.json">
		<link rel="mask-icon" href="/img/safari-pinned-tab.svg" color="#5bbad5">

		<meta property="og:title" content="<?= $title ?>">
		<meta property="og:description" content="<?= $this->description ?>">
		<meta property="og:url" content="https://webservices.openplanet.dev/">
		<meta property="og:image" content="https://openplanet.dev/img/logo_icon.png">

		<link rel="stylesheet" href="/style.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.2.0/css/fork-awesome.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.6.0/build/styles/agate.min.css">
	</head>

	<body>
		<section class="topheader is-hidden-mobile">
			<div class="container">
				<div class="level is-mobile">
					<div class="level-left">
						<p class="openplanet">Service provided by
							<a href="https://openplanet.dev/" target="blank" rel="noopener noreferrer">
								<i class="fa fa-heartbeat"></i>
								Openplanet
							</a>
						</p>
						<p class="discord ml-2">-
							<a class="ml-1" href="https://openplanet.dev/link/discord" target="blank" rel="noopener noreferrer">
								Join Discord
							</a>
							<i class="fa fa-discord"></i>
						</p>
					</div>

					<div class="level-right">
						<p>
							<a href="https://github.com/openplanet-nl/nadeoapi-docs" target="blank" rel="noopener noreferrer">Contribute on Github</a>
							<i class="fa fa-github"></i>
						</p>
					</div>
				</div>
			</div>
		</section>

		<nav class="navbar">
			<div class="container">
				<div class="navbar-brand">
					<a href="/" class="navbar-item">
						<span class="icon has-text-success"><i class="fa fa-code-fork"></i></span>
						<b>Trackmania Web Services API Documentation</b>
					</a>
				</div>
			</div>
		</nav>

		<section class="section">
			<div class="container">
				<div class="columns">
					<div class="column is-3">
						<?= $this->renderPartial('/menu/menu', [
							'index' => $this->getPageIndex(),
						]) ?>
					</div>

					<div class="column docs-content">
						<nav class="breadcrumb">
							<ul>
								<?php
								$crumbs = $this->getBreadcrumbs();
								if (count($crumbs) > 1) {
									foreach ($crumbs as $i => $crumb) {
										?>
										<li <?php if ($i == count($crumbs) - 1) { echo 'class="is-active"'; } ?>>
											<a href="/<?= Nin\Html::encode($crumb['path']) ?>">
												<?= Nin\Html::encode($crumb['name']) ?>
											</a>
										</li>
										<?php
									}
								}
								?>
							</ul>
						</nav>

						<?= $content ?>
					</div>
				</div>
			</div>
		</section>

		<footer class="footer">
			<div class="content has-text-centered">
				<p><small>This documentation is not affiliated with or endorsed by Nadeo or Ubisoft. All relevant trademarks belong to their respective owners.</small></p>
				<p>This is a collaborative project, consider <a href="https://github.com/openplanet-nl/nadeoapi-docs" target="blank" rel="noopener noreferrer">contributing on Github</a>!</p>
			</div>
		</footer>

		<script src="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.6.0/build/highlight.min.js"></script>
		<script src="/js/script.js"></script>
	</body>
</html>
