  function initialize() {
      // var position = new google.maps.LatLng(-34.397, 150.644);
      var position = new google.maps.LatLng( 23.020700,72.672423 );
          var myOptions = {
        zoom: 19,
        center: position,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      var map = new google.maps.Map(
          document.getElementById("map_canvas"),
          myOptions);

      var marker = new google.maps.Marker({
          position: position,
          map: map,
          title:"Here is Mansi Industry."
      });  

      var contentString = '<strong>Mansi Industry</strong>, Ahmedabad.';
      var infowindow = new google.maps.InfoWindow({
          content: contentString
      });

      google.maps.event.addListener(marker, 'mouseover', function() {
        infowindow.open(map,marker);
      });

    }

 $(document).ready(function () {
    initialize();
  $(".button-collapse").sideNav();
  $('.tx a').click(function(e){
     event.preventDefault();

    var idToMove = $(this).attr("href");
    $("html, body").animate({ scrollTop: $(idToMove).offset().top-75 }, 700);

  });

  $('.slider').slider({
      full_width: true,
      interval:4000
    });
  $('.materialboxed').materialbox();

  $(".vfs,.card-image").click(function(){
      var imgt = $(this).attr("data-imgt");

      
      if(imgt == undefined){
        img = $(this).find("img");
        hrefx = img.attr("src");
      }else{
        hrefx = $("#"+imgt).attr("src");
      }

      console.log(imgt);

       $("#modalimg").attr("src",hrefx);
       $("#modal1").openModal();
  });
});
   