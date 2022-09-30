<?php
use yii\helpers\Html; ?>

<form class="row g-3">
    <div class="col-12">
         <?= Html::label(
             $content = 'Tipo Solicitud',
             $for = 'selectTipoSolicitud',
             $options = [
                 'class' => 'form-label',
             ]
         ) ?>
        
        <?= Html::dropDownList(
            'selectTipoSolicitud', //name
            $selection = null, //select
            $items = [
                '0' => 'Selecciona tramite',
                '1' => 'Licencia',
                '2' => 'Registro',
                '3' => 'Regularización',
                '4' => 'Rectificación',
                '5' => 'Otro',
            ], //items
            $options = [
                'id' => 'selectTipoSolicitud',
                'onchange' => 'this.form.submit()',
                'class' => 'form-select',
            ] //options
        ) ?>
     </div>
     <h4>Domicilio para notificaciones</h4>


    <div class="col-12">
        <label for="inputNombre" class="form-label">Domicilio </label>
        <input type="text" class="form-control" id="inputNombre" placeholder=" ">
    </div>
    <div class="col-md-6">
        <label for="inputColonia">Colonia</label>
        <input type="text" class="form-control" id="inputColonia" placeholder="Colonia">
    </div>
    <div class="col-md-6">
        <label for="inputCP">Código Postal</label>
        <input type="text" class="form-control" id="inputCP" placeholder="CP">
    </div>
    <div class="col-md-6">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Email">
        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
    </div>
    <div class="col-md-6">
        <label for="inputTelefono">Telefono</label>
        <input type="number" class="form-control" id="inputTelefono" aria-describedby="emailHelp" placeholder="Télefono">
    </div>
</form>