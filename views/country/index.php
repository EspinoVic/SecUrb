<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
 
?>
<h1>Countries</h1>
<ul>
<?php foreach ($countriesVic as $country): ?>
    <li>
        <?= Html::encode("{$country->code} ({$country->name})") ?>:
        <?= $country->population ?>
    </li>
<?php endforeach; ?>
</ul>

<?= $myLinkPager = LinkPager::widget([
     'pagination' => $pagination,
     //Css option for container
     'options' => ['class' => 'pagination'],
     //First option value
     'firstPageLabel' => 'First',
     //Last option value
     'lastPageLabel' => 'Last',
     //Previous option value
     'prevPageLabel' => 'Prev',
     //Next option value
     'nextPageLabel' => 'Next',
     //Current Active option value
     'activePageCssClass' => 'active',
     //Max count of allowed options
     'maxButtonCount' => 8,
 
     // Css for each options. Links
     'linkOptions' => ['class' => 'page-link'],
     'disabledPageCssClass' => 'disabled',
 
     // Customzing CSS class for navigating link
     'prevPageCssClass' => 'p-back',
     'nextPageCssClass' => 'p-next',
     'firstPageCssClass' => 'p-first',
     'lastPageCssClass' => 'p-last',
    ]) ?>
 
   <ul class="pagination">
    <li class="page-item active" >
      <span class="page-link">1</span>
    </li>
    <li class=" "><a class="page-link " href="#">2</a></li>
    <li class=" "><a class="page-link " href="#">3</a></li>
  </ul>
 
