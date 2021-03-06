<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php echo $this->render('_search', ['model' => $searchModel]); 
    $models = $dataProvider->getModels(); 
    ?>

<div class="body-content">
        <div class="row">
            <div class="panel panel-default">
                <div style="padding-top:1%;"class="panel-body">
                    <?php foreach($models as $product){ ?>
                        <div class="card col-sm-6 col-md-3">
                            <div class="card-content">
                                <a href="<?=Url::to(['product/view', 'id' => $product["id"]]); ?>">
                                <img src="https://d3ift91kaax4b9.cloudfront.net/media/catalog/product/cache/33ba37c1fda6d70c703e88ff79ea1021/p/r/product-p006949-517_1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?= StringHelper::truncate(Html::encode($product['product_name']), 42) ?></h5>
                                    <p class="card-text description"><?= StringHelper::truncate(Html::encode(($product['description'])), 58)?></p>
                                    <p class="card-text price"><?= $product['unit_price'] ?>€</p>
                                </div>
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>