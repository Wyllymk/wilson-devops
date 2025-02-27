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
Alpine.start();

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

window.addEventListener('load', function () {
	const spinnerLoader = document.querySelector('#spinner-loader');
	if (spinnerLoader) {
		spinnerLoader.classList.add('hidden');
	}
});

document.addEventListener('DOMContentLoaded', () => {
	// Register ScrollTrigger with GSAP
	gsap.registerPlugin(ScrollTrigger);

	// Animate the central line growing from top to bottom
	gsap.fromTo(
		'.journey-line',
		{
			height: 0,
		},
		{
			height: '100%',
			duration: 2,
			ease: 'power2.out',
			scrollTrigger: {
				trigger: '.journey-section',
				start: 'top 80%',
				toggleActions: 'play none none reset',
			},
		}
	);

	// Animate each journey item on scroll
	gsap.utils.toArray('.journey-item').forEach((item, index) => {
		gsap.fromTo(
			item.querySelectorAll('.flex-1'),
			{
				opacity: 0,
				x: index % 2 === 0 ? 50 : -50,
			},
			{
				opacity: 1,
				x: 0,
				duration: 1,
				ease: 'power3.out',
				scrollTrigger: {
					trigger: item,
					start: 'top 80%',
					toggleActions: 'play none none reset',
				},
			}
		);
		gsap.fromTo(
			item.querySelector('.journey-dot'),
			{
				scale: 0,
			},
			{
				scale: 1,
				duration: 0.8,
				ease: 'elastic.out(1, 0.5)',
				scrollTrigger: {
					trigger: item,
					start: 'top 80%',
					toggleActions: 'play none none reset',
				},
			}
		);
	});

	// Pulse effect for dots
	gsap.to('.journey-dot', {
		scale: 1.2,
		duration: 1,
		repeat: -1,
		yoyo: true,
		ease: 'sine.inOut',
		stagger: 0.3,
	});
});

document.addEventListener('DOMContentLoaded', () => {
	// Intro animation
	gsap.from('.intro-section h1', {
		opacity: 0,
		y: 50,
		duration: 1,
		ease: 'power3.out',
	});
	gsap.from('.intro-section p', {
		opacity: 0,
		y: 30,
		duration: 1,
		delay: 0.3,
	});
	gsap.from('.intro-section a', {
		opacity: 0,
		scale: 0.9,
		duration: 1,
		delay: 0.6,
	});
	gsap.to('#servicePath', {
		duration: 4,
		strokeDasharray: '200',
		strokeDashoffset: '200',
		repeat: -1,
		ease: 'linear',
	});

	// Service cards animation
	gsap.utils.toArray('.service-card').forEach((card, i) => {
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
			delay: i * 0.2,
		});
	});

	// Process steps animation
	gsap.from('.process-line', {
		height: 0,
		duration: 1.5,
		ease: 'power2.out',
		scrollTrigger: {
			trigger: '.process-step',
			start: 'top 80%',
		},
	});
	gsap.utils.toArray('.process-step').forEach((step, i) => {
		gsap.from(step, {
			opacity: 0,
			x: i % 2 === 0 ? -50 : 50,
			duration: 1,
			ease: 'power3.out',
			scrollTrigger: {
				trigger: step,
				start: 'top 80%',
				toggleActions: 'play none none none',
			},
			delay: i * 0.3,
		});
	});

	// Tech items animation
	gsap.utils.toArray('.tech-item').forEach((item, i) => {
		gsap.from(item, {
			opacity: 0,
			scale: 0.8,
			duration: 0.8,
			ease: 'elastic.out(1, 0.5)',
			scrollTrigger: {
				trigger: item,
				start: 'top 90%',
				toggleActions: 'play none none none',
			},
			delay: i * 0.1,
		});
	});
});

document.addEventListener('DOMContentLoaded', () => {
	gsap.from('.projects-hero h1', {
		opacity: 0,
		y: 50,
		duration: 1,
		ease: 'power3.out',
	});
	gsap.from('.projects-hero p', {
		opacity: 0,
		y: 30,
		duration: 1,
		delay: 0.3,
	});
	gsap.to('#projectPath', {
		duration: 4,
		strokeDasharray: '200',
		strokeDashoffset: '200',
		repeat: -1,
		ease: 'linear',
	});

	gsap.utils.toArray('.project-card').forEach((card, i) => {
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
			delay: i * 0.2,
		});
	});
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

	// SVG Path Animation (unique to this page)
	gsap.to('#dejavuPath', {
		duration: 4,
		strokeDasharray: '200',
		strokeDashoffset: '200',
		repeat: -1,
		ease: 'linear',
	});

	gsap.to('#nyeriPath', {
		duration: 4,
		strokeDasharray: '200',
		strokeDashoffset: '200',
		repeat: -1,
		ease: 'linear',
	});
});
