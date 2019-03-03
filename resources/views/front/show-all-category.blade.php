<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- saved from url=(0055)http://www.surgiwear.co.in/neurosurgery/implants-1.html -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

   <title>Implants - Neurosurgery</title>
   <link rel="noFollow stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
   <link rel="noFollow stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
   <link rel="stylesheet" href="{{ asset('frontassets/css/style.css') }}" type="text/css">
   <link rel="stylesheet" href="{{ asset('frontassets/categoryone_files/style.css') }}" type="text/css">
</head>

<body class=" catalog-category-view categorypath-neurosurgery-implants-1-hydrocephalus-shunt-systems-html category-hydrocephalus-shunt-systems" style="">
   <div class="wrapper">
      <noscript>
         <div class="global-site-notice noscript">
            <div class="notice-inner">
               <p>
                  <strong>JavaScript seems to be disabled in your browser.</strong><br />
                  You must have JavaScript enabled in your browser to utilize the functionality of this website.                
               </p>
            </div>
         </div>
      </noscript>
      <div class="page">
         <div class="headerlinks">
            <div class="container header headspan" style="padding-top:0 !important;">
               <div class="row" style="margin:0;">
                  <div class="top-head-menu col-xs-12 col-sm-offset-4 col-sm-8 pull-right">
                     <form id="search_mini_form" action="http://www.surgiwear.co.in/catalogsearch/result/" method="get">
                        <div class="form-search pull-right">
                           <!--      <label for="search">Search:</label>-->
                           <div class="input-group">
                              <input id="search" type="text" name="q" value="" class="input-text form-control" maxlength="128" autocomplete="off">
                              
                              <div class="input-group-btn">

                                 <button type="submit" title="Search" class="btn search-button"> 
                                 </button>
                                 
                              </div>
                           </div>
                           <div id="search_autocomplete" class="search-autocomplete" style="display: none;"></div>
                           <script type="text/javascript">
                              //<![CDATA[
                              var searchForm = new Varien.searchForm('search_mini_form', 'search', 'Search entire store here');
                              searchForm.initAutocomplete('http://www.surgiwear.co.in/catalogsearch/ajax/suggest/', 'search_autocomplete');
                              //]]>
                           </script>
                        </div>
                     </form>
                     <ul class="pull-right">
                        <li><a href="aboutus.html">about us</a></li>
                        <li><a href="contactus.html">contact</a></li>
                        <li><a href="#">sitemap</a></li>
                        <li>
                           <div class="userlinks login">
                              <a href="#" data-toggle="modal" data-target="#login-model">Login</a>
                           </div>
                        </li>
                     </ul>
                     <!-- popup cart page -->
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="header-container container">
         <div class="header row">
            <div class="col-md-4 col-sm-4 col-xs-12 no-padding logo">
               <strong>Surgiwear</strong><a href="{{url('/')}}" title="Surgiwear" class="logo"><img src="{{ asset('frontassets/images/logo.jpg') }}" height="50" width="220" alt="Surgiwear"></a>
            </div>
            <div class="col-md-6 col-sm-8 col-xs-12 my_cart ">
               <div class="col-md-7 no-padding">
                  <div class="my_cart_2 col-md-10 col-sm-12 col-xs-12 pull-right">
                     <span class="icon"> </span>
                     <p>Free shipping for goods over Rs 5000</p>
                  </div>
               </div>
               <div class="header-minicart col-md-5 col-sm-6 col-xs-12">
                  <a href="#" data-toggle="modal" data-target="#login-model">
                     <div class="wishlist-circle">
                        <span class="wish">Wishlist</span>
                        <span><i class="fa fa-gift fa-2x"></i></span>
                        <div class="clearfix"></div>
                     </div>
                  </a>
                  <a title="My Cart" href="" class="pull-right showminicart">
                     <div class="countcart">
                        <span>My Cart</span>
                        <!--        <span>0 Items&nbsp;</span>                                 -->
                        <span class="icon"></span>
                        <div class="clearfix"></div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-12 no-padding main-menu">
         <div class="container no-padding">
            <!-- Brand and toggle get grouped for better mobile display -->
                  <!--    <div class="navbar-header">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                       <span class="sr-only">Toggle navigation</span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                     </button>
                  </div> -->
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <!--    <div class="collapse navbar-collapse container" id="bs-example-navbar-collapse-1">
                  -->
                  <div class="all_product_cat">
                     <nav id="nav">
                        <div id="allcat" class="">All Categories</div>
                        @if(isset($categories) && !empty($categories))
                        <ol class="nav-primary">
                           @include('front.categories',['categories'=>$categories])
                        </ol>
                        @else
                        <ol class="nav-primary">
                           <li class="level0 nav-13 level-top parent">No Category Found
                           </li>
                        </ol>
                        @endif
                     </nav>
                     <div class="clearfix"></div>
                  </div>
                  <div class="custom-header-menu">
                     <ul>
                        <li class="break"></li>
                        <li><a href="http://www.surgiwear.co.in/header-menu-3/new-products.html">New Products</a></li>
                        <li class="break"></li>
                        <li><a href="http://www.surgiwear.co.in/header-menu-3/future-products.html">Future Products</a></li>
                        <li class="break"></li>
                        <li><a href="http://www.surgiwear.co.in/header-menu-3/unique-product.html">Unique Product</a></li>
                     </ul>
                  </div>
               </div>
               <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
         </div>
         <div class="main-container col2-left-layout container">
            <div class="main row">
               <div class="breadcrumbs row">
                {{--   <ul>
                     <li class="home">
                        <a href="http://www.surgiwear.co.in/" title="Go to Home Page">Home</a>
                        <span>&gt; </span>
                     </li>
                     <li class="category5">
                        <a href="http://www.surgiwear.co.in/neurosurgery.html" title="">Neurosurgery</a>
                        <span>&gt; </span>
                     </li>
                     <li class="category66">
                        <a href="http://www.surgiwear.co.in/neurosurgery/implants-1.html" title="">Implants</a>
                        <span>&gt; </span>
                     </li>
                     <li class="category29">
                        Hydrocephalus Shunt Systems                                    
                     </li>
                  </ul> --}}
               </div>
               <div class="col-left sidebar col-sm-3 col-xs-12">
                  <div class="block block-layered-nav">
                     <div class="block-title listing-filter-head">
                        <strong><span>Filter</span></strong>
                     </div>
                     <div class="block-content">
                        <p class="block-subtitle">Shopping Options</p>
                        <dl id="narrow-by-list">
                           <dt style="margin-top:20px;" class="last odd">Price</dt>
                           <dd class="last odd">
                              <ol>
                                 <li>
                                    <a href="http://www.surgiwear.co.in/neurosurgery/implants-1/hydrocephalus-shunt-systems.html?price=-10000"><span class="price"><span>Rs.</span>0.00</span> - <span class="price"><span>Rs.</span>9,999.99</span></a>
                                    (33)
                                 </li>
                                 <li>
                                    <a href="http://www.surgiwear.co.in/neurosurgery/implants-1/hydrocephalus-shunt-systems.html?price=10000-"><span class="price"><span>Rs.</span>10,000.00</span> and above</a>
                                    (4)
                                 </li>
                              </ol>
                           </dd>
                        </dl>
                        <script type="text/javascript">decorateDataList('narrow-by-list')</script>
                     </div>
                     <div class="col-md-12 col-sm-12 col-xs-12 no-padding">
                     </div>
                  </div>
               </div>
               <div class="col-main col-sm-9 col-xs-12 no-padding">
                  <ul class="col-md-12 no-padding subcategories subcategories-layout-grid">
                     @if(isset($categoriesArr) && !empty($categoriesArr))
                        @foreach($categoriesArr as $value)
                           <li class="col-md-4">
                              <a href="{{url('category/'.base64_encode($value['id']))}}">
                                 <img src="{{asset('category/'.$value['image'])}}" alt="" height="160" width="240">
                                 <span>{{ucfirst($value['category'])}}</span>
                              </a>
                           </li>
                        @endforeach
                     @endif
                  </ul>
               </div>
            </div>
         </div>
         <div class="main-footer col-md-12 no-padding">
            <div class="container footer-container">
               <div class="footer row no-margin no-padding">
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="col-md-6">
                     <h3>surgiwear</h3>
                     <ul>
                        <li><a href="http://www.surgiwear.co.in/about-us"><em class="fa fa-chevron-right"></em> about us</a></li>
                        <li><a href="http://www.surgiwear.co.in/contacts"><em class="fa fa-chevron-right"></em> contact</a></li>
                        <li><a href="http://www.surgiwear.co.in/help"><em class="fa fa-chevron-right"></em> help</a></li>
                     </ul>
                  </div>
                  <div class="col-md-6">
                     <h3>our policy</h3>
                     <ul>
                        <li><a href="http://www.surgiwear.co.in/privacy-policy-cookie-restriction-mode"><em class="fa fa-chevron-right"></em> privacy policy</a></li>
                        <li><a href="http://www.surgiwear.co.in/return-policy"><em class="fa fa-chevron-right"></em> Return policy</a></li>
                        <li><a href="http://www.surgiwear.co.in/terms-and-conditions"><em class="fa fa-chevron-right"></em> terms &amp; conditions</a></li>
                     </ul>
                  </div>
                  <div class="clearfix"></div>
               </div>
               <div class="we_accept col-md-3 col-sm-3 col-xs-12">
                  <h3>Address</h3>
                  <p style="font-size: medium;">CUREFIT LTD.</p>
                  <p>Head Office &amp; Works Post Box No. 50,</p>
                  <p>Rasoolpur Jahanganj Near Hathoda Crossing, Shahjahanpur - 242001 India</p>
                  <p>Mob:&nbsp;<span>+91 -9409019721</span></p>
                  <p>Email:&nbsp;&nbsp;curifit@gmail.com</p>
                  <div class="clearfix"></div>
               </div>
               <div class="follow_on col-md-3 col-sm-3 col-xs-12 text-right no-padding">
                  <h3>we accept</h3>
                  <ul>
                     <li><img src="http://www.surgiwear.co.in/media/wysiwyg/images/visa.png" alt="visa"></li>
                     <li><img src="http://www.surgiwear.co.in/media/wysiwyg/images/master_card.png" alt="master_card"></li>
                     <li><img src="http://www.surgiwear.co.in/media/wysiwyg/images/american_exp.png" alt="american_exp"></li>
                     <li><img src="http://www.surgiwear.co.in/media/wysiwyg/images/net_banking.png" alt="net_banking"></li>
                     <li><img src="http://www.surgiwear.co.in/media/wysiwyg/images/cash_on_delivery.png" alt="cash_on_delivery" width="52" height="23"></li>
                  </ul>
                  <div class="copyrights col-md-12 col-sm-12 col-xs-12 no-padding">
                     © CUREFIT LTD. All Rights Reserved
                  </div>
                  <div class="site-by col-md-12 col-sm-12 col-xs-12">
                     Site by <a href="http://www.emavens.com"><img src="http://emavens.com/wp-content/uploads/2014/03/logo-30.png" alt="eMavens"></a> 
                  </div>
                  <div class="clearfix"></div>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade" id="login-model" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content login-model-content">
               <div class="modal-header login-model-header">
                  <button type="button" class="close" data-dismiss="modal"></button>
                  <h6 class="modal-title"><i class="fa fa-lock fa-lg"></i>&nbsp;&nbsp;&nbsp;login</h6>
               </div>
               <div class="modal-body login-model-body">
                  <div class="account-login surgiwear-account">
                     <div class="page-title">
                        <h2>Don't have account? <a onclick="window.location='http://www.surgiwear.co.in/customer/account/create/';">register now</a></h2>
                     </div>
                     <form action="http://www.surgiwear.co.in/customer/account/loginPost/" method="post" id="login-form">
                        <input name="form_key" type="hidden" value="Hyk1CUBwB9Mx5UDR">
                        <div class="col-1">
                           <div class="col-1 new-users">
                              <div class="content">
                                 <ul class="form-list">
                                    <li>
                                       <div class="input-box form-group">
                                          <input type="text" name="login[username]" placeholder="Username" value="" id="email" class="input-text required-entry validate-email" title="Email Address">                             
                                       </div>
                                    </li>
                                    <li>
                                       <div class="input-box form-group">
                                          <input type="password" placeholder="Password" name="login[password]" class="input-text required-entry validate-password" id="pass" title="Password">
                                       </div>
                                    </li>
                                 </ul>
                                 <div class="buttons-set">
                                    <a href="http://www.surgiwear.co.in/customer/account/forgotpassword/" class="f-left">Forgot Your Password?</a>
                                    <button type="submit" class="button" title="Login" name="send" id="send2"><span><span>Login</span></span></button>
                                 </div>
                              </div>
                           </div>
                           <div class="col-2 registered-users" style="display:none;">
                              <div class="content">
                              </div>
                           </div>
                        </div>
                     </form>
                     <script type="text/javascript">
                           //<![CDATA[
                           var dataForm = new VarienForm('login-form', true);
                           //]]>
                        </script>
                     </div>
                  </div>
                  <div class="clearfix"></div>
               </div>
            </div>
         </div>
         <div id="load_animate">
            <div class="loadr">
               <div class="lod">
                  <img src="http://www.surgiwear.co.in/skin/frontend/default/surgiwear/images/block-loading.gif" alt="loading image">
               </div>
            </div>
         </div>
         <script type="text/javascript">
            function mycart_update(){
              jQuery("#btn-prod-update").show();
              jQuery("#btn-proceed-checkout").hide();
           };
           jQuery(document).ready(function(){
            jQuery('.login').hover(function () {
              jQuery('#loginlinks').show();
           },
           function () {
            jQuery('#loginlinks').hide();
         });     
         });     
           jQuery(".price").html(function(i, val) {

            return val.replace(/(Rs)/, "<span>$1.</span>");
            
         });

      </script>
   </div>
</div>

<!-- jquery -->
<script type="text/javascript" async="" src="./categoryone_files/ga.js"></script><script src="./categoryone_files/jquery.min.js" type="text/javascript"></script>
<script>jQuery.noConflict();</script>
<script src="./categoryone_files/bootstrap.min.js" type="text/javascript"></script>
<script>jQuery.noConflict();</script>
<!-- awesome font -->

<link href="{{ asset('frontassets/categoryone_files/css') }}" rel="noFollow stylesheet" type="text/css">
<link href="{{ asset('frontassets/categoryone_files/css(1)') }}" rel="noFollow stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="{{ asset('frontassets/categoryone_files/calendar-win2k-1.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontassets/categoryone_files/styles.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('frontassets/categoryone_files/responsive.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('frontassets/categoryone_files/widgets.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('frontassets/categoryone_files/codcheck.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('frontassets/categoryone_files/messi.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('frontassets/categoryone_files/ajaxlogin.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('frontassets/categoryone_files/jquery.fancybox.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('frontassets/categoryone_files/popup.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('frontassets/categoryone_files/base.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('frontassets/categoryone_files/ajaxquickcart.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('frontassets/categoryone_files/files.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('frontassets/categoryone_files/apptrian_subcategories.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('frontassets/categoryone_files/print.css') }}" media="print">

<script type="text/javascript" src="{{ asset('frontassets/categoryone_files/prototype_bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontassets/categoryone_files/ccard.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontassets/categoryone_files/validation.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontassets/categoryone_files/builder.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontassets/categoryone_files/effects.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontassets/categoryone_files/dragdrop.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontassets/categoryone_files/controls.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontassets/categoryone_files/slider.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontassets/categoryone_files/js.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontassets/categoryone_files/form.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontassets/categoryone_files/menu.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontassets/categoryone_files/translate.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontassets/categoryone_files/cookies.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontassets/categoryone_files/respond.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontassets/categoryone_files/html5shiv.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontassets/categoryone_files/jquery-1.9.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontassets/categoryone_files/messi.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontassets/categoryone_files/jquery-1.10.2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontassets/categoryone_files/lightbox.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontassets/categoryone_files/base.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontassets/categoryone_files/ajaxquickcart.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontassets/categoryone_files/product.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontassets/categoryone_files/calendar.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontassets/categoryone_files/calendar-setup.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontassets/categoryone_files/codcheck.js') }}"></script>
</body>
</html>