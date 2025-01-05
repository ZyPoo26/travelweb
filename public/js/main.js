/* -------------------------------------
		CUSTOM FUNCTION WRITE HERE
-------------------------------------- */
"use strict";
jQuery(document).on('ready', function() {
	/* -------------------------------------
			SCROLLBAR
	-------------------------------------- */
	jQuery('.tg-themescrollbar').mCustomScrollbar({
		axis:"y",
	});
	/* ---------------------------------------
			STICKY HEADER
	--------------------------------------- */
	jQuery('.tg-headerfixed').scrollToFixed();
	/* -------------------------------------
			HOME BANNER SLIDER
	-------------------------------------- */
	var _tg_homeslider = jQuery('#tg-homeslider');
	_tg_homeslider.owlCarousel({
		items: 1,
		loop: true,
		dots: true,
		nav: false,
		autoplay: true,
		animateIn: 'fadeIn',
		animateOut: 'fadeOut',
		navText: [
			'<i class="icon-chevron-left"></i>',
			'<i class="icon-chevron-right"></i>',
		],
		navClass: [
			'tg-btnroundprev',
			'tg-btnroundnext'
		],
	});
	jQuery('.owl-carousel').mouseover(function(){
		_tg_homeslider.trigger('stop.owl.autoplay');
	});
	jQuery('.owl-carousel').mouseleave(function(){
		_tg_homeslider.trigger('play.owl.autoplay',[1000]);
	});
	/* -------------------------------------
			POPULAR tOUR SLIDER
	-------------------------------------- */
	var _tg_populartoursslider = jQuery('#tg-populartoursslider');
	_tg_populartoursslider.owlCarousel({
		loop: true,
		dots: false,
		nav: true,
		margin:30,
		autoplay: false,
		responsiveClass:true,
		responsive:{
			320:{ items:1, },
			639:{ items:2, },
			768:{ items:2, },
			992:{ items:3, },
			1200:{ items:3, }
		},
		navText: [
			'<i class="icon-chevron-left"></i>',
			'<i class="icon-chevron-right"></i>',
		],
		navClass: [
			'tg-btnroundprev',
			'tg-btnroundnext'
		],
	});
	/* -------------------------------------
			POPULAR tOUR SLIDER
	-------------------------------------- */
	var _tg_destinationsslider = jQuery('#tg-destinationsslider');
	_tg_destinationsslider.owlCarousel({
		loop: true,
		dots: false,
		nav: true,
		margin:40,
		autoplay: false,
		responsiveClass:true,
		responsive:{
			320:{ items:1, },
			568:{ items:2, },
			768:{ items:2, },
			992:{ items:2, },
			1200:{ items:3, }
		},
		navText: [
			'<i class="icon-chevron-left"></i>',
			'<i class="icon-chevron-right"></i>',
		],
		navClass: [
			'tg-btnroundprev',
			'tg-btnroundnext'
		],
	});
	/* -------------------------------------
			OUR GUIDES SLIDER
	-------------------------------------- */
	var _tg_guidesslider = jQuery('#tg-guidesslider');
	_tg_guidesslider.owlCarousel({
		loop: true,
		dots: false,
		nav: true,
		margin:40,
		autoplay: false,
		responsiveClass:true,
		responsive:{
			320:{ items:1, },
			568:{ items:2, },
			768:{ items:2, },
			992:{ items:2, },
			1200:{ items:3, }
		},
		navText: [
			'<i class="icon-chevron-left"></i>',
			'<i class="icon-chevron-right"></i>',
		],
		navClass: [
			'tg-btnroundprev',
			'tg-btnroundnext'
		],
	});
	/* -------------------------------------
			POPULAR tOUR SLIDER
	-------------------------------------- */
	var _tg_populardestinationslider = jQuery('#tg-populardestinationslider');
	_tg_populardestinationslider.owlCarousel({
		margin:30,
		dots: true,
		nav: false,
		loop: false,
		autoplay: false,
		responsiveClass:true,
		responsive:{
			320:{ items:1, },
			568:{ items:1, },
			639:{ items:2, },
			768:{ items:2, },
			992:{ items:2, },
			1200:{ items:2, }
		},
		navText: [
			'<i class="icon-chevron-left"></i>',
			'<i class="icon-chevron-right"></i>',
		],
		navClass: [
			'tg-btnroundprev',
			'tg-btnroundnext'
		],
	});
	/* -------------------------------------
			TESTIMONIALS SLIDER
	-------------------------------------- */
	var sync1 = jQuery("#tg-homesliderfull");
	var sync2 = jQuery("#tg-homesliderthumbnails");
	var slidesPerPage = 5;
	var syncedSecondary = true;
	sync1.owlCarousel({
		items : 1,
		loop: true,
		nav: false,
		dots: false,
		autoplay: true,
		slideSpeed : 2000,
		responsiveRefreshRate : 200,
		navText: [
			'<i class="icon-chevron-left"></i>',
			'<i class="icon-chevron-right"></i>',
		],
	}).on('changed.owl.carousel', syncPosition);
	sync2.on('initialized.owl.carousel', function () {
		sync2.find(".owl-item").eq(0).addClass("current");
	})
	.owlCarousel({
		items : slidesPerPage,
		dots: false,
		nav: false,
		margin: 0,
		smartSpeed: 200,
		slideSpeed : 500,
		slideBy: slidesPerPage,
		responsiveRefreshRate : 100,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
			},
			480:{
				items:2,
			},
			640:{
				items:3,
			},
			800:{
				items:4,
			},
			1200:{
				items:5,
			}
		}
	}).on('changed.owl.carousel', syncPosition2);
	function syncPosition(el) {
		var count = el.item.count-1;
		var current = Math.round(el.item.index - (el.item.count/2) - .5);
		if(current < 0) {
			current = count;
		}
		if(current > count) {
			current = 0;
		}
		sync2.find(".owl-item").removeClass("current").eq(current).addClass("current")
		var onscreen = sync2.find('.owl-item.active').length - 1;
		var start = sync2.find('.owl-item.active').first().index();
		var end = sync2.find('.owl-item.active').last().index();
		if (current > end) {
			sync2.data('owl.carousel').to(current, 100, true);
		}
		if (current < start) {
			sync2.data('owl.carousel').to(current - onscreen, 100, true);
		}
	}
	function syncPosition2(el) {
		if(syncedSecondary) {
			var number = el.item.index;
			sync1.data('owl.carousel').to(number, 100, true);
		}
	}
	sync2.on("click", ".owl-item", function(e){
		e.preventDefault();
		var number = jQuery(this).index();
		sync1.data('owl.carousel').to(number, 300, true);
	});
	/* -------------------------------------
			POPULAR tOUR SLIDER
	-------------------------------------- */
	var _tg_topdestinationslider = jQuery('.tg-topdestinationslider');
	_tg_topdestinationslider.owlCarousel({
		nav: true,
		margin:30,
		loop: true,
		dots: false,
		autoplay: false,
		responsiveClass:true,
		responsive:{
			320:{ items:1, },
			568:{ items:2, },
			768:{ items:2, },
			992:{ items:2, },
			1200:{ items:3, }
		},
		navText: [
			'<i class="icon-chevron-left"></i>',
			'<i class="icon-chevron-right"></i>',
		],
		navClass: [
			'tg-btnroundprev',
			'tg-btnroundnext'
		],
	});
	/* -------------------------------------
			EXPLORE TOUR TOGGLE
	-------------------------------------- */
	jQuery('#tg-btntoggleform').on('click', function(){
		jQuery('.tg-formtheme.tg-formtrip').slideToggle();
	});
	/* -------------------------------------
			THEME ACCORDION
	-------------------------------------- */
	jQuery(function() {
		jQuery('.tg-panelcontent').hide();
		jQuery('.tg-accordion h4:first').addClass('active').next().slideDown('slow');
		jQuery('.tg-accordion h4').on('click',function() {
			if(jQuery(this).next().is(':hidden')) {
				jQuery('.tg-accordion h4').removeClass('active').next().slideUp('slow');
				jQuery(this).toggleClass('active').next().slideDown('slow');
			}
		});
	});
	/* -------------------------------------
			MASONRY GALLERY
	-------------------------------------- */
	var _tg_masnorygallery = jQuery('.tg-faqs');
	_tg_masnorygallery.packery({
		itemSelector: '.tg-item',
		columnWidth: 0,
	});
	/* -------------------------------------
			POPULAR tOUR SLIDER
	-------------------------------------- */
	var _tg_trendingtripsslider = jQuery('.tg-trendingtripsslider');
	_tg_trendingtripsslider.owlCarousel({
		loop: true,
		dots: false,
		nav: true,
		margin:30,
		autoplay: false,
		responsiveClass:true,
		responsive:{
			320:{ items:1, },
			768:{ items:1, },
			992:{ items:1, },
			1200:{ items:2, },
			1441:{ items:3, },
		},
		navText: [
			'<i class="icon-chevron-left"></i>',
			'<i class="icon-chevron-right"></i>',
		],
		navClass: [
			'tg-btnroundprev',
			'tg-btnroundnext'
		],
	});
	/* -------------------------------------
			POPULAR tOUR SLIDER
	-------------------------------------- */
	var _tg_widgetpopulartourslider = jQuery('#tg-widgetpopulartourslider');
	_tg_widgetpopulartourslider.owlCarousel({
		items:1,
		dots: false,
		nav: true,
		loop: true,
		autoplay: true,
		navText: [
			'<i class="icon-chevron-left"></i>',
			'<i class="icon-chevron-right"></i>',
		],
		navClass: [
			'tg-btnroundprev',
			'tg-btnroundnext'
		],
	});
	/* -------------------------------------
			POPULAR tOUR SLIDER
	-------------------------------------- */
	var _tg_productdetailsider = jQuery('#tg-productdetailsider');
	_tg_productdetailsider.owlCarousel({
		items:1,
		dots: false,
		nav: true,
		loop: true,
		autoplay: true,
		navText: [
			'<i class="icon-chevron-left"></i>',
			'<i class="icon-chevron-right"></i>',
		],
		navClass: [
			'tg-btnroundprev',
			'tg-btnroundnext'
		],
	});
	/* -------------------------------------
			Google Map
	-------------------------------------- */
	function initMaps() {
        console.log("Google Maps API başarıyla yüklendi!");

        let locations = [
            { "name": "Adana", "lat": 37.0, "lng": 35.3213, "title": "Adana" },
            { "name": "Adıyaman", "lat": 37.7648, "lng": 38.2786, "title": "Adıyaman" },
            { "name": "Afyonkarahisar", "lat": 38.7638, "lng": 30.5403, "title": "Afyonkarahisar" },
            { "name": "Ağrı", "lat": 39.7191, "lng": 43.0503, "title": "Ağrı" },
            { "name": "Aksaray", "lat": 38.3687, "lng": 34.0368, "title": "Aksaray" },
            { "name": "Amasya", "lat": 40.6539, "lng": 35.8336, "title": "Amasya" },
            { "name": "Ankara", "lat": 39.9208, "lng": 32.8541, "title": "Ankara" },
            { "name": "Antalya", "lat": 36.8969, "lng": 30.7133, "title": "Antalya" },
            { "name": "Ardahan", "lat": 41.1105, "lng": 42.7022, "title": "Ardahan" },
            { "name": "Artvin", "lat": 41.1831, "lng": 41.8165, "title": "Artvin" },
            { "name": "Aydın", "lat": 37.8444, "lng": 27.8458, "title": "Aydın" },
            { "name": "Balıkesir", "lat": 39.6484, "lng": 27.8826, "title": "Balıkesir" },
            { "name": "Bartın", "lat": 41.6355, "lng": 32.3376, "title": "Bartın" },
            { "name": "Batman", "lat": 37.8812, "lng": 41.1351, "title": "Batman" },
            { "name": "Bayburt", "lat": 40.2565, "lng": 40.2229, "title": "Bayburt" },
            { "name": "Bilecik", "lat": 40.1501, "lng": 29.9833, "title": "Bilecik" },
            { "name": "Bingöl", "lat": 38.8848, "lng": 40.4931, "title": "Bingöl" },
            { "name": "Bitlis", "lat": 38.3938, "lng": 42.1233, "title": "Bitlis" },
            { "name": "Bolu", "lat": 40.735, "lng": 31.6066, "title": "Bolu" },
            { "name": "Burdur", "lat": 37.7203, "lng": 30.2903, "title": "Burdur" },
            { "name": "Bursa", "lat": 40.1957, "lng": 29.0668, "title": "Bursa" },
            { "name": "Çanakkale", "lat": 40.1553, "lng": 26.4142, "title": "Çanakkale" },
            { "name": "Çankırı", "lat": 40.6013, "lng": 33.6134, "title": "Çankırı" },
            { "name": "Çorum", "lat": 40.5506, "lng": 34.9556, "title": "Çorum" },
            { "name": "Denizli", "lat": 37.7766, "lng": 29.0886, "title": "Denizli" },
            { "name": "Diyarbakır", "lat": 37.9147, "lng": 40.2306, "title": "Diyarbakır" },
            { "name": "Düzce", "lat": 40.8438, "lng": 31.1565, "title": "Düzce" },
            { "name": "Edirne", "lat": 41.6772, "lng": 26.5557, "title": "Edirne" },
            { "name": "Elazığ", "lat": 38.6748, "lng": 39.2232, "title": "Elazığ" },
            { "name": "Erzincan", "lat": 39.7529, "lng": 39.4925, "title": "Erzincan" },
            { "name": "Erzurum", "lat": 39.904, "lng": 41.2659, "title": "Erzurum" },
            { "name": "Eskişehir", "lat": 39.7767, "lng": 30.5206, "title": "Eskişehir" },
            { "name": "Gaziantep", "lat": 37.0662, "lng": 37.3833, "title": "Gaziantep" },
            { "name": "Giresun", "lat": 40.9175, "lng": 38.3874, "title": "Giresun" },
            { "name": "Gümüşhane", "lat": 40.4602, "lng": 39.4817, "title": "Gümüşhane" },
            { "name": "Hakkari", "lat": 37.5744, "lng": 43.7408, "title": "Hakkari" },
            { "name": "Hatay", "lat": 36.4018, "lng": 36.3498, "title": "Hatay" },
            { "name": "Iğdır", "lat": 39.9237, "lng": 44.045, "title": "Iğdır" },
            { "name": "Isparta", "lat": 37.7648, "lng": 30.5567, "title": "Isparta" },
            { "name": "İstanbul", "lat": 41.0082, "lng": 28.9784, "title": "İstanbul" },
            { "name": "İzmir", "lat": 38.4192, "lng": 27.1287, "title": "İzmir" },
            { "name": "Kahramanmaraş", "lat": 37.5735, "lng": 36.9371, "title": "Kahramanmaraş" },
            { "name": "Karabük", "lat": 41.196, "lng": 32.6227, "title": "Karabük" },
            { "name": "Karaman", "lat": 37.181, "lng": 33.215, "title": "Karaman" },
            { "name": "Kars", "lat": 40.6013, "lng": 43.0965, "title": "Kars" },
            { "name": "Kastamonu", "lat": 41.378, "lng": 33.7753, "title": "Kastamonu" },
            { "name": "Kayseri", "lat": 38.7335, "lng": 35.4906, "title": "Kayseri" },
            { "name": "Kilis", "lat": 36.7165, "lng": 37.115, "title": "Kilis" },
            { "name": "Kırıkkale", "lat": 39.8417, "lng": 33.5153, "title": "Kırıkkale" },
            { "name": "Kırklareli", "lat": 41.7358, "lng": 27.2253, "title": "Kırklareli" },
            { "name": "Kırşehir", "lat": 39.1421, "lng": 34.1709, "title": "Kırşehir" },
            { "name": "Kocaeli", "lat": 40.8533, "lng": 29.8815, "title": "Kocaeli" },
            { "name": "Konya", "lat": 37.8714, "lng": 32.4846, "title": "Konya" },
            { "name": "Kütahya", "lat": 39.4242, "lng": 29.9833, "title": "Kütahya" },
            { "name": "Malatya", "lat": 38.3552, "lng": 38.3095, "title": "Malatya" },
            { "name": "Manisa", "lat": 38.6191, "lng": 27.4289, "title": "Manisa" },
            { "name": "Mardin", "lat": 37.3122, "lng": 40.735, "title": "Mardin" },
            { "name": "Mersin", "lat": 36.8121, "lng": 34.6415, "title": "Mersin" },
            { "name": "Muğla", "lat": 37.2154, "lng": 28.3636, "title": "Muğla" },
            { "name": "Muş", "lat": 38.7439, "lng": 41.5065, "title": "Muş" },
            { "name": "Nevşehir", "lat": 38.6244, "lng": 34.7231, "title": "Nevşehir" },
            { "name": "Niğde", "lat": 37.9656, "lng": 34.6828, "title": "Niğde" },
            { "name": "Ordu", "lat": 40.986, "lng": 37.8793, "title": "Ordu" },
            { "name": "Osmaniye", "lat": 37.0741, "lng": 36.2477, "title": "Osmaniye" },
            { "name": "Rize", "lat": 41.0201, "lng": 40.5234, "title": "Rize" },
        ];

        const { Map, Marker } = google.maps;

        document.querySelectorAll('.tg-locationmap').forEach(mapElement => {
            let cityName = mapElement.getAttribute('data-city-name');  // Harita div'inin city adını al
            let location = locations.find(loc => loc.name === cityName);  // Şehir adını locations array'inde bul

            if (location) {
                let map = new Map(mapElement, {
                    center: { lat: location.lat, lng: location.lng },
                    zoom: 12,
                    scrollwheel: true,  // Scroll tekerleği ile zoom yapmayı aktif ettik
                    disableDoubleClickZoom: true,
                });

                new Marker({
                    position: { lat: location.lat, lng: location.lng },
                    map: map,
                    title: location.title,
                });
            }
        });
    }

    // Sayfa yüklendikten sonra haritaları başlat
    window.addEventListener('load', initMaps);  // Sayfa yüklendiğinde harita başlat

	/* ---------------------------------------
			FULL PAGE SEARCH
	--------------------------------------- */
	jQuery('a[href="#tg-search"]').on('click', function(event) {
		event.preventDefault();
		jQuery('#tg-search').addClass('open');
		jQuery('#tg-search > form > fieldset > input[type="search"]').focus();
	});
	jQuery('#tg-search, #tg-search button.close').on('click keyup', function(event) {
		if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
			jQuery(this).removeClass('open');
		}
	});
	jQuery('.tg-formlogin').on('submit', function(event) {
        event.preventDefault(); // Varsayılan form gönderimini engelle

        var form = jQuery(this);
        var formData = form.serialize();

        jQuery.ajax({
            url: form.attr('action'),
            method: 'POST',
            data: formData,
            success: function(response) {
                if (response.status === 'success') {
                    // Başarılı girişte yönlendirme
                    window.location.href = response.redirect;
                } else {
                    alert(response.message);
                }
            },
            error: function(xhr) {
                alert(xhr.responseJSON.message || 'Bir hata oluştu.');
            }
        });
    });
	jQuery('.tg-search button.close').on('click', function(){
		jQuery(this).parents('.tg-search').removeClass('open');
	});
	/* ---------------------------------------
			SIGN IN OPEN CLOSE
	--------------------------------------- */
	jQuery('a[href="#tg-loginsingup"]').on('click', function(event) {
		event.preventDefault();
		jQuery('#tg-loginsingup').addClass('open');
		jQuery('body').addClass('tg-hidescroll');
	});
	jQuery('#tg-loginsingup, #tg-loginsingup button.close').on('click keyup', function(event) {
		jQuery('body').removeClass('tg-hidescroll');
		if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
			jQuery(this).removeClass('open');
		}
	});

    // Modal kapatıldığında URL'yi geri döndür
    jQuery('#tg-loginsingup, #tg-loginsingup button.close').on('click keyup', function(event) {
        if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
            jQuery(this).removeClass('open');
            jQuery('body').removeClass('tg-hidescroll');

            // URL'yi eski haline döndür
            window.history.pushState({}, '', '/');
        }
    });
	/* -------------------------------------
			PRETTY PHOTO GALLERY
	-------------------------------------- */
	jQuery("a[data-rel]").each(function () {
		jQuery(this).attr("rel", jQuery(this).data("rel"));
	});
	jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({
		animation_speed: 'normal',
		theme: 'dark_square',
		slideshow: 3000,
		autoplay_slideshow: false,
		social_tools: false
	});
	/* ---------------------------------------
			MOBILE MENU
	--------------------------------------- */
	jQuery("#menu").mmenu({
		extensions: [
			"border-full",
			"pagedim-black",
		],
	});
});
/* -------------------------------------
			LOADER
-------------------------------------- */
jQuery(window).on('load', function() {
	jQuery(".loader").fadeOut(800);
});
