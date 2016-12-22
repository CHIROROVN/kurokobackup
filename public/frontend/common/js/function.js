jQuery(function() {

//scroll-------------------------------------------------
  jQuery('a[href*=#]').click(function() {		
      var $target = jQuery(this.hash);
      $target = $target.length && $target || jQuery('[name=' + this.hash.slice(1) +']');
      if ($target.length) {
        var targetOffset = $target.offset().top;
        jQuery((navigator.userAgent.indexOf("Opera") != -1) ? document.compatMode == 'BackCompat' ? 'body' : 'html' :'html,body').animate({scrollTop: targetOffset}, 1000);
       return false;
      }

  });
  //pagetop-------------------------------------------------
	 var topBtn = jQuery('#ptop');	
	 topBtn.hide();
	 jQuery(window).scroll(function () {
		  if (jQuery(this).scrollTop() > 100) {
			   topBtn.fadeIn();
		  } else {
			   topBtn.fadeOut();
		  }
	 });
  topBtn.click(function () {
		  jQuery('body,html').animate({
			   scrollTop: 0
		    }, 1000);
		    return false;
  });
//menu-------------------------------------------------
  jQuery('.menusp').click(function(){
    jQuery('.nav-sp').slideToggle('fast');
  });
//accordion-------------------------------------------------  
  jQuery('.acrd-pl1').hide();
  jQuery('.acrd-pl3').hide();
  jQuery('.acrd-pl4').hide();
  jQuery('.acrd-ctrl1').click(function(){
    if(jQuery(this).is('.now')){
        // ＋アイコンに変更
        jQuery(this).removeClass('now');
      }else{
        // −アイコンに変更
        jQuery(this).addClass('now');
      }
    // クリックしたリストの開閉
   jQuery('.acrd-pl1').slideToggle(300);
  });
  
  jQuery('.acrd-ctrl2').click(function(){
    if(jQuery(this).is('.now')){
        // ＋アイコンに変更
        jQuery(this).removeClass('now');
      }else{
        // −アイコンに変更
        jQuery(this).addClass('now');
      }
    // クリックしたリストの開閉
   jQuery('.acrd-pl2').slideToggle(300);
  });
  
  jQuery('.acrd-ctrl3').click(function(){
    if(jQuery(this).is('.now')){
        // ＋アイコンに変更
        jQuery(this).removeClass('now');
      }else{
        // −アイコンに変更
        jQuery(this).addClass('now');
      }
    // クリックしたリストの開閉
   jQuery('.acrd-pl3').slideToggle(300);
  });
  
  jQuery('.acrd-ctrl4').click(function(){
    if(jQuery(this).is('.now')){
        // ＋アイコンに変更
        jQuery(this).removeClass('now');
      }else{
        // −アイコンに変更
        jQuery(this).addClass('now');
      }
    // クリックしたリストの開閉
   jQuery('.acrd-pl4').slideToggle(300);
  });
  
  //tab content gourmet detail-------------------------------------------------  
  jQuery('.box-tab02').hide();
  jQuery('.box-tab03').hide();

  jQuery('.bt-tab01').click(function(e){
    e.preventDefault();
    jQuery(this).addClass('active');
    jQuery('.bt-tab02').removeClass('active');
    jQuery('.bt-tab03').removeClass('active');
    // クリックしたリストの開閉
   jQuery('.box-tab01').show('slow');
	 jQuery('.box-tab02').hide();
   jQuery('.box-tab03').hide();
   
  });
  
  jQuery('.bt-tab02').click(function(e){
    e.preventDefault();
    jQuery(this).addClass('active');
    jQuery('.bt-tab01').removeClass('active');
    jQuery('.bt-tab03').removeClass('active');
    // クリックしたリストの開閉
   jQuery('.box-tab02').show('slow');
	 jQuery('.box-tab01').hide();
   jQuery('.box-tab03').hide();
  });
  
  jQuery('.bt-tab03').click(function(e){
    e.preventDefault();
    jQuery(this).addClass('active');
    jQuery('.bt-tab02').removeClass('active');
    jQuery('.bt-tab031').removeClass('active');
    // クリックしたリストの開閉
   jQuery('.box-tab03').show('slow');
	 jQuery('.box-tab01').hide();
   jQuery('.box-tab02').hide();
  });
});




