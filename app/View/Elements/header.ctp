
<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
			<a class="brand" href="<?php print $this->Html->url("/",true) ?>">
				<img src='<?php print $this->webroot; ?>img/watermark.png' />
				<?php print Configure::read("siteTitle"); ?></a>
			<div class="nav-collapse">
				<?php
				$currentUrl = $this->request->url;
				?>
				<ul class="nav">
					<?php
						foreach(Configure::read("menu") as $k=>$v){
							$active=(Router::url($v['url']) == Router::url('/' . $currentUrl));
							?>
							<li class="<?php print $active?"active":""; ?>">
								<?php
									print $this->Html->link($v['title'],$v['url']);
								?>
							</li>
							<?php
						}
					?>
				</ul>
			</div>
		</div>
	</div>
	<a href="https://github.com/amrosama2020/WaterMark-Me"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://a248.e.akamai.net/assets.github.com/img/71eeaab9d563c2b3c590319b398dd35683265e85/687474703a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f677261795f3664366436642e706e67" alt="Fork me on GitHub"></a>
</div>