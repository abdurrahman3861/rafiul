<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">



    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div id="loader">
      <div class="centrize">
        <div class="v-center">
          <div id="mask"><span></span><span></span><span></span><span></span><span></span></div>
        </div>
      </div>
    </div>
    <header id="topnav">
      <div class="container">
        <div class="logo"><a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_light.png" alt="" class="logo-light"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_dark.png" alt="" class="logo-dark"></a></div>
        <div class="menu-extras">
          <div class="menu-item">
            <div class="cart"><a href="#"><i class="ti-bag"></i><span class="cart-number">2</span></a>
              <div class="shopping-cart">
                <div class="shopping-cart-info">
                  <div class="col-xs-6">
                    <div class="row">
                      <h6 class="upper">Your Cart</h6>
                    </div>
                  </div>
                  <div class="col-xs-6 text-right">
                    <div class="row">
                      <h6 class="upper">$399.99</h6>
                    </div>
                  </div>
                </div>
                <ul class="nav product-list">
                  <li>
                    <div class="product-thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/shop/2.jpg" alt=""></div>
                    <div class="product-summary"><a href="#">Premium Suit Blazer</a><span>$199.99</span></div>
                  </li>
                  <li>
                    <div class="product-thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/shop/5.jpg" alt=""></div>
                    <div class="product-summary"><a href="#">Reiss Vara Tailored Blazer</a><span>$199.99</span></div>
                  </li>
                </ul>
                <p><a href="#" class="btn btn-color btn-block btn-sm">Checkout</a></p>
              </div>
            </div>
          </div>
          <div class="menu-item">
            <div class="search"><a href="#"><i class="ti-search"></i></a>
              <div class="search-form">
                <form action="#" class="inline-form">
                  <div class="input-group">
                    <input type="text" placeholder="Search" class="form-control"><span class="input-group-btn">
                      <button type="button" class="btn btn-color"><span><i class="ti-search"></i></span></button></span>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="menu-item"><a class="navbar-toggle">
              <div class="lines"><span></span><span></span><span></span></div></a></div>
        </div>
        <div id="navigation">
          <ul class="navigation-menu">
            <li class="has-submenu"><a href="#">Home</a>
              <ul class="submenu megamenu">
                <li>
                  <ul>
                    <li><span>Multi Page</span></li>
                    <li><a href="index.html">Home Classic</a></li>
                    <li><a href="index-01.html">Video Background</a></li>
                    <li><a href="index-02.html">HTML5 Video BG</a></li>
                    <li><a href="index-03.html">Animated Zoom Slider</a></li>
                    <li><a href="index-04.html">Text Rotator</a></li>
                  </ul>
                </li>
                <li>
                  <ul>
                    <li><span>One Page</span></li>
                    <li><a href="index-op.html">One Page Classic</a></li>
                    <li><a href="index-op-01.html">Video Background</a></li>
                    <li><a href="index-op-02.html">HTML5 Video BG</a></li>
                    <li><a href="index-op-03.html">Animated Zoom Slider</a></li>
                    <li><a href="index-op-04.html">Text Rotator</a></li>
                  </ul>
                </li>
                <li>
                  <ul>
                    <li><span>Home Layouts</span></li>
                    <li><a href="home-restaurant.html">Restaurant</a></li>
                    <li><a href="home-architecture.html">Architecture</a></li>
                    <li><a href="home-photography.html">Photography</a></li>
                    <li><a href="home-landing.html">Landing Page</a></li>
                    <li><a href="home-resume.html">Resume</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="has-submenu"><a href="#">Pages</a>
              <ul class="submenu megamenu">
                <li>
                  <ul>
                    <li><span>Pages</span></li>
                    <li><a href="page-about.html">About Us</a></li>
                    <li><a href="page-about-2.html">About Us 2</a></li>
                    <li><a href="page-services.html">Services</a></li>
                    <li><a href="page-services-2.html">Services 2</a></li>
                    <li><a href="page-contact.html">Contact</a></li>
                    <li><a href="page-contact-2.html">Contact 2</a></li>
                  </ul>
                </li>
                <li>
                  <ul>
                    <li><span>Other Pages</span></li>
                    <li><a href="page-pricing.html">Pricing</a></li>
                    <li><a href="page-careers.html">Careers</a></li>
                    <li><a href="page-login.html">Login / Register</a></li>
                    <li><a href="page-coming-soon.html">Coming Soon</a></li>
                    <li><a href="page-404.html">Error 404</a></li>
                    <li><a href="page-faq.html">Faq</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="has-submenu"><a href="#">Elements</a>
              <ul class="submenu megamenu">
                <li>
                  <ul>
                    <li><span>Elements</span></li>
                    <li><a href="elements-accordions.html"><i class="ti-layout-accordion-merged"></i>Accordions</a></li>
                    <li><a href="elements-alerts.html"><i class="ti-comment-alt"></i>Alerts</a></li>
                    <li><a href="elements-buttons.html"><i class="ti-control-play"></i>Buttons</a></li>
                    <li><a href="elements-countdowns.html"><i class="ti-timer"></i>Countdowns </a></li>
                    <li><a href="elements-features.html"><i class="ti-view-grid"></i>Features Box</a></li>
                    <li><a href="elements-forms.html"><i class="ti-layout-cta-left"></i>Forms</a></li>
                    <li><a href="elements-grid.html"><i class="ti-layout"></i>Grid</a></li>
                  </ul>
                </li>
                <li>
                  <ul>
                    <li><span>Elements</span></li>
                    <li><a href="elements-icons.html"><i class="ti-image"></i>Icons </a></li>
                    <li><a href="elements-media.html"><i class="ti-volume"></i>Media Elements               </a></li>
                    <li><a href="elements-titles.html"><i class="ti-uppercase"></i>Page Titles</a></li>
                    <li><a href="elements-bars.html"><i class="ti-align-left"></i>Progress Bars</a></li>
                    <li><a href="elements-sliders.html"><i class="ti-layout-slider"></i>Sliders & Galleries</a></li>
                    <li><a href="elements-tabs.html"><i class="ti-layout-tab-window"></i>Tabs</a></li>
                    <li><a href="elements-typography.html"><i class="ti-paragraph"></i>Typography</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="has-submenu"><a href="#">Portfolio</a>
              <ul class="submenu">
                <li class="has-submenu"><a href="#">Boxed</a>
                  <ul class="submenu">
                    <li><a href="portfolio-boxed-2col.html">2 Columns</a></li>
                    <li><a href="portfolio-boxed-3col.html">3 Columns                </a></li>
                  </ul>
                </li>
                <li class="has-submenu"><a href="#">Wide</a>
                  <ul class="submenu">
                    <li><a href="portfolio-wide-2col.html">2 Columns</a></li>
                    <li><a href="portfolio-wide-3col.html">3 Columns                </a></li>
                  </ul>
                </li>
                <li class="has-submenu"><a href="#">Single</a>
                  <ul class="submenu">
                    <li><a href="portfolio-single-1.html">Single Work 1</a></li>
                    <li><a href="portfolio-single-2.html">Single Work 2</a></li>
                    <li><a href="portfolio-single-3.html">Single Work 3</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="has-submenu"><a href="#">Blog</a>
              <ul class="submenu">
                <li><a href="blog-fixed-image.html">Fixed Image</a></li>
                <li class="has-submenu"><a href="#">Classic</a>
                  <ul class="submenu">
                    <li><a href="blog.html">No Sidebar</a></li>
                    <li><a href="blog-sidebar.html">Right Sidebar</a></li>
                    <li><a href="blog-sidebar-left.html">Left Sidebar</a></li>
                  </ul>
                </li>
                <li class="has-submenu"><a href="#">Masonry</a>
                  <ul class="submenu">
                    <li><a href="blog-masonry.html">No Sidebar</a></li>
                    <li><a href="blog-masonry-sidebar.html">Right Sidebar</a></li>
                    <li><a href="blog-masonry-sidebar-left.html">Left Sidebar</a></li>
                  </ul>
                </li>
                <li class="has-submenu"><a href="#">Single Post</a>
                  <ul class="submenu">
                    <li><a href="blog-single.html">No Sidebar</a></li>
                    <li><a href="blog-single-sidebar.html">Right Sidebar</a></li>
                    <li><a href="blog-single-sidebar-left.html">Left Sidebar</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="has-submenu"><a href="#">Shop</a>
              <ul class="submenu">
                <li class="has-submenu"><a href="#">Shop Layout</a>
                  <ul class="submenu">
                    <li><a href="shop-2col.html">2 Columns</a></li>
                    <li><a href="shop-3col.html">3 Columns</a></li>
                    <li><a href="shop-4col.html">4 Columns</a></li>
                  </ul>
                </li>
                <li><a href="shop-single.html">Single Product</a></li>
                <li><a href="shop-cart.html">Cart</a></li>
                <li><a href="shop-checkout.html">Checkout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </header>
    <section class="page-title parallax">
      <div data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/images/bg/18.jpg" class="parallax-bg"></div>
      <div class="parallax-overlay">
        <div class="centrize">
          <div class="v-center">
            <div class="container">
              <div class="title center">
                <h1 class="upper">This is our blog<span class="red-dot"></span></h1>
                <h4>We have a few tips for you.</h4>
                <hr>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="col-md-8">
          <div class="blog-posts">
            <article class="post-single">
              <div class="post-info">
                <h2><a href="#">Checklists for Startups</a></h2>
                <h6 class="upper"><span>By</span><a href="#"> Admin</a><span class="dot"></span><span>28 September 2015</span><span class="dot"></span><a href="#" class="post-tag">Startups</a></h6>
              </div>
              <div class="post-media">
                <div data-options="{&quot;animation&quot;: &quot;slide&quot;, &quot;controlNav&quot;: true" class="flexslider nav-outside">
                  <ul class="slides">
                    <li><img src="<?php echo get_template_directory_uri(); ?>/images/blog/1.jpg" alt=""></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/images/blog/2.jpg" alt=""></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/images/blog/3.jpg" alt=""></li>
                  </ul>
                </div>
              </div>
              <div class="post-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae ut ratione similique temporibus tempora dicta soluta? Qui hic, voluptatem nemo quo corporis dignissimos voluptatum debitis cumque fugiat mollitia quasi quod. Repudiandae possimus quas odio nisi optio asperiores, vitae error laudantium, ratione odit ipsa obcaecati debitis deleniti minus, illo maiores placeat omnis magnam.</p>
                <p><a href="#" class="btn btn-color btn-sm">Read More</a></p>
              </div>
            </article>
            <article class="post-single">
              <div class="post-info">
                <h2><a href="#">Never Tell People What You Do</a></h2>
                <h6 class="upper"><span>By</span><a href="#"> Admin</a><span class="dot"></span><span>28 September 2015</span><span class="dot"></span><a href="#" class="post-tag">Entrepreneurship</a></h6>
              </div>
              <div class="post-media">
                <div class="media-video">
                  <iframe src="https://www.youtube.com/embed/rrT6v5sOwJg" frameborder="0"></iframe>
                </div>
              </div>
              <div class="post-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae ut ratione similique temporibus tempora dicta soluta? Qui hic, voluptatem nemo quo corporis dignissimos voluptatum debitis cumque fugiat mollitia quasi quod. Repudiandae possimus quas odio nisi optio asperiores, vitae error laudantium, ratione odit ipsa obcaecati debitis deleniti minus, illo maiores placeat omnis magnam.</p>
                <p><a href="#" class="btn btn-color btn-sm">Read More</a></p>
              </div>
            </article>
            <article class="post-single">
              <div class="post-info">
                <h2><a href="#">Give It Five Minutes</a></h2>
                <h6 class="upper"><span>By</span><a href="#"> Admin</a><span class="dot"></span><span>28 September 2015</span><span class="dot"></span><a href="#" class="post-tag">Startups</a></h6>
              </div>
              <div class="post-body">
                <blockquote class="italic">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et quam neque facilis similique laborum, nihil id ratione, error illum. Porro quas maxime accusamus numquam consequatur consequuntur eveniet quis, fuga repellendus.</p>
                </blockquote>
              </div>
            </article>
            <article class="post-single">
              <div class="post-info">
                <h2><a href="#">Uber Launches in Las Vegas</a></h2>
                <h6 class="upper"><span>By</span><a href="#"> Admin</a><span class="dot"></span><span>28 September 2015</span><span class="dot"></span><a href="#" class="post-tag">Startups</a></h6>
              </div>
              <div class="post-media"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/blog/4.jpg" alt=""></a></div>
              <div class="post-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae ut ratione similique temporibus tempora dicta soluta? Qui hic, voluptatem nemo quo corporis dignissimos voluptatum debitis cumque fugiat mollitia quasi quod. Repudiandae possimus quas odio nisi optio asperiores, vitae error laudantium, ratione odit ipsa obcaecati debitis deleniti minus, illo maiores placeat omnis magnam.</p>
                <p><a href="#" class="btn btn-color btn-sm">Read More</a></p>
              </div>
            </article>



            <?php while( have_posts() ) : the_post(); ?>

              <?php get_template_part('formats/content', get_post_format()); ?>

            <?php endwhile; ?>
            

            <!-- <article class="post-single">
              <div class="post-info">
                <h2><a href="#">Fun With Product Hunt</a></h2>
                <h6 class="upper"><span>By</span><a href="#"> Admin</a><span class="dot"></span><span>28 September 2015</span><span class="dot"></span><a href="#" class="post-tag">Tech</a></h6>
              </div>
              <div class="post-media">
                <div class="media-audio">
                  <iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/51057943&amp;amp;color=ff5500&amp;amp;auto_play=false&amp;amp;hide_related=false&amp;amp;show_comments=true&amp;amp;show_user=true&amp;amp;show_reposts=false" frameborder="0"></iframe>
                </div>
              </div>
              <div class="post-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae ut ratione similique temporibus tempora dicta soluta? Qui hic, voluptatem nemo quo corporis dignissimos voluptatum debitis cumque fugiat mollitia quasi quod. Repudiandae possimus quas odio nisi optio asperiores, vitae error laudantium, ratione odit ipsa obcaecati debitis deleniti minus, illo maiores placeat omnis magnam.</p>
                <p><a href="#" class="btn btn-color btn-sm">Read More</a></p>
              </div>
            </article>
 -->






          </div>
          <ul class="pagination">
            <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="ti-arrow-left"></i></span></a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="ti-arrow-right"></i></span></a></li>
          </ul>
        </div>
        <div class="col-md-3 col-md-offset-1">
          <div class="sidebar hidden-sm hidden-xs">
            <div class="widget">
              <h6 class="upper">Search blog</h6>
              <form>
                <input type="text" placeholder="Search.." class="form-control">
              </form>
            </div>
            <div class="widget">
              <h6 class="upper">Categories</h6>
              <ul class="nav">
                <li><a href="#">Fashion</a></li>
                <li><a href="#">Tech</a></li>
                <li><a href="#">Gaming</a></li>
                <li><a href="#">Food</a></li>
                <li><a href="#">Lifestyle</a></li>
                <li><a href="#">Money</a></li>
              </ul>
            </div>
            <div class="widget">
              <h6 class="upper">Popular Tags</h6>
              <div class="tags clearfix"><a href="#">Design</a><a href="#">Fashion</a><a href="#">Startups</a><a href="#">Tech</a><a href="#">Web</a><a href="#">Lifestyle</a></div>
            </div>
            <div class="widget">
              <h6 class="upper">Latest Posts</h6>
              <ul class="nav">
                <li><a href="#">Checklists for Startups<i class="ti-arrow-right"></i><span>30 Sep, 2015</span></a></li>
                <li><a href="#">The Death of Thought<i class="ti-arrow-right"></i><span>29 Sep, 2015</span></a></li>
                <li><a href="#">Give it five minutes<i class="ti-arrow-right"></i><span>24 Sep, 2015</span></a></li>
                <li><a href="#">Uber launches in Las Vegas<i class="ti-arrow-right"></i><span>20 Sep, 2015</span></a></li>
                <li><a href="#">Fun with Product Hunt<i class="ti-arrow-right"></i><span>16 Sep, 2015</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer id="footer-widgets">
      <div class="container">
        <div class="go-top"><a href="#top"><i class="ti-arrow-up"></i></a></div>
        <div class="col-md-6 ov-h">
          <div class="col-sm-4">
            <div class="widget">
              <h6 class="upper">About Comet</h6>
              <p><span>Fourth Floor</span><span>New York, NY 10011</span><span>hello@comet.com</span></p><a href="#" class="btn btn-color-out btn-sm">Hire Us!</a>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="widget">
              <h6 class="upper">Culture</h6>
              <ul class="list-unstyled">
                <li><a href="#">Team</a></li>
                <li><a href="#">Process</a></li>
                <li><a href="#">Story</a></li>
                <li><a href="#">Careers</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="widget">
              <h6 class="upper">Case Studies</h6>
              <ul class="list-unstyled">
                <li><a href="portfolio-single-1.html">Neleman Cava                </a></li>
                <li><a href="portfolio-single-2.html">Sweet Lane                </a></li>
                <li><a href="portfolio-single-3.html">Jeff Burger                </a></li>
                <li><a href="portfolio-single-1.html">Juice Meds                </a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-md-offset-2">
          <div class="col-md-12">
            <div class="widget">
              <h6 class="upper">Stay in touch</h6>
              <p>Sign Up to get the latest updates.</p>
              <div class="footer-newsletter">
                <div class="inline-form">
                  <div class="input-group">
                    <input type="text" placeholder="Your Email" class="form-control"><span class="input-group-btn">
                      <button type="button" class="btn btn-color">Subscribe</button></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <footer id="footer">
      <div class="container">
        <div class="footer-wrap">
          <div class="col-md-4">
            <div class="copy-text">
              <p><i class="icon-heart red mr-15"></i>© 2015 Comet Agency.</p>
            </div>
          </div>
          <div class="col-md-4">
            <ul class="list-inline">
              <li><a href="#">About</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <div class="footer-social">
              <ul>
                <li><a target="_blank" href="#"><i class="ti-facebook"></i></a></li>
                <li><a target="_blank" href="#"><i class="ti-twitter-alt"></i></a></li>
                <li><a target="_blank" href="#"><i class="ti-linkedin"></i></a></li>
                <li><a target="_blank" href="#"><i class="ti-instagram"></i></a></li>
                <li><a target="_blank" href="#"><i class="ti-dribbble"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <?php wp_footer(); ?>
  </body>


</html>