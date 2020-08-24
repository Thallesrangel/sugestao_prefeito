<!-- linha topo -->
<div class="line-top">
</div>

<!-- Incio -->

<div class="bg-top-cidade mb-5 w-100 h-100">

  <div class="bg-top-movimento w-100">
    <div class="row align-items-center h-100 w-100 logo-topo">
      <img class="img-fluid mx-auto" src="<?=BASE_URL?>assets/img/movi.png">
    </div>
  </div>
  
</div>w

<!-- Vídeo -->
<div class="w-100 pt-5 pb-5">
  <div class="row justify-content-center">
    <div class="col-md-9 col-sm-12">
      <div class="embed-responsive embed-responsive-16by9 rounded">
        <iframe class="embed-responsive-item" src="<?= BASE_URL ?>assets/video/video.mp4"></iframe>
      </div>
    </div>
  </div>
</div>

<!-- Sobre-->
<div class="container-fluid mt-5 mb-5 sobre shadow">
  <div class="row justify-content-center">
    <div class="col-md-4 col-sm-12 mt-5 pt-5">
      <h1>ALCÂNTARA FILHO</h1>
      <h4>Pré Candidato a Prefeito de Aracruz</h4>
      <p class="text-justify">Sou Alcântara Filho, pré-candidato a prefeito de Aracruz e quero te convidar para planejar o futuro de nossa cidade. Faça parte do Movimento Um Novo Tempo para Aracruz.</p>
    </div>

    <div class="col-md-4 col-sm-12">
      <img class="img-fluid" src="<?= BASE_URL ?>assets/img/rosto.svg">
    </div>
  </div>
</div>


<div class="container mb-5 mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h1 class="text-center text-justify">UM NOVO TEMPO EM <span class="h1-modify">ARACRUZ</span></h1>
        <p>
        Chegou a hora de construirmos um novo tempo! O que você espera para o futuro da nossa cidade? A sua sugestão vai ajudar a fazermos Aracruz melhor para todos. E aqui funciona assim: você envia as suas ideias para melhorar a cidade, nas mais diversas áreas, e ao final apresentaremos um Plano de Governo para uma nova Aracruz.
        Um novo tempo nasce de novas ideias!
        Não perca tempo, mande as suas sugestões.
        </p>
      </div>
  </div>
</div>
  
  <div class="container mb-5 mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h1 class="text-center text-justify">COMO <span class="h1-modify">SUGERIR?</span></h1>
        
        <p>
        Preencha o formulário abaixo com quantas sugestões quiser. Depois é só clicar em enviar e pronto! A sua ideia pode melhorar a nossa cidade.
        Você também pode postar nas redes sociais a sua sugestão. Basta usar a hashtag #UmNovoTempoAracruz, em um perfil público.
        Chegou a hora de, com a sua participação, iniciarmos um novo tempo em Aracruz!
        </p>
      </div>
    </div>
  </div>


<!-- Formulário -->

<div class="container-fluid formulario mt-5 pt-5 pb-5 shadows">
  <div class="row justify-content-center">
  <div class="col-md-5 col-sm-12">
    <form method="POST" action="<?=BASE_URL?>sugestoes/registrar">

      <h1 class="h1-modify text-center">ENVIE SUA SUGESTÃO</h1>
      
      <div class="form-group row">
        <div class="col-3">
          <label for="nome" class="col-sm-2 col-form-label">Nome</label>
        </div>

        <div class="col-9">
          <input type="nome" class="form-control" name="nome" id="nome" required>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-3">
          <label for="email" class="col-sm-2 col-form-label">E-mail</label>
        </div>

        <div class="col-9">
          <input type="email" class="form-control" name="email" id="email" required>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-3">
          <label for="telefone" class="col-sm-2 col-form-label">Telefone</label>
        </div>

        <div class="col-9">
          <input type="text" class="form-control" name="telefone" id="telefone" required>
        </div>
      </div>

      
      <div class="form-group row">
        <div class="col-3">
          <label for="bairro" class="col-sm-2 col-form-label">Bairro</label>
        </div>

        <div class="col-9">
          <select class="form-control form-control-sm js-select" id="bairro" name="id_bairro" required>
            <?php
            
            foreach($bairro as $item){
            ?>
            <option value="<?= $item['id_bairro'] ?>"> <?= $item['bairro']?></option>
            <?php }?>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-3">
          <label for="idade" class="col-sm-2 col-form-label">Idade</label>
        </div>

        <div class="col-9">
          <input type="number" class="form-control" name="idade" id="idade" min="1" max="110" required>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-3">
          <label for="tema" class="col-sm-2 col-form-label pl-2">Tema</label>
        </div>
        
        <div class="col-9">
          <input type="text" class="form-control" name="tema" id="tema" required>
        </div>
      </div>

      <div class="form-group row">

        <div class="col-3">
          <label for="sugestao" class="col-sm-2 col-form-label pl-2">Sugestão</label>
        </div>

        <div class="col-9">
          <textarea class="form-control" name="sugestao" id="sugestao" rows="7" required></textarea>
        </div>
      </div>
      
      <input class="btn btn-primary btn-lg col-sm-12 col-md-9 float-right" type="submit" value="Enviar Sugestão">
    
    </form>
    </div>
  </div>
</div>

<!-- Mapa -->
<div class="container mt-5">
  <h1 class="text-center"><span class="h1-modify">ACOMPANHE</span> OS NÚMEROS</h1>
  <div class="mb-5 shadow" id="map"></div>
</div>


<script>

  var listMarkers = [
    <?php 
      foreach($lista as $item){
        echo '['.$item[4].','.$item[2].','.$item[3].',\''.$item[1].'\'],';
      }
    ?>
  ];

  function initMap() {

    var map = new google.maps.Map(document.getElementById('map'), {
      center: new google.maps.LatLng(-19.7750567,-40.3018634),
      zoom: 10
    });

    var infoWindow = new google.maps.InfoWindow;

    listMarkers.forEach(function(item) {


      var point = new google.maps.LatLng(item[1], item[2]);

      var infowincontent = document.createElement('div');
      infowincontent.innerHTML = '<b>'+item[3]+'</b>';
      var icon = String(item[0]);
      
      var marker = new google.maps.Marker({
        map: map,
        position: point,
        label: icon
      });
      marker.addListener('click', function() {
        infoWindow.setContent(infowincontent);
        infoWindow.open(map, marker);
      });

    });
  }
</script>

<script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnKngmOLBCa41dPRmxescbOW8QBCZe-X4&callback=initMap">
</script>



<!-- Rodapé -->
<footer class="container movimentoBottom text-center mt-5">
  <img class="img-fluid" src="<?= BASE_URL ?>assets/img/movi.png">

  <ul class="list-inline iconMovimentoBottom">
    <li class="list-inline-item"><a target="_blank" href="https://www.facebook.com/AlcantaroFilho/"><img src="<?=BASE_URL?>assets/icon/facebook.png"></a></li>
    <li class="list-inline-item"><a target="_blank" href="https://instagram.com/alcantaro_filho?igshid=fd6kdoqgu72g"><img src="<?=BASE_URL?>assets/icon/instagram.png"></a></li>
  </ul>
</footer>