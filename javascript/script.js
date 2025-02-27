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

	/*=============== SCROLL REVEAL ANIMATION ===============*/
	const sr = ScrollReveal({
		origin: 'top',
		distance: '60px',
		duration: 2500,
		delay: 400,
		// reset: true
	});

	// Reveal elements
	sr.reveal(`.services__card, .projects__card`, { interval: 100 });

	if (window.innerWidth < 730) {
		// For mobile screens
		sr.reveal(
			`.home__name, .home__info, .about__container, .section__title, .about__info, .contact__social, .contact__data`,
			{
				origin: 'left',
				distance: '20px', // Reduced distance for mobile
			}
		);
		sr.reveal(`.home__perfil, .contact__mail`, {
			origin: 'right',
			distance: '10px', // Reduced distance for mobile
		});
	} else {
		// For larger screens
		sr.reveal(
			`.home__name, .home__info, .about__container, .section__title, .about__info, .contact__social, .contact__data`,
			{
				origin: 'left',
				distance: '60px', // Default distance
			}
		);
		sr.reveal(`.home__perfil, .about__image, .contact__mail`, {
			origin: 'right',
			distance: '60px', // Default distance
		});
	}
});

window.addEventListener('load', function () {
	const spinnerLoader = document.querySelector('#spinner-loader');
	if (spinnerLoader) {
		spinnerLoader.classList.add('hidden');
	}
});
