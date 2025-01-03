<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang="zxx"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Anasayfa</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/scrollbar.css">
	<link rel="stylesheet" href="css/jquery.mmenu.all.css">
	<link rel="stylesheet" href="css/prettyPhoto.css">
	<link rel="stylesheet" href="css/transitions.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/color.css">
	<link rel="stylesheet" href="css/responsive.css">
	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body class="tg-home tg-homevone">
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!--************************************
				Loader Start
	*************************************-->
	<div class="loader">
		<div class="span">
			<div class="location_indicator"></div>
		</div>
	</div>
	<!--************************************
				Loader End
	*************************************-->
	<!--************************************
				Loader Start
	*************************************-->
	<div class="loader">
		<div class="span">
			<div class="location_indicator"></div>
		</div>
	</div>
	<!--************************************
				Loader End
	*************************************-->

	<!--************************************
			Wrapper Start
	*************************************-->
	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
		<!--************************************
				Header Start
		*************************************-->
		<header id="tg-header" class="tg-header tg-haslayout">
			<div class="container-fluid">
				<div class="row">
					<div class="tg-topbar">
						<nav class="tg-infonav">
							<ul>
								<li>
									<i><img src="images/icons/icon-01.png" alt="image destinations"></i>
									<span>506 175 08 38</span>
								</li>
								<li>
									<i><img src="images/icons/icon-02.png" alt="image destinations"></i>
									<span>Senin Seçeneklerinin <a href="liste">Daha Fazlasını Keşfet</a></span>
								</li>
							</ul>
						</nav>
						<div class="tg-addnavcartsearch">
							<nav class="tg-addnav">
								<ul>
									<li><a href="aboutus.html">Hakkımızda</a></li>
									<li><a href="contactus.html">İletişime Geç</a></li>
								</ul>
							</nav>
							<nav class="tg-cartsearch">
								<ul>
									<li>
										<a href="cart"><img src="images/icons/icon-03.png" alt="image destinations"></a>
										{{-- <div class="tg-cartitems">
											<div class="tg-cartlistitems">
												<h3>Alışveriş Sepeti</h3>
												<div class="tg-cartitem">
													<figure class="tg-itemimg"><img src="images/products/img-11.jpg" alt="image description"></figure>
													<div class="tg-contentbox">
														<div class="tg-producthead">
															<em>x 2</em>
															<h4><a href="javascript:void(0);">Switzerland – 12 Days<span>Hiking Tour</span></a></h4>
														</div>
														<span>$600</span>
													</div>
												</div>
												<div class="tg-cartitem">
													<figure class="tg-itemimg"><img src="images/products/img-11.jpg" alt="image description"></figure>
													<div class="tg-contentbox">
														<div class="tg-producthead">
															<em>x 2</em>
															<h4><a href="javascript:void(0);">Switzerland – 12 Days<span>Hiking Tour</span></a></h4>
														</div>
														<span>$600</span>
													</div>
												</div>
												<div class="tg-subtotal">
													<h2>Toplam</h2>
													<span>$830</span>
												</div>
											</div>
											<div class="tg-btnarea">
												<a class="tg-btn" href="#"><span>Kart İle Öde</span></a>
											</div>
										</div> --}}
									</li>
									<li><a href="#tg-search"><img src="images/icons/icon-04.png" alt="image destinations"></a></li>
								</ul>
							</nav>
						</div>
					</div>
					<div class="tg-navigationarea tg-headerfixed">
						<strong class="tg-logo"><a href="tur"><img src="images/logo.png" alt="company logo here"></a></strong>
						<div class="tg-socialsignin">
							<ul class="tg-socialicons">
								<li><a href="javascript:void(0);"><i class="icon-facebook-logo-outline"></i></a></li>
								<li><a href="javascript:void(0);"><i class="icon-instagram-social-outlined-logo"></i></a></li>
								<li><a href="javascript:void(0);"><i class="icon-twitter-social-outlined-logo"></i></a></li>
							</ul>
							<div class="tg-userbox">
                                @if(session('user_id'))
                                @php
                                $user = \App\Models\Mainuser::with('profile')->find(session('user_id'));
                                 @endphp
                                <div class="dropdown tg-dropdown">
									<button class="tg-btndropdown" id="tg-dropdowndashboard" type="button" data-toggle="dropdown">
										<img src="/images/author/img-01.jpg" alt="image description">
										<span>{{ $user->profile->name ?? 'Profil İsmi Yok' }}</span>
										<i class="fa fa-caret-down"></i>
									</button>
									<ul class="dropdown-menu tg-dropdownusermenu" aria-labelledby="tg-dropdowndashboard">
										<li><a href="dashboard">Dashboard</a></li>
										<li><a href="myprofil">Edit Profile</a></li>
										<form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                        <li>
                                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign Out</a>
                                        </li>
									</ul>
								</div>
                                @else
                                <a id="tg-btnsignin" class="tg-btn" href="#tg-loginsingup"><span>Giriş Yap</span></a>
                                @endif
							</div>
						</div>
						<nav id="tg-nav" class="tg-nav">
							<div class="navbar-header">
								<a href="#menu" class="navbar-toggle collapsed">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</a>
							</div>
							<div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
								<ul>
									<li class="menu-item-has-children current-menu-item"><a href="tur">Anasayfa</a>
									</li>
									<li><a href="iller">İller</a></li>
									<li><a href="liste">Listeler</a>
										<div class="mega-menu">
											<div class="tg-sliderarea">
												<h2>Popüler Turlar</h2>
												<div class="tg-trendingtripsslider tg-trendingtrips owl-carousel">
													<div class="item tg-trendingtrip">
														<figure>
															<a href="javascript:void(0);">
																<img src="images/tours/img-05.jpg" alt="image destinations">
																<div class="tg-hover">
																	<span class="tg-stars"><span></span></span>
																	<span class="tg-tourduration">7 Days</span>
																	<span class="tg-locationname">Paris</span>
																	<div class="tg-pricearea">
																		<span>from</span>
																		<h4>$600</h4>
																	</div>
																</div>
															</a>
														</figure>
													</div>
													<div class="item tg-trendingtrip">
														<figure>
															<a href="javascript:void(0);">
																<img src="images/tours/img-06.jpg" alt="image destinations">
																<div class="tg-hover">
																	<span class="tg-stars"><span></span></span>
																	<span class="tg-tourduration">7 Days</span>
																	<span class="tg-locationname">Paris</span>
																	<div class="tg-pricearea">
																		<span>from</span>
																		<h4>$600</h4>
																	</div>
																</div>
															</a>
														</figure>
													</div>
													<div class="item tg-trendingtrip">
														<figure>
															<a href="javascript:void(0);">
																<img src="images/tours/img-07.jpg" alt="image destinations">
																<div class="tg-hover">
																	<span class="tg-stars"><span></span></span>
																	<span class="tg-tourduration">7 Days</span>
																	<span class="tg-locationname">Paris</span>
																	<div class="tg-pricearea">
																		<span>from</span>
																		<h4>$600</h4>
																	</div>
																</div>
															</a>
														</figure>
													</div>
													<div class="item tg-trendingtrip">
														<figure>
															<a href="javascript:void(0);">
																<img src="images/tours/img-08.jpg" alt="image destinations">
																<div class="tg-hover">
																	<span class="tg-stars"><span></span></span>
																	<span class="tg-tourduration">7 Days</span>
																	<span class="tg-locationname">Paris</span>
																	<div class="tg-pricearea">
																		<span>from</span>
																		<h4>$600</h4>
																	</div>
																</div>
															</a>
														</figure>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li class="menu-item-has-children"><a href="javascript:void(0);">pages</a>
										<ul class="sub-menu">
											<li><a href="faqs.html">FAQ’s</a></li>
											<li><a href="packages.html">Table</a></li>
											<li><a href="aboutus.html">About Us</a></li>
											<li><a href="contactus.html">Contact us</a></li>
											<li><a href="billingdetail.html">Billing Detail</a></li>
											<li><a href="404error.html">404 Error</a></li>
											<li><a href="comingsoon.html">Coming Soon</a></li>
											<li><a href="cart.html">cart</a></li>
											<li class="menu-item-has-children">
												<a href="javascript:void(0);">Tours</a>
												<ul class="sub-menu">
													<li><a href="tourcatagory.html">Tour Catagory</a></li>
													<li><a href="tourbookingdetail.html">Tour Detail</a></li>
													<li><a href="tourpaymentdetail.html">Tour Payment</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li><a href="shop">Alışveriş</a></li>
									{{-- <li><a href="blog.html">blog</a></li> --}}
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Home Slider Start
		*************************************-->
		<div class="tg-bannerholder">
			<div class="tg-slidercontent">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<h1>Yeni Yerler, Yeni Anılar!</h1>
							<h2>İnsanlar Seyahatlere Çıkmaz, Seyahatler İnsanları Alır</h2>
							{{-- <form class="tg-formtheme tg-formtrip"> --}}
								{{-- <fieldset> --}}
									{{-- <div class="form-group">
										<div class="tg-select">
											<select class="selectpicker" data-live-search="true" data-width="100%">
												<option data-tokens="İller">İller</option>
												<option data-tokens="Hepsi">Hepsi</option>
												<option data-tokens="Eskişehir">Eskişehir</option>
												<option data-tokens="Istanbul">İstanbul</option>
												<option data-tokens="Denizli">Denizli</option>
												<option data-tokens="Bursa">Bursa</option>
												<option data-tokens="Nevşehir">Nevşehir</option>
											</select>
										</div>
									</div> --}}
									<div class="form-group">
										{{-- <div class="tg-select">
											<select class="selectpicker" data-live-search="true" data-width="100%">
												<option data-tokens="Gezi Türü">Gezi Türü</option>
												<option data-tokens="Kış Turu">Kış Turu</option>
												<option data-tokens="Yaz Turu">Yaz Turu</option>
												{{-- <option data-tokens="Adult Vacations">Adult Vacations</option>
											</select>
										</div> --}}
									</div>
									<div class="form-group">
										{{-- <div class="tg-select">
											<select class="selectpicker" data-live-search="true" data-width="100%">
												<option data-tokens="Tarih">Tarih</option>
												<option data-tokens="Ocak">Ocak</option>
												<option data-tokens="Şubat">Şubat</option>
												<option data-tokens="Mart">Mart</option>
												<option data-tokens="Nisan">Nisan</option>
												<option data-tokens="Mayıs">Mayıs</option>
												<option data-tokens="Haziran">Haziran</option>
												<option data-tokens="Temmuz">Temmuz</option>
												<option data-tokens="Ağustos">Ağustos</option>
												<option data-tokens="Eylül">Eylül</option>
												<option data-tokens="Ekim">Ekim</option>
												<option data-tokens="Kasım">Kasım</option>
												<option data-tokens="Aralık">Aralık</option>
											</select>
										</div> --}}
									</div>
									<div class="form-group">
										{{-- <div class="tg-select">
											<select class="selectpicker" data-live-search="true" data-width="100%">
												<option data-tokens="Duration">Kaç gün</option>
												<option data-tokens="2 weeks">1 Gün</option>

											</select>
										</div> --}}
									</div>
									{{-- <div class="form-group">
										<button class="tg-btn" type="submit"><span>Keşfet</span></button>
									</div> --}}
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div id="tg-homeslider" class="tg-homeslider owl-carousel tg-haslayout">
				<figure class="item" data-vide-bg="poster: images/slider/img-01.jpg" data-vide-options="position: 0% 50%"></figure>
				<figure class="item" data-vide-bg="poster: images/slider/img-02.jpg" data-vide-options="position: 0% 50%"></figure>
				<figure class="item" data-vide-bg="poster: images/slider/img-03.jpg" data-vide-options="position: 0% 50%"></figure>
			</div>
		</div>
		<!--************************************
				Home Slider End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<!--************************************
					Advantures Start
			*************************************-->
			<section class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-toursdestinations">
								<div class="tg-tourdestination tg-tourdestinationbigbox">
									<figure>
										<a href="javascript:void(0);">
											<img src="images/destination/img-01.jpg" alt="image destinations">
											<div class="tg-hoverbox">
												<div class="tg-adventuretitle">
													<h2>Ice Adventure Vacations</h2>
												</div>
												<div class="tg-description">
													<p>your best vacation ever</p>
												</div>
											</div>
										</a>
									</figure>
								</div>
								<div class="tg-tourdestination">
									<figure>
										<a href="javascript:void(0);">
											<img src="images/destination/img-02.jpg" alt="image destinations">
											<div class="tg-hoverbox">
												<div class="tg-adventuretitle">
													<h2>National Park</h2>
												</div>
											</div>
										</a>
									</figure>
								</div>
								<div class="tg-tourdestination">
									<figure>
										<a href="javascript:void(0);">
											<img src="images/destination/img-03.jpg" alt="image destinations">
											<div class="tg-hoverbox">
												<div class="tg-adventuretitle">
													<h2>Adult Vacations</h2>
												</div>
											</div>
										</a>
									</figure>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Advantures End
			*************************************-->
			<!--************************************
					Features Start
			*************************************-->
			<section class="tg-sectionspace tg-zerotoppadding tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="tg-features">
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="tg-feature">
									<div class="tg-featuretitle">
										<h2><span>01</span>Lüx Otobüsler</h2>
									</div>
									<div class="tg-description">
										<p>Konforlu Koltuklar ve Özel Hizmet ile Yolculuğun Tadını Çıkartırken yolculuğunuz Boyunca Rahatlayın, Dinlenin ve Keyifli Vakit Geçirin!..</p>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="tg-feature">
									<div class="tg-featuretitle">
										<h2><span>02</span>Turist Rehberleri</h2>
									</div>
									<div class="tg-description">
										<p>Şimdi sizleri bu büyüleyici turların sırlarını keşfetmeye davet ediyoruz!...</p>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="tg-feature">
									<div class="tg-featuretitle">
										<h2><span>03</span>Flights Tickets</h2>
									</div>
									<div class="tg-description">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer nihil imperdiet doming...</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Features End
			*************************************-->
			<!--************************************
					Popular Tour Start
			*************************************-->
			<section class="tg-parallax" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-01.jpg">
				<div class="tg-sectionspace tg-haslayout">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="tg-sectiontitle tg-sectiontitleleft">
									<h2>Popüler Turlar</h2>
									<a class="tg-btnvtwo" href="liste">Bütün Turlar</a>
								</div>
								<div id="tg-populartoursslider" class="tg-populartoursslider tg-populartours owl-carousel">
                                    @foreach ($gezi as $post )
									<div class="item tg-populartour">

										<figure>
											<a href="{{ route('tourdetail', ['il_ad' => $post->tur_adi]) }}"><img src="{{ asset('uploads/' . $post->image) }}" alt="image destinations">
                                            </a>
											<span class="tg-descount">{{$post->indirim}}</span>
										</figure>
										<div class="tg-populartourcontent">
											<div class="tg-populartourtitle">
												<h3><a href="{{ route('tourdetail', ['il_ad' => $post->tur_adi]) }}">{{$post->tur_adi}}</a></h3>
											</div>
											<div class="tg-description">
												<p>{{$post->tur_aciklamasi}}</p>
											</div>
											<div class="tg-populartourfoot">
												<div class="tg-durationrating">
													<span class="tg-tourduration">{{$post->gün}}</span>

												</div>
												<div class="tg-pricearea">
													<del>{{$post->asil_fiyat}}</del>
													<h4>{{$post->indirimli_fiyat}}</h4>
												</div>
											</div>
										</div>

									</div>
                                    @endforeach
								</div>

							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Popular Tour End
			*************************************-->
			<!--************************************
					Our Destination Start
			*************************************-->
			<section class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="tg-ourdestination">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 tg-verticalmiddle">
								<figure><img src="images/placeholder/placeholder-01.png" alt="image destinations"></figure>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 tg-verticalmiddle">
								<div class="tg-ourdestinationcontent">
									<div class="tg-sectiontitle tg-sectiontitleleft">
										<h2>Popüler Turlar</h2>
									</div>
									<div class="tg-description"><p>Yola Çıkın, Yeni Kültürleri Tanıyın ve Yepyeni Deneyimlere Kapı Aralayın!..</p></div>
									<ul class="tg-destinations">
										<li>
											<a href="tourcatagory.html">
												<h3>İstanbul</h3>
												<em>(1)</em>
											</a>
										</li>
										<li>
											<a href="tourcatagory.html">
												<h3>Eskişehir</h3>
												<em>(1)</em>
											</a>
										</li>
										<li>
											<a href="tourcatagory.html">
												<h3>Denizli</h3>
												<em>(1)</em>
											</a>
										</li>
										<li>
											<a href="tourcatagory.html">
												<h3>Nevşehir</h3>
												<em>(1)</em>
											</a>
										</li>
										<li>
											<a href="tourcatagory.html">
												<h3>Diyarbakır</h3>
												<em>(1)</em>
											</a>
										</li>
										<li>
											<a href="tourcatagory.html">
												<h3>Bursa</h3>
												<em>(1)</em>
											</a>
										</li>
									</ul>
									<a class="tg-btn" href="liste"><span>Tüm Turlar</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Our Destination End
			*************************************-->
			<!--************************************
					Destination Start
			*************************************-->
			{{-- <section class="tg-sectionspace tg-zerotoppadding tg-haslayout">
				<div class="container">
					<div class="row">
						<div id="tg-destinationsslider" class="tg-destinationsslider tg-destinations owl-carousel">
							<div class="item tg-destination">
								<figure>
									<a href="tourbookingdetail.html"><img src="images/destination/img-04.jpg" alt="image description"></a>
									<figcaption>
										<h2><a href="tourbookingdetail.html">Paris</a></h2>
										<div class="tg-description">
											<p>in the streets of London</p>
										</div>
									</figcaption>
								</figure>
							</div>
							<div class="item tg-destination">
								<figure>
									<a href="tourbookingdetail.html"><img src="images/destination/img-05.jpg" alt="image description"></a>
									<figcaption>
										<h2><a href="tourbookingdetail.html">Egypt</a></h2>
										<div class="tg-description">
											<p>in the streets of London</p>
										</div>
									</figcaption>
								</figure>
								<figure>
									<a href="tourbookingdetail.html"><img src="images/destination/img-06.jpg" alt="image description"></a>
									<figcaption>
										<h2><a href="tourbookingdetail.html">London</a></h2>
										<div class="tg-description">
											<p>in the streets of London</p>
										</div>
									</figcaption>
								</figure>
							</div>
							<div class="item tg-destination">
								<figure>
									<a href="javascript:void(0);"><img src="images/destination/img-07.jpg" alt="image description"></a>
									<figcaption>
										<h2><a href="javascript:void(0);">Istanbul</a></h2>
										<div class="tg-description">
											<p>Beautiful Mosque</p>
										</div>
									</figcaption>
								</figure>
							</div>
							<div class="item tg-destination">
								<figure>
									<a href="javascript:void(0);"><img src="images/destination/img-04.jpg" alt="image description"></a>
									<figcaption>
										<h2><a href="javascript:void(0);">Paris</a></h2>
										<div class="tg-description">
											<p>in the streets of London</p>
										</div>
									</figcaption>
								</figure>
							</div>
							<div class="item tg-destination">
								<figure>
									<a href="javascript:void(0);"><img src="images/destination/img-05.jpg" alt="image description"></a>
									<figcaption>
										<h2><a href="javascript:void(0);">Egypt</a></h2>
										<div class="tg-description">
											<p>in the streets of London</p>
										</div>
									</figcaption>
								</figure>
								<figure>
									<a href="javascript:void(0);"><img src="images/destination/img-06.jpg" alt="image description"></a>
									<figcaption>
										<h2><a href="javascript:void(0);">London</a></h2>
										<div class="tg-description">
											<p>in the streets of London</p>
										</div>
									</figcaption>
								</figure>
							</div>
							<div class="item tg-destination">
								<figure>
									<a href="javascript:void(0);"><img src="images/destination/img-07.jpg" alt="image description"></a>
									<figcaption>
										<h2><a href="javascript:void(0);">Istanbul</a></h2>
										<div class="tg-description">
											<p>Beautiful Mosque</p>
										</div>
									</figcaption>
								</figure>
							</div>
						</div>
					</div>
				</div>
			</section> --}}
			<!--************************************
					Destination End
			*************************************-->
			<!--************************************
					Call To Action Start
			*************************************-->

			<!--************************************
					Call To Action End
			*************************************-->
			<!--************************************
					Our Guides Start
			*************************************-->
			<section class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-sectionhead">
								<div class="tg-sectiontitle">
									<h2>Rehberlerimizle Tanışın</h2>
								</div>
								<div class="tg-description">
									<p>Bilgiyi yolculuğa dönüştüren uzman rehberlerimizle tanışın.</p>
								</div>
							</div>
							<div id="tg-guidesslider" class="tg-guidesslider tg-guides owl-carousel">
                                @foreach ($rehberler as $posts )
								<div class="item tg-guide">
									<figure><img src="{{ asset('uploads/' . $posts->image) }}" alt="image destinations"></figure>
									<div class="tg-guidecontent">
										<div class="tg-guidecontenthead">
											<h3>{{$posts->ad}}</h3>
											<h4>{{$posts->il}}</h4>
											<ul class="tg-socialicons tg-socialiconsvtwo">
												<li><a href="{{$posts->facebook}}"><i class="icon-facebook-logo-outline"></i></a></li>
												<li><a href="{{$posts->instagram}}"><i class="icon-instagram-social-outlined-logo"></i></a></li>
												<li><a href="{{$posts->twitter}}"><i class="icon-twitter-social-outlined-logo"></i></a></li>
											</ul>
										</div>
										<div class="tg-description">
											<p>{{$posts->açiklama}}</p>
										</div>
									</div>

								</div>
                                @endforeach


								{{-- <div class="item tg-guide">
									<figure><img src="images/Guides/img-02.jpg" alt="image destination"></figure>
									<div class="tg-guidecontent">
										<div class="tg-guidecontenthead">
											<h3>Martin Blake</h3>
											<h4>Adventure Master</h4>
											<ul class="tg-socialicons tg-socialiconsvtwo">
												<li><a href="javascript:void(0);"><i class="icon-facebook-logo-outline"></i></a></li>
												<li><a href="javascript:void(0);"><i class="icon-instagram-social-outlined-logo"></i></a></li>
												<li><a href="javascript:void(0);"><i class="icon-twitter-social-outlined-logo"></i></a></li>
											</ul>
										</div>
										<div class="tg-description">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
										</div>
									</div>
								</div>
								<div class="item tg-guide">
									<figure><img src="images/Guides/img-03.jpg" alt="image destination"></figure>
									<div class="tg-guidecontent">
										<div class="tg-guidecontenthead">
											<h3>Martin Blake</h3>
											<h4>Adventure Master</h4>
											<ul class="tg-socialicons tg-socialiconsvtwo">
												<li><a href="javascript:void(0);"><i class="icon-facebook-logo-outline"></i></a></li>
												<li><a href="javascript:void(0);"><i class="icon-instagram-social-outlined-logo"></i></a></li>
												<li><a href="javascript:void(0);"><i class="icon-twitter-social-outlined-logo"></i></a></li>
											</ul>
										</div>
										<div class="tg-description">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
										</div>
									</div>
								</div> --}}
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Our Guides End
			*************************************-->
			<!--************************************
					Our Partners Start
			*************************************-->

			<!--************************************
					Our Partners End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->
		<!--************************************
				Footer Start
		*************************************-->
		<footer id="tg-footer" class="tg-footer tg-haslayout">
			<div class="tg-fourcolumns">
				<div class="container">
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
							<div class="tg-footercolumn tg-widget tg-widgettext">
								<div class="tg-widgettitle">
									<h3>Hakkımızda</h3>
								</div>
								<div class="tg-widgetcontent">
									<div class="tg-description">
										<p>Sıradan turlar değil, tamamen size özel deneyimler sunuyoruz.</p>
									</div>
									<span>506 175 08 38</span>
									<a href="mailto:info@travlu.com">info@NesliTurizm.com</a>
									<ul class="tg-socialicons tg-socialiconsvtwo">
										<li><a href="javascript:void(0);"><i class="icon-facebook-logo-outline"></i></a></li>
										<li><a href="javascript:void(0);"><i class="icon-instagram-social-outlined-logo"></i></a></li>
										<li><a href="javascript:void(0);"><i class="icon-twitter-social-outlined-logo"></i></a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
							<div class="tg-footercolumn tg-widget tg-widgetdestinations">
								<div class="tg-widgettitle">
									<h3>En Güzel Yerler</h3>
								</div>
								<div class="tg-widgetcontent">
									<ul>
										<li><a href="javascript:void(0);">Eskişehir, Sazova parkı</a></li>
										<li><a href="javascript:void(0);">Muğla, Ölüdeniz</a></li>
										<li><a href="javascript:void(0);">Denizli, Pamukkale</a></li>
										<li><a href="javascript:void(0);">İstanbul, Kız Kulesi</a></li>
										<li><a href="javascript:void(0);">Bursa, Uludağ</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
							<div class="tg-footercolumn tg-widget tg-widgetnewsletter">
								<div class="tg-widgettitle">
									<h3>Haberler</h3>
								</div>
								<div class="tg-widgetcontent">
									<div class="tg-description"><p>Yeni Haberler İçin Mail Adresinizi Bize Yazın Bildirimlerinize Ulaşın...</p></div>
									<form class="tg-formtheme tg-formnewsletter">
										<fieldset>
											<input type="email" name="email" class="form-control" placeholder="Email Girebilirsiniz!..">
											<button type="submit"><img src="images/icons/icon-08.png" alt="image destinations"></button>
										</fieldset>
									</form>
									<span>Gizliliğe Saygılıyız..</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tg-footerbar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<p>Copyright &copy; 2024 Nesli Turizm. All  rights reserved</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--************************************
				Footer End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	<!--************************************
			Search Start
	*************************************-->
	<div id="tg-search" class="tg-search">
		<button type="button" class="close"><i class="icon-cross"></i></button>
		<form>
			<fieldset>
				<div class="form-group">
					<input type="search" name="search" class="form-control" value="" placeholder="search here">
					<button type="submit" class="tg-btn"><span class="icon-search2"></span></button>
				</div>
			</fieldset>
		</form>
		<ul class="tg-destinations">
			<li>
				<a href="javascript:void(0);">
					<h3>İstanbul</h3>
					{{-- <em>(0)</em> --}}
				</a>
			</li>
			<li>
				<a href="javascript:void(0);">
					<h3>Eskişehir</h3>
					{{-- <em>(0)</em> --}}
				</a>
			</li>
			<li>
				<a href="javascript:void(0);">
					<h3>Denizli</h3>
					{{-- <em>(0)</em> --}}
				</a>
			</li>
			<li>
				<a href="javascript:void(0);">
					<h3>Bursa</h3>
					{{-- <em>(0)</em> --}}
				</a>
			</li>
			<li>
				<a href="javascript:void(0);">
					<h3>Diyarbakır</h3>
					{{-- <em>(0)</em> --}}
				</a>
			</li>
		</ul>
	</div>
	<!--************************************
			Search End
	*************************************-->
	<!--************************************
			Login Singup Start
	*************************************-->
	<div id="tg-loginsingup" class="tg-loginsingup" data-vide-bg="poster: images/singup-img.jpg" data-vide-options="position: 0% 50%">
		<div class="tg-contentarea tg-themescrollbar">
			<div class="tg-scrollbar">
				<button type="button" class="close">x</button>
				<div class="tg-logincontent">
					<nav id="tg-loginnav" class="tg-loginnav">
						<ul>
							<li><a href="#">Hakkımızda</a></li>
							<li><a href="#">Bizimle İletişime Geç</a></li>
							<li><a href="#">Hesabım</a></li>
							<li><a href="#">İstek Listem</a></li>
						</ul>
					</nav>
					<div class="tg-themetabs">
						<ul class="tg-navtbs" role="tablist">
							<li role="presentation" class="active"><a href="#home" data-toggle="tab">Üyeyim</a></li>
							<li role="presentation"><a href="#profile" data-toggle="tab">Yeniyim</a></li>
						</ul>
						<div class="tg-tabcontent tab-content">
							<div role="tabpanel" class="tab-pane active fade in" id="home">
								<form class="tg-formtheme tg-formlogin" method="POST" action="{{ url('/giris') }}">
                                    @csrf
									<fieldset>
										<div class="form-group">
											<label>E-mail <sup>*</sup></label>
											<input type="text" name="mail" class="form-control" placeholder="">
										</div>
										<div class="form-group">
											<label>Şifre <sup>*</sup></label>
											<input type="password" name="password" class="form-control" placeholder="">
										</div>
										<div class="form-group">
											{{-- <div class="tg-checkbox">
												<input type="checkbox" name="remember" id="rememberpass">
												<label for="rememberpass">Beni Hatırla</label>
											</div> --}}
											<span><a href="#">Şifremi Unuttum</a></span>
										</div>

										<button type="submit" class="tg-btn tg-btn-lg">Giriş Yap</button>

									</fieldset>
								</form>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="profile">
								<form class="tg-formtheme tg-formlogin" action="{{ url('/register') }}" method="POST">
                                    @csrf
									<fieldset>
                                        {{-- <div class="form-group">
											<label>Adınız <sup>*</sup></label>
											<input id="name" type="text" name="name" class="form-control" placeholder="">
										</div> --}}
										<div class="form-group">
											<label>E-mail <sup>*</sup></label>
											<input id="mail" type="text" name="mail" class="form-control" placeholder="">
										</div>
										<div class="form-group">
											<label for="password">Şifre <sup>*</sup></label>
											<input id="password" type="password" name="password" class="form-control" placeholder="">
										</div>
										<div class="form-group">
											<label for="password_confirmation">Şifre Tekrar <sup>*</sup></label>
											<input id="password_confirmation" type="password" name="password_confirmation" class="form-control" placeholder="">
										</div>
										<div class="form-group">
											{{-- <div class="tg-checkbox">
												<input type="checkbox" name="remember" id="remember">
												<label for="remember">Beni Hatırla</label>
											</div> --}}
											<span><a href="#"></a></span>
										</div>
										<button type="submit" class="tg-btn tg-btn-lg"><span>Profil Oluştur</span></button>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
					<div class="tg-shareor"><span>Ya Da</span></div>
					<div class="tg-signupwith">
						<h2>Başka Dene<h2>
						<ul class="tg-sharesocialicon">
							<li class="tg-facebook"><a href="#"><i class="icon-facebook-1"></i><span>Facebook</span></a></li>
							<li class="tg-twitter"><a href="#"><i class="icon-twitter-1"></i><span>Twitter</span></a></li>
							<li class="tg-googleplus"><a href="#"><i class="icon-google4"></i><span>Google+</span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--************************************
			Login Singup End
	*************************************-->
	<script src="js/vendor/jquery-library.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&language=en"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/jquery-scrolltofixed.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.mmenu.all.js"></script>
	<script src="js/packery.pkgd.min.js"></script>
	<script src="js/jquery.vide.min.js"></script>
	<script src="js/scrollbar.min.js"></script>
	<script src="js/prettyPhoto.js"></script>
	<script src="js/countdown.js"></script>
	<script src="js/parallax.js"></script>
	<script src="js/gmap3.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
