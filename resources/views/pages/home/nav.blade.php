<span itemscope itemtype="http://schema.org/LocalBusiness">
<div class="container-fluid">
		<div class="row">
			<div id="contactusnavigation" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 overflow-hidden">
								<div class="social-icons">
									<ul class="nav nav-pills navbar-left hidden-xs">
										{{--<li><a href="{{ url('/contactus') }}" class="plaintext">Open 7 days | 8am - 8pm | Mon~Sun</a></li>--}}
										<li><a itemprop="openingHoursSpecification" itemscope itemtype="http://schema.org/OpeningHoursSpecification" href="{{ secure_url('/contactus') }}" class="plaintext">Open 7 days | <span itemprop="opens" content="Please insert valid ISO 8601 date/time here. Examples: 2015-07-27 or 2015-07-27T15:30">8am</span> - <span itemprop="closes" content="Please insert valid ISO 8601 date/time here. Examples: 2015-07-27 or 2015-07-27T15:30">8pm</span> | <span itemprop="dayOfWeek" itemscope itemtype="http://schema.org/DayOfWeek"><span itemprop="name">Mon~Sun</span></span></a></li>
										<!-- <li><a href="" class="btn btn-xs btn-danger pull-right">book a repair</a></li>	                         -->
									</ul>
									<!-- </div> -->
									<!-- </div> -->
									<!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 overflow-hidden">            	             -->
									<!-- <div class="social-icons text-center"> -->
									<ul class="nav nav-pills navbar-right">
										<li class=""><a href="tel:0425281078" class=""><i id="phone" class="fa fa-phone"></i>&nbsp;0425 281 078</a></li>
										<li class=""><a href="tel:0383905855" class=""><i id="phone" class="fa fa-phone"></i>&nbsp;03 8390 5855</a></li>
										<li class=""><a href="mailto:info@thinkandgrowfinance.com.au?subject=Mortgage enquiry"><i id="mail" class="fa fa-envelope"></i>&nbsp; email us</a></li>
										<li class="hidden-x"><a href="https://www.facebook.com/thinkandgrowfinance/" target="_blank"><i class="fa fa-facebook"></i></a></li>
										<li class="hidden-x"><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li class="hidden-x"><a href="https://plus.google.com/106952356882560751037" target="_blank"><i class="fa fa-google-plus"></i></a></li>
										<li class="hidden-x"><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<!-- <li><a href=""><i class="fa fa-linkedin"></i></a></li> -->
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>


				<nav id="navhome" class="navbar navbar-default br0 bg-transparen navbar-fixed-top noborder  text-uppercase fw500 " role="navigation">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only"><i class="fa fa-bars"></i>&nbsp;Menu</span>
								<ul class="list-inline">
								    <li>
                                        <a href="#" class="menu-btn">
                                            <div class="menu-btn-block top"></div>
                                            <div class="menu-btn-block middle"></div>
                                            <div class="menu-btn-block bottom"></div>
                                          </a>
                                          <li><span class="hidden-xs">Menu</span></li>
                                    </li>
                                </ul>
								{{--<span class="menu-btn"><i class="fa fa-bars"></i>&nbsp;Menu</span>--}}
								{{--<span class="icon-bar"></span>--}}
								{{--<span class="icon-bar"></span>--}}
								{{--<span class="icon-bar"></span>--}}
							</button>
							{{--<a class="navbar-brand" href="{{ url('/home') }}">--}}
							<a class="navbar-brand" href="{{ secure_url('/home') }}">
								<!-- <span class="text-white">
									<span class="font42 fw700 text-light-orange"><i class="fa fa-wrench text-light-orange"></i>&nbsp;SOS</span>
									<span class="lato text-light-orange text-lowercase"> Appliance</span>
								</span><br>
								<span class='pull-right text-muted small text-capitalize fw100 lato text-light-orange '><em>do it once do it right</em></span> -->
								{{--<img src="{{ url('images/logo/thinklogowhite_proportionate_grey.png') }}" alt="TGF logo" height="75">--}}
								<img src="{{ secure_url('images/logo/thinklogowhite_proportionate_grey.png') }}" alt="TGF logo" height="75">

								{{--<span class="">--}}
									{{--<span class="font42 fw700"><i class="fa fa-wrench"></i>&nbsp;SOS</span>--}}
									{{--<span class="lato text-lowercase hidden-xs"> Appliance</span>--}}
								{{--</span><br>--}}
								{{--<span class='pull-right small text-capitalize fw500 lato hidden-xs'><em>do it once do it right</em></span>--}}
							</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse navbar-ex1-collapse">
							<ul class="nav navbar-nav navbar-right">
								{{--<li><a href="{{ url('/home') }}"><i class="fa fa-home"></i></a></li>--}}
								<li><a href="{{ secure_url('/home') }}"><span class="font150"><i class="fa fa-home"></i></span></a></li>

								<li class="dropdown page-scroll">
									<a href="{{ URL::current() == url('/home') ? '#services' : secure_url('/home#services') }}" class="dropdown-toggle js-activated">who do we serve <b class="caret"></b></a>
{{--									<a href="{{ URL::current() == secure_url('/home') ? '#services' : secure_url('/home#services') }}" class="dropdown-toggle js-activated">Loans & finance <b class="caret"></b></a>--}}
									<ul class="dropdown-menu">
										{{--<li class='menu-item'><a href="{{ url('/first-home-buyer') }}">first home buyer</a></li>--}}
										<li class='menu-item'><a href="{{ secure_url('/first-home-buyer') }}">first home buyer</a></li>
{{--										<li class='menu-item'><a href="{{ url('/next-home-buyer') }}">next home buyer</a></li>--}}
										<li class='menu-item'><a href="{{ secure_url('/next-home-buyer') }}">next home buyer</a></li>
										{{--<li class='menu-item'><a href="{{ url('/refinancer') }}">refinancer</a></li>--}}
										<li class='menu-item'><a href="{{ secure_url('/refinancer') }}">refinancer</a></li>
{{--										<li class='menu-item'><a href="{{ url('/investor') }}">invester</a></li>--}}
										<li class='menu-item'><a href="{{ secure_url('/investor') }}">investor</a></li>
{{--										<li class='menu-item'><a href="{{ url('/developer') }}">developer</a></li>--}}
										<li class='menu-item'><a href="{{ secure_url('/developer') }}">developer</a></li>
{{--										<li class='menu-item'><a href="{{ url('/carloan') }}">car loan</a></li>--}}
										<li class='menu-item'><a href="{{ secure_url('/carloan') }}">car loan</a></li>
{{--										<li class='menu-item'><a href="{{ url('/mortgage-insurance') }}">mortgage insurance</a></li>--}}
										<li class='menu-item'><a href="{{ secure_url('/mortgage-insurance') }}">insurance</a></li>
									</ul>
								</li>

								<li class="dropdown ">
{{--									<a href="{{ url('/using-a-broker') }}" class="dropdown-toggle">Using a broker <b class="caret"></b></a>--}}
									<a href="{{ secure_url('/benefits-of-using-TGF-broker') }}" class="dropdown-toggle">why use us <b class="caret"></b></a>
									<ul class="dropdown-menu ">
										{{--<li class="menu-item dropdown dropdown-submenu ">--}}
										{{--<li class="menu-item ">--}}
{{--											<a href="{{ url('/benefits-of-using-TGF-broker')}}" class="dropdown-toggle">Why use our broker</a>--}}
											{{--<a href="{{ secure_url('/benefits-of-using-TGF-broker')}}" class="dropdown-toggle">Why use our broker</a>--}}
										{{--</li>--}}
										<li class="menu-item">
{{--                                          <a href="{{ url('/why-choose-us') }}">why choose us</a>--}}
                                          <a href="{{ secure_url('/why-choose-us') }}">why choose us</a>
                                        </li>
                                        <li class="menu-item">
{{--                                          <a href="{{ url('/our-process') }}">our process</a>--}}
                                          <a href="{{ secure_url('/our-process') }}">our process</a>
                                        </li>
                                        <li class="menu-item">
{{--                                          <a href="{{ url('/how-we-get-paid') }}">how we get paid</a>--}}
                                          <a href="{{ secure_url('/how-we-get-paid') }}">how we get paid</a>
                                        </li>
                                    </ul>
								</li>

								<li class="dropdown ">
									{{--<a href="{{ url('/faqs') }}" class="dropdown-toggle text-uppercase">faq<span class="text-lowercase">s</span></a>--}}
									<a href="{{ secure_url('/faqs') }}" class="dropdown-toggle text-uppercase">faq<span class="text-lowercase">s</span></a>
								</li>
								{{--<li class="dropdown ">--}}
									{{--<a href="{{ url('/freebies') }}" class="dropdown-toggle">free downloads</a>--}}
									{{--<a href="{{ secure_url('/freebies') }}" class="dropdown-toggle">freebies</a>--}}
								{{--</li>--}}
								<li class="dropdown ">
									{{--<a href="{{ url('/aboutus') }}" class="dropdown-toggle">About us</a>--}}
									<a href="{{ secure_url('/aboutus') }}" class="dropdown-toggle">About us</a>
								</li>
								<!-- <li><a href="blog.html">tips</a></li> -->
{{--								<li class="booking"><a href="{{ url('/contactus') }}" class=" "><span class="text-">contact us</span></a></li>--}}
								<li class="ooking"><a href="{{ secure_url('/contactus') }}" class=" "><span class="text-">contact us</span></a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div>
				</nav>
			</div>
		</div>
	</div>