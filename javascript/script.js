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
// Enhanced Scroll to Top with Progress Indicator (Alpine.js)
Alpine.data('scrollToTop', () => ({
	visible: false,
	progress: 0,

	init() {
		let ticking = false;

		const updateScrollProgress = () => {
			const scrollTop =
				window.pageYOffset || document.documentElement.scrollTop;
			const scrollHeight =
				document.documentElement.scrollHeight - window.innerHeight;
			const scrollProgress = (scrollTop / scrollHeight) * 100;

			this.progress = Math.min(Math.max(scrollProgress, 0), 100);
			this.visible = scrollTop > 300;

			ticking = false;
		};

		window.addEventListener('scroll', () => {
			if (!ticking) {
				requestAnimationFrame(updateScrollProgress);
				ticking = true;
			}
		});
	},

	scrollTop() {
		// Use native smooth scroll if available
		if ('scrollBehavior' in document.documentElement.style) {
			window.scrollTo({
				top: 0,
				behavior: 'smooth',
			});
		} else {
			// Fallback for older browsers (manual easing)
			const duration = 600;
			const start = window.pageYOffset;
			const startTime = performance.now();

			const easeOutCubic = (t) => 1 - Math.pow(1 - t, 3);

			const animateScroll = (currentTime) => {
				const elapsed = currentTime - startTime;
				const progress = Math.min(elapsed / duration, 1);
				const position = start * (1 - easeOutCubic(progress));

				window.scrollTo(0, position);

				if (elapsed < duration) {
					requestAnimationFrame(animateScroll);
				}
			};

			requestAnimationFrame(animateScroll);
		}
	},
}));

// Footer Animations and Interactions
document.addEventListener('DOMContentLoaded', function () {
	// Animated floating shapes in footer background
	function animateFloatingShapes() {
		const shapes = document.querySelectorAll(
			'footer .absolute > div > div'
		);

		shapes.forEach((shape) => {
			// Random gentle movement
			const floatAnimation = () => {
				const randomX = (Math.random() - 0.5) * 20;
				const randomY = (Math.random() - 0.5) * 20;
				const randomRotate = (Math.random() - 0.5) * 10;

				shape.style.transform = `translate(${randomX}px, ${randomY}px) rotate(${randomRotate}deg)`;

				setTimeout(floatAnimation, 3000 + Math.random() * 2000);
			};

			// Start animation with random delay
			setTimeout(floatAnimation, Math.random() * 2000);
		});
	}

	// Start floating animation
	animateFloatingShapes();

	// Social media hover effects with sound/vibration feedback
	const socialButtons = document.querySelectorAll('footer a[aria-label]');

	socialButtons.forEach((button) => {
		button.addEventListener('mouseenter', () => {
			// Add subtle haptic feedback if supported
			if (navigator.vibrate) {
				navigator.vibrate(50);
			}

			// Add ripple effect
			createRippleEffect(button);
		});

		button.addEventListener('click', () => {
			// Stronger haptic feedback on click
			if (navigator.vibrate) {
				navigator.vibrate([50, 30, 50]);
			}
		});
	});

	// Create ripple effect function
	function createRippleEffect(element) {
		const ripple = document.createElement('div');
		ripple.className =
			'absolute inset-0 rounded-full bg-white/20 scale-0 animate-ping pointer-events-none';

		element.style.position = 'relative';
		element.appendChild(ripple);

		// Remove ripple after animation
		setTimeout(() => {
			if (ripple.parentElement) {
				ripple.remove();
			}
		}, 1000);
	}

	// Tech stack tags animation on scroll
	const observeTechStack = () => {
		const techTags = document.querySelectorAll(
			'footer span[class*="from-"]'
		);

		const observer = new IntersectionObserver(
			(entries) => {
				entries.forEach((entry, index) => {
					if (entry.isIntersecting) {
						// Staggered animation
						setTimeout(() => {
							entry.target.style.opacity = '1';
							entry.target.style.transform =
								'translateY(0) scale(1)';
						}, index * 100);
					}
				});
			},
			{
				threshold: 0.1,
				rootMargin: '0px 0px -50px 0px',
			}
		);

		techTags.forEach((tag) => {
			// Initial state
			tag.style.opacity = '0';
			tag.style.transform = 'translateY(20px) scale(0.8)';
			tag.style.transition = 'all 0.5s ease-out';

			observer.observe(tag);
		});
	};

	// Initialize tech stack animation
	observeTechStack();

	// Footer logo animation
	const footerLogo = document.querySelector('footer img[alt*="logo"]');
	if (footerLogo) {
		footerLogo.addEventListener('mouseenter', () => {
			footerLogo.style.transform = 'scale(1.1) rotate(5deg)';
		});

		footerLogo.addEventListener('mouseleave', () => {
			footerLogo.style.transform = 'scale(1) rotate(0deg)';
		});
	}

	// Animated gradient line at bottom
	const gradientLine = document.querySelector('footer .h-1.bg-gradient-to-r');
	if (gradientLine) {
		let gradientPosition = 0;

		const animateGradient = () => {
			gradientPosition += 1;
			gradientLine.style.backgroundPosition = `${gradientPosition}% 0%`;

			if (gradientPosition >= 100) {
				gradientPosition = 0;
			}

			requestAnimationFrame(animateGradient);
		};

		// Start gradient animation
		animateGradient();
	}

	// Copyright year automatic update with animation
	const currentYear = new Date().getFullYear();
	const yearSpans = document.querySelectorAll('footer span');
	let copyrightYear;

	yearSpans.forEach((span) => {
		if (span.textContent.includes(currentYear)) {
			copyrightYear = span;
		}
	});

	if (copyrightYear) {
		// Add subtle pulse animation to current year
		setInterval(() => {
			copyrightYear.style.transform = 'scale(1.05)';
			setTimeout(() => {
				copyrightYear.style.transform = 'scale(1)';
			}, 200);
		}, 5000);
	}

	// Footer visibility animation
	const footer = document.querySelector('footer');
	const footerObserver = new IntersectionObserver(
		(entries) => {
			entries.forEach((entry) => {
				if (entry.isIntersecting) {
					footer.classList.add('animate-fade-in');

					// Animate footer sections sequentially
					const footerSections = footer.querySelectorAll(
						'footer > div > div > div'
					);
					footerSections.forEach((section, index) => {
						setTimeout(() => {
							section.style.opacity = '1';
							section.style.transform = 'translateY(0)';
						}, index * 200);
					});
				}
			});
		},
		{
			threshold: 0.1,
		}
	);

	// Initial state for footer sections
	const footerSections = footer.querySelectorAll('footer > div > div > div');
	footerSections.forEach((section) => {
		section.style.opacity = '0';
		section.style.transform = 'translateY(30px)';
		section.style.transition = 'all 0.6s ease-out';
	});

	footerObserver.observe(footer);
});

// 1. Enhanced Sticky Header with Hide/Show on Scroll (Alpine.js)
Alpine.data('stickyHeader', () => ({
	isScrolled: false,
	isHidden: false,
	lastScrollY: 0,
	scrollDirection: 'up',

	init() {
		this.lastScrollY = window.scrollY;

		// Enhanced scroll listener with better performance
		let ticking = false;

		const updateScrollState = () => {
			const currentScrollY = window.scrollY;

			// Blur effect when scrolled ≥ 20px
			this.isScrolled = currentScrollY > 20;

			// Determine scroll direction
			if (currentScrollY > this.lastScrollY) {
				this.scrollDirection = 'down';
			} else {
				this.scrollDirection = 'up';
			}

			// Hide/show header based on scroll
			if (currentScrollY > this.lastScrollY && currentScrollY > 100) {
				this.isHidden = true; // scrolling down
			} else if (
				currentScrollY < this.lastScrollY ||
				currentScrollY <= 50
			) {
				this.isHidden = false; // scrolling up or near top
			}

			this.lastScrollY = currentScrollY;
			ticking = false;
		};

		window.addEventListener('scroll', () => {
			if (!ticking) {
				requestAnimationFrame(updateScrollState);
				ticking = true;
			}
		});
	},
}));

// 2. Enhanced Mobile Menu with Smooth Animations
document.addEventListener('DOMContentLoaded', function () {
	const menuButton = document.querySelector('#menuButton');
	const menuLinks = document.querySelectorAll('.menu-link');
	const navLinks = document.querySelectorAll('.nav-link');
	const navMenu = document.querySelector('#navMenu');
	const overlay = document.getElementById('overlay');
	const sections = document.querySelectorAll('section');
	const body = document.body;

	const linkMap = {};
	let isMenuOpen = false;
	const originalStyle = window.getComputedStyle(body).overflow;

	// ===== Utility Functions =====
	function toggleBodyScroll(disable) {
		body.style.overflow = disable ? 'hidden' : originalStyle;
	}

	function updateMenuButton(isOpen) {
		const lines = menuButton.querySelectorAll('div > div');
		if (!lines.length) return;

		if (isOpen) {
			lines[0].style.transform = 'rotate(45deg) translate(6px, 6px)';
			lines[1].style.opacity = '0';
			lines[2].style.transform = 'rotate(-45deg) translate(6px, -6px)';
		} else {
			lines[0].style.transform = 'rotate(0) translate(0, 0)';
			lines[1].style.opacity = '1';
			lines[2].style.transform = 'rotate(0) translate(0, 0)';
		}
	}

	// ===== Menu Toggle Functions =====
	function openMenu() {
		isMenuOpen = true;
		updateMenuButton(true);
		toggleBodyScroll(true);

		// Show overlay first
		overlay.classList.remove('hidden');

		// Animate menu in
		requestAnimationFrame(() => {
			navMenu.classList.remove('translate-x-full', 'opacity-0');
			navMenu.classList.add('opacity-100');
			overlay.style.opacity = '1';

			// Stagger menu item animations
			const menuItems = navMenu.querySelectorAll('.menu-link');
			menuItems.forEach((item, index) => {
				item.style.transform = 'translateX(100px)';
				item.style.opacity = '0';

				setTimeout(() => {
					item.style.transition = 'all 0.3s ease-out';
					item.style.transform = 'translateX(0)';
					item.style.opacity = '1';
				}, index * 100);
			});
		});
	}

	function closeMenu() {
		isMenuOpen = false;
		updateMenuButton(false);
		toggleBodyScroll(false);

		const menuItems = navMenu.querySelectorAll('.menu-link');
		menuItems.forEach((item, index) => {
			setTimeout(() => {
				item.style.transform = 'translateX(100px)';
				item.style.opacity = '0';
			}, index * 50);
		});

		setTimeout(() => {
			navMenu.classList.add('translate-x-full', 'opacity-0');
			navMenu.classList.remove('opacity-100');
			overlay.style.opacity = '0';

			setTimeout(() => {
				overlay.classList.add('hidden');
				menuItems.forEach((item) => {
					item.style.transform = '';
					item.style.opacity = '';
					item.style.transition = '';
				});
			}, 300);
		}, 200);
	}

	// ===== Menu Events =====
	menuButton.addEventListener('click', function (e) {
		e.preventDefault();
		isMenuOpen ? closeMenu() : openMenu();
	});

	overlay.addEventListener('click', closeMenu);

	menuLinks.forEach((link) => {
		link.addEventListener('click', () => {
			setTimeout(closeMenu, 200); // Small delay for UX
		});
	});

	// ===== Section → Link Mapping =====
	menuLinks.forEach((link) => {
		const menuItem = link.querySelector('.menu-item');
		if (menuItem) {
			const sectionId = menuItem.textContent
				.trim()
				.toLowerCase()
				.replace(/\s+/g, '');
			linkMap[sectionId] = { mobile: link, desktop: null };
		}
	});

	navLinks.forEach((link) => {
		const sectionId = link.textContent
			.trim()
			.toLowerCase()
			.replace(/\s+/g, '');
		if (!linkMap[sectionId]) {
			linkMap[sectionId] = { mobile: null, desktop: link };
		} else {
			linkMap[sectionId].desktop = link;
		}
	});

	// ===== Section Highlighting =====
	const observerOptions = {
		root: null,
		rootMargin: '0px 0px -100px 0px',
		threshold: [0.1, 0.3, 0.7],
	};

	const observer = new IntersectionObserver((entries) => {
		entries.forEach((entry) => {
			const sectionName = entry.target.id
				.toLowerCase()
				.replace(/\s+/g, '');
			const links = linkMap[sectionName];
			if (!links) return;

			if (entry.isIntersecting && entry.intersectionRatio > 0.3) {
				// Reset all
				Object.values(linkMap).forEach((linkSet) => {
					if (linkSet.mobile) {
						linkSet.mobile.classList.remove(
							'bg-gradient-to-r',
							'from-teal-50',
							'to-cyan-50',
							'dark:from-teal-900/30',
							'dark:to-cyan-900/30',
							'border-teal-200',
							'dark:border-teal-800'
						);
						linkSet.mobile.classList.add('border-transparent');
					}
					if (linkSet.desktop) {
						linkSet.desktop.classList.remove('text-teal-500');
						linkSet.desktop.classList.add('dark:text-gray-300');
					}
				});

				// Highlight active
				if (links.mobile) {
					links.mobile.classList.add(
						'bg-gradient-to-r',
						'from-teal-50',
						'to-cyan-50',
						'dark:from-teal-900/30',
						'dark:to-cyan-900/30',
						'border-teal-200',
						'dark:border-teal-800'
					);
					links.mobile.classList.remove('border-transparent');
				}
				if (links.desktop) {
					links.desktop.classList.add('text-teal-500');
					links.desktop.classList.remove('dark:text-gray-300');
				}
			}
		});
	}, observerOptions);

	sections.forEach((section) => observer.observe(section));

	// ===== Keyboard Close =====
	document.addEventListener('keydown', (e) => {
		if (e.key === 'Escape' && isMenuOpen) closeMenu();
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
