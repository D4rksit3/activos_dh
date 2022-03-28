<?
include ("vistas/header.php");
?>

<script>
     $('.activo').removeClass("activo").addClass("active");

</script>

<script src="https://cdn01.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="http://localhost:8888/activos_dh/form/jotform.forms.js" type="text/javascript"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.js"></script>
<script type="text/javascript">	





JotForm.newDefaultTheme = true;
	JotForm.extendsNewTheme = false;
	JotForm.newPaymentUIForNewCreatedForms = true;
	JotForm.newPaymentUI = true;
	JotForm.clearFieldOnHide="disable";
	JotForm.submitError="jumpToFirstError";

	JotForm.init(function(){
	/*INIT-START*/
      JotForm.description('input_3', 'Ingrese el dato del colabordor');
      JotForm.description('input_input_35', 'Ingresa la sede al cual pertence el colaborador');
      JotForm.description('input_input_53', 'Ingresa la razón social del colaborador');
      setTimeout(function() {
          $('input_57').hint('Ingresa documento');
       }, 20);
      JotForm.description('input_57', 'Ingresar documento de identidad del colaborador');
      setTimeout(function() {
          $('input_62').hint('Ingresa numero de celular');
       }, 20);
      JotForm.alterTexts({"ageVerificationError":"Debe ser mayor de {minAge} años para enviar este formulario.","alphabetic":"Este campo solo puede contener letras.","alphanumeric":"Este campo solo puede contener letras y números.","appointmentSelected":"Ha seleccionado {time} del {date}","ccDonationMinLimitError":"La Cantidad Mínima es {minAmount} {currency}","ccInvalidCVC":"El número CVC no es válido.","ccInvalidExpireDate":"La fecha de expiración no es válida","ccInvalidNumber":"El número de su tarjeta de crédito no es válido.","ccMissingDetails":"Please fill up the credit card details.","ccMissingDonation":"Favor ponga valores númericos en la cantidad a donar.","ccMissingProduct":"Por favor seleccione al menos un producto.","characterLimitError":"Demasiados caracteres. El límite es","characterMinLimitError":"Muy pocos caracteres. El mínimum es","confirmClearForm":"¿Está seguro que desea limpiar el formulario?","confirmEmail":"El correo electrónico no coincide","currency":"Este campo sólo puede contener valores de moneda.","cyrillic":"Este campo solo puede contener caracteres cirílicos.","dateInvalid":"Esta fecha no es valida. El formato de fecha es {format}","dateInvalidSeparate":"Esta fecha no es válida. Ponga una {element} válida","dateLimited":"Esta fecha no está disponible.","disallowDecimals":"Por favor, introduzca un número entero.","email":"Introduzca una dirección e-mail válida","fillMask":"El valor de este campo debe llenar la mascara","freeEmailError":"No se permiten cuentas de correo gratuitas ","generalError":"Existen errores en el formulario, por favor corríjalos antes de continuar.","generalPageError":"Hay errores en esta página. Por favor, corríjalos antes de continuar.","gradingScoreError":"El puntaje total debería ser sólo \"menos que\" o \"igual que\"","incompleteFields":"Existen campos requeridos incompletos. Por favor complételos.","inputCarretErrorA":"La entrada no debe ser inferior al valor mínimo:","inputCarretErrorB":"La entrada debe ser menor al valor:","lessThan":"Tu puntuación debería ser menor o igual que","maxDigitsError":"El máximo de dígitos permitido es","maxSelectionsError":"El número máximo de opciones seleccionadas permitido es","minSelectionsError":"El número mínimo de opciones obligatorias es","multipleFileUploads_emptyError":"El fichero {file} está vacío; por favor, selecciona de nuevo los ficheros sin él.","multipleFileUploads_fileLimitError":"Solo {fileLimit} carga de archivos permitida.","multipleFileUploads_minSizeError":"{file} is demasiado pequeño, el tamaño mínimo de fichero es: {minSizeLimit}.","multipleFileUploads_onLeave":"Se están cargando los ficheros, si cierras ahora, se cancelará dicha carga.","multipleFileUploads_sizeError":"{file} es demasiado grande; el tamaño del archivo no debe superar los {sizeLimit}.","multipleFileUploads_typeError":"El fichero {file} posee una extensión no permitida. Sólo están permitidas las extensiones {extensions}.","multipleFileUploads_uploadFailed":"File upload failed, please remove it and upload the file again.","noSlotsAvailable":"No hay cupos disponibles","noUploadExtensions":"File has no extension file type (e.g. .txt, .png, .jpeg)","numeric":"Este campo sólo admite valores numéricos.","pastDatesDisallowed":"La fecha debe ser futura","pleaseWait":"Por favor, espere ...","required":"Campo requerido.","requireEveryCell":"Se requieren todas las celdas.","requireEveryRow":"Todas las filas son obligatorias.","requireOne":"Al menos un campo requerido.","restrictedDomain":"This domain is not allowed","slotUnavailable":"{time} del {date} ha sido tomada. Favor seleccionar otro espacio.","uploadExtensions":"Solo puede subir los siguientes archivos:","uploadFilesize":"Tamaño del archivo no puede ser mayor que:","uploadFilesizemin":"Tamañao de archivo no puede ser menos de:","url":"Este campo solo contiene una URL válida.","validateEmail":"You need to validate this e-mail","wordLimitError":"Demasiadas palabras. El límite es","wordMinLimitError":"Muy pocas palabras. El mínimo es"});
	/*INIT-END*/
	});

   JotForm.prepareCalculationsOnTheFly([null,{"name":"fichaDe1","qid":"1","text":"FICHA DE CONTROL DE ACTIVOS","type":"control_head"},null,{"description":"Ingrese el dato del colabordor","name":"nombre","qid":"3","text":"Nombres y Apellidos","type":"control_fullname"},null,{"name":"datosDel5","qid":"5","text":"Datos del colaborador","type":"control_head"},null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"description":"Ingresa la sede al cual pertence el colaborador","name":"sede","qid":"35","subLabel":"","text":"Sede","type":"control_dropdown"},null,null,null,null,null,{"description":"","name":"campana41","qid":"41","subLabel":"","text":"Campana","type":"control_dropdown"},{"description":"","name":"areaDel","qid":"42","subLabel":"","text":"Area del solicitante","type":"control_dropdown"},{"description":"","name":"activosA","qid":"43","subLabel":"","text":"Activos a Solicitar","type":"control_dropdown"},null,null,null,null,null,null,null,null,null,{"description":"Ingresa la razon social del colaborador","name":"razonSocial","qid":"53","subLabel":"","text":"Razon Social","type":"control_dropdown"},{"name":"registrarDatos","qid":"54","text":"Registrar datos","type":"control_button"},null,null,{"description":"Ingresar documento de identidad del colaborador","name":"documentoDe57","qid":"57","subLabel":"","text":"Documento de identidad","type":"control_number"},{"description":"","name":"tipoDe","qid":"58","subLabel":"","text":"Tipo de documento","type":"control_dropdown"},{"description":"","name":"direccion59","qid":"59","text":"Direccion","type":"control_address"},null,null,{"description":"","name":"numeroDe62","qid":"62","subLabel":"","text":"Numero de Celular","type":"control_number"},null,{"description":"","name":"email64","qid":"64","subLabel":"ejemplo@ejemplo.com","text":"Email","type":"control_email"},{"description":"","name":"cargoDel65","qid":"65","subLabel":"","text":"Cargo del Beneficiario","type":"control_dropdown"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"fichaDe1","qid":"1","text":"FICHA DE CONTROL DE ACTIVOS","type":"control_head"},null,{"description":"Ingrese el dato del colabordor","name":"nombre","qid":"3","text":"Nombres y Apellidos","type":"control_fullname"},null,{"name":"datosDel5","qid":"5","text":"Datos del colaborador","type":"control_head"},null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"description":"Ingresa la sede al cual pertence el colaborador","name":"sede","qid":"35","subLabel":"","text":"Sede","type":"control_dropdown"},null,null,null,null,null,{"description":"","name":"campana41","qid":"41","subLabel":"","text":"Campana","type":"control_dropdown"},{"description":"","name":"areaDel","qid":"42","subLabel":"","text":"Area del solicitante","type":"control_dropdown"},{"description":"","name":"activosA","qid":"43","subLabel":"","text":"Activos a Solicitar","type":"control_dropdown"},null,null,null,null,null,null,null,null,null,{"description":"Ingresa la razon social del colaborador","name":"razonSocial","qid":"53","subLabel":"","text":"Razon Social","type":"control_dropdown"},{"name":"registrarDatos","qid":"54","text":"Registrar datos","type":"control_button"},null,null,{"description":"Ingresar documento de identidad del colaborador","name":"documentoDe57","qid":"57","subLabel":"","text":"Documento de identidad","type":"control_number"},{"description":"","name":"tipoDe","qid":"58","subLabel":"","text":"Tipo de documento","type":"control_dropdown"},{"description":"","name":"direccion59","qid":"59","text":"Direccion","type":"control_address"},null,null,{"description":"","name":"numeroDe62","qid":"62","subLabel":"","text":"Numero de Celular","type":"control_number"},null,{"description":"","name":"email64","qid":"64","subLabel":"ejemplo@ejemplo.com","text":"Email","type":"control_email"},{"description":"","name":"cargoDel65","qid":"65","subLabel":"","text":"Cargo del Beneficiario","type":"control_dropdown"}]);}, 20); 
</script>


<form class="jotform-form" action="https://submit.jotform.com/submit/220851055966662/" method="post" name="form_220851055966662" id="220851055966662" accept-charset="utf-8" autocomplete="on">
  <input type="hidden" name="formID" value="220851055966662" />
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <style>
      .form-all:before { background: none;}
    </style>
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div style="display:table;width:100%">
          <div class="form-header-group hasImage header-large" data-imagealign="Left">
            <div class="header-logo">
              <img src="https://www.jotform.com/uploads/gonzaloroque21/form_files/index.623ffa8b424d75.92261957.png" alt="MDY" width="162" class="header-logo-left" />
            </div>
            <div class="header-text httal htvam">
              <h1 id="header_1" class="form-header" data-component="header">
                FICHA DE CONTROL DE ACTIVOS
              </h1>
            </div>
          </div>
        </div>
      </li>
      <li id="cid_5" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-default">
          <div class="header-text httal htvam">
            <h2 id="header_5" class="form-header" data-component="header">
              Datos del colaborador
            </h2>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_fullname" id="id_3" data-compound-hint=",">
        <label class="form-label form-label-top" id="label_3" for="first_3">
          Nombres y Apellidos
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_3" class="form-input-wide jf-required" data-layout="full">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_3" name="q3_nombre[first]" class="form-textbox validate[required]" data-defaultvalue="" autoComplete="section-input_3 given-name" size="10" value="" data-component="first" aria-labelledby="label_3 sublabel_3_first" required="" />
              <label class="form-sub-label" for="first_3" id="sublabel_3_first" style="min-height:13px" aria-hidden="false"> Apellidos </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
              <input type="text" id="last_3" name="q3_nombre[last]" class="form-textbox validate[required]" data-defaultvalue="" autoComplete="section-input_3 family-name" size="15" value="" data-component="last" aria-labelledby="label_3 sublabel_3_last" required="" />
              <label class="form-sub-label" for="last_3" id="sublabel_3_last" style="min-height:13px" aria-hidden="false"> Nombres </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1 jf-required" data-type="control_dropdown" id="id_35">
        <label class="form-label form-label-top" id="label_35" for="input_35">
          Sede
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_35" class="form-input-wide jf-required" data-layout="half">
          <select class="form-dropdown validate[required]" style="width:310px;" id="input_35" name="q35_sede">
            <option selected disabled value=""> Selecciona sede </option>
            <option value="Lince"> Lince </option>
            <option value="Colonial"> Colonial </option>
          </select>
        </div>
      </li>
      <li class="form-line fixed-width form-line-column form-col-2 jf-required" data-type="control_dropdown" id="id_53">
        <label class="form-label form-label-top" id="label_53" for="input_53">
          Razón Social
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_53" class="form-input-wide jf-required" data-layout="half">
          <select class="form-dropdown validate[required]" style="width:310px;" id="input_53" name="q53_razonSocial">
            <option selected disabled value=""> Selecciona la razón social </option>
            <option value="MDY CONTACT CENTER"> MDY CONTACT CENTER </option>
            <option value="HAE"> HAE </option>
            <option value="POSTULANTE"> POSTULANTE </option>
          </select>
        </div>
      </li>
      <li class="form-line fixed-width form-line-column form-col-3 jf-required" data-type="control_dropdown" id="id_58">
        <label class="form-label form-label-top" id="label_58" for="input_58">
          Tipo de documento
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_58" class="form-input-wide jf-required" data-layout="half">
          <select class="form-dropdown validate[required]" id="input_58" name="q58_tipoDe" style="width:293px" data-component="dropdown" required="">
            <option selected disabled value=""> Seleccione </option>
            <option value="DNI"> DNI </option>
            <option value="Cedula"> Cedula </option>
            <option value="">  </option>
          </select>
        </div>
      </li>
      <li class="form-line fixed-width form-line-column form-col-4 jf-required" data-type="control_number" id="id_57">
        <label class="form-label form-label-top" id="label_57" for="input_57">
          Documento de identidad
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_57" class="form-input-wide jf-required" data-layout="half">
          <input type="number" id="input_57" name="q57_documentoDe57" data-type="input-number" class=" form-number-input form-textbox validate[required]" data-defaultvalue="" style="width:287px" size="287" value="" placeholder="Ingresa documento" data-component="number" aria-labelledby="label_57" required="" step="any" />
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_address" id="id_59">
        <label class="form-label form-label-top" id="label_59" for="input_59_addr_line1">
          Dirección
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_59" class="form-input-wide jf-required" data-layout="full">
          <div summary="" class="form-address-table jsTest-addressField">
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-street-line jsTest-address-lineField">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_59_addr_line1" name="q59_direccion59[addr_line1]" class="form-textbox validate[required] form-address-line" data-defaultvalue="" autoComplete="section-input_59 address-line1" value="" data-component="address_line_1" aria-labelledby="label_59 sublabel_59_addr_line1" required="" />
                  <label class="form-sub-label" for="input_59_addr_line1" id="sublabel_59_addr_line1" style="min-height:13px" aria-hidden="false"> Dirección de la calle </label>
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-street-line jsTest-address-lineField">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_59_addr_line2" name="q59_direccion59[addr_line2]" class="form-textbox form-address-line" data-defaultvalue="" autoComplete="section-input_59 address-line2" value="" data-component="address_line_2" aria-labelledby="label_59 sublabel_59_addr_line2" />
                  <label class="form-sub-label" for="input_59_addr_line2" id="sublabel_59_addr_line2" style="min-height:13px" aria-hidden="false"> Referencia </label>
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-city-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_59_city" name="q59_direccion59[city]" class="form-textbox validate[required] form-address-city" data-defaultvalue="" autoComplete="section-input_59 address-level2" value="" data-component="city" aria-labelledby="label_59 sublabel_59_city" required="" />
                  <label class="form-sub-label" for="input_59_city" id="sublabel_59_city" style="min-height:13px" aria-hidden="false"> Distrito </label>
                </span>
              </span>
              <span class="form-address-line form-address-state-line jsTest-address-lineField form-address-hiddenLine" style="display:none">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_59_state" name="q59_direccion59[state]" class="form-textbox form-address-state" data-defaultvalue="" autoComplete="section-input_59 address-level1" value="" data-component="state" aria-labelledby="label_59 sublabel_59_state" />
                  <label class="form-sub-label" for="input_59_state" id="sublabel_59_state" style="min-height:13px" aria-hidden="false"> Estado / Provincia </label>
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField" style="display:none">
              <span class="form-address-line form-address-zip-line jsTest-address-lineField form-address-hiddenLine" style="display:none">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_59_postal" name="q59_direccion59[postal]" class="form-textbox form-address-postal" data-defaultvalue="" autoComplete="section-input_59 postal-code" value="" data-component="zip" aria-labelledby="label_59 sublabel_59_postal" />
                  <label class="form-sub-label" for="input_59_postal" id="sublabel_59_postal" style="min-height:13px" aria-hidden="false"> Código Postal </label>
                </span>
              </span>
            </div>
          </div>
        </div>
      </li>
      <li class="form-line fixed-width jf-required" data-type="control_email" id="id_64">
        <label class="form-label form-label-top" id="label_64" for="input_64">
          Email
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_64" class="form-input-wide jf-required" data-layout="half">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="email" id="input_64" name="q64_email64" class="form-textbox validate[required, Email]" data-defaultvalue="" style="width:680px" size="680" value="" data-component="email" aria-labelledby="label_64 sublabel_input_64" required="" />
            <label class="form-sub-label" for="input_64" id="sublabel_input_64" style="min-height:13px" aria-hidden="false"> ejemplo@ejemplo.com </label>
          </span>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1 jf-required" data-type="control_number" id="id_62">
        <label class="form-label form-label-top" id="label_62" for="input_62">
          Número de Celular
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_62" class="form-input-wide jf-required" data-layout="half">
          <input type="number" id="input_62" name="q62_numeroDe62" data-type="input-number" class=" form-number-input form-textbox validate[required]" data-defaultvalue="" style="width:310px" size="310" value="" placeholder="Ingresa numero de celular"  data-component="number" aria-labelledby="label_62" required="" step="any" />
        </div>
      </li>
      <li class="form-line fixed-width form-line-column form-col-2 jf-required" data-type="control_dropdown" id="id_65">
        <label class="form-label form-label-top" id="label_65" for="input_65">
          Cargo del Beneficiario
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_65" class="form-input-wide jf-required" data-layout="half">
          <select class="form-dropdown validate[required]" id="input_65" name="q65_cargoDel65" style="width:303px" data-component="dropdown" required="">
            <option selected disabled> Seleccione </option>
            <option value="ASESOR"> ASESOR </option>
            <option value="SUPERVISOR"> SUPERVISOR </option>
            <option value="ADMINISTRATIVO"> ADMINISTRATIVO </option>
            <option value="">  </option>
          </select>
        </div>
      </li>
      <li class="form-line form-line-column form-col-3 jf-required" data-type="control_dropdown" id="id_41">
        <label class="form-label form-label-top" id="label_41" for="input_41">
          Campaña
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_41" class="form-input-wide jf-required" data-layout="half">
          <select class="form-dropdown validate[required]" id="input_41" name="q41_campana41" style="width:310px" data-component="dropdown" required="">
            <option selected disabled> Seleccione </option>
            <option value="CAMPAÑAS"> CAMPAÑAS </option>
            <option value="ETC"> ETC </option>
            <option value="ETC"> ETC </option>
          </select>
        </div>
      </li>
      <li class="form-line form-line-column form-col-4 jf-required" data-type="control_dropdown" id="id_42">
        <label class="form-label form-label-top" id="label_42" for="input_42">
          Área del solicitante
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_42" class="form-input-wide jf-required" data-layout="half">
          <select class="form-dropdown validate[required]" id="input_42" name="q42_areaDel" style="width:310px" data-component="dropdown" required="">
            <option selected disabled > Seleccione </option>
            <option value="VC"> VC </option>
            <option value="CAPACITACION"> CAPACITACION </option>
            <option value="ATH"> ATH </option>
          </select>
        </div>
      </li>
      <li class="form-line form-line-column form-col-5 jf-required" data-type="control_dropdown" id="id_43">
        <label class="form-label form-label-top" id="label_43" for="input_43">
          Activos a Solicitar
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_43" class="form-input-wide jf-required" data-layout="half">
          <select class="form-dropdown validate[required]" id="input_43" name="q43_activosA" style="width:310px" data-component="dropdown" required="">
            <option selected disabled > Seleccione </option>
            <option value="PC"> PC </option>
            <option value="DIADEMA"> DIADEMA </option>
            <option value="PC + DIADEMA"> PC + DIADEMA </option>
          </select>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_54">
        <div id="cid_54" class="form-input-wide" data-layout="full">
          <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
            <span>
               
            </span>
            <button id="input_print_54" type="button" class="form-submit-print jf-form-buttons" data-component="button">
              <img src="https://cdn.jotfor.ms/images/printer.png" style="vertical-align:middle" />
              <span id="span_print_54" class="span_print">
                Imprimir
              </span>
            </button>
            <button id="input_54" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
              Registrar datos
            </button>
          </div>
          <div class="form-submit-clear-wrapper">
            <button id="input_reset_54" type="reset" class="form-submit-reset jf-form-buttons" data-component="button">
              Limpiar formulario
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
  <script>
  JotForm.showJotFormPowered = "new_footer";
  </script>
  <script>
  JotForm.poweredByText = "Desarrollado por Jotform";
  </script>
  <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="220851055966662" />
  <script type="text/javascript">
  var all_spc = document.querySelectorAll("form[id='220851055966662'] .si" + "mple" + "_spc");
for (var i = 0; i < all_spc.length; i++)
{
  all_spc[i].value = "220851055966662-220851055966662";
}
  </script>
 <!--  <div class="formFooter-heightMask">
  </div>
  <div class="formFooter f6 branding21">
    <div class="formFooter-wrapper formFooter-leftSide">
      <a href="https://www.jotform.com/?utm_source=formfooter&utm_medium=banner&utm_term=220851055966662&utm_content=jotform_logo&utm_campaign=powered_by_jotform_le" target="_blank" class="formFooter-logoLink"><img class="formFooter-logo" src="https://cdn.jotfor.ms/assets/img/logo2021/jotform-logo-white.svg" alt="Jotform Logo" style="height: 44px;"></a>
    </div>
    <div class="formFooter-wrapper formFooter-rightSide">
      <span class="formFooter-text">
        Now create your own Jotform - It's free!
      </span>
      <a class="formFooter-button" href="https://www.jotform.com/?utm_source=formfooter&utm_medium=banner&utm_term=220851055966662&utm_content=jotform_button&utm_campaign=powered_by_jotform_le" target="_blank">Create your own Jotform</a>
    </div>
  </div> -->
</form>
<script src="https://cdn.jotfor.ms//js/vendor/smoothscroll.min.js?v=3.3.32147"></script>
<script src="https://cdn.jotfor.ms//js/errorNavigation.js?v=3.3.32147"></script>