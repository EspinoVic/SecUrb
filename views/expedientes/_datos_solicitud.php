<?php
use yii\helpers\Html; ?>
<script>
    function selecOther(e){
        let value = document.getElementById("selectMotivoSolicitud").value;
        let inputOtroMotivoSoli = document.getElementById("contOtroMotivSoli");
        if(value == 1){
            //show otro field
            inputOtroMotivoSoli.classList.remove("invisible");
        }
        else{
            inputOtroMotivoSoli.classList.add("invisible");

        }
     }
</script>
<form class="row g-3">
    <div class="col-md-6">
         <?= Html::label(
             $content = 'Motivo Solicitud',
             $for = 'selectMotivoSolicitud',
             $options = [
                 'class' => 'form-label',
             ]
         ) ?>
        
        <?= Html::dropDownList(
            'selectMotivoSolicitud', //name
            $selection = null, //select
            $items = [
                '0' => 'Selecciona tramite',
                '2' => 'Licencia',
                '3' => 'Registro',
                '4' => 'Regularización',
                '5' => 'Rectificación',
                '1' => 'Otro',
            ], //items
            $options = [
                'id' => 'selectMotivoSolicitud',
                /* 'onchange' => 'this.form.submit()', */
                'onchange' => 'selecOther()',
                'class' => 'form-select',
            ] //options
        ) ?>
 
 
    </div>

    <div class="col-md-6 invisible" id="contOtroMotivSoli">
        <label for="inputOtroMotivSoli"  class="form-label">Otro </label>
        <input type="text" class="form-control " id="inputOtroMotivSoli" placeholder="Especifique">
    </div>

    <h4>Información del predio </h4>
    
    <div class="col-md-12" >
        <label for="inputOwnerName"  class="form-label">Nombre del Propieario </label>
        <input type="text" class="form-control " id="inputOwnerName" placeholder="Nombre de propietario">
    </div>
                 
    <div class="col-md-3">
         <?= Html::label(
             $content = 'Tipo de predio',
             $for = 'selectTipoDePredio',
             $options = [
                 'class' => 'form-label',
             ]
         ) ?>
        
        <?= Html::dropDownList(
            'selectTipoDePredio', //name
            $selection = null, //select
            $items = [
                '0' => 'Selecciona tipo',
                '2' => 'Rustico',
                '3' => 'Urbano',
            ], //items
            $options = [
                'id' => 'selectTipoDePredio',
                /* 'onchange' => 'this.form.submit()', */
                /*  'onchange' => 'selecOther()', */
                'class' => 'form-select',
            ] //options
        ) ?>
 
 
    </div>
 

    <div class="col-md-3 " >
        <label for="inputSuperfTotalPredio"  class="form-label">Superficie total  </label>
        <input type="number" class="form-control " id="inputSuperfTotalPredio" placeholder="Superficie total">
    </div>
    <div class="col-md-4 " >
        <label for="inputSuperfPorConstruirPredio"  class="form-label">Superficie por construir </label>
        <input type="number" class="form-control " id="inputSuperfTotalPredio" placeholder="Superficie por construir">
    </div>

   <?php echo $this->render('_domicilio_fields.php', [
       'tipoDomicilio' => 'InfoPredio',
   ]); ?>
    
    

    <h4>Domicilio para notificaciones</h4>


    <?php echo $this->render('_domicilio_fields.php', [
        'tipoDomicilio' => 'InfoNotif',
    ]); ?>
 
    <div class="col-md-6">
        <label for="inputEmail" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Email">
        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
    </div>
    <div class="col-md-6">
        <label for="inputTelefono" class="form-label">Telefono</label>
        <input type="number" class="form-control" id="inputTelefono" aria-describedby="emailHelp" placeholder="Télefono">
    </div>

    <h4>Información de la construcción</h4>
    <div class="col-md-3">
         <?= Html::label(
             $content = 'Genero Construccion',
             $for = 'selectGeneroConstruccion',
             $options = [
                 'class' => 'form-label',
             ]
         ) ?>
        
        <?= Html::dropDownList(
            'selectGeneroConstruccion', //name
            $selection = null, //select
            $items = [
                '0' => 'Selecciona genero',
                '2' => 'Comercial',
                '3' => 'Residencial',
            ], //items
            $options = [
                'id' => 'selectGeneroConstruccion',
                /* 'onchange' => 'this.form.submit()', */
                /* 'onchange' => 'selecOther()', */
                'class' => 'form-select',
            ] //options
        ) ?>
 
 
    </div>
 
    <div class="col-md-3">
         <?= Html::label(
             $content = 'Tipo de Construccion',
             $for = 'selectTipoConstruccion',
             $options = [
                 'class' => 'form-label',
             ]
         ) ?>
        
        <?= Html::dropDownList(
            'selectTipoConstruccion', //name
            $selection = null, //select
            $items = [
                '0' => 'Selecciona tipo',
                '2' => 'Dos niveles',
            ], //items
            $options = [
                'id' => 'selectTipoConstruccion',
                /* 'onchange' => 'this.form.submit()', */
                /* 'onchange' => 'selecOther()', */
                'class' => 'form-select',
            ] //options
        ) ?>
 
 
    </div>                

    <div class ="row g3">
            <!-- NIVELES -->
        <div class="col-md-3">
            <label for="inputNiveles" class="form-label">Niveles</label>
            <input type="number" class="form-control" id="inputNiveles" aria-describedby="emailHelp" placeholder="Niveles">
        </div>
        <!-- CAJONES -->
        <div class="col-md-3">
            <label for="inputCajones" class="form-label">Cajones</label>
            <input type="number" class="form-control" id="inputCajones" aria-describedby="emailHelp" placeholder="Cajones">
        </div>
        <!-- COS -->
        <div class="col-md-3">
            <label for="inputCOS" class="form-label">COS</label>
            <input type="number" class="form-control" id="inputCOS" aria-describedby="emailHelp" placeholder="COS">
        </div>
        <!-- CUS -->
        <div class="col-md-3">
            <label for="inputCUS" class="form-label">CUS</label>
            <input type="number" class="form-control" id="inputCUS" aria-describedby="emailHelp" placeholder="CUS">
        </div>
        <!-- M2 Preexistentes -->
        <div class="col-md-3">
            <label for="inputM2Preexis" class="form-label">Superf. Existente</label>
            <input type="number" class="form-control" id="inputM2Preexis" aria-describedby="emailHelp" placeholder="Superf. Preexistente">
        </div>

    </div>
    
    <div class="row g3">
        <!-- Titulo propiedad -->
        <div class="col-md-3">
            <label for="inputTituloPropiedad" class="form-label">Titulo propiedad</label>
            <input type="number" class="form-control" id="inputTituloPropiedad" aria-describedby="emailHelp" placeholder="Titulo propiedad">
        </div>
        <!-- RPP -->
        <div class="col-md-3">
            <label for="inputRPP" class="form-label">RPP</label>
            <input type="number" class="form-control" id="inputRPP" aria-describedby="emailHelp" placeholder="RPP">
        </div>
        <!-- TOMO -->
        <div class="col-md-3">
            <label for="inputTomo" class="form-label">Tomo</label>
            <input type="number" class="form-control" id="inputTomo" aria-describedby="emailHelp" placeholder="Tomo">
        </div>
        <!-- FOLIO ELECTRONICO -->
        <div class="col-md-3">
            <label for="inputFolioElectronico" class="form-label">Folio Electronico</label>
            <input type="number" class="form-control" id="inputFolioElectronico" aria-describedby="emailHelp" placeholder="Folio Electronico">
        </div>
        <!-- CLAVE O CUENTA CATASTRAL # -->
        <div class="col-md-3">
            <label for="inputClaveCuentaCatastral" class="form-label">Clave/Cuenta Catastral</label>
                <input type="number" class="form-control" id="inputClaveCuentaCatastral" aria-describedby="emailHelp" placeholder="Clave/Cuenta">
        </div>
    </div>

</form>