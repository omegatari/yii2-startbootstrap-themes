P2 Start Bootstrap Themes v0.2.0-dev
=========================

Themes from [Start Bootstrap](https://startbootstrap.com) as a UIs for [Yii 2](http://www.yiiframework.com/) Framework.

These themes contain [AssetBundles](http://www.yiiframework.com/doc-2.0/guide-structure-assets.html),  [Views](http://www.yiiframework.com/doc-2.0/guide-structure-views.html), and [Widgets](http://www.yiiframework.com/doc-2.0/guide-structure-widgets.html) to render the Start Bootstrap themes as Yii 2 themes.

P2 Start Bootstrap Themes declares [`p2made/yii2-p2y2-things`](https://github.com/p2made/yii2-p2y2-things) and [`p2made/yii2-p2y2-things-demo`](https://github.com/p2made/yii2-p2y2-things-demo) as dependancies.

*!!!* This project still has some rough & unfinished bits. It's only been let out of the cage so I can begin using it in other projects.

Installation
------------

The preferred way to install P2 Start Bootstrap Themes is through [composer](http://getcomposer.org/download/).
Depending on your composer installation, run *one* of the following commands:

```
composer require --prefer-dist p2made/yii2-startbootstrap-themes "^0.1"
```

or

```
php composer.phar require --prefer-dist p2made/yii2-startbootstrap-themes "^0.1"
```

Alternatively add:

```
"p2made/yii2-startbootstrap-themes": "^0.1"
```

to the requires section of your `composer.json` file & P2 Start Bootstrap Themes will be installed next time you run `composer update`.

The files are installed via Yii's recommended usage of the `fxp/composer-asset-plugin`.

Quick Start
-----------

Once the extension is installed, you can have a *preview* by reconfiguring the path mappings of the view component:

```php
	'components' => [
		'view' => [
			'theme' => [
				'pathMap' => [
					'@app/views' => '@vendor/p2made/yii2-startbootstrap-themes/views/agency',
				],
			],
		],
	],
```

This asset bundle provides sample files for layout and view (see folder `views/`), they are **not meant to be customized directly in the `vendor/` folder**. If you do that, your changes will be lost next time you run `composer update`.

Therefore it is recommended to **copy the views into your application** and adjust them to your needs.

To view pages in `site/pages/` you need to modify `actions()` in the `SiteController`:

```php
	public function actions()
	{
		return [
			...
			'page' => [
				'class' => 'yii\web\ViewAction',
			],
		];
	}
```

P2 Start Bootstrap Themes uses [P2Y2Things](https://github.com/p2made/yii2-p2y2-things) which requires some Yii 2 assets to be nullified to avoid conflicts through double loading. Modify `common/config/main.php` with...

```
	'components' => [
		'assetManager' => [
			'bundles' => [
				'yii\web\JqueryAsset' => [
					'sourcePath' => null, 'js' => [],
				],
				'yii\bootstrap\BootstrapAsset' => [
					'sourcePath' => null, 'css' => [],
				],
				'yii\bootstrap\BootstrapPluginAsset' => [
					'sourcePath' => null, 'js' => [],
				],
				'yii\jui\JuiAsset' => [
					'sourcePath' => null, 'css' => [], 'js' => [],
				],
				'\rmrevin\yii\fontawesome\AssetBundle' => [
					'sourcePath' => null, 'css' => [],
				],
			],
		],
		...
	],
```

Customization
-------------

- Copy files from `vendor/p2made/yii2-startbootstrap-themes/views-preview/sb-admin-2` (or other theme) to `@app/views`.
- Remove the custom `view` configuration from your application by deleting the path mappings, if you have made them before.
- Edit your views adhering to html markup `http://shapebootstrap.net/item/triangle-free-responsive-multipurpose-template/` & the example views.
