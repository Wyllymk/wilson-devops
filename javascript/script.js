/**
 * =========================================================
 * FRONTEND SCRIPT (WordPress + esbuild)
 * =========================================================
 * - Theme system
 * - Navigation behavior
 * - Mobile menu animations
 * - Cursor + motion effects
 * - GSAP scroll animations
 * - Services accordion
 * - Projects grid + filtering
 * - Modal system
 * =========================================================
 */

import Alpine from 'alpinejs';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);
window.Alpine = Alpine;

('use strict');

/* ════════════════════════════════════════════
   CONSTANTS
════════════════════════════════════════════ */
const REDUCED = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

/* ════════════════════════════════════════════
   THEME TOGGLE — system / light / dark cycle
════════════════════════════════════════════ */
const THEMES = ['system', 'light', 'dark'];
const T_ICONS = { system: 'i-sys', light: 'i-sun', dark: 'i-moon' };

function applyTheme(pref) {
	const dark =
		pref === 'dark' ||
		(pref === 'system' &&
			window.matchMedia('(prefers-color-scheme:dark)').matches);
	document.documentElement.classList.toggle('dark', dark);
	document.documentElement.setAttribute('data-p', pref);

	// Swap icons
	Object.entries(T_ICONS).forEach(([mode, id]) => {
		const el = document.getElementById(id);
		if (!el) return;
		const active = mode === pref;
		el.style.opacity = active ? '1' : '0';
		el.style.transform = active
			? 'scale(1) rotate(0deg)'
			: 'scale(0.5) rotate(40deg)';
	});
}

window.cycleTheme = function () {
	const current = localStorage.getItem('wm-t') || 'system';
	const next = THEMES[(THEMES.indexOf(current) + 1) % THEMES.length];
	localStorage.setItem('wm-t', next);
	applyTheme(next);
};

// Init on load
applyTheme(localStorage.getItem('wm-t') || 'system');

// Sync when OS preference changes
window
	.matchMedia('(prefers-color-scheme:dark)')
	.addEventListener('change', () => {
		if ((localStorage.getItem('wm-t') || 'system') === 'system')
			applyTheme('system');
	});

/* ════════════════════════════════════════════
   CUSTOM CURSOR
════════════════════════════════════════════ */
const cursor = document.getElementById('cursor');
const cursorDot = document.getElementById('cursorDot');

if (cursor && cursorDot && !REDUCED) {
	let cx = 0,
		cy = 0,
		tx = 0,
		ty = 0;

	document.addEventListener(
		'mousemove',
		(e) => {
			tx = e.clientX;
			ty = e.clientY;
			cursorDot.style.transform = `translate(${tx}px,${ty}px) translate(-50%,-50%)`;
		},
		{ passive: true }
	);

	(function animateCursor() {
		cx += (tx - cx) * 0.12;
		cy += (ty - cy) * 0.12;
		cursor.style.transform = `translate(${cx}px,${cy}px) translate(-50%,-50%)`;
		requestAnimationFrame(animateCursor);
	})();

	// Expand on interactive elements
	document.addEventListener('mouseover', (e) => {
		const t = e.target.closest('a,button,[data-magnetic]');
		if (t) {
			cursor.style.width = '48px';
			cursor.style.height = '48px';
			cursor.style.borderColor = 'rgba(53,51,205,0.7)';
		}
	});
	document.addEventListener('mouseout', (e) => {
		if (e.target.closest('a,button,[data-magnetic]')) {
			cursor.style.width = '32px';
			cursor.style.height = '32px';
			cursor.style.borderColor = 'rgba(31,140,249,0.7)';
		}
	});
}

/* ════════════════════════════════════════════
   MAGNETIC BUTTONS
════════════════════════════════════════════ */
if (!REDUCED) {
	document.querySelectorAll('[data-magnetic]').forEach((btn) => {
		btn.addEventListener('mousemove', (e) => {
			const r = btn.getBoundingClientRect();
			const dx = (e.clientX - r.left - r.width / 2) * 0.22;
			const dy = (e.clientY - r.top - r.height / 2) * 0.22;
			btn.style.transform = `translate(${dx}px,${dy}px)`;
		});
		btn.addEventListener('mouseleave', () => {
			btn.style.transform = '';
		});
	});
}

/* ════════════════════════════════════════════
   NAV — scroll behaviour (backdrop + shrink)
════════════════════════════════════════════ */
const nav = document.getElementById('nav');
if (nav) {
	const onScroll = () => {
		const y = window.scrollY;
		if (y > 60) {
			nav.style.backdropFilter = 'blur(20px)';
			nav.style.background = 'rgba(244,246,255,0.85)';
			nav.style.borderBottom = '1px solid rgba(0,0,0,0.06)';
			nav.style.boxShadow = '0 4px 24px -4px rgba(0,0,0,0.08)';
			document.documentElement.classList.contains('dark') &&
				(nav.style.background = 'rgba(5,6,10,0.88)');
		} else {
			nav.style.backdropFilter = '';
			nav.style.background = '';
			nav.style.borderBottom = '';
			nav.style.boxShadow = '';
		}
	};
	window.addEventListener('scroll', onScroll, { passive: true });
	// Re-run on theme change
	document.addEventListener('visibilitychange', onScroll);
}

/* ════════════════════════════════════════════
   BACK-TO-TOP BUTTON
════════════════════════════════════════════ */
const btt = document.getElementById('btt');
if (btt) {
	window.addEventListener(
		'scroll',
		() => {
			const show = window.scrollY > 400;
			btt.style.opacity = show ? '1' : '0';
			btt.style.pointerEvents = show ? 'all' : 'none';
		},
		{ passive: true }
	);
}

/* ════════════════════════════════════════════
   MOBILE MENU — cinematic slide
════════════════════════════════════════════ */
const mobWrap = document.getElementById('mob-wrap');
const mobDim = document.getElementById('mob-dim');
const mobOv1 = document.getElementById('mob-ov1');
const mobPanel = document.getElementById('mob-panel');
const mobLinks = document.querySelectorAll('.mob-link');
const mobFoot = document.getElementById('mob-footer');
const hambtn = document.getElementById('hambtn');
let menuOpen = false;

window.openMob = function () {
	if (menuOpen) return;
	menuOpen = true;
	mobWrap.style.pointerEvents = 'all';
	mobWrap.setAttribute('aria-hidden', 'false');
	if (hambtn) hambtn.setAttribute('aria-expanded', 'true');

	mobDim.style.opacity = '1';
	setTimeout(() => {
		mobOv1.style.transform = 'translateX(0)';
	}, 20);
	setTimeout(() => {
		mobPanel.style.transform = 'translateX(0)';
		mobOv1.style.transform = 'translateX(-110%)';
	}, 260);
	setTimeout(() => {
		mobLinks.forEach((link, i) => {
			setTimeout(() => {
				link.style.opacity = '1';
				link.style.transform = 'translateX(0)';
			}, i * 60);
		});
	}, 520);
	setTimeout(() => {
		mobFoot.style.opacity = '1';
		mobFoot.style.transform = 'translateY(0)';
	}, 640);

	document.body.style.overflow = 'hidden';
};

window.closeMob = function () {
	if (!menuOpen) return;

	mobLinks.forEach((link) => {
		link.style.opacity = '0';
		link.style.transform = 'translateX(20px)';
	});
	mobFoot.style.opacity = '0';
	mobFoot.style.transform = 'translateY(8px)';

	setTimeout(() => {
		mobPanel.style.transform = 'translateX(100%)';
	}, 80);
	setTimeout(() => {
		mobOv1.style.transition = 'transform .3s cubic-bezier(.7,0,.3,1)';
		mobOv1.style.transform = 'translateX(0)';
	}, 200);
	setTimeout(() => {
		mobOv1.style.transform = 'translateX(100%)';
	}, 260);
	setTimeout(() => {
		mobOv1.style.transition = 'transform .38s cubic-bezier(.7,0,.3,1)';
	}, 620);
	setTimeout(() => {
		mobDim.style.opacity = '0';
	}, 340);
	setTimeout(() => {
		mobWrap.style.pointerEvents = 'none';
		mobWrap.setAttribute('aria-hidden', 'true');
		document.body.style.overflow = '';
		menuOpen = false;
		if (hambtn) hambtn.setAttribute('aria-expanded', 'false');
	}, 700);
};

document.addEventListener('keydown', (e) => {
	if (e.key === 'Escape' && menuOpen) closeMob();
});

/* ════════════════════════════════════════════
   SERVICES ACCORDION
════════════════════════════════════════════ */
window.toggleSrv = function (btn) {
	const row = btn.closest('.srv-row');
	const grid = row.querySelector('.srv-grid');
	const icon = row.querySelector('.srv-icon');
	const plus = row.querySelector('.srv-plus');
	const isOpen = btn.getAttribute('aria-expanded') === 'true';

	// Close all
	document.querySelectorAll('.srv-row').forEach((r) => {
		const g = r.querySelector('.srv-grid');
		const ic = r.querySelector('.srv-icon');
		const pl = r.querySelector('.srv-plus');
		const b = r.querySelector('.srv-btn');
		if (g) g.style.gridTemplateRows = '0fr';
		if (ic) {
			ic.style.background = '';
			ic.style.borderColor = '';
			ic.style.color = '';
		}
		if (pl) pl.style.transform = 'rotate(0deg)';
		if (b) b.setAttribute('aria-expanded', 'false');
	});

	// Open clicked (unless it was already open)
	if (!isOpen) {
		grid.style.gridTemplateRows = '1fr';
		if (icon) {
			icon.style.background = '#3533cd';
			icon.style.borderColor = '#3533cd';
			icon.style.color = 'white';
		}
		if (plus) plus.style.transform = 'rotate(45deg)';
		btn.setAttribute('aria-expanded', 'true');

		setTimeout(() => {
			const rect = row.getBoundingClientRect();
			if (rect.top < 80) {
				window.scrollBy({ top: rect.top - 96, behavior: 'smooth' });
			}
		}, 520);
	}
};

// Keyboard support for accordion
document.querySelectorAll('.srv-btn').forEach((btn) => {
	btn.addEventListener('keydown', (e) => {
		if (e.key === 'Enter' || e.key === ' ') {
			e.preventDefault();
			window.toggleSrv(btn);
		}
	});
});

/* ════════════════════════════════════════════
   PORTFOLIO FILTERING
════════════════════════════════════════════ */

window.filterP = function (filter, btn) {
	document.querySelectorAll('.pfilt').forEach((b) => {
		b.classList.remove('on');
	});

	if (btn) {
		btn.classList.add('on');
	}

	const cards = document.querySelectorAll('.bcard');

	cards.forEach((card) => {
		const tags = card.dataset.tags.split(',');

		if (filter === 'all' || tags.includes(filter)) {
			card.classList.remove('hidden');
		} else {
			card.classList.add('hidden');
		}
	});

	if (window.gsap && !window.REDUCED) {
		gsap.fromTo(
			'#pgrid .bcard:not(.hidden)',
			{
				opacity: 0,
				y: 20,
			},
			{
				opacity: 1,
				y: 0,
				duration: 0.55,
				stagger: 0.05,
				ease: 'power3.out',
			}
		);
	}
};

/* ════════════════════════════════════════════
   CARD TILT
════════════════════════════════════════════ */

function attachCardTilt() {
	if (window.REDUCED) return;

	document.querySelectorAll('.bcard').forEach((card) => {
		card.addEventListener('mousemove', (e) => {
			const rect = card.getBoundingClientRect();

			const x = (e.clientX - rect.left) / rect.width - 0.5;
			const y = (e.clientY - rect.top) / rect.height - 0.5;

			card.style.transform = `perspective(600px)
				rotateY(${x * 6}deg)
				rotateX(${-y * 6}deg)
				translateY(-4px)`;
		});

		card.addEventListener('mouseleave', () => {
			card.style.transform = '';
		});
	});
}

/* ════════════════════════════════════════════
   ACCESSIBILITY
════════════════════════════════════════════ */

document.querySelectorAll('.bcard').forEach((card) => {
	card.addEventListener('keydown', (e) => {
		if (e.key === 'Enter' || e.key === ' ') {
			e.preventDefault();

			const id = card.dataset.id;

			if (typeof openModal === 'function') {
				openModal(id);
			}
		}
	});
});

/* ════════════════════════════════════════════
   INIT
════════════════════════════════════════════ */

document.addEventListener('DOMContentLoaded', () => {
	const firstFilter = document.querySelector('.pfilt');

	if (firstFilter) {
		firstFilter.classList.add('on');
	}

	attachCardTilt();

	if (window.gsap && !window.REDUCED) {
		gsap.fromTo(
			'#pgrid .bcard',
			{
				opacity: 0,
				y: 20,
			},
			{
				opacity: 1,
				y: 0,
				duration: 0.65,
				stagger: 0.05,
				ease: 'power3.out',
			}
		);
	}
});

/* ════════════════════════════════════════════
   PROJECT MODAL
════════════════════════════════════════════ */
window.openModal = function (id) {
	const data = window.PD || [];
	const p = data.find((x) => x.id == id);

	if (!p) return;

	const bg = document.getElementById('modbg');
	const box = document.getElementById('modbox');
	const th = document.getElementById('modthumb');

	if (!bg || !box || !th) return;

	// thumbnail
	th.style.background = `linear-gradient(135deg,${p.g[0]}55,${p.g[1]}99)`;

	th.innerHTML = `
		<button
			onclick="closeModal()"
			aria-label="Close modal"
			class="absolute top-3 right-3 h-8 w-8 grid place-items-center rounded-full bg-black/50 text-white/70 hover:text-white hover:rotate-90 transition-all duration-200 z-10"
		>✕</button>

		<div class="text-[90px] opacity-[.22] select-none" aria-hidden="true">
			${p.e}
		</div>
	`;

	// title
	document.getElementById('modt').textContent = p.t;

	// tags
	document.getElementById('modtags').innerHTML = p.tags
		.map(
			(t) =>
				`<span class="inline-block rounded-full border border-violet/25 bg-violet/10 px-2.5 py-0.5 font-mono text-[11px] text-violet dark:text-lilac">${t}</span>`
		)
		.join('');

	// impact
	document.getElementById('modimp').innerHTML =
		`<span class="font-bold">▶ Result: </span>${p.imp}`;

	// description
	document.getElementById('moddesc').textContent = p.d;

	// actions
	document.getElementById('modacts').innerHTML = `
		<a href="${p.url}" target="_blank" rel="noopener noreferrer"
			class="inline-flex items-center gap-2 rounded-full bg-grad-main px-6 py-2.5 text-sm font-medium text-white shadow-glow hover:shadow-glow-v hover:-translate-y-0.5 transition-all duration-200">
			Visit Live Site ↗
		</a>

		<button onclick="closeModal()"
			class="inline-flex items-center gap-2 rounded-full border border-black/[0.09] dark:border-white/[0.1] bg-black/[0.02] dark:bg-white/[0.03] px-6 py-2.5 text-sm font-medium text-[#0b1120] dark:text-white/90 hover:bg-black/[0.04] dark:hover:bg-white/[0.07] transition-all duration-200">
			Close
		</button>
	`;

	// show modal
	bg.style.opacity = '1';
	bg.style.pointerEvents = 'all';
	box.style.transform = 'translateY(0) scale(1)';
	document.body.style.overflow = 'hidden';

	// accessibility
	box.setAttribute('tabindex', '-1');
	box.focus();
};

window.closeModal = function () {
	const bg = document.getElementById('modbg');
	const box = document.getElementById('modbox');
	if (!bg || !box) return;
	bg.style.opacity = '0';
	bg.style.pointerEvents = 'none';
	box.style.transform = 'translateY(16px) scale(.98)';
	document.body.style.overflow = '';
};

const modbg = document.getElementById('modbg');
if (modbg) {
	modbg.addEventListener('click', function (e) {
		if (e.target === this) closeModal();
	});
}
document.addEventListener('keydown', (e) => {
	if (e.key === 'Escape') closeModal();
});

/* ════════════════════════════════════════════
   SCROLL REVEAL — IntersectionObserver
   (No GSAP dependency for reveal — leaner)
════════════════════════════════════════════ */
if (!REDUCED) {
	const revealEls = document.querySelectorAll('.reveal');
	revealEls.forEach((el) => {
		el.style.opacity = '0';
		el.style.transform = 'translateY(24px)';
		el.style.transition =
			'opacity 0.65s cubic-bezier(0.16,1,0.3,1), transform 0.65s cubic-bezier(0.16,1,0.3,1)';
	});

	const io = new IntersectionObserver(
		(entries) => {
			entries.forEach((entry) => {
				if (entry.isIntersecting) {
					entry.target.style.opacity = '1';
					entry.target.style.transform = 'translateY(0)';
					io.unobserve(entry.target);
				}
			});
		},
		{ threshold: 0.12, rootMargin: '0px 0px -40px 0px' }
	);

	revealEls.forEach((el) => io.observe(el));
}

/* ════════════════════════════════════════════
   GSAP SCROLL PARALLAX — ambient orbs
   (Only runs when GSAP is available)
════════════════════════════════════════════ */
function initGSAP() {
	if (!window.gsap || !window.ScrollTrigger || REDUCED) return;
	gsap.registerPlugin(ScrollTrigger);

	const ambA = document.getElementById('amb-a');
	const ambB = document.getElementById('amb-b');

	if (ambA) {
		gsap.to(ambA, {
			y: -120,
			scrollTrigger: {
				trigger: document.body,
				start: 'top top',
				end: 'bottom bottom',
				scrub: 2,
			},
		});
	}
	if (ambB) {
		gsap.to(ambB, {
			y: -80,
			x: -40,
			scrollTrigger: {
				trigger: document.body,
				start: 'top top',
				end: 'bottom bottom',
				scrub: 3,
			},
		});
	}
}

// GSAP might load late (after user interaction) — wait for it
let gsapPollCount = 0;
const gsapPoll = setInterval(() => {
	if (window.gsap && window.ScrollTrigger) {
		clearInterval(gsapPoll);
		initGSAP();
	}
	if (++gsapPollCount > 60) clearInterval(gsapPoll); // stop after 30s
}, 500);

/* ════════════════════════════════════════════
   HERO PARALLAX WORD — mouse tracker
════════════════════════════════════════════ */
const heroWord = document.getElementById('heroWord');
if (heroWord && !REDUCED) {
	document.addEventListener(
		'mousemove',
		(e) => {
			const x = (e.clientX / window.innerWidth - 0.5) * 18;
			const y = (e.clientY / window.innerHeight - 0.5) * 10;
			heroWord.style.transform = `translate(calc(-50% + ${x}px), calc(-55% + ${y}px))`;
		},
		{ passive: true }
	);
}

/* ════════════════════════════════════════════
   FOOTER YEAR
════════════════════════════════════════════ */
const yr = document.getElementById('yr');
if (yr) yr.textContent = new Date().getFullYear();

/* ════════════════════════════════════════════
   ACTIVE NAV SECTION HIGHLIGHTING
════════════════════════════════════════════ */
const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('header a[href^="#"]');

if (sections.length && navLinks.length) {
	const sectionIO = new IntersectionObserver(
		(entries) => {
			entries.forEach((entry) => {
				if (entry.isIntersecting) {
					navLinks.forEach((link) => {
						const isActive =
							link.getAttribute('href') === `#${entry.target.id}`;
						link.style.color = isActive
							? 'var(--wd-blue, #1f8cf9)'
							: '';
					});
				}
			});
		},
		{ threshold: 0.4 }
	);

	sections.forEach((s) => sectionIO.observe(s));
}

/* =========================================================
   ALPINE BOOT
========================================================= */

document.addEventListener('DOMContentLoaded', () => {
	Alpine.start();
});
