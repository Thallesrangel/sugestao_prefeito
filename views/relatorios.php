<head>
    <link href="<?=BASE_URL?>assets/css/multiselect.css">
    <script src="<?=BASE_URL?>assets/js/multiselect.min.js"></script>
</head>
    <div class="container">
        <form method="post" action="<?=BASE_URL?>relatorios/render">

            <div class="col-md-3 col-sm-9">
                <div class="form-group">
                    <label for="bairro">Bairros *</label> 
                    <select id="bairro" class="form-control form-control-sm" name="bairro[]" multiple required>
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

    </div>
<script>
  $('select[multiple]').multiselect()
</script>