<?php
    session_start();

    if (empty($_SESSION['username'])) {
    $_SESSION['userAccount'] = "hideAccount";
    $_SESSION['signBtn'] = "displaySign";
    $_SESSION['logBtn'] = "hideLogout";
    
    unset($_SESSION['role']);
}
?>


<!DOCTYPE html>
<html lang="en">

<?php
  $page_title = "| Property";
  include('./templates/header.php');
 ?>


<body>
  <div id="main">
    
    <?php 
      $home_active = "active";
      $home_activeBtn = "";
      $home_style = "black";

      $properties_active = "active";
      $properties_activeBtn = "";
      $properties_style = "black";

      $agents_active = "active";
      $agents_activeBtn = "";
      $agents_style = "black";

      $about_active = "active";
      $about_activeBtn = "";
      $about_style = "black";

      $contact_active = "active";
      $contact_activeBtn = "";
      $contact_style = "black";

      include('./templates/navbar.php');
    ?>

    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col col-md-12 col-lg-12 col-xl-10">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Property</a></li>
            <li class="breadcrumb-item active" aria-current="page">2 bed semi-detached bungalow</li>
          </ol>
          <div class="page-header bordered mb0">
            <div class="row">
              <div class="col-md-8"> <a href="javascript:history.go(-1);" class="btn-return" title="Back"><i class="fa fa-angle-left"></i></a>
                <h1>2 bed semi-detached bungalow <span class="label label-bordered">For sale</span> <small><i
                      class="fa fa-map-marker"></i> Kirkstone Road, Middlesbrough TS3</small></h1>
              </div>
              <div class="col-md-4">
                <div class="price">&#8358;000,000,000 <small>&#8358;0000/sq ft</small></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="content" class="item-single">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col col-md-12 col-lg-12 col-xl-10">
            <div class="row row justify-content-md-center has-sidebar">
              <div class="col-md-7 col-lg-8">
                <div>
                  <div class="item-gallery">
                    <div class="swiper-container gallery-top" data-pswp-uid="1">
                      <div class="swiper-wrapper lazyload">

                        <div class="swiper-slide">
                          <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject"> <a
                              href="img/demo/property/1.jpg" itemprop="contentUrl" data-size="2000x1414"> <img
                                src="img/demo/property/1.jpg" class="img-fluid swiper-lazy" alt="Drawing Room"> </a>
                          </figure>
                        </div>
                        <div class="swiper-slide">
                          <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject"> <a
                              href="img/demo/property/2.jpg" itemprop="contentUrl" data-size="2000x1414"> <img
                                data-src="img/demo/property/2.jpg" src="img/spacer.png" class="img-fluid swiper-lazy"
                                alt="Drawing Room"> </a> </figure>
                        </div>
                        <div class="swiper-slide">
                          <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject"> <a
                              href="img/demo/property/3.jpg" itemprop="contentUrl" data-size="2000x1414"> <img
                                data-src="img/demo/property/3.jpg" src="img/spacer.png" class="img-fluid swiper-lazy"
                                alt="Drawing Room"> </a> </figure>
                        </div>
                        <div class="swiper-slide">
                          <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject"> <a
                              href="img/demo/property/4.jpg" itemprop="contentUrl" data-size="2000x1414"> <img
                                data-src="img/demo/property/4.jpg" src="img/spacer.png" class="img-fluid swiper-lazy"
                                alt="Drawing Room"> </a> </figure>
                        </div>
                        <div class="swiper-slide">
                          <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject"> <a
                              href="img/demo/property/5.jpg" itemprop="contentUrl" data-size="2000x1414"> <img
                                data-src="img/demo/property/5.jpg" src="img/spacer.png" class="img-fluid swiper-lazy"
                                alt="Drawing Room"> </a> </figure>
                        </div>

                      </div>
                      <div class="swiper-button-next"></div>
                      <div class="swiper-button-prev"></div>
                    </div>
                    <div class="swiper-container gallery-thumbs">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="img/demo/property/thumb/1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="img/demo/property/thumb/2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="img/demo/property/thumb/3.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="img/demo/property/thumb/4.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="img/demo/property/thumb/5.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="img/demo/property/thumb/6.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="img/demo/property/thumb/7.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="img/demo/property/thumb/8.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="img/demo/property/thumb/9.jpg" class="img-fluid" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="item-description">
                      <h3 class="headline">Property description</h3>
                      <p><strong>Hall</strong> <strong>entrance</strong> UPVC double glazed door to the front, laminate
                        flooring, storage cupboard, loft access and under floor heating.</p>
                      <p><strong>Lounge/diner/kitchen</strong> <strong>24' 6" x 16' 0" (7.47m x 4.88m)</strong> Spacious
                        L shape open plan living, UPVC double glazed window and bi-folding doors to the rear, laminate
                        flooring, television and telephone connection points, power sockets and under floor heating.</p>
                      <p>Fitted kitchen with wall and base cupboards, integrated Bosch electric hob and oven, cooker
                        hood, lamona inset sink and drainer, mosaic style splash back tiling, integrated Bosch washing
                        machine and dishwasher, integrated Bosch fridge freezer and power sockets.</p>
                      <p><strong>Bedroom</strong> <strong>one</strong> <strong>10' 08" x 10' 04" (3.25m x
                          3.15m)</strong> UPVC double glazed window to the front, television connection point, power
                        sockets and under floor heating.</p>
                      <p><strong>Bedroom</strong> <strong>two</strong> <strong>9' 05" x 9' 0" (2.87m x
                          2.74m)</strong> UPVC double glazed window to the front, television connection point, power
                        sockets and under floor heating.</p>
                      <p><strong>Bathroom</strong> <strong>8' 08" x 6' 08" (2.64m x 2.03m)</strong> UPVC double glazed
                        window to the side, tiled flooring, L shaped bath with fitted shower over head, wash hand basin,
                        WC, extractor fan, tiled surrounds and under floor heating.</p>
                      <p><strong>Outside</strong> <strong>areas</strong> Front - large driveway with space for multiple
                        vehicles.</p>
                      <p>Rear - Large fully enclosed garden laid to lawn with patio around the property and side access.
                      </p>
                    </div>
                                      
                    <div class="item-navigation">
                      <ul class="nav nav-tabs v2" role="tablist">
                        <li role="presentation"><a href="#map" aria-controls="map" role="tab" data-toggle="tab"
                            class="active"><i class="fa fa-map"></i> <span class="hidden-xs">Map &amp; nearby</span></a>
                        </li>
                        <li role="presentation"><a href="#streetview" aria-controls="streetview" role="tab"
                            data-toggle="tab"><i class="fa fa-road"></i> <span class="hidden-xs">Street View</span></a>
                        </li>
                      </ul>
                      <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="map">
                          <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1215.7401235613713!2d1.4497354260471211!3d52.45232942952154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d9f169c5a088db%3A0x75a6abde48cc5adc!2sKents+Ln%2C+Bungay+NR35+1JF%2C+UK!5e0!3m2!1sen!2sin!4v1489862715790"
                            width="600" height="450" style="border:0;" allowfullscreen></iframe>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="streetview">
                          <iframe
                            src="https://www.google.com/maps/embed?pb=!1m0!3m2!1sen!2s!4v1489861898447!6m8!1m7!1sGz9bS-GXSJE28jHD19m7KQ!2m2!1d52.45191646727986!2d1.451480542718656!3f0!4f0!5f0.8160813932612223"
                            width="600" height="450" style="border:0" allowfullscreen></iframe>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-5 col-lg-4">
                <div id="sidebar" class="sidebar-right">
                  <div class="sidebar_inner">
                    <div id="feature-list" role="tablist">
                      <div class="card">
                        <div class="card-header" role="tab" id="headingOne">
                          <h4 class="panel-title"> <a role="button" data-toggle="collapse" href="#specification"
                              aria-expanded="true" aria-controls="specification"> Specifications <i
                                class="fa fa-caret-down float-right"></i> </a> </h4>
                        </div>
                        <div id="specification" class="panel-collapse collapse show" role="tabpanel">
                          <div class="card-body">
                            <table class="table v1">
                              <tr>
                                <td>Bedrooms</td>
                                <td>3</td>
                              </tr>
                              <tr>
                                <td>Bathrooms</td>
                                <td>2</td>
                              </tr>
                              <tr>
                                <td>Covered area</td>
                                <td>4590 sqft</td>
                              </tr>
                              <tr>
                                <td>Total Area</td>
                                <td>5600 sqft</td>
                              </tr>
                              <tr>
                                <td>Floor</td>
                                <td>Ground Floor</td>
                              </tr>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card shadow">
                      <h5 class="subheadline mt-0  mb-0">For Sale by Agent</h5>
                      <div class="media">
                        <div class="media-left"> <a href="<?php echo $url ;?>agent.php"> <img class="media-object rounded-circle"
                              src="img/demo/profile.jpg" width="64" height="64" alt=""> </a> </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="<?php echo $url ;?>agent.php">John Doe</a></h4>
                          <p><a href="tel:01502392905"><i class="fa fa-phone" aria-hidden="true"></i> Call: 01502
                              392905</a></p>
                          <p><a href="<?php echo $url ;?>agent.php" class="btn btn-sm btn-light">View Profile</a></p>
                        </div>
                      </div>
                      <a href="#" class="btn btn-lg btn-primary btn-block" data-toggle="modal"
                        data-target="#leadform">Request Details</a>
                    </div>
                    <div class="btn-group btn-group-justified" role="group"> <a href="#" class="btn btn-light"
                        data-toggle="tooltip" title="Save to favorites"><i class="fa fa-star"
                          aria-hidden="true"></i></a> <a href="#" class="btn btn-light" data-toggle="tooltip"
                        title="Print this page"><i class="fa fa-print" aria-hidden="true"></i></a> <a href="#"
                        class="btn btn-light" data-toggle="modal" data-target="#email-to-friend"><span
                          data-toggle="tooltip" title="Email to Friend"><i class="fa fa-envelope-o"
                            aria-hidden="true"></i></span></a> <a href="#" class="btn btn-light" data-toggle="modal"
                        data-target="#report-listing"><span data-toggle="tooltip" title="Report Listing"><i
                            class="fa fa-exclamation-circle" aria-hidden="true"></i></span></a> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Lead Form Modal -->
    <div class="modal fade  item-badge-rightm" id="leadform" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div class="media">
              <div class="media-left"><img src="img/demo/property/thumb/1.jpg" width="60" class="img-rounded mt5"
                  alt=""></div>
              <div class="media-body">
                <h4 class="media-heading">Request details for 2 bed semi-detached bungalow for sale</h4>
                Kents Lane, Bungay NR35
              </div>
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label>Your Name</label>
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <label>Your Email</label>
                <input type="email" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <label>Your Telephone</label>
                <input type="tel" class="form-control" placeholder="Your Telephone">
              </div>
              <div class="form-group">
                <label>Message</label>
                <textarea rows="4" class="form-control"
                  placeholder="Please include any useful details, i.e. current status, availability for viewings, etc."></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Request Details</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Email to friend Modal -->
    <div class="modal fade item-badge-rightm" id="email-to-friend" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div class="media">
              <div class="media-left"> <img src="img/demo/property/thumb/1.jpg" width="60" class="img-rounded mt5"
                  alt=""> </div>
              <div class="media-body">
                <h4 class="media-heading">Email friend about 2 bed semi-detached bungalow for sale</h4>
                Kents Lane, Bungay NR35
              </div>
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label>Your Name</label>
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <label>Your Email</label>
                <input type="email" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <label>Friends Email</label>
                <input type="email" class="form-control" placeholder="Friends Email">
              </div>
              <div class="form-group">
                <label>Message</label>
                <textarea rows="4" class="form-control"
                  placeholder="">I thought you might want to take a look at this property for sale.</textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Send Email</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Report Listing Modal -->
    <div class="modal fade item-badge-rightm" id="report-listing" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div class="media">
              <div class="media-left"> <i class="fa fa-3x fa-exclamation-circle" aria-hidden="true"></i> </div>
              <div class="media-body">
                <h4 class="media-heading">Report Listing for 2 bed semi-detached bungalow for sale</h4>
                Kents Lane, Bungay NR35
              </div>
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label>Contact Name</label>
                <input type="text" class="form-control" placeholder="Contact Name">
              </div>
              <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control" placeholder="Email Address">
              </div>
              <div class="form-group">
                <label>Nature of report</label>
                <select class="form-control">
                  <option value="">Please Select</option>
                  <option value="no_longer_available">Property is no longer available</option>
                  <option value="incorrect_price">Price listed is incorrect</option>
                  <option value="incorrect_last_sold_price">Last sold price incorrect</option>
                  <option value="incorrect_description">Property description is inaccurate</option>
                  <option value="incorrect_location">Property location is incorrect</option>
                  <option value="incorrect_content">Problem with photos, floorplans, etc.</option>
                  <option value="inappropriate_video">Problem with the video</option>
                  <option value="agent_not_contactable">Agent is not contactable</option>
                  <option value="incorrect_running_costs">Running costs is displaying inaccurate values</option>
                  <option value="other">Other (please specify)</option>
                </select>
              </div>
              <div class="form-group">
                <label>Description of content issue </label>
                <textarea rows="4" class="form-control"
                  placeholder="Please provide as much information as possible..."></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Report Error</button>
          </div>
        </div>
      </div>
    </div>

    <button class="btn btn-primary btn-circle" id="to-top"><i class="fa fa-angle-up"></i></button>
    

    <?php include('./templates/footer.php'); ?>
  </div>
  <!-- Root element of PhotoSwipe. Must have class pswp. -->
  <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe. 
         It's a separate element, as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

      <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
      <!-- don't modify these 3 pswp__item elements, data is added later on. -->
      <div class="pswp__container">
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
      </div>

      <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
      <div class="pswp__ui pswp__ui--hidden">

        <div class="pswp__top-bar">

          <!--  Controls are self-explanatory. Order can be changed. -->

          <div class="pswp__counter"></div>

          <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

          <button class="pswp__button pswp__button--share" title="Share"></button>

          <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

          <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

          <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
          <!-- element will get class pswp__preloader--active when preloader is running -->
          <div class="pswp__preloader">
            <div class="pswp__preloader__icn">
              <div class="pswp__preloader__cut">
                <div class="pswp__preloader__donut"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
          <div class="pswp__share-tooltip"></div>
        </div>

        <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
        </button>

        <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
        </button>

        <div class="pswp__caption">
          <div class="pswp__caption__center"></div>
        </div>

      </div>

    </div>

  </div>
  <script type="text/javascript">
    // Photoswipe

    var initPhotoSwipeFromDOM = function (gallerySelector) {
      var parseThumbnailElements = function (el) {
        console.log(el);
        var thumbElements = $(el).closest(main_gallery).find('figure'),
          numNodes = thumbElements.length,
          items = [],
          figureEl,
          linkEl,
          size,
          item;

        for (var i = 0; i < numNodes; i++) {

          figureEl = thumbElements[i]; // <figure> element

          // include only element nodes 
          if (figureEl.nodeType !== 1) {
            continue;
          }

          linkEl = figureEl.children[0]; // <a> element

          size = linkEl.getAttribute('data-size').split('x');

          // create slide object
          item = {
            src: linkEl.getAttribute('href'),
            w: parseInt(size[0], 10),
            h: parseInt(size[1], 10)
          };



          if (figureEl.children.length > 1) {
            // <figcaption> content
            item.title = figureEl.children[1].innerHTML;
          }

          if (linkEl.children.length > 0) {
            // <img> thumbnail element, retrieving thumbnail url
            item.msrc = linkEl.children[0].getAttribute('src');
          }

          item.el = figureEl; // save link to element for getThumbBoundsFn
          items.push(item);
        }

        return items;
      };

      // find nearest parent element
      var closest = function closest(el, fn) {
        return el && (fn(el) ? el : closest(el.parentNode, fn));
      };

      // triggers when user clicks on thumbnail
      var onThumbnailsClick = function (e) {
        e = e || window.event;
        e.preventDefault ? e.preventDefault() : e.returnValue = false;

        var eTarget = e.target || e.srcElement;

        // find root element of slide
        var clickedListItem = closest(eTarget, function (el) {
          return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
        });

        if (!clickedListItem) {
          return;
        }
        var clickedGallery = clickedListItem.parentNode,
          childNodes = $(clickedListItem).closest(main_gallery).find('figure'),
          numChildNodes = childNodes.length,
          nodeIndex = 0,
          index;

        for (var i = 0; i < numChildNodes; i++) {
          if (childNodes[i].nodeType !== 1) {
            continue;
          }

          if (childNodes[i] === clickedListItem) {
            index = nodeIndex;
            break;
          }
          nodeIndex++;
        }
        if (index >= 0) {
          // open PhotoSwipe if valid index found
          openPhotoSwipe(index, clickedGallery);
        }
        return false;
      };

      var openPhotoSwipe = function (index, galleryElement, disableAnimation) {
        var pswpElement = document.querySelectorAll('.pswp')[0],
          gallery,
          options,
          items;

        items = parseThumbnailElements(galleryElement);

        // define options (if needed)
        options = {
          history: false,
          bgOpacity: 0.8,
          loop: false,
          barsSize: {
            top: 0,
            bottom: 'auto'
          },

          // define gallery index (for URL)
          galleryUID: $(galleryElement).closest(main_gallery).attr('data-pswp-uid'),

          getThumbBoundsFn: function (index) {
            // See Options -> getThumbBoundsFn section of documentation for more info
            var thumbnail = document.querySelectorAll(main_gallery + ' img')[index],
              //var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
              pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
              rect = thumbnail.getBoundingClientRect();

            return {
              x: rect.left,
              y: rect.top + pageYScroll,
              w: rect.width
            };
          }

        };

        options.index = parseInt(index, 10);

        // exit if index not found
        if (isNaN(options.index)) {
          return;
        }

        if (disableAnimation) {
          options.showAnimationDuration = 0;
        }

        // Pass data to PhotoSwipe and initialize it
        gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
        gallery.init();
        gallery.shout('helloWorld', 'John' /* you may pass more arguments */);



        var totalItems = gallery.options.getNumItemsFn();

        function syncPhotoSwipeWithOwl() {
          var currentIndex = gallery.getCurrentIndex();
          galleryTop.slideTo(currentIndex);
          if (currentIndex == (totalItems - 1)) {
            $('.pswp__button--arrow--right').attr('disabled', 'disabled').addClass('disabled');
          } else {
            $('.pswp__button--arrow--right').removeAttr('disabled');
          }
          if (currentIndex == 0) {
            $('.pswp__button--arrow--left').attr('disabled', 'disabled').addClass('disabled');
          } else {
            $('.pswp__button--arrow--left').removeAttr('disabled');
          }
        };
        gallery.listen('afterChange', function () {
          syncPhotoSwipeWithOwl();
        });
        syncPhotoSwipeWithOwl();
      };

      // loop through all gallery elements and bind events
      var galleryElements = document.querySelectorAll(gallerySelector);

      for (var i = 0, l = galleryElements.length; i < l; i++) {
        galleryElements[i].setAttribute('data-pswp-uid', i + 1);
        galleryElements[i].onclick = onThumbnailsClick;
      }
    };
    var main_gallery = '.gallery-top';
    var galleryTop = new Swiper(main_gallery, {
      spaceBetween: 10,
      lazy: {
        loadPrevNext: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      }
      , on: {
        init: function () {
          initPhotoSwipeFromDOM(main_gallery);
        },
      }
    });
    var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 10,
      centeredSlides: true,
      slidesPerView: 5,
      touchRatio: 0.2,
      slideToClickedSlide: true,
    });
    galleryTop.controller.control = galleryThumbs;
    galleryThumbs.controller.control = galleryTop;
  </script>
</body>

</html>