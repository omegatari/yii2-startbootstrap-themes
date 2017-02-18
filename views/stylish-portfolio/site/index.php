<?php
/**
 * index.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

/* @var $this yii\web\View */

use yii\bootstrap\Html;
use p2made\helpers\FA;

$this->title = 'P2 Grayscale';
$assetDir = Yii::$app->assetManager->getPublishedUrl(
	'@vendor/p2made/yii2-startbootstrap-themes/assets/lib/grayscale'
);
?>

<?= $this->render('_header.php') ?>
<?= $this->render('_about.php') ?>
<?= $this->render('_download.php') ?>
<?= $this->render('_contact.php') ?>

<!-- Map Section -->
<div id="map"></div>

<?= $this->render('_footer.php') ?>
