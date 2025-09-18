/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

import Alpine from 'alpinejs';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

// Register ScrollTrigger
gsap.registerPlugin(ScrollTrigger);

window.Alpine = Alpine;

Alpine.data('themeToggle', () => ({
	isDark: false,

	init() {
		// Check for stored theme in localStorage
		const storedTheme = localStorage.getItem('theme');

		if (storedTheme) {
			// If theme was explicitly set, use that
			this.isDark = storedTheme === 'dark';
		} else {
			// Otherwise, check OS preference
			this.isDark = window.matchMedia(
				'(prefers-color-scheme: dark)'
			).matches;
		}

		// Apply initial theme
		this.updateTheme();

		// Watch for OS theme changes
		window
			.matchMedia('(prefers-color-scheme: dark)')
			.addEventListener('change', (e) => {
				// Only update based on OS if no theme is stored
				if (!localStorage.getItem('theme')) {
					this.isDark = e.matches;
					this.updateTheme();
				}
			});
	},

	updateTheme() {
		// Apply the dark class to the html element
		if (this.isDark) {
			document.documentElement.classList.add('dark');
		} else {
			document.documentElement.classList.remove('dark');
		}
	},

	toggle() {
		// Toggle the theme state
		this.isDark = !this.isDark;

		// Store the explicitly set preference in localStorage
		localStorage.setItem('theme', this.isDark ? 'dark' : 'light');

		// Apply the theme immediately
		this.updateTheme();
	},
}));

window.Alpine = Alpine;

// ===========================
// SCROLL TO TOP
// ===========================
document.addEventListener('alpine:init', () => {
	Alpine.data('scrollToTop', () => ({
		visible: false,
		lastScrollY: window.scrollY,

		init() {
			window.addEventListener('scroll', this.onScroll.bind(this));
		},

		onScroll() {
			const currentScrollY = window.scrollY;

			if (currentScrollY > 200 && currentScrollY < this.lastScrollY) {
				this.visible = true;
			} else {
				this.visible = false;
			}

			this.lastScrollY = currentScrollY;
		},

		scrollTop() {
			const start = window.pageYOffset;
			const duration = 2000; // 2 second
			const startTime = performance.now();

			const easeInOutQuad = (t, b, c, d) => {
				t /= d / 2;
				if (t < 1) return (c / 2) * t * t + b;
				t--;
				return (-c / 2) * (t * (t - 2) - 1) + b;
			};

			const animateScroll = (currentTime) => {
				const timeElapsed = currentTime - startTime;
				const run = easeInOutQuad(timeElapsed, start, -start, duration);
				window.scrollTo(0, run);

				if (timeElapsed < duration) {
					requestAnimationFrame(animateScroll);
				} else {
					window.scrollTo(0, 0); // Ensure it ends exactly at top
				}
			};

			requestAnimationFrame(animateScroll);
		},
	}));
});

// 1. Sticky Header (Alpine.js)
Alpine.data('stickyHeader', () => ({
	isScrolled: false,
	isHidden: false,
	lastScrollY: 0,

	init() {
		this.lastScrollY = window.scrollY;

		window.addEventListener('scroll', () => {
			const currentScrollY = window.scrollY;

			// Blur effect when scrolled ≥ 20px
			this.isScrolled = currentScrollY > 20;

			// Detect direction
			if (currentScrollY > this.lastScrollY && currentScrollY > 50) {
				this.isHidden = true; // scrolling down
			} else if (currentScrollY < this.lastScrollY) {
				this.isHidden = false; // scrolling up
			}

			this.lastScrollY = currentScrollY;
		});
	},
}));

// 2. Mobile Menu + Section Highlighting
document.addEventListener('DOMContentLoaded', function () {
	const menuButton = document.querySelector('#menuButton');
	const menuLinks = document.querySelectorAll('.menu-link'); // Select all mobile menu links
	const navLinks = document.querySelectorAll('.nav-link'); // Select all desktop navigation links
	const navMenu = document.querySelector('#navMenu');
	const overlay = document.getElementById('overlay');

	const sections = document.querySelectorAll('section'); // All sections on the page
	const linkMap = {}; // Object to map section IDs to menu links and nav-links

	// Map each section to the corresponding menu link (mobile and desktop)
	menuLinks.forEach((link) => {
		const sectionId = link
			.querySelector('.menu-item')
			.textContent.trim()
			.toLowerCase();
		linkMap[sectionId] = { mobile: link, desktop: null };
	});

	navLinks.forEach((link) => {
		const sectionId = link.textContent.trim().toLowerCase(); // Extract section ID from link text
		if (!linkMap[sectionId]) {
			linkMap[sectionId] = { mobile: null, desktop: link };
		} else {
			linkMap[sectionId].desktop = link;
		}
	});

	// Toggle menu on button click
	menuButton.addEventListener('click', function () {
		navMenu.classList.toggle('translate-x-full'); // Slide in/out
		navMenu.classList.toggle('opacity-0'); // Fade in/out
		navMenu.classList.toggle('opacity-100');
		overlay.classList.toggle('hidden');
	});

	// Close menu and overlay when clicking outside the menu (overlay)
	overlay.addEventListener('click', function () {
		closeMenu();
	});

	// Close menu when clicking any mobile menu link
	menuLinks.forEach((link) => {
		link.addEventListener('click', function () {
			closeMenu();
		});
	});

	// Function to close the menu
	function closeMenu() {
		navMenu.classList.add('translate-x-full'); // Slide out
		navMenu.classList.remove('opacity-100');
		navMenu.classList.add('opacity-0'); // Fade out
		overlay.classList.add('hidden');
	}

	const observerOptions = {
		root: null,
		rootMargin: '0px 0px -100px 0px', // Adjust margin to better align sections
		threshold: [0.1, 0.5, 0.9],
	};

	const observer = new IntersectionObserver(function (entries) {
		entries.forEach((entry) => {
			const sectionName = entry.target.id.toLowerCase(); // Section ID matches the section's name
			const links = linkMap[sectionName]; // Get links for this section

			if (entry.isIntersecting) {
				// Add active classes to mobile and desktop links
				if (links) {
					if (links.mobile) {
						links.mobile.classList.add(
							'bg-gray-700',
							'text-teal-500'
						);
					}
					if (links.desktop) {
						links.desktop.classList.add('text-teal-500');
						links.desktop.classList.remove('dark:text-white');
					}
				}
			} else {
				// Remove active classes from mobile and desktop links
				if (links) {
					if (links.mobile) {
						links.mobile.classList.remove(
							'bg-gray-700',
							'text-teal-500'
						);
					}
					if (links.desktop) {
						links.desktop.classList.remove('text-teal-500');
						links.desktop.classList.add('dark:text-white');
					}
				}
			}
		});
	}, observerOptions);

	// Observe all sections
	sections.forEach((section) => {
		observer.observe(section);
	});
});

// 3. Smooth Scroll
function smoothScrollTo(targetId) {
	const target = document.getElementById(targetId);
	if (!target) return;

	const header = document.querySelector('header');
	const offset = header ? header.offsetHeight : 0;
	const startPosition = window.pageYOffset;
	const targetPosition =
		target.getBoundingClientRect().top + startPosition - offset;
	const distance = targetPosition - startPosition;
	const duration = 2000;
	let startTime = null;

	function animation(currentTime) {
		if (startTime === null) startTime = currentTime;
		const timeElapsed = currentTime - startTime;
		const run = easeInOutQuad(
			timeElapsed,
			startPosition,
			distance,
			duration
		);
		window.scrollTo(0, run);
		if (timeElapsed < duration) requestAnimationFrame(animation);
	}

	function easeInOutQuad(t, b, c, d) {
		t /= d / 2;
		if (t < 1) return (c / 2) * t * t + b;
		t--;
		return (-c / 2) * (t * (t - 2) - 1) + b;
	}

	requestAnimationFrame(animation);
}

// Attach smooth scroll to anchors
document.addEventListener('DOMContentLoaded', () => {
	document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
		anchor.addEventListener('click', (e) => {
			const targetId = anchor.getAttribute('href').substring(1);
			if (!targetId) return;
			e.preventDefault();
			smoothScrollTo(targetId);
		});
	});
});

window.addEventListener('load', function () {
	const spinnerLoader = document.querySelector('#spinner-loader');
	if (spinnerLoader) {
		spinnerLoader.classList.add('hidden');
	}
});

document.addEventListener('DOMContentLoaded', () => {
	// Common animation for services and projects cards
	gsap.utils
		.toArray('.services__card, .projects__card')
		.forEach((card, index) => {
			gsap.from(card, {
				opacity: 0,
				y: 60,
				duration: 1,
				delay: index * 0.1, // Staggered delay
				scrollTrigger: {
					trigger: card,
					start: 'top 80%',
				},
			});
		});

	// Responsive animations for mobile and larger screens
	if (window.innerWidth < 730) {
		// Mobile animations
		gsap.utils
			.toArray(
				'.home__name, .home__info, .about__container, .section__title, .about__info, .contact__social, .contact__data'
			)
			.forEach((el) => {
				gsap.from(el, {
					opacity: 0,
					x: -15, // Move from left
					duration: 1,
					scrollTrigger: {
						trigger: el,
						start: 'top 80%',
					},
				});
			});

		gsap.utils.toArray('.home__perfil, .contact__mail').forEach((el) => {
			gsap.from(el, {
				opacity: 0,
				x: 15, // Move from right
				duration: 1,
				scrollTrigger: {
					trigger: el,
					start: 'top 80%',
				},
			});
		});
	} else {
		// Larger screen animations
		gsap.utils
			.toArray(
				'.home__name, .home__info, .about__container, .section__title, .about__info, .contact__social, .contact__data'
			)
			.forEach((el) => {
				gsap.from(el, {
					opacity: 0,
					x: -60, // Move from left
					duration: 1,
					scrollTrigger: {
						trigger: el,
						start: 'top 80%',
					},
				});
			});

		gsap.utils
			.toArray('.home__perfil, .about__image, .contact__mail')
			.forEach((el) => {
				gsap.from(el, {
					opacity: 0,
					x: 60, // Move from right
					duration: 1,
					scrollTrigger: {
						trigger: el,
						start: 'top 80%',
					},
				});
			});
	}
});

// Project Pages
document.addEventListener('DOMContentLoaded', () => {
	// Reusable function for hero animations
	function animateHeroSection(selector) {
		gsap.from(`${selector} h1`, {
			opacity: 0,
			y: 50,
			duration: 1,
			ease: 'power3.out',
		});
		gsap.from(`${selector} p`, {
			opacity: 0,
			y: 30,
			duration: 1,
			delay: 0.3,
		});
		gsap.from(`${selector} a`, {
			opacity: 0,
			scale: 0.9,
			duration: 1,
			delay: 0.6,
			stagger: 0.2,
		});
	}

	// Reusable function for overview animations
	function animateOverviewSection(selector) {
		gsap.from(`${selector} img`, {
			opacity: 0,
			scale: 0.9,
			duration: 1,
			scrollTrigger: {
				trigger: selector,
				start: 'top 80%',
			},
		});
		gsap.from(`${selector} p`, {
			opacity: 0,
			y: 30,
			duration: 1,
			stagger: 0.2,
			scrollTrigger: {
				trigger: selector,
				start: 'top 80%',
			},
		});
	}

	// Reusable function for card animations
	function animateCards(selector, staggerDelay = 0.2) {
		gsap.utils.toArray(selector).forEach((card, i) => {
			gsap.from(card, {
				opacity: 0,
				y: 50,
				duration: 1,
				delay: i * staggerDelay,
				ease: 'power3.out',
				scrollTrigger: {
					trigger: card,
					start: 'top 80%',
				},
			});
		});
	}

	// Reusable function for solution animations
	function animateSolutions(selector, staggerDelay = 0.3) {
		gsap.utils.toArray(selector).forEach((step, i) => {
			gsap.from(step, {
				opacity: 0,
				x: i % 2 === 0 ? -50 : 50,
				duration: 1,
				delay: i * staggerDelay,
				ease: 'power3.out',
				scrollTrigger: {
					trigger: step,
					start: 'top 80%',
				},
			});
		});
	}

	// Reusable function for feature card animations
	function animateFeatureCards(selector, staggerDelay = 0.2) {
		gsap.utils.toArray(selector).forEach((card, i) => {
			gsap.from(card, {
				opacity: 0,
				y: 50,
				duration: 1,
				ease: 'power3.out',
				scrollTrigger: {
					trigger: card,
					start: 'top 80%',
					toggleActions: 'play none none none',
				},
				delay: i * staggerDelay,
			});
		});
	}

	// Apply animations to specific sections
	animateHeroSection('.hero-section');
	animateOverviewSection('.overview-section');
	animateCards('.challenges-section .rounded-xl');
	animateSolutions('.solutions-section .solution');
	animateFeatureCards('.feature-card');
});

document.addEventListener('DOMContentLoaded', function () {
	// Counter Animation
	const counters = document.querySelectorAll('.counter');
	const observerOptions = {
		threshold: 0.7,
	};

	const counterObserver = new IntersectionObserver(function (entries) {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				const counter = entry.target;
				const target = parseFloat(counter.getAttribute('data-target'));
				const increment = target / 50;
				let current = 0;

				const updateCounter = () => {
					if (current < target) {
						current += increment;
						counter.textContent = Math.ceil(current);
						requestAnimationFrame(updateCounter);
					} else {
						counter.textContent = target;
					}
				};

				updateCounter();
				counterObserver.unobserve(counter);
			}
		});
	}, observerOptions);

	counters.forEach((counter) => {
		counterObserver.observe(counter);
	});

	// Tab Functionality
	const tabButtons = document.querySelectorAll('[data-tab]');
	const tabContents = document.querySelectorAll('.tab-content');

	tabButtons.forEach((button) => {
		button.addEventListener('click', function () {
			const targetTab = this.getAttribute('data-tab');

			// Update button states
			tabButtons.forEach((btn) => {
				btn.classList.remove(
					'tab-active',
					'bg-cyber-blue',
					'text-white'
				);
				btn.classList.add('bg-gray-200', 'text-gray-700');
			});
			this.classList.remove('bg-gray-200', 'text-gray-700');
			this.classList.add('tab-active', 'bg-cyber-blue', 'text-white');

			// Update content visibility
			tabContents.forEach((content) => {
				content.classList.remove('active');
				content.classList.add('hidden');
			});
			document.getElementById(targetTab).classList.remove('hidden');
			document.getElementById(targetTab).classList.add('active');
		});
	});

	// Smooth scrolling for anchor links
	document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
		anchor.addEventListener('click', function (e) {
			e.preventDefault();
			const target = document.querySelector(this.getAttribute('href'));
			if (target) {
				target.scrollIntoView({
					behavior: 'smooth',
					block: 'start',
				});
			}
		});
	});

	// Add loading animation to demo links
	document
		.querySelectorAll('a[href*="vms.wilsondevops.com"]')
		.forEach((link) => {
			link.addEventListener('click', function () {
				this.innerHTML =
					'<svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>Loading Demo...';
			});
		});
});

// ✅ Start Alpine once
document.addEventListener('DOMContentLoaded', () => {
	Alpine.start();
});
