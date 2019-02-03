<?php include("header.php") ?>

	<main>
    <section class="page-top contact-page">
      <div class="container">
        <div class="page-top-content">
          <h1 class="page-top-title">Contato</h1>
          <p class="page-top-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam quod eaque veniam facilis voluptate labore placeat distinctio sunt voluptas dolor, asperiores fugiat similique alias.</p>
        </div>
      </div>
    </section>

    <section class="contact">
      <div class="contact-col">
        <div class="contact-content">
          <div class="contact-info">
            <h2 class="contact-title">Liga pra gente</h2>
            
            <p class="contact-description">
              <i class="fas fa-phone"></i> +55 48 3223-5769
            </p>

            <p class="contact-description">
              <i class="fab fa-whatsapp"></i> +55 48 99943-7777
            </p>
          </div>

          <div class="contact-info">
            <h2 class="contact-title">Venha conhecer nossa casa</h2>
            
            <address class="contact-description">
                <i class="fas fa-map-marker-alt"></i> Rua Miguel Daux, 129 - Coqueiros<br> Florianópolis / SC
            </address>
          </div>
        </div>
      </div>

      <div class="contact-col">
        <div class="contact-content">
          <h2 class="contact-title">Deixe sua mensagem</h2>

          <form action="#" class="contact-form">
            <label for="nome">Seu nome</label>
            <input type="text" id="nome">

            <label for="email">Seu e-mail</label>
            <input type="email" id="email">

            <label for="mensagem">Sua mensagem</label>
            <textarea id="mensagem" rows="2"></textarea>

            <input type="submit" value="Enviar" class="btn btn2">
          </form>
        </div>
      </div>
    </section>

    <section id="map"></section>
  </main>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiqNseBACIMgm6zH_w7XmJZ7v49gUVtlQ"></script>
  <script type="text/javascript">
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        var mapOptions = {
            zoom: 14,
            center: new google.maps.LatLng(-27.607870, -48.578571),
            styles: [{"featureType":"all","elementType":"labels","stylers":[{"visibility":"on"}]},{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"administrative.country","elementType":"labels.text.fill","stylers":[{"color":"#e5c163"}]},{"featureType":"administrative.locality","elementType":"labels.text.fill","stylers":[{"color":"#c4c4c4"}]},{"featureType":"administrative.neighborhood","elementType":"labels.text.fill","stylers":[{"color":"#e5c163"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21},{"visibility":"on"}]},{"featureType":"poi.business","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#e5c163"},{"lightness":"0"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.highway","elementType":"labels.text.stroke","stylers":[{"color":"#e5c163"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#575757"}]},{"featureType":"road.arterial","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"labels.text.stroke","stylers":[{"color":"#2c2c2c"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"road.local","elementType":"labels.text.fill","stylers":[{"color":"#999999"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
        };
        var mapElement = document.getElementById('map');
        var map = new google.maps.Map(mapElement, mapOptions);
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(-27.607870, -48.578571),
            map: map,
            icon: "assets/images/marker.png",
            title: 'Studion Eventos'
        });
    }
  </script>
<?php include("footer.php") ?>