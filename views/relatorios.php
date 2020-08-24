<head>
    <link href="<?=BASE_URL?>assets/css/multiselect.css">
    <script src="<?=BASE_URL?>assets/js/multiselect.min.js"></script>
</head>

<form class="" action="<?=BASE_UL?>">



    <div class="col-2">
        <div class="form-group">
        <span>Data Inicial *</span> 
        <input type="text" name="data_inicial" date-input="d/m/y" class="form-control form-control-sm" required>
        </div>  
    </div>

    <div class="col-2">
        <div class="form-group">
        <span>Data Final *</span> 
        <input type="text" name="data_final" date-input="d/m/y" class="form-control form-control-sm" required>
        </div>
    </div>

    <div class="col-3">
        <div class="form-group">
            <span>Bairros *</span> 
            <select class="form-control form-control-sm" name="bairro[]" multiple required>
            <?php

            foreach ($bairros as $bairro) {
                $id_bairro =  $bairro['id_bairro'];
                $bairro =  ucwords($bairro['bairro']);
            ?>

            <option value="<?=$id_bairro?>"> <?=$bairro?> </option>
            <?php }?>
            </select>
        </div>  
            <input class="btn btn-primary" type="submit" value="Processar">
    </div>

</form>

<script>
  $('select[multiple]').multiselect()
</script>