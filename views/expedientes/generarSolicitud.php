
<h1>Solicitud de <?php echo $sTramite; ?> </h1>


<form class="row g-3">
<!--     <div class="col-12">
        <label for="selectTipoSolicitud" class="form-label">Tipo Solicitud</label>
        <select id="selectTipoSolicitud" onchange="solicitudChange" class="form-select" aria-label="Default select example">
            <option selected>Selecciona tramite</option>
            <option value="1">Licencia</option>
            <option value="2">Registro</option>
            <option value="3">Regularización</option>         
            <option value="3">Rectificación</option>
            <option value="4">Otro</option>
        </select>
    </div>
     -->
    
 
    
 

</form>

<?php use yii\bootstrap5\Carousel; ?>
 <?php echo Carousel::widget([
     'items' => [
         // the item contains both the image and the caption

         [
             'content' => $this->render('_datos_solicitud'),
             'caption' => 'sdsdsd',
             'options' => [
                 'class' => 'row g-3',
             ],
         ],
         [
             'content' =>
                 '<img src="https://i3.visitchile.com/img/GalleryContent/444/Isla_de_Pascua.jpg"/>',
             'caption' => '2222',
             'options' => [],
         ],
     ],
     'showIndicators' => true,
  ]);

?>

<?php use yii\bootstrap5\Tabs; ?>

<?php echo Tabs::widget([
    'items' => [
        [
            'label' => 'One',
            'content' => 'Anim pariatur cliche...',
            'active' => true
        ],
        [
            'label' => 'Two',
            'content' => 'Anim pariatur cliche...',
            'headerOptions' => [],
            'options' => ['id' => 'myveryownID'],
        ],
        [
            'label' => 'Example',
            'url' => 'http://www.example.com',
        ],
        [
            'label' => 'Dropdown',
            'items' => [
                 [
                     'label' => 'DropdownA',
                     'content' => 'DropdownA, Anim pariatur cliche...',
                 ],
                 [
                     'label' => 'DropdownB',
                     'content' => 'DropdownB, Anim pariatur cliche...',
                 ],
                 [
                     'label' => 'External Link',
                     'url' => 'http://www.example.com',
                 ],
            ],
        ],
    ],
]);

?>