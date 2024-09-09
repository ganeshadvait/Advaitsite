const nav = document.querySelector("nav");
const toggleButton = document.querySelector("#toggleButton");
const navMenu = document.querySelector(".menu");
const toggleButtonLine1 = document.querySelector("#toggleButtonLine1");
const toggleButtonLine2 = document.querySelector("#toggleButtonLine2");

{/*gsap.matchMedia().add("(max-width: 768px)", () => {
  // Animation for mobile screens (max-width 768px)
  gsap.to(nav, {
    duration: 0.3,
    width: "20rem", // Adjusted width for mobile
    height: "25rem", // Adjusted height for mobile
    ease: "power2.inOut",
    borderRadius: "2rem", // Adjusted border-radius for mobile
  });
});*/}

console.log(toggleButtonLine1);
let isToggled = false;
toggleButton.addEventListener("click", function () {
  // open the nav
  if (isToggled === false) {
    isToggled = true;
	   gsap.to(nav, {
      duration: 0.3,
      width: "25rem",
      height: "30rem",
		    zIndex: 1000,
      ease: "power2.inOut",
      borderRadius: "3rem",
    });
	  gsap.matchMedia().add("(max-width: 768px)", () => {
    gsap.to(nav, {
      duration: 0.3,
      width: "95%",
      height: "30rem",
      ease: "power2.inOut",
      borderRadius: "3rem",
    });
	  });
    gsap.to("nav button", {
      duration: 0.2,
      top: "1vh",
      right: "1vh",
      ease: "power2.inOut",
    });
    gsap.to(toggleButtonLine1, {
      duration: 0.2,
      rotate: 45,
      top: "50%",
      left: "50%",
      rotate: 45,
      ease: "power2.inOut",
    });
    gsap.to(toggleButtonLine2, {
      duration: 0.2,
      top: "50%",
      left: "50%",
      rotate: -45,
      ease: "power2.inOut",
    });
    gsap.to(navMenu, {
      duration: 0.4,
      visibility: "visible",
      opacity: 1,
      ease: "power2.inOut",
    });

    // close the nav
  } else {
    isToggled = false;
    gsap.to(nav, {
      duration: 0.3,
      width: "5rem",
      height: "5rem",
      ease: "power2.inOut",
      borderRadius: "5rem",
    });
    gsap.to("nav button", {
      duration: 0.4,
      top: "0vh",
      right: "0vh",
      ease: "power2.inOut",
    });
    gsap.to(toggleButtonLine1, {
      duration: 0.2,
      rotate: 0,
      top: "42.5%",
      left: "50%",
      rotate: 0,
      ease: "power2.inOut",
    });
    gsap.to(toggleButtonLine2, {
      duration: 0.2,
      rotate: 0,
      top: "57.5%",
      left: "50%",
      rotate: 0,
      ease: "power2.inOut",
    });
    gsap.to(navMenu, {
      duration: 0.2,
      visibility: "hidden",
      opacity: 0,
      ease: "power2.inOut",
    });
  }
});
// cursor styles starts here
let cursor = document.querySelector(".cursor");
let cursor2 = document.querySelector(".cursor2");
let cursorScale = document.querySelectorAll(".cursor-scale");
let cursorScaletwo = document.querySelectorAll('.cursor-scale-two');
let cursorImage = document.querySelectorAll('.image-cursor');
let mouseX = 0;
let mouseY = 0;
gsap.to({}, 0.016, {
  repeat: -1,
  onRepeat: function () {
    gsap.set(cursor, {
      css: {
        left: mouseX,
        top: mouseY
      }
    });
    gsap.set(cursor2, {
      css: {
        left: mouseX,
        top: mouseY
      }
    });
  }
});
window.addEventListener("mousemove", (e) => {
  mouseX = e.clientX;
  mouseY = e.clientY;
});

cursorScale.forEach((link) => {
  link.addEventListener("mousemove", () => {
    cursor.classList.add("grow");
    if (link.classList.contains("small")) {
      cursor.classList.remove("grow");
      cursor.classList.add("grow-small");
    }
  });

  link.addEventListener("mouseleave", () => {
    cursor.classList.remove("grow");
    cursor.classList.remove("grow-small");
  });
});
cursorScaletwo.forEach((link) => {
  link.addEventListener("mousemove", () => {
    cursor.classList.add("grow-two");
    if (link.classList.contains("small-two")) {
      cursor.classList.remove("grow-two");
      cursor.classList.add("grow-small-two");
    }
  });

  link.addEventListener("mouseleave", () => {
    cursor.classList.remove("grow-two");
    cursor.classList.remove("grow-small-two");
  });
});
cursorImage.forEach((link) => {
  link.addEventListener("mousemove", () => {
    cursor.classList.add("grow-two");
    if (link.classList.contains("small-two")) {
      cursor.classList.remove("grow-two");
      cursor.classList.add("grow-small-two");
    }
  });

  link.addEventListener("mouseleave", () => {
    cursor.classList.remove("grow-two");
    cursor.classList.remove("grow-small-two");
  });
});

//Buttons Scripts
const ANIMATEDCLASSNAME = "animated";
const ELEMENTS = document.querySelectorAll(".HOVER");
const ELEMENTSTWO = document.querySelectorAll('.HOVER-two');
const ELEMENTSTHREE = document.querySelectorAll('.HOVER-three');
const ELEMENTS_SPAN = [];
const ELEMENTSTWO_SPAN = [];
const ELEMENTSTHREE_SPAN = [];

ELEMENTS.forEach((element, index) => {
	let addAnimation = false;
	// Elements that contain the "FLASH" class, add a listener to remove
	// animation-class when the animation ends
	if (element.classList[1] == "FLASH") {
		element.addEventListener("animationend", e => {
			element.classList.remove(ANIMATEDCLASSNAME);
		});
		addAnimation = true;
	}

	// If The span element for this element does not exist in the array, add it.
	if (!ELEMENTS_SPAN[index])
		ELEMENTS_SPAN[index] = element.querySelector("span");

	element.addEventListener("mouseover", e => {
		ELEMENTS_SPAN[index].style.left = e.pageX - element.offsetLeft + "px";
		ELEMENTS_SPAN[index].style.top = e.pageY - element.offsetTop + "px";

		// Add an animation-class to animate via CSS.
		if (addAnimation) element.classList.add(ANIMATEDCLASSNAME);
	});

	element.addEventListener("mouseout", e => {
		ELEMENTS_SPAN[index].style.left = e.pageX - element.offsetLeft + "px";
		ELEMENTS_SPAN[index].style.top = e.pageY - element.offsetTop + "px";
	});
});
ELEMENTSTWO.forEach((element, index) => {
	let addAnimation = false;
	// Elements that contain the "FLASH" class, add a listener to remove
	// animation-class when the animation ends
	if (element.classList[1] == "FLASHTWO") {
		element.addEventListener("animationend", e => {
			element.classList.remove(ANIMATEDCLASSNAME);
		});
		addAnimation = true;
	}

	// If The span element for this element does not exist in the array, add it.
	if (!ELEMENTSTWO_SPAN[index])
		ELEMENTSTWO_SPAN[index] = element.querySelector("span");

	element.addEventListener("mouseover", e => {
		ELEMENTSTWO_SPAN[index].style.left = e.pageX - element.offsetLeft + "px";
		ELEMENTSTWO_SPAN[index].style.top = e.pageY - element.offsetTop + "px";

		// Add an animation-class to animate via CSS.
		if (addAnimation) element.classList.add(ANIMATEDCLASSNAME);
	});

	element.addEventListener("mouseout", e => {
		ELEMENTSTWO_SPAN[index].style.left = e.pageX - element.offsetLeft + "px";
		ELEMENTSTWO_SPAN[index].style.top = e.pageY - element.offsetTop + "px";
	});
});

ELEMENTSTHREE.forEach((element, index) => {
	let addAnimation = false;
	// Elements that contain the "FLASH" class, add a listener to remove
	// animation-class when the animation ends
	if (element.classList[1] == "FLASHTHREE") {
		element.addEventListener("animationend", e => {
			element.classList.remove(ANIMATEDCLASSNAME);
		});
		addAnimation = true;
	}

	// If The span element for this element does not exist in the array, add it.
	if (!ELEMENTSTHREE_SPAN[index])
		ELEMENTSTHREE_SPAN[index] = element.querySelector("span");

	element.addEventListener("mouseover", e => {
		ELEMENTSTHREE_SPAN[index].style.left = e.pageX - element.offsetLeft + "px";
		ELEMENTSTHREE_SPAN[index].style.top = e.pageY - element.offsetTop + "px";

		// Add an animation-class to animate via CSS.
		if (addAnimation) element.classList.add(ANIMATEDCLASSNAME);
	});

	element.addEventListener("mouseout", e => {
		ELEMENTSTHREE_SPAN[index].style.left = e.pageX - element.offsetLeft + "px";
		ELEMENTSTHREE_SPAN[index].style.top = e.pageY - element.offsetTop + "px";
	});
});
//BUTTONS SCRIPTS ENDS HERE




const lenis = new Lenis({
  // Valeur entre 0 et 1
  // Valeur par défaut : 0,1
  // Plus la valeur est faible, plus le scroll sera fluide
  lerp: 0.05, 
  // Valeur par défaut : 1
  // Plus la valeur est haute, plus le défilement sera rapide 
  wheelMultiplier: 1, 
});

function raf(time) {
  lenis.raf(time);
  requestAnimationFrame(raf);
}
requestAnimationFrame(raf);

 {/*
const initSmoothScrolling = () => {
	// Instantiate the Lenis object with specified properties
	lenis = new Lenis({
		lerp: 0.2, // Lower values create a smoother scroll effect
		smoothWheel: true // Enables smooth scrolling for mouse wheel events
	});

	// Update ScrollTrigger each time the user scrolls
	lenis.on('scroll', () => ScrollTrigger.update());

	// Define a function to run at each animation frame
	const scrollFn = (time) => {
		lenis.raf(time); // Run Lenis' requestAnimationFrame method
		requestAnimationFrame(scrollFn); // Recursively call scrollFn on each frame
	};
	// Start the animation frame loop
	requestAnimationFrame(scrollFn);
};
// Initialization function
const init = () => {
    initSmoothScrolling(); // Initialize Lenis for smooth scrolling
    scroll(); // Apply scroll-triggered animations
};

*/}
//horizontal scroll scripts
{/* 
document.addEventListener("DOMContentLoaded", function() {
    gsap.registerPlugin(ScrollTrigger);

    let scroll_tl = gsap.timeline({
        scrollTrigger: {
            trigger: '.hero-image img',  // The element that triggers the animation
            start: "top center",         // When the top of the img reaches the center of the viewport
            scrub: true,                 // Allows scrubbing of the animation during scroll
            end: "+=400",                // How far the scroll trigger should last
                        // Use for debugging; remove when done
        }
    });

    // Animating the image inside the hero-image container
    scroll_tl.to('.hero-image img', {
        scale: 1.2,           //
		 duration: 1,          // 1 second animation duration
        ease: "slow"          // Smooth easing
    });
});
*/}

document.addEventListener("DOMContentLoaded", function() {
    gsap.registerPlugin(ScrollTrigger);

    const container = document.querySelector(".scroll-container"); // Replace with your container class or ID
    const cards = gsap.utils.toArray(".card-items");

    gsap.to(cards, {
        xPercent: -100 * (cards.length - 1),
		duration:2.5,
        ease: "slow",
        scrollTrigger: {
            trigger: container,
            pin: true,
            anticipatePin: true,
            stagger: { amount: -1 },
            scrub: true,
            snap: 1 / (cards.length - 1),
            end: "+=" + container.offsetWidth,
          
        },
    });
});



// Preload images and background images
const preloadImages = (selector = 'img') => {
    return new Promise((resolve) => {
        imagesLoaded(document.querySelectorAll(selector), { background: true }, resolve);
    });
};

// Query all content elements with the 'content--sticky' class
const contentElements = [...document.querySelectorAll('.content--sticky')];
const totalContentElements = contentElements.length;

// Function to handle scroll-triggered animations
const scroll = () => {

    contentElements.forEach((el, position) => {

        const isLast = position === totalContentElements - 1;

        // Set up GSAP timeline for each content element
        gsap.timeline({
			 ease: "slow",
            scrollTrigger: {
                trigger: el,
                start: 'top center',
                end: '+=100%',
                scrub: true,
            }
        })
        .to(el, {
             ease: "slow",
            startAt: { filter: 'brightness(100%)' },
            filter: isLast ? 'none' : 'brightness(100%)',
            scale: 0.95,
            borderRadius: 40,
        }, 0);
    });

};

// Preload images and initialize the scroll animation
preloadImages('.content__img').then(() => {
    // Once images are preloaded, remove the 'loading' class from the body
    document.body.classList.remove('loading');
    
    // Initialize the scroll animation
    scroll();
});
//BACKGROUND-COLOR-CHANGE SCRIPT 
 function changeBodyColor(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                document.body.style.backgroundColor = '#ffF';  // Red when the box is in view
            } else {
                document.body.style.backgroundColor = '';  // Reset background when the box is out of view
            }
        });
    }

    // Create an Intersection Observer
    const observer = new IntersectionObserver(changeBodyColor, {
        threshold: 0.5 // Trigger when 50% of the box is visible
    });

    // Observe the single box
    observer.observe(document.querySelector('#box1'));
