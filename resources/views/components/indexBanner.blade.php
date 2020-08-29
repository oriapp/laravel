<style>

::-webkit-scrollbar{
    display: none;
  }

    section {
    width: 100%;
    height: 100vh;
  }
  
  .swiper-container {
    width: 100%;
    height: 100%;
  }
  
  .slide {
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    text-align: center;
    font-size: 18px;
    background: #fff;
    overflow: hidden;
  }
  .slide-image {
    position: absolute;
    top: -200px;
    left: -200px;
    width: calc(100% + 400px);
    height: calc(100% + 400px);
    background-position: 50% 50%;
    background-size: cover;
  }
  .slide-title {
    font-size: 4rem;
    line-height: 1;
    max-width: 50%;
    white-space: normal;
    word-break: break-word;
    color: #FFF;
    z-index: 100;
    font-family: 'Oswald', sans-serif;
    text-transform: uppercase;
    font-weight: normal;
  }
  @media (min-width: 45em) {
    .slide-title {
      font-size: 7vw;
      max-width: none;
    }
  }
  .slide-title span {
    white-space: pre;
    display: inline-block;
    opacity: 0;
  }
  
  .slideshow {
    position: relative;
  }
  .slideshow-pagination {
    position: absolute;
    bottom: 5rem;
    left: 0;
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    transition: .3s opacity;
    z-index: 10;
  }
  .slideshow-pagination-item {
    display: flex;
    align-items: center;
  }
  .slideshow-pagination-item .pagination-number {
    opacity: 0.5;
  }
  .slideshow-pagination-item:hover, .slideshow-pagination-item:focus {
    cursor: pointer;
  }
  .slideshow-pagination-item:last-of-type .pagination-separator {
    width: 0;
  }
  .slideshow-pagination-item.active .pagination-number {
    opacity: 1;
  }
  .slideshow-pagination-item.active .pagination-separator {
    width: 10vw;
  }
  .slideshow-navigation-button {
    position: absolute;
    top: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    width: 5rem;
    z-index: 1000;
    transition: all .3s ease;
    color: #FFF;
  }
  .slideshow-navigation-button:hover, .slideshow-navigation-button:focus {
    cursor: pointer;
    background: rgba(0, 0, 0, 0.3);
  }
  .slideshow-navigation-button.prev {
    left: 0;
  }
  .slideshow-navigation-button.next {
    right: 0;
  }
  
  .pagination-number {
    font-size: 1.8rem;
    color: #FFF;
    font-family: 'Oswald', sans-serif;
    padding: 0 0.5rem;
  }
  
  .pagination-separator {
    display: none;
    position: relative;
    width: 40px;
    height: 2px;
    background: rgba(255, 255, 255, 0.25);
    transition: all .3s ease;
  }
  @media (min-width: 45em) {
    .pagination-separator {
      display: block;
    }
  }
  .pagination-separator-loader {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #FFFFFF;
    transform-origin: 0 0;
  }


  
  .flickity-button {
  background: transparent;
}
/* big previous & next buttons */
.flickity-prev-next-button {
  width: 100px;
  height: 100px;
}
/* icon color */
.flickity-button-icon {
  fill: white;
}
/* hide disabled button */
.flickity-button:disabled {
  display: none;
}
  
  </style>
  
  
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
  
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Oswald:500" rel="stylesheet">
  <script>!function(e){"undefined"==typeof module?this.charming=e:module.exports=e}(function(e,n){"use strict";n=n||{};var t=n.tagName||"span",o=null!=n.classPrefix?n.classPrefix:"char",r=1,a=function(e){for(var n=e.parentNode,a=e.nodeValue,c=a.length,l=-1;++l<c;){var d=document.createElement(t);o&&(d.className=o+r,r++),d.appendChild(document.createTextNode(a[l])),n.insertBefore(d,e)}n.removeChild(e)};return function c(e){for(var n=[].slice.call(e.childNodes),t=n.length,o=-1;++o<t;)c(n[o]);e.nodeType===Node.TEXT_NODE&&a(e)}(e),e});
  </script>
     
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
  <section>
  
    <div class="mt-3 swiper-container slideshow">
  
      <div class="swiper-wrapper">
  
        <div class="swiper-slide slide">
          <div class="slide-image" style="background-image: url({{asset('/images/rsz_banner2.jpg')}})"></div>
          <span class="slide-title">{{$title_one}}</span>
        </div>
  
        <div class="swiper-slide slide">
          <div class="slide-image" style="background-image: url({{asset('/images/0e2d7357-2e90-476a-af8f-c31d433da7fe.jpg')}})"></div>
          <span class="slide-title">{{$title_two}}</span>
        </div>
  
        <div class="swiper-slide slide">
          <div class="slide-image" style="background-image: url({{asset('/images/2.jpg')}})"></div>
          <span class="slide-title">{{$title_tree}}</span>
        </div>

        <div class="swiper-slide slide">
            <div class="slide-image" style="background-image: url({{asset('/images/car-1.jpg')}})"></div>
            <span class="slide-title">{{$title_four ?? null}}</span>
          </div>
  
      </div>
  
      <div class="slideshow-pagination"></div>
  
      <div class="slideshow-navigation">
        <div class="slideshow-navigation-button prev"><span class="fas fa-chevron-left"></span></div>
        <div class="slideshow-navigation-button next"><span class="fas fa-chevron-right"></span></div>
      </div>
  
    </div>
  
  </section>
  <script>
      // The Slideshow class.
  class Slideshow {
      constructor(el) {
          
          this.DOM = {el: el};
        
          this.config = {
            slideshow: {
              delay: 3000,
              pagination: {
                duration: 3,
              }
            }
          };
          
          // Set the slideshow
          this.init();
        
      }
      init() {
        
        var self = this;
        
        // Charmed title
        this.DOM.slideTitle = this.DOM.el.querySelectorAll('.slide-title');
        this.DOM.slideTitle.forEach((slideTitle) => {
          charming(slideTitle);
        });
        
        // Set the slider
        this.slideshow = new Swiper (this.DOM.el, {
            
            loop: true,
            autoplay: {
              delay: this.config.slideshow.delay,
              disableOnInteraction: false,
            },
            speed: 500,
            preloadImages: true,
            updateOnImagesReady: true,
            
            // lazy: true,
            // preloadImages: false,
  
            pagination: {
              el: '.slideshow-pagination',
              clickable: true,
              bulletClass: 'slideshow-pagination-item',
              bulletActiveClass: 'active',
              clickableClass: 'slideshow-pagination-clickable',
              modifierClass: 'slideshow-pagination-',
              renderBullet: function (index, className) {
                
                var slideIndex = index,
                    number = (index <= 8) ? '0' + (slideIndex + 1) : (slideIndex + 1);
                
                var paginationItem = '<span class="slideshow-pagination-item">';
                paginationItem += '<span class="pagination-number">' + number + '</span>';
                paginationItem = (index <= 8) ? paginationItem + '<span class="pagination-separator"><span class="pagination-separator-loader"></span></span>' : paginationItem;
                paginationItem += '</span>';
              
                return paginationItem;
                
              },
            },
  
            // Navigation arrows
            navigation: {
              nextEl: '.slideshow-navigation-button.next',
              prevEl: '.slideshow-navigation-button.prev',
            },
  
            // And if we need scrollbar
            scrollbar: {
              el: '.swiper-scrollbar',
            },
          
            on: {
              init: function() {
                self.animate('next');
              },
            }
          
          });
        
          // Init/Bind events.
          this.initEvents();
          
      }
      initEvents() {
          
          this.slideshow.on('paginationUpdate', (swiper, paginationEl) => this.animatePagination(swiper, paginationEl));
          //this.slideshow.on('paginationRender', (swiper, paginationEl) => this.animatePagination());
  
          this.slideshow.on('slideNextTransitionStart', () => this.animate('next'));
          
          this.slideshow.on('slidePrevTransitionStart', () => this.animate('prev'));
              
      }
      animate(direction = 'next') {
        
          // Get the active slide
          this.DOM.activeSlide = this.DOM.el.querySelector('.swiper-slide-active'),
          this.DOM.activeSlideImg = this.DOM.activeSlide.querySelector('.slide-image'),
          this.DOM.activeSlideTitle = this.DOM.activeSlide.querySelector('.slide-title'),
          this.DOM.activeSlideTitleLetters = this.DOM.activeSlideTitle.querySelectorAll('span');
        
          // Reverse if prev  
          this.DOM.activeSlideTitleLetters = direction === "next" ? this.DOM.activeSlideTitleLetters : [].slice.call(this.DOM.activeSlideTitleLetters).reverse();
        
          // Get old slide
          this.DOM.oldSlide = direction === "next" ? this.DOM.el.querySelector('.swiper-slide-prev') : this.DOM.el.querySelector('.swiper-slide-next');
          if (this.DOM.oldSlide) {
            // Get parts
            this.DOM.oldSlideTitle = this.DOM.oldSlide.querySelector('.slide-title'),
            this.DOM.oldSlideTitleLetters = this.DOM.oldSlideTitle.querySelectorAll('span'); 
            // Animate
            this.DOM.oldSlideTitleLetters.forEach((letter,pos) => {
              TweenMax.to(letter, .3, {
                ease: Quart.easeIn,
                delay: (this.DOM.oldSlideTitleLetters.length-pos-1)*.04,
                y: '50%',
                opacity: 0
              });
            });
          }
        
          // Animate title
          this.DOM.activeSlideTitleLetters.forEach((letter,pos) => {
                      TweenMax.to(letter, .6, {
                          ease: Back.easeOut,
                          delay: pos*.05,
                          startAt: {y: '50%', opacity: 0},
                          y: '0%',
                          opacity: 1
                      });
                  });
        
          // Animate background
          TweenMax.to(this.DOM.activeSlideImg, 1.5, {
              ease: Expo.easeOut,
              startAt: {x: direction === 'next' ? 200 : -200},
              x: 0,
          });
        
          //this.animatePagination()
      
      }
      animatePagination(swiper, paginationEl) {
              
        // Animate pagination
        this.DOM.paginationItemsLoader = paginationEl.querySelectorAll('.pagination-separator-loader');
        this.DOM.activePaginationItem = paginationEl.querySelector('.slideshow-pagination-item.active');
        this.DOM.activePaginationItemLoader = this.DOM.activePaginationItem.querySelector('.pagination-separator-loader');
        
        console.log(swiper.pagination);
        // console.log(swiper.activeIndex);
        
        // Reset and animate
          TweenMax.set(this.DOM.paginationItemsLoader, {scaleX: 0});
          TweenMax.to(this.DOM.activePaginationItemLoader, this.config.slideshow.pagination.duration, {
            startAt: {scaleX: 0},
            scaleX: 1,
          });
        
        
      }
      
  }
  
  const slideshow = new Slideshow(document.querySelector('.slideshow'));
  
  </script>



<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">