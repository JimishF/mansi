 $(document).ready(function () {
  $(".button-collapse").sideNav();
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
   