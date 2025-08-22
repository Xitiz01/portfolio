jQuery(document).ready(function($) {
	var $portfolioContainer = $('.portfolio-container');
	var $viewMoreContainer = $('#portfolio-view-more-container');
	var $viewMoreBtn = $('#portfolio-view-more-btn');
	var $portfolioItems = $('.portfolio-item');
	var initialProjectsCount = parseInt($('.portfolio-item[data-initial="true"]').length);
	var totalProjectsCount = $portfolioItems.length;
	var currentFilter = '*';
	var allProjectsShown = false;
	var isAnimating = false; // Prevent multiple animations
	
	// Initialize portfolio functionality
	initPortfolio();
	
	function initPortfolio() {
		// Set up isotope filtering
		setupIsotope();
		
		// Set up filter click handlers
		setupFilters();
		
		// Set up view more functionality
		setupViewMore();
		
		// Show view more button if needed and we're on All Projects tab
		if (totalProjectsCount > initialProjectsCount && currentFilter === '*') {
			$viewMoreContainer.show();
		}
		
		// Ensure initial grid layout is correct - single call with shorter delay
		setTimeout(function() {
			ensureGridLayout();
		}, 100);
	}
	
	function setupIsotope() {
		// Initialize isotope if not already done
		if ($portfolioContainer.hasClass('isotope-container')) {
			$portfolioContainer.isotope({
				itemSelector: '.portfolio-item',
				layoutMode: 'fitRows',
				transitionDuration: '0.3s', // Reduced for faster response
				percentPosition: true,
				fitWidth: false,
				gutter: 30,
				stagger: 20, // Reduced stagger for faster layout
				initLayout: false, // Prevent initial layout flash
				hiddenStyle: {
					opacity: 0,
					transform: 'scale(0.8)'
				},
				visibleStyle: {
					opacity: 1,
					transform: 'scale(1)'
				}
			});
		}
	}
	
	// Function to ensure proper grid layout - with animation protection
	function ensureGridLayout() {
		if (isAnimating) return; // Prevent multiple simultaneous calls
		
		isAnimating = true;
		setTimeout(function() {
			if ($portfolioContainer.hasClass('isotope-container')) {
				$portfolioContainer.isotope('layout');
			}
			isAnimating = false;
		}, 50); // Reduced delay for faster response
	}
	
	// Function to force isotope reload for better grid handling - optimized
	function forceIsotopeReload() {
		if (isAnimating) return; // Prevent multiple simultaneous calls
		
		isAnimating = true;
		setTimeout(function() {
			if ($portfolioContainer.hasClass('isotope-container')) {
				$portfolioContainer.isotope('reloadItems');
				$portfolioContainer.isotope('layout');
			}
			isAnimating = false;
		}, 100); // Reduced delay for faster response
	}
	
	// Function to handle smooth category transitions
	function smoothCategoryTransition(filter) {
		// First, hide all items instantly
		$portfolioItems.hide();
		
		// Show only the items in the selected category
		$portfolioItems.each(function() {
			var $item = $(this);
			if ($item.hasClass(filter.replace('.', ''))) {
				$item.show();
			}
		});
		
		// Immediately update isotope layout to prevent stacking
		if ($portfolioContainer.hasClass('isotope-container')) {
			$portfolioContainer.isotope('layout');
		}
		
		// Then apply smooth fade animations with staggered timing
		setTimeout(function() {
			var visibleItems = $portfolioItems.filter('.' + filter.replace('.', ''));
			visibleItems.each(function(index) {
				var $item = $(this);
				setTimeout(function() {
					$item.fadeIn(150);
				}, index * 30); // Stagger each item by 30ms
			});
		}, 50);
	}
	
	function setupFilters() {
		$('.portfolio-filters li').on('click', function(e) {
			e.preventDefault();
			
			if (isAnimating) return; // Prevent rapid clicking during animation
			
			var $this = $(this);
			var filter = $this.attr('data-filter');
			
			// Update active filter
			$('.portfolio-filters li').removeClass('filter-active');
			$this.addClass('filter-active');
			
			// Update current filter
			currentFilter = filter;
			
			// Apply filter
			applyFilter(filter);
		});
	}
	
	function applyFilter(filter) {
		// Reset view more state
		allProjectsShown = false;
		
		if (filter === '*') {
			// All Projects tab - show initial projects only
			$portfolioItems.each(function(index) {
				var $item = $(this);
				var isInitial = $item.attr('data-initial') === 'true';
				
				if (isInitial) {
					$item.fadeIn(200); // Faster fade in
				} else {
					$item.fadeOut(200); // Faster fade out
				}
			});
			
			// Show view more button if there are more projects
			if (totalProjectsCount > initialProjectsCount) {
				$viewMoreContainer.fadeIn(200);
			} else {
				$viewMoreContainer.fadeOut(200);
			}
			
			// Ensure proper grid layout for All Projects tab - with shorter delay
			setTimeout(function() {
				ensureGridLayout();
			}, 250);
		} else {
			// Use smooth category transition to prevent stacking
			smoothCategoryTransition(filter);
			
			// Hide view more button on category tabs
			$viewMoreContainer.hide();
		}
	}
	
	function setupViewMore() {
		$viewMoreBtn.on('click', function() {
			if (isAnimating) return; // Prevent rapid clicking during animation
			
			if (!allProjectsShown) {
				// Show all projects with smooth animation
				$portfolioItems.each(function() {
					var $item = $(this);
					if ($item.attr('data-initial') === 'false') {
						$item.fadeIn(300);
					}
				});
				
				// Update button text
				$viewMoreBtn.text('Show Less');
				allProjectsShown = true;
			} else {
				// Hide extra projects with smooth animation
				$portfolioItems.each(function() {
					var $item = $(this);
					if ($item.attr('data-initial') === 'false') {
						$item.fadeOut(300);
					}
				});
				
				// Update button text
				$viewMoreBtn.text('View More Projects');
				allProjectsShown = false;
			}
			
			// Ensure proper grid layout - with shorter delay
			setTimeout(function() {
				ensureGridLayout();
			}, 350);
		});
	}
	
	// Handle window resize for responsive behavior - debounced
	var resizeTimer;
	$(window).on('resize', function() {
		clearTimeout(resizeTimer);
		resizeTimer = setTimeout(function() {
			ensureGridLayout();
		}, 150); // Reduced delay for faster response
	});
	
	// Handle isotope layout after images load - single call
	$portfolioContainer.imagesLoaded(function() {
		setTimeout(function() {
			ensureGridLayout();
		}, 100); // Reduced delay for faster response
	});
});
