<?php include 'includeFile.php';

    $homeMgr=new HomeManager();
$data=$homeMgr->getSlider(1);

$welcometextMgr = new WelcomeTextManager();
$welcometext = $welcometextMgr->getwelcometext(1);


$aboutMgr = new AboutManager();
$about = $aboutMgr->getAbout(1);

$teamMgr=new TeamManager();
$teamlist=$teamMgr->getMember(1);

$portfolioMgr1 = new PortfolioManager();
$temp1 = $portfolioMgr1->getportfolio(1,1);

$portfolioMgr2 = new PortfolioManager();
$temp2 = $portfolioMgr2->getportfolio(1,2);

$portfolioMgr3 = new PortfolioManager();
$temp3 = $portfolioMgr3->getportfolio(1,3);

$servicesMgr=new ServicesManager();
$serviceslist=$servicesMgr->getServices(1);

$contactMgr=new ContactManager();
$contactList = $contactMgr->getContact(1);

$footerMgr = new FooterManager();
$footer = $footerMgr->getFooter(1);

?>

<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Responsive One Page website template</title>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/responsee.css">
       <link rel="stylesheet" href="css/Mycss.css">
      <link rel="stylesheet" href="css/icons.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css">
      <!-- CUSTOM STYLE -->
      <link rel="stylesheet" href="css/template-style.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
      <script type="text/javascript" src="js/template-scripts.js"></script> 
   </head>
   <body class="size-1140">
  	  <!-- PREMIUM FEATURES BUTTON -->
<!--  	  <a target="_blank" class="hide-s" href="../template/onepage-premium-template/" style="position:fixed;top:130px;right:-14px;z-index:10;"><img src="img/premium-features.png" alt=""></a>-->
      <!-- TOP NAV WITH LOGO -->
      <header>
         <div id="topbar" class="hide-s hide-m">
            <div class="line">

               <div class="s-12 m-6 l-6">
<!--                  <div class="social right">-->
<!--                     <a><i class="icon-facebook_circle"></i></a> <a><i class="icon-twitter_circle"></i></a> <a><i class="icon-google_plus_circle"></i></a> <a><i class="icon-instagram_circle"></i></a>-->
<!--                  </div>-->
               </div>
            </div>  
         </div> 
         <nav>
            <div class="line">
               <div class="s-12 l-2">
                   <p class="logo">Think<strong>Beyond</strong></p>
               </div>
               <div class="top-nav s-12 l-10">
                  
                  <ul class="right">
                     <li class="active-item"><a href="#carousel">Home</a></li>
                     <li><a href="#features">About</a></li>
<!--                     <li><a href="#about-us">About Us</a></li>-->
                     <li><a href="#our-work">Portfolio</a></li>
                     <li><a href="#services">Services</a></li>
                     <li><a href="#contact">Contact</a></li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>  
      <section>
         <!-- CAROUSEL --> 
         <div id="carousel">
            <div id="owl-demo" class="owl-carousel owl-theme">


                <?php foreach ($data as $data):
                    $h=new Home($data);

                ?>
               <div class="item">
                  <img src="Admin/<?=$h->getSlider()?>" alt="">
                  <div class="line">
                     <div class="text hide-s">
                        <div class="line">
                          <div class="prev-arrow hide-s hide-m">
                             <i class="icon-chevron_left"></i>
                          </div>
                          <div class="next-arrow hide-s hide-m">
                             <i class="icon-chevron_right"></i>
                          </div>
                        </div>
                        <h2><?=$h->getSliderText() ?></h2>
                     </div>
                  </div>
               </div>

                                <?php endforeach; ?>


            </div>
         </div>
         <!-- FIRST BLOCK -->
         <div id="first-block">
             <?php
             foreach ($welcometext as $welcometext):
             $welcometext = new WelcomeText($welcometext)
             ?>
            <div class="line">
                <br><br><br><br>
               <h1><?= $welcometext->getWelcomeText() ?></h1>
<!--               <p>Create your free website today!</p>-->
               <div class="s-12 m-4 l-2 center"><a class="white-btn" href="#our-work">SELECT TEMPLATES</a></div>
            </div>

             <?php endforeach;?>
         </div>
         <!-- FEATURES -->
         <div id="features">
            <div class="line">
               <div class="margin">


                   <?php if(count($teamlist)>4){
                       $class='l-3';
                   }
                   else{
                       $class='l-'. 12/count($teamlist);
                   }

                   ?>
                   <?php foreach ($teamlist as $team) :
                       $team=new Team($team); ?>

                  <div class="s-12 m-6 <?=$class?> margin-bottom">
                     <img src="Admin/<?=$team->getMemberImg()?>" style="border-radius:50%;height:150px;width: 150px ;margin: auto" >
                     <h2><?=$team->getMemberName() ?></h2>
                     <p><?=$team->getDesc()?></p>
                  </div>

                   <?php endforeach; ?>



               </div>
            </div>
         </div>
         <!-- ABOUT US -->
         <div id="about-us">
             <?php
             foreach ($about as $about):
             $about = new About($about);

             ?>
            <div class="s-12 m-12 l-6 media-container">
               <img src="Admin/<?= $about-> getAboutImg()?>" alt="">
            </div>
            <article class="s-12 m-12 l-6">
               <h2><?= $about->getAboutTitle()?></h2>
               <p><?= $about->getAboutText() ?>
               </p>

            </article>
             <?php endforeach;?>
         </div>
         <!-- OUR WORK -->
         <div id="our-work">
            <div class="line">
               <h2 class="section-title">Portfolio</h2>
               <div class="tabs">
                  <div class="tab-item tab-active">
                    <a class="tab-label active-btn">Web Design Templates</a>
                    <div class="tab-content">
                      <div class="margin">
                        <div class="s-12 m-6 l-3" style="height: 230px;width: 375px">
                            <?php $temp1 = new Portfolio($temp1) ?>
                            <a href="Dewi-temp1/index.html" target="_blank" class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4><?= $temp1->getTempTitle() ?></h4><p><?= $temp1->getTempText() ?></p></div><img style="height: 230px" src="img/temp1.png" alt=""></a>
                        </div>
                        <div class="s-12 m-6 l-3" style="height: 230px;width: 375px">
                            <?php $temp2 = new Portfolio($temp2) ?>
                            <a href="Avilon-temp2/index.html" target="_blank" class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4><?= $temp2->getTempTitle()?></h4><p><?= $temp2->getTempText()?></p></div><img style="height: 230px" src="img/template2.png" alt=""></a>
                        </div>
                        <div class="s-12 m-6 l-3" style="height: 230px;width: 375px">
                            <?php $temp3 = new Portfolio($temp3) ?>
                            <a href="grand-pro-opl-temp3/index.html" target="_blank" class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4><?= $temp3->getTempTitle()?></h4><p><?=$temp3->getTempText() ?></p></div><img style="height: 230px" src="img/template3.png" alt=""></a>
                        </div>
<!--                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/temp2.png" alt=""></a></div>-->
                      </div>
                    </div>  
                  </div>

               </div>
            </div>
         </div>         


          <div id="features" style="background-color: #6f9600">
              <div class="line">
                  <div class="margin">


                      <?php if(count($serviceslist)>4){
                          $service='l-3';
                      }
                      else{
                          $service='l-'. 12/count($serviceslist);
                      }

                      ?>
                      <?php foreach ($serviceslist as $services):
                          $services=new Services($services); ?>

                          <div class="s-12 m-6 <?=$service?> margin-bottom">
                              <img src="Admin/<?=$services->getServicesImg()?>" style="border-radius:50%;height:150px;width: 150px ;margin: auto" >
                              <h2 style="color: white"><?=$services->getServicesName() ?></h2>
                              <p style="color: white"><?=$services->getServicesDesc()?></p>
                          </div>

                      <?php endforeach; ?>



                  </div>
              </div>
          </div>

         <!-- CONTACT -->
         <div id="contact">
            <div class="line">
               <h2 class="section-title">Contact Us</h2>
               <div class="margin">

                  <div class="s-12 m-12 l-4 margin-bottom right-align" style="margin-left: 150px">
                     <h3>Think Beyond - contact details</h3>

                      <?php
                      foreach ($contactList as $contactList) :
                      $contact=new Contact($contactList);
                       ?>
                     <address>
                        <p><strong>Adress:</strong> <?=$contact->getAddress() ?></p>
                        <p><strong>Country:</strong> <?=$contact->getCountry() ?></p>
                        <p><strong>E-mail:</strong> <?=$contact->getEmail() ?></p>
                     </address>
                     <br />
                     <h3>Social</h3>
                      <?php if(! empty($contact->getFacebook()) ) :?>
                             <p><i class="icon-facebook icon"></i> <a href="<?=$contact->getFacebook() ?>" target="_blank">Facebook</a></p>
                        <?php endif; ?>
                      <?php if(! empty($contact->getTwitter()) ) :?>
                             <p class="margin-bottom"><i class="icon-twitter icon"></i> <a href="<?=$contact->getTwitter() ?>" target="_blank">Twitter</a></p>
                      <?php endif; ?>

                      <?php endforeach; ?>
                  </div>
                  <div class="s-12 m-12 l-5">
                    <h3>Contact Form</h3>
                    <form class="customform" action="">
                      <div class="s-12"><input name="" placeholder="Your e-mail" title="Your e-mail" type="text" /></div>
                      <div class="s-12"><input name="" placeholder="Your name" title="Your name" type="text" /></div>
                      <div class="s-12"><textarea placeholder="Your message" name="" rows="5"></textarea></div>
                      <div class="s-12 m-12 l-4"><button class="color-btn" type="submit">Submit Button</button></div>
                    </form>
                  </div>                
               </div>
            </div>
         </div>

      </section>
      <!-- FOOTER -->
      <footer>

          <?php foreach ($footer as $footer):
          $footer=new Footer($footer);

          ?>
         <div class="line">
            <div class="s-12 l-6">
               <p> Copyright © <?= $footer->getCopyright()?></p>

            </div>
            <div class="s-12 l-6">
               <a class="right" title="Responsee - lightweight responsive framework">Design and coding<br> by <?= $footer->getDesignCoding()?></a>
            </div>
         </div>
          <?php endforeach; ?>
      </footer>
      <script type="text/javascript" src="js/responsee.js"></script>
      <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
      <script type="text/javascript">
         jQuery(document).ready(function($) {
            var theme_slider = $("#owl-demo");
            var owl = $('#owl-demo');
            owl.owlCarousel({
              nav: false,
              dots: true,
              items: 1,
              loop: true,
              autoplay: true,
              autoplayTimeout: 6000
            });
            var owl = $('#owl-demo2');
            owl.owlCarousel({
              nav: true,
              dots: false,
              items: 1,
              loop: true,
              navText: ["&#xf007","&#xf006"],
              autoplay: true,
              autoplayTimeout: 4000
            });
        
            // Custom Navigation Events
            $(".next-arrow").click(function() {
                theme_slider.trigger('next.owl');
            })
            $(".prev-arrow").click(function() {
                theme_slider.trigger('prev.owl');
            })     
        }); 
      </script>
   </body>
</html>