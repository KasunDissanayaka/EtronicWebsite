@extends('layouts.app')

@section('content')
<div class="wrapper bg-opacity-default">
    <div class="rev_slider_wrapper fullwidth-container dark-spinner">
        <div id="slider6" class="rev_slider fullwidthbanner light-gallery-wrapper" data-version="5.4.7">
            <ul>
                <li data-transition="fade" data-thumb=""><img src="{{ asset('images/dummy.png') }}" style="background:transparent" alt="" />
                    <div class="tp-caption font-weight-600 color-dark" 
                         data-x="['left','left','center','center']" 
                         data-y="middle" 
                         data-hoffset="['50','30','0','0']" 
                         data-voffset="['-80','-80','-260','-190']" 
                         data-fontsize="['40','40','34','32']" 
                         data-lineheight="['50','50','44','42']" 
                         data-width="['350','350','650','340']" 
                         data-textAlign="['left','left','center','center']" 
                         data-whitespace="['normal','normal','normal','normal']" 
                         data-frames='[{"delay":1500,"speed":1200,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' 
                         data-responsive="on" 
                         data-responsive_offset="on" style="z-index: 9;">Simple, Powerful and Lightweight  
                    </div>
                    <!-- /.tp-caption -->
                    <div class="tp-caption font-weight-400 color-dark" 
                         data-x="['left','left','center','center']" 
                         data-y="middle" 
                         data-hoffset="['50','30','0','0']" 
                         data-voffset="['30','30','-200','-90']" 
                         data-fontsize="['26','26','22','20']" 
                         data-lineheight="['36','36','32','30']" 
                         data-width="['350','350','650','340']" 
                         data-textAlign="['left','left','center','center']" 
                         data-whitespace="['normal','normal','normal','normal']" 
                         data-frames='[{"delay":2000,"speed":1200,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' 
                         data-responsive="on" 
                         data-responsive_offset="on" style="z-index: 9;">Free & secure messaging app available in multiplatform.  
                    </div>
                    <!-- /.tp-caption -->
                    <div class="tp-caption" 
                         data-x="['right','right','center','center']" 
                         data-y="middle" 
                         data-hoffset="['60','30','0','0']" 
                         data-voffset="['30','30','160','205']" 
                         data-frames='[{"delay":500,"speed":1200,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' 
                         data-visibility="['on','on','on','on']" 
                         data-width="none" 
                         data-height="none" 
                         data-type="image" 
                         data-responsive_offset="on" style="z-index: 5;"><img 
                            data-lazyload="" src="{{ asset('images/art/macbook2.png') }}" 
                            data-ww="['740','650','550','400']" 
                            data-hh="['422','388','314','228']" alt="" />  
                    </div>
                    <!-- /.tp-caption -->
                    <div class="tp-caption" 
                         data-x="['right','right','right','right']" 
                         data-y="middle" 
                         data-hoffset="['70','40','125','50']" 
                         data-voffset="['110','110','220','250']" 
                         data-frames='[{"delay":1000,"speed":1200,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' 
                         data-visibility="['on','on','on','on']" 
                         data-width="none" 
                         data-height="none" 
                         data-type="image" 
                         data-responsive_offset="on" style="z-index: 5;"><img 
                            data-lazyload="" src="{{ asset('images/art/iphone4.png') }}" 
                            data-ww="['128','120','100','74']" 
                            data-hh="['242','227','190','140']" alt="" />  
                    </div>
                    <!-- /.tp-caption -->
                </li>
            </ul>
            <div class="tp-bannertimer tp-bottom"></div>
        </div>
        <!-- /.rev_slider -->
    </div>
    <!-- /.rev_slider_wrapper -->
</div>
<!-- /.wrapper -->
<div class="wrapper light-wrapper">
    <div class="container inner">
        <!-- /.owl-carousel -->
        <div class="text-center">
            <h2 class="title-color color-gray">Our offering</h2>
            <h3 class="display-3">The full service we are offering is specifically <br class="d-none d-lg-block" />designed to meet your business needs.</h3>
        </div>
        <!-- /.text-center -->
        <div class="space40"></div>
        <ul class="nav nav-tabs nav-tabs-centered nav-tabs-bg d-flex justify-content-between nav-justified text-center">
            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#tab4-1">
                    <div class="icon icon-svg mb-10"><img src="{{ asset('images/icons/de-laptop-computer.png') }}" alt=""></div><span>Web Design & Development</span>
                </a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab4-2">
                    <div class="icon icon-svg mb-10"><img src="{{ asset('images/icons/of-chart.png') }}" alt=""></div><span>Software Development</span>
                </a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab4-3">
                    <div class="icon icon-svg mb-10"><img src="{{ asset('images/icons/sm-analysis-1.png') }}" alt=""></div><span>System Development</span>
                </a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab4-4">
                    <div class="icon icon-svg mb-10"><img src="{{ asset('images/icons/ui-phone.png') }}" alt=""></div><span>App Development</span>
                </a> </li>
        </ul>
        <!-- /.nav-tabs -->
        <div class="space60 d-none d-md-block"></div>
        <div class="tab-content">
            <div class="tab-pane show active" id="tab4-1">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="pr-15 pr-md-0 pr-sm-0 h-100">
                            <figure>
                                <img src="{{ asset('images/art/ui1.png') }}" alt="" />
                            </figure>
                        </div>
                    </div>
                    <!--/column -->
                    <div class="space30 d-none d-md-block d-lg-none"></div>
                    <div class="col-lg-5">
                        <div class="pl-15 pl-md-0 pl-sm-0 h-100">
                            <h3>WEB DESIGN & DEVELOPMENT</h3>
                            <p>Etronic solutions an award-winning web design company in Sri Lanka. Delivering creative and innovative web experiences. With extensive experience in web designing.</p>
                            <p>From Etronic, our complete eCommerce shopping cart web solution will include a fully functioning shopping cart website, a payment gateway to facilitate merchants and comprehensive website marketing knowledge – all for just a small premium.</p>
                            <p>Here onward, we’ll also be taking good care of all aspects that pertain to your web order processing and other eCommerce needs, so that you can focus on other important operations of your core business.</p>
                        </div>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <div class="tab-pane" id="tab4-2">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="pr-15 pr-md-0 pr-sm-0 h-100">
                            <figure>
                                <img src="{{ asset('images/art/ui2.png') }}" alt="" />
                            </figure>
                        </div>
                    </div>
                    <!--/column -->
                    <div class="space30 d-none d-md-block d-lg-none"></div>
                    <div class="col-lg-5">
                        <div class="pl-15 pl-md-0 pl-sm-0 h-100">
                            <h3>SOFTWARE SOLUTION</h3>
                            <p>Etronic is an experienced custom software development company based in UK, Malayasia, Sri Lanka. Having more than 10+ years of experience in the field of IT industry.</p>
                            <p>Most providers only support certain components in their IT Managed Service plan. They'll cover these desktops and those servers, but not this router or that switch. Etronic is different. It doesn't matter what hardware or what software you're using, we'll provide support. This means you never have to worry about who's maintaining what. We've got it covered.</p>
                        </div>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <div class="tab-pane" id="tab4-3">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="pl-15 pr-md-0 pl-sm-0 h-100">
                            <h3>WEB SYSTEM  DEVELOPMENT</h3>
                            <p>systems comprises a team of highly motivated, innovative & experienced team of software engineers, who have years of experience in development & implementation of projects both locally and overseas.</p>
                            <p>how you communicate with your customers. Unlike email, it does not require the set up of multiple folder structures and color coded tags to prioritize and track relevant customer queries. It brings in customer conversations from multiple channels like phone, email, and social media into a single, easily accessible location where you get all the context you need. A good help desk ticketing system also lets you automate routine support tasks to increase the efficiency of your team and reduce excessive workload.</p>
                            <div class="space10"></div>
                            <a href="#" class="btn btn-default">More Details</a>
                        </div>
                    </div>
                    <!--/column -->
                    <div class="space30 d-none d-md-block d-lg-none"></div>
                    <div class="col-lg-5">
                        <div class="pr-15 pl-md-0 pr-sm-0 h-100">
                            <figure>
                                <img src="{{ asset('images/art/ui3.png') }}" alt="" />
                            </figure>
                        </div>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <div class="tab-pane" id="tab4-4">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="pr-15 pr-md-0 pr-sm-0 h-100">
                            <figure>
                                <img src="{{ asset('images/art/ui4.png') }}" alt="" />
                            </figure>
                        </div>
                    </div>
                    <!--/column -->
                    <div class="space30 d-none d-md-block d-lg-none"></div>
                    <div class="col-lg-6">
                        <div class="pl-15 pl-md-0 pl-sm-0 h-100">
                            <h3>WEB & MOBILE APP DEVELOPMENT</h3>
                            <p>Etronic is a highly professional and uncommonly imaginative Digital Marketing and Web Application development & Mobile Application development company.</p>
                            <p>With a good ticket management software, you can monitor your team’s progress seamlessly. Using comprehensive reports, you can identify problems faster, recognize good or bad performance, track customer satisfaction and monitor service standards.</p>
                            <p>Etronic is a total information technology service provider specialized in retail software solutions. Whether you have a small grocery shop or are into supermarkets, bookstore, pharmacy, small take-away to a hotel, spare-parts shop to an electronic megastore, textiles shop to mega clothing chain, departmental stores, hardware stores, clubs, pubs, restaurants, we have the solution just for you.  </p>
                        </div>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
        </div>
        <!-- /.tab-content -->
        <div class="space160"></div>
        <h2 class="title-color color-gray text-center">How It Works</h2>
        <h3 class="display-3 text-center">Find out everything you need to know <br class="d-none d-lg-block" />about creating a business process model.</h3>
        <div class="space40"></div>
        <div class="row align-items-xl-center">
            <div class="col-lg-7">
                <figure class="shadow">
                    <img src="{{ asset('images/art/ui5.png') }}" alt="" />
                </figure>
            </div>
            <!--/column -->
            <div class="space20 d-md-none"></div>
            <div class="space50 d-none d-md-block d-lg-none"></div>
            <div class="col-lg-5 pl-50 pl-md-15">
                <div class="d-flex flex-row">
                    <div>
                        <span class="icon icon-bg icon-bg-default color-default mr-25"><span class="number">1</span></span>
                    </div>
                    <div>
                        <h5>OUR HISTORY</h5>
                        <p class="mb-0">Etronic Systems is Sri Lanka’s premier Web Design and Software Development agency. We celebrated two decades of industry</p>
                    </div>
                </div>
                <div class="space40"></div>
                <div class="d-flex flex-row">
                    <div>
                        <span class="icon icon-bg icon-bg-default color-default mr-25"><span class="number">2</span></span>
                    </div>
                    <div>
                        <h5>OUR MISSION</h5>
                        <p class="mb-0">To become the most successful and respected leading business conglomerate in the fields of information technology through related diversification and expansion into a multinational corporation.</p>
                    </div>
                </div>
                <div class="space40"></div>
                <div class="d-flex flex-row">
                    <div>
                        <span class="icon icon-bg icon-bg-default color-default mr-25"><span class="number">3</span></span>
                    </div>
                    <div>
                        <h5>NO WORRIES, YOU’RE COVERED</h5>
                        <p class="mb-0">Most providers only support certain components in their IT Managed Service plan. They'll cover these desktops and those servers, but not this router or that switch. Tritcal is different. It doesn't matter what hardware or what software you're using, we'll provide support.</p>
                    </div>
                </div>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /.wrapper -->
<div class="wrapper bg-opacity-default">
    <div class="container inner">
        <div class="row">
            <div class="col-md-10 offset-md-1 text-center">
                <h2 class="title-color color-gray text-center">App Progress</h2>
                <div class="space20"></div>
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="progressbar circle cobalt" data-value="75"></div>
                        <h5>WEB DESIGN & DEVELOPMENT</h5>
                    </div>
                    <!-- /column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="progressbar circle teal" data-value="80"></div>
                        <h5>SYSTEM  DEVELOPMENT</h5>
                    </div>
                    <!-- /column -->
                    <div class="space30 d-none d-md-block d-lg-none"></div>
                    <div class="col-md-6 col-lg-3">
                        <div class="progressbar circle red" data-value="60"></div>
                        <h5>SOFTWARE SOLUTION</h5>
                    </div>
                    <!-- /column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="progressbar circle yellow" data-value="90"></div>
                        <h5>MOBILE APP DEVELOPMENT (Hybrid and Native)</h5>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
@endsection