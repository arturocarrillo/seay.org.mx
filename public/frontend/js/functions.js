$(document).on('ready', function() {
      $(".lazy").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true
      });
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 2,
         lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true
      });
      $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 5,
        slidesToScroll: 3
      });
      $(".variable").slick({
        dots: true,
        infinite: true,
        variableWidth: true
      });
});
 $(document).ready(function () {
        $('.up').click(function(){
            $('body,html').animate({
                scrollTop: '0px'
            }, 1000);
        });
        $(window).scroll(function(){
            if( $(this).scrollTop() > 0 ){
                $('.up').slideDown(600);
            }else {
                $('.up').slideUp(600);
            }
        });
        $('.ir-abajo').click(function(){
            $('body,html').animate({
                  scrollTop: '1000px'
            }, 1000);
        });
});
// Example starter JavaScript for disabling form submissions if there are invalid fields
$(document).ready(function () {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
});