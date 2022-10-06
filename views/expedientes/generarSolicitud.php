
<h1>Solicitud de <?php echo $sTramite; ?> </h1>

<?php 

echo $this->render('_datos_solicitud')

?>


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

 <!-- 
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

?> -->