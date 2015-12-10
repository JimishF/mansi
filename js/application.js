function disable_sbmt(){
  $("#sbmt_btn").html("Posting...");
  $("#sbmt_btn").attr("disabled","true");
}
function enable_sbmt(){
 $("#sbmt_btn").html('Submit <i class="material-icons right">send</i> ');
  $("#sbmt_btn").removeAttr("disabled");
}

function encode(data) {

  var b64 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';
  var o1, o2, o3, h1, h2, h3, h4, bits, i = 0,
    ac = 0,
    enc = '',
    tmp_arr = [];

  if (!data) {
    return data;
  }

  do { // pack three octets into four hexets
    o1 = data.charCodeAt(i++);
    o2 = data.charCodeAt(i++);
    o3 = data.charCodeAt(i++);

    bits = o1 << 16 | o2 << 8 | o3;

    h1 = bits >> 18 & 0x3f;
    h2 = bits >> 12 & 0x3f;
    h3 = bits >> 6 & 0x3f;
    h4 = bits & 0x3f;

    // use hexets to index into b64, and append result to encoded string
    tmp_arr[ac++] = b64.charAt(h1) + b64.charAt(h2) + b64.charAt(h3) + b64.charAt(h4);
  } while (i < data.length);

  enc = tmp_arr.join('');

  var r = data.length % 3;

  return (r ? enc.slice(0, r - 3) : enc) + '==='.slice(r || 3);
}

function algo_enc(d){
  for(i=0;i<5;i++){
    dx = encode(d);
    d = dx;
  }
  return dx;
}
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
    tkn = encode((Math.random()).toString());
  $(".button-collapse").sideNav({
    edge:"left",
    closeOnClick:true
  });
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
     event.preventDefault();

      var imgt = $(this).attr("data-imgt");

      
      if(imgt == undefined){
        img = $(this).find("img");
        hrefx = img.attr("src");
        if(hrefx == "/assets/tb_1.jpg"){
            $("#modalimg").addClass("rotate90");
        }else{
            $("#modalimg").removeClass("rotate90");
        }

      }else{
        hrefx = $("#"+imgt).attr("src");
      }

      console.log(imgt);

       $("#modalimg").attr("src",hrefx);
       $("#modal1").openModal();
  });

   $('.tooltipped').tooltip({delay: 50});
     
     $('#cntct').on('submit',function(){
      

      event.preventDefault();
         

function validF(id){
  function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
  }

  v = $(id).val().trim();
  if(v == "" || v == undefined){
    $(id).addClass('invalid');
    $(id).focus();
  }else{
    if(id == "#icon_email"){
        if(isEmail(v)){
            return true; 
        }
        else{
           $(id).addClass('invalid');
            $(id).focus();
        }
    }else{
        if(id == "#icon_telephone" && ( (v.length<10 || v.length>12) || isNaN(v) )) {
            $(id).addClass('invalid');
            $(id).focus();
        }else{
          return true;
        }
    }
  }

  return false;
}
                    icon_prefix = $("#icon_prefix").val().trim();
                    if(validF("#icon_prefix")){

                        if(validF("#icon_org")){

                            if(validF("#icon_email"))
                            {
                              if (validF("#icon_telephone")){

                                  disable_sbmt();
                                  
                                  dt = algo_enc( $( "form" ).serialize() );

                                    $.post("/_support/back.php?isencoded=false&token="+tkn+"&dat=_rdr",{x:dt,t:tkn}).done(function(d){
                                      enable_sbmt();
                                      if(d == "done"){
                                        msg_txt = "Thank you! Your Request has been sent! Wait for return Response Email From our Authority."
                                      }else{
                                        msg_txt = "Sorry...! There is some Internal server Error! We apologize for that. But still You can contact us via our Email.";
                                      }
                                      console.log(d);
                                    });

                              }
                            }
                        }
                    }
                   


        
        // return false;
     });

});

   