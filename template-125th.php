<?php
/**
 * Template Name: Riis Settlement 125th Anniversary Single Column
 *
 * Custom template for 125th Anniversary pages: single column, minimal
 *
 * "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 */

get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
  <div id="main" class="one-column template-125" role="main">
    <!-- 
          splash header marquee w/ overlay 
          +++++++++++++++++++++++++++++++++++ -->
          <div class="content-box marquee-125th">
            <div class="overlay"></div>
            <!-- splash image -->
            <div class="splash-image">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/riis-album-three.jpg">
            </div>
            <!-- splash message -->
            <div class="type-layer deco-serif">
              <span class="years-span hairline-through"><b class="years">1888 &ndash; 2014</b></span>
              <h2 class="h-splash">
                125th Anniversary
                <span class="subtitle">Jacob A. Riis Neighborhood Settlement</span>
              </h2>
              <span class="tagline hairline-through quoted"><em class="tagline-text">A Place to Grow</em></span>    
            </div>  
          </div>
        <!-- 
          overview content area
          +++++++++++++++++++++++++++++++++++ -->
          <div class="content-box overview">
            <!-- overview content here -->
            <h1 class="h-section-main h-125 text-block">Celebrating 125 Years of <span class="emphatic blue text-unit">Community Building</span></h1>
            <div class="ribbon">
              <span class="ribbon-text">Celebrate with Us!</span>
            </div>
            <p class="text-block has-logo-marker louder">
              Join us as we celebrate Jacob A. Riis Neighborhood Settlement&rsquo;s first 125 years of service to the underserved communities of Western Queens, and set the tone for the coming 125 years.  Honoring our former Executive Director <strong>William T. Newlin</strong>, State Assemblywoman <strong>Catherine Nolan</strong> and <strong>Christine Sherwood</strong>, Managing Director, Citi Cards.    
            </p>
          </div>  
        </div>  

      <!-- 
          section nav
          +++++++++++++++++++++++++++++++++++ -->
          <div class="section-nav-block">
            <ul class="section-nav clearfix">
              <li class="section-nav-item our-story">
                <a class="nav-button our-story" href="#our-story">Read Our Story</a>
              </li>
              <li class="section-nav-item attend-event">
                <a class="nav-button attend-event" href="#attend-event">Attend an Event</a>
              </li>
              <li class="section-nav-item get-involved">
                <a class="nav-button get-involved" href="#get-involved">Get Involved</a>
              </li>
            </ul>
          </div>    

    <!-- 
          Our Story
          +++++++++++++++++++++++++++++++++++ -->  
          <div id="our-story" class="content-box">
            <h2 class="h-section text-block">Our Story</h2>
            <p class="text-block louder">
              One of the most influential journalists and social reformers of the late 19th and early 20th centuries, Jacob A. Riis emigrated to New York City from Denmark in 1870 at the age of 21.  After working several menial jobs, Riis became a police reporter in 1877 for the New York Tribune, before joining the New York Evening Sun in 1888. While working as a police reporter Riis often wrote stories of the New York City slums, and learned about the immigrant neighborhoods that would later become the basis of his calls for social reform. Riis was among the first photographers to use flash powder, which enabled him to photograph interiors and exteriors of the slums at night.
            </p>
            <!-- riis portrait -->
            <div class="image-block">
              <div class="image-frame pull-left">
                <img class="image-inline" src="<?php echo get_stylesheet_directory_uri(); ?>/images/riis-portrait.jpg" alt="our founder, jacob a. riis">
                <p class="image-caption">
                  Jacob A. Riis, founder of the Riis Neighborhood Settlement emigrated from Denmark in 1870.
                </p>
              </div>
            </div>
            <p class="text-block">In 1890, Riis published his groundbreaking work, &ldquo;How the Other Half Lives.&rdquo; The book used revealing photojournalism and detailed analysis of the housing problems afflicting poor immigrants to argue in favor of reforming New York&rsquo;s tenements.  This book launched Riis on a career of social reform. He spent the rest of his life raising awareness about the grim realities facing poor immigrants inside New York City&rsquo;s slums. Riis&rsquo;s work brought him to the attention of Theodore Roosevelt, who served as president of the New York Board of Police Commissioners from 1895 to 1897. Roosevelt and Riis soon became friends, and Roosevelt ofen went with Riis on some of his late night adventures into the New York slums to investigate living conditions.  Riis believed that individuals, regardless of their economic status, should be given a chance to improve their lives. Given that chance, he believed many could rise out of poverty and into the ranks of the middle class.</p>

            <p class="text-block">Reformers like Riis believed that poverty was the result of social and economic conditions, not moral weakness, and that reform efforts could help the poor.</p>

            <p class="text-block">Strongly influenced by the work of settlement house pioneers in New York, Riis collaborated with the King&rsquo;s Daughters, an organization of Episcopalian church women, to establish the King&rsquo;s Daughters Settlement House in 1888. Originally housed on 48 Henry Street in the Lower East Side, the settlement house offered sewing classes, mothers clubs, health care, summer camp and a penny provident bank. In 1901, the organization was renamed Jacob A. Riis Neighborhood Settlement (aka Riis Settlement) in honor of its founder and broadened the scope of activities to include athletics, citizenship classes, and drama.</p>

            <p class="text-block">In 1950, Riis Settlement answered the city government&rsquo;s call to serve residents of public housing developments and moved all of its activities to Queensbridge Houses in Long Island City, Queens. Today Riis Settlement operates community centers in the Queensbridge and Ravenswood public housing developments and programming in Long Island City and Astoria&rsquo;s public schools. Community members have the opportunity to participate in youth development programs and services for immigrants, families and older adults designed to help them achieve their goals and reach their greatest potential.</p> 
          </div>    

          <!-- divider -->
          <div class="hairline-logo">
            <span class="butterfly"></span>
          </div>

      <!-- 
          Attend an Event
          +++++++++++++++++++++++++++++++++++ -->  
          <div id="attend-event" class="content-box">
            <h2 class="h-section text-block">Attend an Event</h2>
            <div class="image-frame large-frame">
              <a href="http://bit.ly/RiisGala" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gala-125-years-invite.png" alt="attend the riis settlement 125th anniversary gala"></a>
            </div>
            <p class="text-block has-logo-marker louder">
              Riis Settlement will be holding a 125th anniversary gala to celebrate this auspicious milestone!
            </p>
            <!-- Gala Hosts -->
            <div class="content-section events-description text-block overview">
              <h3 class="ribbon">
                <span class="ribbon-text">125th Anniversary Gala Hosts</span>
              </h3>
              <p class="text-block">
              We are delighted to announce that the Gala will be hosted by <strong>Dr. Max Gomez</strong> of WCBS News, a nine-time Emmy Award winning medical news journalist, and <strong>Malena Belafonte</strong>, international model, singer, songwriter, cosmetics line creator, and co-founder of The Speyer Legacy School.
            </p>   
              <ul class="get-involved-list tile-list clearfix">
                <li class="tile-list-item floating-list-item">
                  <div class="tile">
                    <div class="image-frame">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/belafonte-headshot.jpg">
                      <p class="image-caption">
                        Malena Belafonte
                      </p>
                    </div>
                  </div>
                </li>
                <li class="tile-list-item floating-list-item">
                  <div class="tile">
                    <div class="image-frame">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gomez-headshot.jpg">
                      <p class="image-caption">
                        Dr. Max Gomez
                      </p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>  
            <!-- events listings -->
            <div class="content-section events-list-block text-block">
              <ol class="events-list">
                <!-- anniversary gala -->
                <li class="event-item clearfix">
                  <!-- date -->
                  <div class="event-cal-block">
                    <span class="month">Nov</span>
                    <span class="date">6</span>
                  </div>
                  <!-- description -->
                  <div class="event-info">
                    <h3 class="h-event-title">125th Anniversary Gala</h3>
                    <dl class="event-details">
                      <dt>Location</dt>
                      <dd>Museum of the City of New York</dd>
                      <dt>Date</dt>
                      <dd>November 6, 6:30pm</dd>
                      <dt>Cost</dt>
                      <dd>$375</dd>
                      <dt>Contact</dt>
                      <dd>asims@riissettlement.org</dd>
                    </dl>
                    <p class="event-description">
                      Join us as we celebrate Jacob A. Riis Neighborhood Settlement&rsquo;s first 125 years of service to the underserved communities of Western Queens, and set the tone for the coming 125 years.  Honoring former Executive Director <strong>William T. Newlin</strong>, State Assemblywoman <strong>Catherine Nolan</strong> and <strong>Christine Sherwood</strong>, Managing Director, Citi Cards.
                    </p>
                  </div>
                  <!-- CTA -->
                  <div class="event-cta">
                    <a href="http://bit.ly/RiisGala" class="cta-button red-button">Purchase Tickets</a>
                  </div>
                </li>
              </ol>  
            </div>
          </div>  
          <!-- divider -->
          <div class="hairline-logo">
            <span class="butterfly"></span>
          </div>
      <!-- 
          Get Involved
          +++++++++++++++++++++++++++++++++++ --> 
          <div id="get-involved" class="content-box">
            <h2 class="h-section text-block">Get Involved</h2>
            <p class="text-block has-logo-marker louder">
              There are plenty of ways you can help make this milestone year special.  <em>Come make a difference with us!</em></p>
              <div class="content-section get-involved-block text-block">
                <ul class="get-involved-list tile-list clearfix">
                  <!-- attend an event -->
                  <li class="tile-list-item get-involved-item">
                    <div class="tile">
                      <h4>Attend an Event</h4>
                      <div class="ico-block">
                        <!-- date -->
                        <div class="event-cal-block">
                          <span class="month">Nov</span>
                          <span class="date">6</span>
                        </div>
                      </div>
                      <p class="cta-description">
                        Riis Settlement will be holding a 125th Anniversary Gala and cocktail party.  Stay tuned for details! 
                      </p>
                      <a href="http://bit.ly/RiisGala" class="cta-button red-button">Get Tickets</a>
                    </div>
                  </li>
                  <!-- make a donation -->
                  <li class="tile-list-item get-involved-item">
                    <div class="tile">
                      <h4>Make a Donation</h4>
                      <div class="ico-block">
                        <span class="ico-char">$</span>
                      </div>
                      <p class="cta-description">
                        Our programs thrive because of donations from individuals like you. Consider making a special donation during this celebratory year!
                      </p>
                      <a href="/get-involved" class="cta-button red-button">Give Today</a>
                    </div>
                  </li>
                  <!-- volunteer -->
                  <li class="tile-list-item get-involved-item">
                    <div class="tile">
                      <h4>Volunteer</h4>
                      <div class="ico-block">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ico-charity-blue.png">
                      </div>
                      <p class="cta-description">
                        Riis Settlement offers many volunteer opportunities.  <a href="/volunteer-your-time/">Click here</a> to get involved!
                      </p>
                      <a href="/volunteer-your-time" class="cta-button red-button">Join Us</a>
                    </div>
                  </li>
                  <!-- spread the word -->
                  <li class="tile-list-item get-involved-item">
                    <div class="tile">
                      <h4>Spread the Word</h4>
                      <div class="ico-block">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ico-mail-blue.png">
                      </div>
                      <p class="cta-description">
                        Let others know that you support Riis Settlement&rsquo;s movement to build self-sufficiency and income equality for communities in need in greater Western Queens!
                      </p>
                      <a href="https://twitter.com/Riis_Settlement" class="cta-button red-button sxs-button"><span class="ico-inline ico-twitter"></span>Twitter</a>

                      <a href="https://www.facebook.com/pages/Jacob-A-Riis-Neighborhood-Settlement-House/93701720420" class="cta-button red-button sxs-button"><span class="ico-inline ico-facebook"></span>Facebook</a>
                    </div>
                  </li>
                </ul>
              </div>  
            </div>      

        <!-- 
          Thank You Sponsors
          +++++++++++++++++++++++++++++++++++ --> 
          <!-- divider -->
          <div class="hairline-logo">
            <span class="butterfly"></span>
          </div>
          <div id="our-sponsors" class="content-box overview">
            <h2 class="h-section text-block">Our Sponsors</h2>
            <p class="text-block louder">
              We are deeply grateful to our sponsors to date, whose generous support has helped to make this celebration of our work and history possible. <em>Thank you!</em></p>
              <!-- visionary -->
              <h3 class="ribbon">
                <span class="ribbon-text">Visionary Sponsors</span>
              </h3>
              <ul class="get-involved-list tile-list clearfix">
                <li class="tile-list-item floating-list-item l1">
                  <div class="tile">
                    <div class="logo-block">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-citi.png" alt="Citi" title="Citi">
                    </div>
                  </div>
                </li>
              </ul> 

              <!-- community builder -->
              <h3 class="ribbon">
                <span class="ribbon-text">Community Builder Sponsors</span>
              </h3>
              <ul class="get-involved-list tile-list clearfix">
                <li class="tile-list-item floating-list-item l1">
                  <div class="tile">
                    <div class="logo-block">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-ey.png" alt="Ernst &amp; Young" title="Ernst &amp; Young">
                    </div>
                  </div>
                </li>
                <li class="tile-list-item floating-list-item l1">
                  <div class="tile">
                    <div class="logo-block v-padded">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-blackrock.png" alt="BlackRock" title="BlackRock">
                    </div>
                  </div>
                </li>
                <li class="tile-list-item floating-list-item l1">
                  <div class="tile">
                    <div class="logo-block v-padded">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-transcanada.png" alt="TransCanada" title="TransCanada">
                    </div>
                  </div>
                </li>
              </ul> 

              <!-- catalyst sponsor -->
              <h3 class="ribbon">
                <span class="ribbon-text">Catalyst Sponsors</span>
              </h3>  
              <ul class="get-involved-list tile-list clearfix">
                <li class="tile-list-item floating-list-item l2">
                  <div class="tile">
                    <div class="logo-block">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-flushingbank.png" alt="flushing bank" title="flushing bank">
                    </div>
                  </div>
                </li>
                <li class="tile-list-item floating-list-item name-item">
                  <div class="tile">
                    <div class="logo-block">
                      <address class="sponsor-name">Flemming &amp; Judy Heilmann</address>
                    </div>
                  </div>
                </li>
              </ul> 
              <!-- Ambassador Sponsors -->
              <h3 class="ribbon">
                <span class="ribbon-text">Ambassador Sponsors</span>
              </h3>  
              <ul class="get-involved-list tile-list clearfix">
                <li class="tile-list-item floating-list-item l3 tall-item">
                  <div class="tile">
                    <div class="logo-block">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-ibm.png" alt="IBM" title="IBM">
                    </div>
                  </div>
                </li>
                <li class="tile-list-item floating-list-item name-item">
                  <div class="tile">
                    <div class="logo-block">
                      <address class="sponsor-name">Gordon Mehler</address>
                    </div>
                  </div>
                </li>
              </ul>    
              <!-- Stonecutter Sponsors -->
              <h3 class="ribbon">
                <span class="ribbon-text">Stonecutter Sponsors</span>
              </h3>  
              <ul class="get-involved-list tile-list clearfix">
                <li class="tile-list-item floating-list-item name-item">
                  <div class="tile">
                    <div class="logo-block">
                      <address class="sponsor-name">Ann &amp; Robert LoBue</address>
                    </div>
                  </div>
                </li>
                <li class="tile-list-item floating-list-item l3 tall-item">
                  <div class="tile">
                    <div class="logo-block">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-penguinrandomhouse.png" alt="Penguin Random House" title="Penguin Random House">
                    </div>
                  </div>
                </li>
                <li class="tile-list-item floating-list-item name-item">
                  <div class="tile">
                    <div class="logo-block">
                      <address class="sponsor-name">Mike &amp; Jessica Saliba</address>
                    </div>
                  </div>
                </li>
              </ul>    
              <!-- In-Kind Sponsors -->  
              <h3 class="ribbon">
                <span class="ribbon-text">In-Kind Sponsors</span>
              </h3>
              <ul class="get-involved-list tile-list clearfix">
                <li class="tile-list-item floating-list-item l1">
                  <div class="tile">
                    <div class="logo-block">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-joanmitchellfoundation.png" alt="Joan Mitchell Foundation" title="Joan Mitchell Foundation">
                    </div>
                  </div>
                </li>
                <br>
                <li class="tile-list-item floating-list-item l3">
                  <div class="tile">
                    <div class="logo-block">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-afsmk.png" alt="american friends of smk" title="american friends of smk">
                    </div>
                  </div>
                </li>
                <li class="tile-list-item floating-list-item l3">
                  <div class="tile">
                    <div class="logo-block">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-boconcept.png" alt="boconcept" title="boconcept">
                    </div>
                  </div>
                </li>
                <li class="tile-list-item floating-list-item">
                  <div class="tile">
                    <div class="logo-block">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-republicoffritzhansen.png" alt="republic of fritz hansen" title="republic of fritz hansen">
                    </div>
                  </div>
                </li>
                <li class="tile-list-item floating-list-item l3">
                  <div class="tile">
                    <div class="logo-block">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-jkings.png" alt="j kings" title="j kings">
                    </div>
                  </div>
                </li>
                <li class="tile-list-item floating-list-item l3">
                  <div class="tile">
                    <div class="logo-block">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-nordicartwork.png" alt="nordic artwork" title="nordic artwork">
                    </div>
                  </div>
                </li>
                <li class="tile-list-item floating-list-item l3">
                  <div class="tile">
                    <div class="logo-block">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-rekorderlig.png" alt="rekorderlig" title="rekorderlig">
                    </div>
                  </div>
                </li>
              </ul>              
            </div>      
         <!-- 
          Gala Committtee
          +++++++++++++++++++++++++++++++++++ --> 
          <!-- divider -->
          <div class="hairline-logo">
            <span class="butterfly"></span>
          </div>
          <div id="our-sponsors" class="content-box overview">
            <h2 class="h-section text-block">125th Anniversary <span class="text-unit">Gala Committee</span> <span class="paren-note">(in progress)</span></h2>
            <h3 class="ribbon">
              <span class="ribbon-text">Gala Event Co-Chairs</span>
            </h3>
            <ul class="roster">
              <li>Michael &amp; Patti Bingold</li>
              <li>Harper &amp; Ann Garrett</li>
              <li>Flemming &amp; Judy Heilmann</li>
              <li>Ann &amp; Robert LoBue</li>
              <li>Shashi Caan &amp; Theodore Prudon</li>
              <li>Michael &amp; Jessica Saliba</li>
            </ul>  

            <h3 class="ribbon">
              <span class="ribbon-text">Gala Committee</span>
            </h3>
            <ul class="roster">
              <li>Nadya de Chimay</li>
              <li>Sibyl Groff</li>
              <li>Christopher Hanway</li>
              <li>Else Matthews</li>
              <li>Lauren Rosenblum</li>
              <li>Alison Overseth &amp; Ken deRegt</li>
            </ul>  
          </div>    

  <?php endwhile; endif; ?>           
<?php get_footer(); ?>