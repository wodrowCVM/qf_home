<div class="category-default-index">
    <h1><?= $this->context->action->uniqueId ?></h1>
    <div class="row">
        <div class="col-lg-12">
            <?php
            use kartik\tree\TreeView;
            echo TreeView::widget([
                // single query fetch to render the tree
                'query'             => \common\models\Category::find()->addOrderBy('root, lft'),
                'headingOptions'    => ['label' => 'Categories'],
                'isAdmin'           => false,                       // optional (toggle to enable admin mode)
                'displayValue'      => 1,                           // initial display value
                //'softDelete'      => true,                        // normally not needed to change
                //'cacheSettings'   => ['enableCache' => true]      // normally not needed to change
            ]);
            ?>
        </div>
    </div>
</div>
