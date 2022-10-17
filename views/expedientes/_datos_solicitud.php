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

    <div class="col-md-6 " id="contCuentaEscritura">
        <label for="inputTieneEscritura"  class="form-label">Cuenta con escritura </label>
        <input type="checkbox" class="form-check-input me-1 " id="inputTieneEscritura" placeholder="Especifique">
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
    
 

    <div className="viewport-canvas">
        <canvas id="canvasCroquis"   >
         Your browser does not support the HTML5 canvas tag.
        </canvas>
    </div>
    <script>
        let width=800;
        let height=500
        

        /* 5 espacios
        1 cuadro
        3 rectangulp
        1 cuadro

        4 x 0.25 espacios

        height / (9elementos x 4unidadesde.25)
        300/36 -> 8.33px cada unidad minima


        */

        let gap =           height/36 +.5;
        let littleSquar =   4*gap +.5;
        let bigSquareBase =     3*littleSquar+.5;
        
        let currRotationCanvas = 0

        let c = document.getElementById("canvasCroquis");
        let ctx = c.getContext("2d");
    /*     ctx.moveTo(0.5,0.5)
        ctx.translate(0.5, 0.5); */

        let dpi = window.devicePixelRatio;

        //get CSS height
        //the + prefix casts it to an integer
        //the slice method gets rid of "px"
        let style_height = +getComputedStyle(c).getPropertyValue("height").slice(0, -2);
        //get CSS width
        let style_width = +getComputedStyle(c).getPropertyValue("width").slice(0, -2);
        //scale the canvas
        c.setAttribute('height', style_height * dpi);
        c.setAttribute('width', style_width * dpi);


        document.getElementById("inputInfoPredioEntreCallesH").addEventListener('input',
        (ev)=>{
            /* context.restore() */
            let origX = (gap + littleSquar + gap);
            let origY =  (gap + littleSquar + gap );
            
            ctx.translate( origX,origY )
            

            ctx.font = `${18}px sans-serif`;
            let calles = ev.srcElement.value.split(",")
            ctx.fillText(calles[0],0 , 0);
            
            if(calles[1])
                ctx.fillText(calles[1],0 ,  bigSquareBase+gap + littleSquar + gap );

                
            let newX = -(gap + littleSquar + gap);
            let newY =  -(gap + littleSquar + gap );
            ctx.translate( newX,newY )
           /*  context.save() */
 
        })

        document.getElementById("inputInfoPredioEntreCallesV").addEventListener('input',
        (ev)=>{
            //set position
             


            let origX = (gap + littleSquar + gap + bigSquareBase);
            let origY =  (gap + littleSquar  + gap);
            ctx.translate( origX,origY  )
            ctx.rotate( (90 * Math.PI / 180) );

 
            ctx.font = `${18}px sans-serif`;
            let calles = ev.srcElement.value.split(",")
            
            ctx.fillText(calles[0],0 , 0);
            
            if(calles[1])
                ctx.fillText(calles[1],0 ,  bigSquareBase+gap   );
 

            //reset position alv
            let newX = -( gap + littleSquar + gap + bigSquareBase)
            let newY =  -(gap + littleSquar  + gap) ;
            ctx.rotate( (-90 * Math.PI / 180) );
            ctx.translate( newX,newY )
            context.save()
            
        }) 


        createRect(gap,gap,littleSquar, littleSquar)
        createRect(gap,gap + littleSquar + gap,littleSquar, bigSquareBase)
        createRect(gap,gap + littleSquar + gap + bigSquareBase + gap, littleSquar, littleSquar)
       

     
        createRect(gap + littleSquar + gap ,
        gap,
        bigSquareBase, 
        littleSquar
        )
        createRect(gap + littleSquar + gap ,
        gap + littleSquar + gap,
         bigSquareBase,
         bigSquareBase
         )
        createRect(gap + littleSquar + gap ,
        gap + littleSquar + gap + bigSquareBase + gap,
        bigSquareBase, 
        littleSquar
        )
  
     
        createRect(gap + littleSquar + gap + bigSquareBase + gap,gap,littleSquar, littleSquar)
        createRect( gap + littleSquar + gap + bigSquareBase + gap, gap + littleSquar + gap ,littleSquar,bigSquareBase)
        createRect( gap + littleSquar + gap + bigSquareBase + gap, gap + littleSquar + gap + bigSquareBase + gap,littleSquar, littleSquar)
   
      /*   var PIXEL_RATIO = (function () {
            var ctx = document.createElement("canvas").getContext("2d"),
                dpr = window.devicePixelRatio || 1,
                bsr = ctx.webkitBackingStorePixelRatio ||
                    ctx.mozBackingStorePixelRatio ||
                    ctx.msBackingStorePixelRatio ||
                    ctx.oBackingStorePixelRatio ||
                    ctx.backingStorePixelRatio || 1;

            return dpr / bsr;
        })(); */
        function createRect(x,y,w,h){
            ctx.beginPath();
            ctx.rect(
                parseInt(x) + 0.5 , 
                parseInt(y) + 0.5 , 
                parseInt(w), 
                parseInt(h)
            );
            ctx.stroke();
            ctx.save()
        }



    </script> 


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


    <h4>Entregables</h4>
 

    <table class="table   table-hover">
        <thead>
            <tr>
                <th scope="col">Entregable</th>
                <th scope="col">Nombre Archivo</th>
                <th scope="col">Acciones</th>
                <th scope="col"></th>
 
            </tr>
        </thead>
        <tbody>
           <!--  <tr onclick=' window.location.href = "expedientes/detail?expediente=1";' >
                <th scope="row">0001/2022</th>
                <td>13/09/2022</td>
                <td>Javier Alejandro</td>
                <td>Pérez</td>
                <td>Garcpia</td>
                <td>Construcción</td>
                <td>OK</td>
            </tr> -->
            <tr onclick=''>
                <td>
                    <input class="form-check-input p-2  " type="checkbox" value="" aria-label="...">
                    ESCRITURA INSCRITA EN EL REGISTRO PUBLICO DE LA PROPIEDAD
                </td>
                <td>
                    <span >Archivo cargado.jpeg</span>

                </td>
                <td>
                    <button type="button" class="btn btn-outline-danger">Borrar</button>
                </td>
                <td>
                    <input class="form-control form-control-sm  " id="formFileSm" type="file">

                </td>
            </tr>
        
            <tr onclick=''>
                <td>
                    <input class="form-check-input p-2  " type="checkbox" value="" aria-label="...">
                    IDENTIFICACION OFICIAL DEL PROPIETARIO
                </td>
                <td>
                    <span >Archivo cargado.jpeg</span>

                </td>
                <td>
                    <button type="button" class="btn btn-outline-danger">Borrar</button>
                </td>
                <td>
                    <input class="form-control form-control-sm  " id="formFileSm" type="file">

                </td>
            </tr>

            <tr onclick=''>
                <td>
                    <input class="form-check-input p-2  " type="checkbox" value="" aria-label="...">
                    RECIBO DE AGUA
                </td>
                <td>
                    <span >Archivo cargado.jpeg</span>

                </td>
                <td>
                    <button type="button" class="btn btn-outline-danger">Borrar</button>
                </td>
                <td>
                    <input class="form-control form-control-sm  " id="formFileSm" type="file">

                </td>
            </tr>

        </tbody>
    </table>

<!-- 


        <div class=" p-2 flex-fill bd-highlight  ">
                <input class="form-check-input p-2 flex-fill bd-highlight " type="checkbox" value="" aria-label="...">
                IDENTIFICACION OFICIAL DEL PROPIETARIO
            </div>
            <div class="p-2 flex-fill bd-highlight  ">
                <span >Archivo cargado.jpeg</span>
                <button type="button" class="btn btn-outline-danger">Borrar</button>

            </div>
            <div class="p-2 flex-fill bd-highlight">
                <input class="form-control form-control-sm  " id="formFileSm" type="file">
        </div>
 -->

</form>