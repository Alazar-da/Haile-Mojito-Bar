/* document.addEventListener('DOMContentLoaded', () => {
const menuButton = document.getElementById('menuButton');
const menuPopup = document.getElementById('menuPopup');
const closeButton = document.getElementById('closeButton');
const tabButtons = document.querySelectorAll('.tab-btn');
const tabContents = document.querySelectorAll('.tab-content');

// Show popup
menuButton.addEventListener('click', () => {
    menuPopup.classList.remove('hidden');
});

// Close popup by X button
closeButton.addEventListener('click', () => {
    menuPopup.classList.add('hidden');
});

// Close popup when clicking outside
menuPopup.addEventListener('click', (e) => {
    if (e.target === menuPopup) {
        menuPopup.classList.add('hidden');
    }
});

// Tab switching
tabButtons.forEach(button => {
    button.addEventListener('click', () => {
        // Remove active class from all buttons
        tabButtons.forEach(btn => {
            btn.classList.remove('active', 'bg-sky-800');
            btn.classList.add('bg-slate-600');
        });

        // Add active class to clicked button
        button.classList.add('active', 'bg-sky-800');
        button.classList.remove('bg-slate-600');

        // Hide all tab contents
        tabContents.forEach(content => {
            content.classList.add('hidden');
        });

        // Show selected tab content
        const tabId = button.getAttribute('data-tab') + '-tab';
        document.getElementById(tabId).classList.remove('hidden');
    });
});
}); */


document.addEventListener('DOMContentLoaded', () => {
    const menuButton = document.getElementById('menuButton');
    const menuPopup = document.getElementById('menuPopup');
    const closeButton = document.getElementById('closeButton');
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');

    menuButton.addEventListener('click', () => {
        menuPopup.classList.remove('hidden');
    });

    closeButton.addEventListener('click', () => {
        menuPopup.classList.add('hidden');
    });

    menuPopup.addEventListener('click', (e) => {
        if (e.target === menuPopup) {
            menuPopup.classList.add('hidden');
        }
    });

    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            tabButtons.forEach(btn => {
                btn.classList.remove('active', 'bg-sky-800');
                btn.classList.add('bg-slate-600');
            });
            button.classList.add('active', 'bg-sky-800');
            button.classList.remove('bg-slate-600');

            tabContents.forEach(content => content.classList.add('hidden'));
            const tabId = button.getAttribute('data-tab') + '-tab';
            document.getElementById(tabId).classList.remove('hidden');
        });
    });
});


  // Tab switching functionality
  document.querySelectorAll('.tab-btn').forEach(button => {
    button.addEventListener('click', () => {
      // Remove active class from all buttons
      document.querySelectorAll('.tab-btn').forEach(btn => {
        btn.classList.remove('active');
        btn.classList.add('bg-white/10');
        btn.classList.remove('bg-white/20');
      });
      
      // Add active class to clicked button
      button.classList.add('active');
      button.classList.remove('bg-white/10');
      button.classList.add('bg-white/20');
      
      // Hide all tab contents
      document.querySelectorAll('.tab-content').forEach(content => {
        content.classList.add('hidden');
      });
      
      // Show the selected tab content
      const tabId = button.getAttribute('data-tab') + '-tab';
      document.getElementById(tabId).classList.remove('hidden');
    });
  });
  
  // Close button functionality
  document.getElementById('closeButton').addEventListener('click', () => {
    document.querySelector('.fixed').classList.add('opacity-0', 'scale-95');
    setTimeout(() => {
      document.querySelector('.fixed').remove();
    }, 200);
  });


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


function showPopup() {
    document.getElementById('success-popup').classList.remove('hidden');
  }

  function closePopup() {
    document.getElementById('success-popup').classList.add('hidden');
  }

  // Show popup if PHP set the flag in session/localStorage
  if (sessionStorage.getItem('contactSuccess') === 'true') {
    showPopup();
    sessionStorage.removeItem('contactSuccess');
  }



            const checkbox = document.getElementById('cb2-7');
          
           
          
          
            
              const form = document.getElementById('contact-form');
          
                   const nameInput = document.getElementById('name');
                  const emailInput = document.getElementById('email');
                
                  const messageInput = document.getElementById('message');
          
            const errorName = document.getElementById('error-name');
            const errorEmail = document.getElementById('error-email');
          
            const errorMessage = document.getElementById('error-message');
          
            
          
          
          
          
          
            function validateName() {
              let nameValue = nameInput.value.trim();
          
              if (nameValue === '') {
                errorName.textContent = 'Please enter your name.';
                return false;
              }
          
              let nameRegex = /^[a-zA-Z\s]+$/;
              if (!nameRegex.test(nameValue)) {
                errorName.textContent = 'Name can only contain alphabets and spaces.';
                return false;
              }
          
              errorName.textContent = '';
              return true;
            } 
          
            function validateEmail() {
              const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
              if (!emailRegex.test(emailInput.value.trim())) {
                errorEmail.textContent = 'Please enter a valid email address.';
                return false;
              } else {
                errorEmail.textContent = '';
                return true;
              }
            }
          
            
          
            function validateMessage() {
              let messageValue = messageInput.value.trim();
          
              if (messageValue === '') {
                errorMessage.textContent = 'Please enter a message.';
                return false;
              }
          
              let messageRegex = /^[a-zA-Z0-9\s]+$/;
              if (!messageRegex.test(messageValue)) {
                errorMessage.textContent = 'Message can only contain alphabets, numbers, and spaces.';
                return false;
              }
          
              errorMessage.textContent = '';
              return true;
            }
          
            async function handleSubmit(event) {
              event.preventDefault();
          
              const isNameValid = validateName();
              const isEmailValid = validateEmail();
           
              const isMessageValid = validateMessage();
          
              if (isNameValid && isEmailValid  && isMessageValid) {
                try {
                  const formData = {
                    name: nameInput.value,
                    email: emailInput.value,
                   
                    message: messageInput.value
                  };
          
                  var xhttp = new XMLHttpRequest();
                  xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                      var response = this.responseText;
                      console.log(response);
                    }
                  };
          
                  xhttp.open("POST", "index.php", true);
                  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          
                  var params = Object.keys(formData).map(function(key) {
                    return encodeURIComponent(key) + "=" + encodeURIComponent(formData[key]);
                  }).join("&");
          
                  alert("message sent successfully")
          
                  xhttp.send(params);
                } catch (error) {
                  console.error('Error sending email:', error);
                }
              }
            }
            nameInput.addEventListener('change', validateName);
          nameInput.addEventListener('blur', validateName);
          
          emailInput.addEventListener('change', validateEmail);
          emailInput.addEventListener('blur', validateEmail);
          
          
          
          messageInput.addEventListener('change', validateMessage);
          messageInput.addEventListener('blur', validateMessage);
          
            form.addEventListener('submit', handleSubmit);
        