<?php
$params     = $this->getViewparams();
$articles   = $params['articles'];
$spotlight  = $params['spotlight'];

# $this->debug();
?>

<div class="row">
<!--colleft-->
<div class="col-md-8 col-sm-12">
	<div class="box-caption">
		<span>spotlight</span>
	</div>
	<!--sportlight-->
	<section class="owl-carousel owl-spotlight">
        <?php foreach ($spotlight as $slide) : ?>
            <div>
                <article class="spotlight-item">
                    <div class="spotlight-img">
                        <img alt="<?= $slide->getTITREARTICLE()?>" src="<?= $slide->getFULLIMAGEARTICLE() ?>" class="img-responsive" />
                        <a href="<?= $this->generateUrl('news',strtolower($slide->getCATEGORIEOBJ()->getLIBELLECATEGORIE())); ?>" class="cate-tag"><?= $slide->getCATEGORIEOBJ()->getLIBELLECATEGORIE() ?></a>
                    </div>
                    <div class="spotlight-item-caption">
                        <h2 class="font-heading">
                            <a href="<?= $this->generateUfm('article/$1-$2.html', [$slide->getIDARTICLE(), $this->slugify($slide->getTITREARTICLE())]) ?>">
                                <?= $slide->getTITREARTICLE() ?>
                            </a>
                        </h2>
                        <div class="meta-post">
                            <a href="#">
                                <?= $slide->getAUTEUROBJ()->getNOMCOMPLET() ?>
                            </a>
                            <em></em>
                            <span>
							<time datetime="<?= $slide->getDATECREATIONARTICLE() ?>"></time>
						</span>
                        </div>
                        <p><?= $slide->getACCROCHEARTICLE(); ?></p>
                    </div>
                </article>
            </div>
        <?php endforeach; ?>
    </section>

	<!--spotlight-thumbs-->
	<section class="spotlight-thumbs">
		<div class="row">
            <?php foreach($articles as $article) : ?>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="spotlight-item-thumb">
					<div class="spotlight-item-thumb-img">
						<a href="#">
							<img alt="" src="<?= $article->getFULLIMAGEARTICLE(); ?>" />
						</a>
						<a href="<?= $this->generateUrl('news',strtolower($article->getCATEGORIEOBJ()->getLIBELLECATEGORIE())); ?>" class="cate-tag"><?= $article->getCATEGORIEOBJ()->getLIBELLECATEGORIE(); ?></a>
					</div>
					<h3><a href="<?= $this->generateUfm('article/$1-$2.html', [$article->getIDARTICLE(), $this->slugify($article->getTITREARTICLE())]) ?>"><?= $article->getTITREARTICLE(); ?></a></h3>
					<div class="meta-post">
						<a href="#">
                            <?= $article->getAUTEUROBJ()->getNOMCOMPLET(); ?>
						</a>
						<em></em>
						<span>
							<time datetime="<?= $article->getDATECREATIONARTICLE(); ?>"></time>
						</span>
					</div>
				</div>
			</div>
            <?php endforeach; ?>
		</div>
	</section>
</div>
<?php include PATH_SIDEBAR; ?>
