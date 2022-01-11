function getParameters() {
    var searchString = window.location.search.substring(1),
        params = searchString.split('&'),
        hash = {};

    if (searchString == "") return {};
    for (var i = 0; i < params.length; i++) {
        var val = params[i].split('=');
        hash[unescape(val[0])] = unescape(val[1]);
    }
    return hash;
}


$(document).ready(function(){

	$('.gallery').each(function(){
		var $bigImg = $('.big_img img', this);
		$('.img_prev img', this).mouseover(function(){
			$bigImg.attr('src', $(this).attr('src'));
		}).first().mouseover();
	});

	$('.open_popup').click(function(){
		$('.popup').fadeIn();
		$('.bg_popup').fadeIn();

		$('.bg_popup').click(function(){
			$('.popup').fadeOut();
			$('.bg_popup').fadeOut();
		});

		return false
	});

  // $('input[name="utm"]').val(JSON.stringify(getParameters()));
	$('input[name="utm"]').val(window.location.search.substring(1));

    var where = document.referrer;
    $('input[name="ref"]').val(where);

	$('input[name="phone"]').inputmask('+7(999) 999-99-99');

	 $('form').each(function(){
      var $form = $(this);
      var $input = $form.find('input[type="text"]');
      var $name = $form.find('input[name="name"]');
      var $phone = $form.find('input[name="phone"]');
      var $email = $form.find('input[name="email"]');
      var $utm = $form.find('input[name="utm"]');
      var $ref = $form.find('input[name="ref"]');
      var $btn = $form.find('input[type="button"]'); 

      $input.focus(function(){
          var place = $(this).attr('placeholder');
          $(this).removeAttr('placeholder');

          $input.blur(function(){
              $(this).attr('placeholder', place);
          });        
      });

      $btn.click(function(){
          var name =  $name.val();
          var phone = $phone.val();
          var email = $email.val();
          var ref = $ref.val();
          var utm = $utm.val();

          $input.removeClass('error');

          var f = 0;
          if(phone==''){
              f = 1;
              $phone.addClass('error');
          }
          
          if(name==''){
              f = 1;
              $name.addClass('error');
              $name.focus();
          }

          if(email==''){
              f = 1;
              $email.addClass('error');
          }

          if(f==0){
              $.ajax({
                  type: "POST",
                  url: "js/php.php",
                  data: {name: name, phone:phone, email:email, ref:ref, utm:utm},
                  success :function (data) {
                    // alert('Отправлено');
                    alert(data);
                    $input.val('');
                    $('.popup').hide();
                    $('.bg_popup').hide();
                    yaCounter26795991.reachGoal('NEW_REQUEST');
                  },

                  dataType : 'text'
              });
          }

      });
  });


});