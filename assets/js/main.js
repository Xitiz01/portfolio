/**
* Template Name: SnapFolio
* Template URL: https://bootstrapmade.com/snapfolio-bootstrap-portfolio-template/
* Updated: Jul 21 2025 with Bootstrap v5.3.7
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

(function() {
  "use strict";

  /**
   * Header toggle
   */
  const headerToggleBtn = document.querySelector('.header-toggle');

  if (headerToggleBtn) {
    function headerToggle() {
      const header = document.querySelector('#header');
      if (header) {
        header.classList.toggle('header-show');
      }
      headerToggleBtn.classList.toggle('bi-list');
      headerToggleBtn.classList.toggle('bi-x');
    }
    headerToggleBtn.addEventListener('click', headerToggle);
  }

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll('#navmenu a').forEach(navmenu => {
    navmenu.addEventListener('click', () => {
      if (document.querySelector('.header-show')) {
        headerToggle();
      }
    });

  });

  /**
   * Toggle mobile nav dropdowns
   */
  document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
    navmenu.addEventListener('click', function(e) {
      e.preventDefault();
      this.parentNode.classList.toggle('active');
      this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
      e.stopImmediatePropagation();
    });
  });

  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove();
    });
    
    // Fallback: Remove preloader after 5 seconds even if load event doesn't fire
    setTimeout(() => {
      if (preloader && preloader.parentNode) {
        preloader.remove();
      }
    }, 5000);
  }

  /**
   * Scroll top button
   */
  let scrollTop = document.querySelector('.scroll-top');

  if (scrollTop) {
    function toggleScrollTop() {
      if (scrollTop) {
        window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
      }
    }
    scrollTop.addEventListener('click', (e) => {
      e.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });

    window.addEventListener('load', toggleScrollTop);
    document.addEventListener('scroll', toggleScrollTop);
  }

  /**
   * Portfolio Mobile Slider
   */
  function initPortfolioSlider() {
    const portfolioSlider = document.querySelector('.portfolio-unified-swiper');
    if (portfolioSlider && typeof Swiper !== 'undefined') {
      const swiper = new Swiper('.portfolio-unified-swiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        },
        pagination: {
          el: '.portfolio-swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.portfolio-swiper-button-next',
          prevEl: '.portfolio-swiper-button-prev',
        },
        breakpoints: {
          768: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
        },
      });

      // Add custom classes for styling
      swiper.on('slideChange', function () {
        // Remove all classes from all slides
        swiper.slides.forEach((slide) => {
          slide.classList.remove('swiper-slide-active', 'swiper-slide-next', 'swiper-slide-prev');
        });

        // Add classes to current and adjacent slides
        const activeIndex = swiper.activeIndex;
        const slides = swiper.slides;

        // Active slide
        if (slides[activeIndex]) {
          slides[activeIndex].classList.add('swiper-slide-active');
        }

        // Next slide
        const nextIndex = (activeIndex + 1) % slides.length;
        if (slides[nextIndex]) {
          slides[nextIndex].classList.add('swiper-slide-next');
        }

        // Previous slide
        const prevIndex = (activeIndex - 1 + slides.length) % slides.length;
        if (slides[prevIndex]) {
          slides[prevIndex].classList.add('swiper-slide-prev');
        }
      });

      // Initial call to set classes
      swiper.emit('slideChange');

      // Prevent slides from being hidden by Swiper
      swiper.slides.forEach((slide) => {
        slide.style.display = 'block';
      });

      // Observe the swiper wrapper for any changes
      const observer = new MutationObserver(() => {
        swiper.slides.forEach((slide) => {
          slide.style.display = 'block';
        });
      });

      observer.observe(portfolioSlider, {
        childList: true,
        subtree: true,
      });
    }
  }

  /**
   * Services Slider
   */
  function initServicesSlider() {
    const servicesSlider = document.querySelector('.services-swiper');
    console.log('Services slider element:', servicesSlider);
    
    if (!servicesSlider) {
      console.log('Services slider not found');
      return;
    }
    
    if (typeof Swiper === 'undefined') {
      console.log('Swiper not loaded, waiting...');
      // Wait for Swiper to load
      setTimeout(() => {
        if (typeof Swiper !== 'undefined') {
          console.log('Swiper is available, initializing...');
          initServicesSlider();
        }
      }, 1000);
      return;
    }
    
    console.log('Swiper is available, initializing services slider...');
    
    try {
      const swiper = new Swiper('.services-swiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
          dynamicBullets: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        breakpoints: {
          576: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 25,
          },
          992: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
          1200: {
            slidesPerView: 4,
            spaceBetween: 30,
          },
        },
        // Enable touch/swipe on mobile
        allowTouchMove: true,
        // Prevent slides from being hidden
        watchOverflow: false,
        // Responsive behavior
        watchSlidesProgress: true,
        // Smooth transitions
        speed: 600,
        // Auto height adjustment
        autoHeight: true,
        // Prevent slides from disappearing
        loopAdditionalSlides: 2,
        // Ensure proper slide rendering
        observer: true,
        observeParents: true,
        // Fix for rendering issues
        on: {
          init: function() {
            console.log('Services slider initialized with', this.slides.length, 'slides');
            this.updateSlidesClasses();
            this.updateSlidesProgress();
          },
          slideChange: function() {
            this.updateSlidesClasses();
            this.updateSlidesProgress();
          },
          resize: function() {
            this.updateSlidesClasses();
            this.updateSlidesProgress();
          }
        }
      });

      // Add custom classes for styling
      swiper.on('slideChange', function () {
        // Remove all classes from all slides
        swiper.slides.forEach((slide) => {
          slide.classList.remove('swiper-slide-active', 'swiper-slide-next', 'swiper-slide-prev');
        });

        // Add classes to current and adjacent slides
        const activeIndex = swiper.activeIndex;
        const slides = swiper.slides;

        // Active slide
        if (slides[activeIndex]) {
          slides[activeIndex].classList.add('swiper-slide-active');
        }

        // Next slide
        const nextIndex = (activeIndex + 1) % slides.length;
        if (slides[nextIndex]) {
          slides[nextIndex].classList.add('swiper-slide-next');
        }

        // Previous slide
        const prevIndex = (activeIndex - 1 + slides.length) % slides.length;
        if (slides[prevIndex]) {
          slides[prevIndex].classList.add('swiper-slide-prev');
        }
      });

      // Initial call to set classes
      swiper.emit('slideChange');

      // Prevent slides from being hidden by Swiper
      swiper.slides.forEach((slide) => {
        slide.style.display = 'block';
        slide.style.visibility = 'visible';
        slide.style.opacity = '1';
      });

      // Observe the swiper wrapper for any changes
      const observer = new MutationObserver(() => {
        swiper.slides.forEach((slide) => {
          slide.style.display = 'block';
          slide.style.visibility = 'visible';
          slide.style.opacity = '1';
        });
      });

      observer.observe(servicesSlider, {
        childList: true,
        subtree: true,
        attributes: true,
        attributeFilter: ['style', 'class']
      });

      // Force update on window resize
      window.addEventListener('resize', () => {
        swiper.update();
        swiper.updateSlidesClasses();
        swiper.updateSlidesProgress();
      });

      // Add initialized class for CSS fallback
      servicesSlider.closest('.services-swiper-container').classList.add('swiper-initialized');

      console.log('Services slider created:', swiper);
      
      return swiper;
      
    } catch (error) {
      console.error('Error initializing services slider:', error);
    }
  }

  /**
   * Testimonial Mobile Vertical Slider
   */
  function initTestimonialSlider() {
    console.log('Attempting to initialize testimonial slider...');
    console.log('Window width:', window.innerWidth);
    console.log('Is mobile/tablet view:', window.innerWidth <= 1199);
    
    const testimonialSlider = document.querySelector('.testimonial-mobile-slider');
    const swiperElement = document.querySelector('.testimonial-swiper');
    
    console.log('Testimonial slider container:', testimonialSlider);
    console.log('Swiper element:', swiperElement);
    
    if (!testimonialSlider) {
      console.log('Testimonial slider container not found');
      return;
    }
    
    if (!swiperElement) {
      console.log('Swiper element not found');
      return;
    }
    
    // Check if Swiper is available
    if (typeof Swiper === 'undefined') {
      console.log('Swiper not loaded, waiting...');
      // Wait for Swiper to load
      setTimeout(initTestimonialSlider, 500);
      return;
    }
    
    console.log('Swiper is available, initializing...');
    
    try {
      const testimonialSwiper = new Swiper('.testimonial-swiper', {
        direction: 'vertical',
        slidesPerView: 1,
        spaceBetween: 80,
        centeredSlides: true,
        loop: true,
        autoplay: {
          delay: 4000,
          disableOnInteraction: false,
        },
        effect: 'slide',
        speed: 800,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
          type: 'bullets',
        },
        breakpoints: {
          480: {
            spaceBetween: 70,
          },
          768: {
            spaceBetween: 80,
          }
        },
        on: {
          init: function() {
            console.log('Testimonial slider initialized successfully!');
            // Add custom classes for enhanced sneak peek effect
            this.slides.forEach((slide, index) => {
              if (index === this.activeIndex) {
                slide.classList.add('swiper-slide-active');
              } else if (index === this.activeIndex + 1 || (this.activeIndex === this.slides.length - 1 && index === 0)) {
                slide.classList.add('swiper-slide-next');
              } else if (index === this.activeIndex - 1 || (this.activeIndex === 0 && index === this.slides.length - 1)) {
                slide.classList.add('swiper-slide-prev');
              } else if (index === this.activeIndex + 2 || (this.activeIndex >= this.slides.length - 2 && index === 0)) {
                slide.classList.add('swiper-slide-next-next');
              } else if (index === this.activeIndex - 2 || (this.activeIndex <= 1 && index === this.slides.length - 1)) {
                slide.classList.add('swiper-slide-prev-prev');
              }
            });
          },
          slideChange: function() {
            // Update classes on slide change
            this.slides.forEach(slide => {
              slide.classList.remove('swiper-slide-active', 'swiper-slide-next', 'swiper-slide-prev');
            });
            
            this.slides.forEach((slide, index) => {
              if (index === this.activeIndex) {
                slide.classList.add('swiper-slide-active');
              } else if (index === this.activeIndex + 1 || (this.activeIndex === this.slides.length - 1 && index === 0)) {
                slide.classList.add('swiper-slide-next');
              } else if (index === this.activeIndex - 1 || (this.activeIndex === 0 && index === this.slides.length - 1)) {
                slide.classList.add('swiper-slide-prev');
              }
            });
          }
        }
      });
      
      console.log('Testimonial slider created:', testimonialSwiper);
      
    } catch (error) {
      console.error('Error initializing testimonial slider:', error);
    }
  }

  /**
   * Animation on scroll function and init
   */
  function aosInit() {
    if (typeof AOS !== 'undefined') {
      AOS.init({
        duration: 600,
        easing: 'ease-in-out',
        once: true,
        mirror: false
      });
    }
  }
  window.addEventListener('load', aosInit);

  /**
   * Init typed.js
   */
  const selectTyped = document.querySelector('.typed');
  if (selectTyped && typeof Typed !== 'undefined') {
    let typed_strings = selectTyped.getAttribute('data-typed-items');
    typed_strings = typed_strings.split(',');
    
    // Filter out any empty strings
    typed_strings = typed_strings.filter(skill => skill.trim() !== '');
    
    new Typed('.typed', {
      strings: typed_strings,
      loop: true,
      typeSpeed: 100,
      backSpeed: 50,
      backDelay: 2000
    });
  }

  /**
   * Initiate Pure Counter
   */
  if (typeof PureCounter !== 'undefined') {
    new PureCounter();
  }

  /**
   * Animate the skills items on reveal
   */
  if (typeof Waypoint !== 'undefined') {
    let skillsAnimation = document.querySelectorAll('.skills-animation');
    skillsAnimation.forEach((item) => {
      new Waypoint({
        element: item,
        offset: '80%',
        handler: function(direction) {
          let progress = item.querySelectorAll('.progress .progress-bar');
          progress.forEach(el => {
            el.style.width = el.getAttribute('aria-valuenow') + '%';
          });
        }
      });
    });
  }

  /**
   * Initiate glightbox
   */
  if (typeof GLightbox !== 'undefined') {
    const glightbox = GLightbox({
      selector: '.glightbox'
    });
  }

  /**
   * Init isotope layout and filters
   */
  if (typeof Isotope !== 'undefined' && typeof imagesLoaded !== 'undefined') {
    document.querySelectorAll('.isotope-layout').forEach(function(isotopeItem) {
      let layout = isotopeItem.getAttribute('data-layout') ?? 'masonry';
      let filter = isotopeItem.getAttribute('data-default-filter') ?? '*';
      let sort = isotopeItem.getAttribute('data-sort') ?? 'original-order';

      let initIsotope;
      imagesLoaded(isotopeItem.querySelector('.isotope-container'), function() {
        initIsotope = new Isotope(isotopeItem.querySelector('.isotope-container'), {
          itemSelector: '.isotope-item',
          layoutMode: layout,
          filter: filter,
          sortBy: sort
        });
      });

      isotopeItem.querySelectorAll('.isotope-filters li').forEach(function(filters) {
        filters.addEventListener('click', function() {
          isotopeItem.querySelector('.isotope-filters .filter-active').classList.remove('filter-active');
          this.classList.add('filter-active');
          initIsotope.arrange({
            filter: this.getAttribute('data-filter')
          });
          if (typeof aosInit === 'function') {
            aosInit();
          }
        }, false);
      });

    });
  }

  /**
   * Init swiper sliders
   */
  function initSwiper() {
    if (typeof Swiper !== 'undefined') {
      document.querySelectorAll(".init-swiper").forEach(function(swiperElement) {
        let config = JSON.parse(
          swiperElement.querySelector(".swiper-config").innerHTML.trim()
        );

        if (swiperElement.classList.contains("swiper-tab")) {
          initSwiperWithCustomPagination(swiperElement, config);
        } else {
          new Swiper(swiperElement, config);
        }
      });
    }
  }

  window.addEventListener("load", initSwiper);

  /**
   * Init portfolio mobile slider
   */
  window.addEventListener("load", initPortfolioSlider);

  /**
   * Init services mobile slider
   */
  window.addEventListener("load", initServicesSlider);
  
  // Also try to initialize on DOMContentLoaded as a fallback
  document.addEventListener("DOMContentLoaded", () => {
    setTimeout(initServicesSlider, 100);
  });
  
  // Additional fallback for slow loading
  window.addEventListener("load", () => {
    setTimeout(initServicesSlider, 2000);
  });

  /**
   * Init testimonial mobile slider
   */
  window.addEventListener("load", initTestimonialSlider);
  
  // Also try to initialize after a delay in case Swiper loads later
  setTimeout(initTestimonialSlider, 1000);
  setTimeout(initTestimonialSlider, 2000);
  
  // Debug: Test if function is being called
  console.log('Testimonial slider initialization scheduled');

  /**
   * Correct scrolling position upon page load for URLs containing hash links.
   */
  window.addEventListener('load', function(e) {
    if (window.location.hash) {
      if (document.querySelector(window.location.hash)) {
        setTimeout(() => {
          let section = document.querySelector(window.location.hash);
          let scrollMarginTop = getComputedStyle(section).scrollMarginTop;
          window.scrollTo({
            top: section.offsetTop - parseInt(scrollMarginTop),
            behavior: 'smooth'
          });
        }, 100);
      }
    }
  });

  /**
   * Navmenu Scrollspy
   */
  let navmenulinks = document.querySelectorAll('.navmenu a');

  function navmenuScrollspy() {
    navmenulinks.forEach(navmenulink => {
      if (!navmenulink.hash) return;
      let section = document.querySelector(navmenulink.hash);
      if (!section) return;
      let position = window.scrollY + 200;
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        document.querySelectorAll('.navmenu a.active').forEach(link => link.classList.remove('active'));
        navmenulink.classList.add('active');
      } else {
        navmenulink.classList.remove('active');
      }
    })
  }
  window.addEventListener('load', navmenuScrollspy);
  document.addEventListener('scroll', navmenuScrollspy);

})();