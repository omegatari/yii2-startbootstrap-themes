<?php
/**
 * primary.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

/* @var $this \yii\web\View */
/* @var $content string */

use yii\bootstrap\Html;
use common\widgets\Alert;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<?= $this->render('_head.php') ?>
</head>
<body>
	<?php $this->beginBody() ?>
	<?= Alert::widget() ?>

	<?= $this->render('_header.php') ?>

	<?= $this->render('_navigation.php') ?>

	<div class="container">
		<?= $content ?>
	</div>

	<?= $this->render('_footer.php') ?>

	<?php $this->endBody() ?>

	<!-- Script to Activate the Carousel -->
	<script>
		$(document).ready(function(){
			$('.carousel').carousel({
				interval: 5000 //changes the speed
			})
		});
	</script>
</body>
</html>
<?php $this->endPage() ?>
