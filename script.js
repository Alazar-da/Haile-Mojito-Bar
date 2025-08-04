document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    
    menuBtn.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
    });
    
    // Close mobile menu when clicking a link
    const mobileLinks = mobileMenu.querySelectorAll('a');
    mobileLinks.forEach(link => {
        link.addEventListener('click', function() {
            mobileMenu.classList.add('hidden');
        });
    });
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Contact form validation
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Reset errors
            document.querySelectorAll('[id$="-error"]').forEach(el => {
                el.classList.add('hidden');
            });
            
            // Validate form
            let isValid = true;
            const name = document.getElementById('name');
            const email = document.getElementById('email');
            const subject = document.getElementById('subject');
            const message = document.getElementById('message');
            
            if (!name.value.trim()) {
                document.getElementById('name-error').classList.remove('hidden');
                isValid = false;
            }
            
            if (!email.value.trim() || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
                document.getElementById('email-error').classList.remove('hidden');
                isValid = false;
            }
            
            if (!subject.value.trim()) {
                document.getElementById('subject-error').classList.remove('hidden');
                isValid = false;
            }
            
            if (!message.value.trim()) {
                document.getElementById('message-error').classList.remove('hidden');
                isValid = false;
            }
            
            if (isValid) {
                // Submit form via AJAX
                const formData = new FormData(contactForm);
                
                fetch(contactForm.action, {
                    method: 'POST',
                    body: formData
                })
                .then(response => {
                    if (response.ok) {
                        // Show success message
                        document.getElementById('form-success').classList.remove('hidden');
                        document.getElementById('form-error').classList.add('hidden');
                        contactForm.reset();
                    } else {
                        throw new Error('Network response was not ok');
                    }
                })
                .catch(error => {
                    // Show error message
                    document.getElementById('form-error').classList.remove('hidden');
                    document.getElementById('form-success').classList.add('hidden');
                    console.error('Error:', error);
                });
            }
        });
    }
    
    // Add animation when scrolling
    const animateOnScroll = function() {
        const elements = document.querySelectorAll('.animate-on-scroll');
        
        elements.forEach(element => {
            const elementPosition = element.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            
            if (elementPosition < windowHeight - 100) {
                element.classList.add('animated');
            }
        });
    };
    
    window.addEventListener('scroll', animateOnScroll);
    animateOnScroll(); // Run once on page load
});


   /*  // Slider functionality
    const sliderTrack = document.querySelector('.slider-track');
    const slides = document.querySelectorAll('.slider-slide');
    const prevBtn = document.querySelector('.slider-prev');
    const nextBtn = document.querySelector('.slider-next');
    const dots = document.querySelectorAll('.slider-dot');
    
    let currentIndex = 0;
    const slideCount = slides.length;
    
    function updateSlider() {
        sliderTrack.style.transform = `translateX(-${currentIndex * 100}%)`;
        
        // Update dots
        dots.forEach((dot, index) => {
            if (index === currentIndex) {
                dot.classList.add('bg-slate-400');
                dot.classList.remove('bg-slate-600');
            } else {
                dot.classList.remove('bg-slate-400');
                dot.classList.add('bg-slate-600');
            }
        });
    }
    
    // Next slide
    nextBtn.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % slideCount;
        updateSlider();
    });
    
    // Previous slide
    prevBtn.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + slideCount) % slideCount;
        updateSlider();
    });
    
    // Dot navigation
    dots.forEach(dot => {
        dot.addEventListener('click', () => {
            currentIndex = parseInt(dot.getAttribute('data-index'));
            updateSlider();
        });
    });
    
    // Auto-advance slides (optional)
    let slideInterval = setInterval(() => {
        currentIndex = (currentIndex + 1) % slideCount;
        updateSlider();
    }, 5000);
    
    // Pause on hover
    const sliderContainer = document.querySelector('.slider-container');
    sliderContainer.addEventListener('mouseenter', () => {
        clearInterval(slideInterval);
    });
    
    sliderContainer.addEventListener('mouseleave', () => {
        slideInterval = setInterval(() => {
            currentIndex = (currentIndex + 1) % slideCount;
            updateSlider();
        }, 5000);
    });
    
    // Initialize
    updateSlider();
 */

    // Testimonial carousel functionality
    /*     document.addEventListener('DOMContentLoaded', function() {
            const container = document.getElementById('testimonialContainer');
            const testimonials = container.querySelectorAll('.testimonial');
            const indicatorContainer = document.getElementById('indicatorContainer');
            
            // Create indicators
            testimonials.forEach((_, index) => {
                const indicator = document.createElement('div');
                indicator.classList.add('indicator');
                if (index === 0) indicator.classList.add('active');
                indicator.addEventListener('click', () => {
                    scrollToTestimonial(index);
                });
                indicatorContainer.appendChild(indicator);
            });
            
            // Scroll to specific testimonial
            function scrollToTestimonial(index) {
                const testimonial = testimonials[index];
                container.scrollTo({
                    left: testimonial.offsetLeft - 30,
                    behavior: 'smooth'
                });
                
                // Update active indicator
                document.querySelectorAll('.indicator').forEach(ind => ind.classList.remove('active'));
                indicatorContainer.children[index].classList.add('active');
            }
            
            // Auto scroll
            let currentIndex = 0;
            setInterval(() => {
                currentIndex = (currentIndex + 1) % testimonials.length;
                scrollToTestimonial(currentIndex);
            }, 5000);
            
            // Handle scroll events to update indicators
            container.addEventListener('scroll', () => {
                const scrollPosition = container.scrollLeft + container.offsetWidth / 2;
                
                testimonials.forEach((testimonial, index) => {
                    const testimonialStart = testimonial.offsetLeft;
                    const testimonialEnd = testimonialStart + testimonial.offsetWidth;
                    
                    if (scrollPosition >= testimonialStart && scrollPosition < testimonialEnd) {
                        document.querySelectorAll('.indicator').forEach(ind => ind.classList.remove('active'));
                        indicatorContainer.children[index].classList.add('active');
                    }
                });
            });
        }); */


          // Menu Popup Functionality
       /*  document.addEventListener('DOMContentLoaded', function() {
            const viewMenuBtn = document.getElementById('viewMenuBtn');
            const closeMenuBtn = document.getElementById('closeMenuBtn');
            const menuPopup = document.getElementById('menuPopup');
            const menuTabs = document.querySelectorAll('.menu-tab');
            const menuContents = document.querySelectorAll('.menu-content');
            
            // Show popup
            viewMenuBtn.addEventListener('click', () => {
                menuPopup.classList.add('active');
                document.body.style.overflow = 'hidden';
            });
            
            // Hide popup
            closeMenuBtn.addEventListener('click', () => {
                menuPopup.classList.remove('active');
                document.body.style.overflow = '';
            });
            
            // Tab switching
            menuTabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    // Remove active class from all tabs and contents
                    menuTabs.forEach(t => t.classList.remove('active'));
                    menuContents.forEach(c => c.classList.add('hidden'));
                    
                    // Add active class to clicked tab and corresponding content
                    tab.classList.add('active');
                    const tabName = tab.getAttribute('data-tab');
                    document.getElementById(`${tabName}Menu`).classList.remove('hidden');
                });
            });
            
            // Close popup when clicking outside content
            menuPopup.addEventListener('click', (e) => {
                if (e.target === menuPopup) {
                    menuPopup.classList.remove('active');
                    document.body.style.overflow = '';
                }
            });
            
            // Close popup with Escape key
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && menuPopup.classList.contains('active')) {
                    menuPopup.classList.remove('active');
                    document.body.style.overflow = '';
                }
            });
        }); */


          /* document.addEventListener('DOMContentLoaded', function() {
            // Gallery Filter
            const filterButtons = document.querySelectorAll('.gallery-filter');
            const galleryItems = document.querySelectorAll('.gallery-item');
            
            filterButtons.forEach(button => {
                button.addEventListener('click', () => {
                    // Update active filter button
                    filterButtons.forEach(btn => btn.classList.remove('active', 'bg-accent', 'text-white'));
                    button.classList.add('active', 'bg-accent', 'text-white');
                    
                    const filter = button.getAttribute('data-filter');
                    
                    // Filter gallery items
                    galleryItems.forEach(item => {
                        if (filter === 'all' || item.getAttribute('data-category') === filter) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
            
            // Lightbox functionality
            const lightbox = document.getElementById('lightbox');
            const lightboxImage = document.getElementById('lightboxImage');
            const lightboxTitle = document.getElementById('lightboxTitle');
            const lightboxDesc = document.getElementById('lightboxDesc');
            const closeLightbox = document.getElementById('closeLightbox');
            const viewButtons = document.querySelectorAll('.gallery-view-btn');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            
            let currentImageIndex = 0;
            const images = Array.from(viewButtons).map(btn => ({
                src: btn.getAttribute('data-src'),
                title: btn.getAttribute('data-title'),
                desc: btn.getAttribute('data-desc')
            }));
            
            // Open lightbox
            viewButtons.forEach((button, index) => {
                button.addEventListener('click', () => {
                    currentImageIndex = index;
                    updateLightbox();
                    lightbox.classList.add('active');
                    document.body.style.overflow = 'hidden';
                });
            });
            
            // Close lightbox
            closeLightbox.addEventListener('click', () => {
                lightbox.classList.remove('active');
                document.body.style.overflow = '';
            });
            
            // Close when clicking outside
            lightbox.addEventListener('click', (e) => {
                if (e.target === lightbox) {
                    lightbox.classList.remove('active');
                    document.body.style.overflow = '';
                }
            });
            
            // Navigation
            prevBtn.addEventListener('click', () => {
                currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
                updateLightbox();
            });
            
            nextBtn.addEventListener('click', () => {
                currentImageIndex = (currentImageIndex + 1) % images.length;
                updateLightbox();
            });
            
            // Keyboard navigation
            document.addEventListener('keydown', (e) => {
                if (!lightbox.classList.contains('active')) return;
                
                if (e.key === 'Escape') {
                    lightbox.classList.remove('active');
                    document.body.style.overflow = '';
                } else if (e.key === 'ArrowLeft') {
                    currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
                    updateLightbox();
                } else if (e.key === 'ArrowRight') {
                    currentImageIndex = (currentImageIndex + 1) % images.length;
                    updateLightbox();
                }
            });
            
            function updateLightbox() {
                const currentImage = images[currentImageIndex];
                lightboxImage.src = currentImage.src;
                lightboxImage.alt = currentImage.title;
                lightboxTitle.textContent = currentImage.title;
                lightboxDesc.textContent = currentImage.desc;
            }
        }); */

// Fancybox Config full menu

 // Initialize Fancybox gallery
  $('[data-fancybox="menu-gallery"]').fancybox({
    buttons: [
      "slideShow",
      "thumbs",
      "zoom",
      "fullScreen",
      "share",
      "close"
    ],
    loop: false,
    protect: true
  });

  // Programmatically open the gallery when button is clicked
  document.getElementById('viewMenuBtn').addEventListener('click', function() {
    document.getElementById('gall-contain').classList.toggle('hidden');
    $('[data-fancybox="menu-gallery"]').eq(0).trigger('click');
  });



        // Fancybox Config gallery
$('[data-fancybox="gallery"]').fancybox({
  buttons: [
    "slideShow",
    "thumbs",
    "zoom",
    "fullScreen",
    "share",
    "close"
  ],
  loop: false,
  protect: true
});


// Scroll Animations
document.addEventListener('DOMContentLoaded', function() {
    // First, add the CSS animations to the head
    const style = document.createElement('style');
    style.textContent = `
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .scroll-animate {
            opacity: 0;
        }
        
        .scroll-animate.animated {
            animation: fadeInUp 0.8s ease-out forwards;
        }
    `;
    document.head.appendChild(style);

    // Add scroll-animate class to all elements we want to animate
    const elementsToAnimate = [
        'section h2', 'section h3', 'section h4',
        'section p', 'section img', 'section a.btn',
        'section button', '.feature', '.testimonial',
        '#home h1', '#home p', '#home a'
    ];
    
    elementsToAnimate.forEach(selector => {
        document.querySelectorAll(selector).forEach(el => {
            el.classList.add('scroll-animate');
        });
    });

    // Intersection Observer setup
    const animateOnScroll = function() {
        const animatedElements = document.querySelectorAll('.scroll-animate');
        
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Add staggered delays based on element type
                    let delay = 0;
                    
                    if (entry.target.matches('h2, h3, h4')) {
                        delay = 0.1;
                    } else if (entry.target.matches('p')) {
                        delay = 0.2;
                    } else if (entry.target.matches('img')) {
                        delay = 0.3;
                    } else if (entry.target.matches('a.btn, button')) {
                        delay = 0.4;
                    }
                    
                    // Apply the animation with delay
                    setTimeout(() => {
                        entry.target.classList.add('animated');
                    }, delay * 1000);
                    
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        animatedElements.forEach(el => {
            observer.observe(el);
        });
    };

    // Initialize animations
    animateOnScroll();
});