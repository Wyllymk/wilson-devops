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

import Alpine from "alpinejs";
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);
window.Alpine = Alpine;

"use strict";

/* =========================================================
   GLOBAL FLAGS
========================================================= */
const REDUCED = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

/* =========================================================
   THEME SYSTEM
========================================================= */

const THEME_PATH = ["system", "light", "dark"];

let themeIndex = THEME_PATH.indexOf(
  document.documentElement.getAttribute("data-p") || "system"
);

function updateThemeUI(mode) {
  const icons = ["i-sys", "i-sun", "i-moon"];

  icons.forEach((id) => {
    const el = document.getElementById(id);
    if (!el) return;
    el.style.opacity = "0";
    el.style.transform = "scale(.4) rotate(40deg)";
  });

  const map = {
    system: "i-sys",
    light: "i-sun",
    dark: "i-moon",
  };

  const active = document.getElementById(map[mode]);
  if (active) {
    active.style.opacity = "1";
    active.style.transform = "scale(1) rotate(0)";
  }
}

function applyTheme(mode) {
  const resolved =
    mode === "system"
      ? window.matchMedia("(prefers-color-scheme: dark)").matches
        ? "dark"
        : "light"
      : mode;

  document.documentElement.classList.toggle("dark", resolved === "dark");
  document.documentElement.setAttribute("data-p", mode);
  localStorage.setItem("wm-t", mode);

  updateThemeUI(mode);
  updateNav();
}

window.cycleTheme = () => {
  themeIndex = (themeIndex + 1) % THEME_PATH.length;
  applyTheme(THEME_PATH[themeIndex]);
};

window.matchMedia("(prefers-color-scheme: dark)").addEventListener("change", () => {
  if (THEME_PATH[themeIndex] === "system") applyTheme("system");
});

updateThemeUI(THEME_PATH[themeIndex]);

/* =========================================================
   NAVIGATION
========================================================= */

const navEl = document.getElementById("nav");

function updateNav() {
  if (!navEl) return;

  const isDark = document.documentElement.classList.contains("dark");
  const stuck = window.scrollY > 20;

  if (!stuck) {
    navEl.style.borderColor = "transparent";
    navEl.style.background = "transparent";
    navEl.style.backdropFilter = "none";
    return;
  }

  navEl.style.borderColor = isDark
    ? "rgba(255,255,255,.07)"
    : "rgba(0,0,0,.06)";
  navEl.style.background = isDark
    ? "rgba(5,6,10,.82)"
    : "rgba(244,246,255,.9)";
  navEl.style.backdropFilter = "blur(18px)";
}

window.addEventListener("scroll", updateNav, { passive: true });

/* =========================================================
   MOBILE MENU
========================================================= */

const mobWrap = document.getElementById("mob-wrap");
const mobDim = document.getElementById("mob-dim");
const mobOv1 = document.getElementById("mob-ov1");
const mobPanel = document.getElementById("mob-panel");
const mobLinks = document.querySelectorAll(".mob-link");
const mobFoot = document.getElementById("mob-footer");

let menuOpen = false;

window.openMob = function () {
  if (menuOpen) return;

  menuOpen = true;
  document.body.style.overflow = "hidden";

  if (mobWrap) {
    mobWrap.style.pointerEvents = "all";
    mobWrap.setAttribute("aria-hidden", "false");
  }

  if (mobDim) mobDim.style.opacity = "1";

  setTimeout(() => mobOv1 && (mobOv1.style.transform = "translateX(0)"), 20);

  setTimeout(() => {
    if (mobPanel) mobPanel.style.transform = "translateX(0)";
    if (mobOv1) mobOv1.style.transform = "translateX(-110%)";
  }, 260);

  setTimeout(() => {
    mobLinks.forEach((l, i) => {
      setTimeout(() => {
        l.style.opacity = "1";
        l.style.transform = "translateX(0)";
      }, i * 60);
    });
  }, 520);

  setTimeout(() => {
    if (mobFoot) {
      mobFoot.style.opacity = "1";
      mobFoot.style.transform = "translateY(0)";
    }
  }, 640);
};

window.closeMob = function () {
  if (!menuOpen) return;

  mobLinks.forEach((l) => {
    l.style.opacity = "0";
    l.style.transform = "translateX(20px)";
  });

  if (mobFoot) {
    mobFoot.style.opacity = "0";
    mobFoot.style.transform = "translateY(8px)";
  }

  setTimeout(() => mobPanel && (mobPanel.style.transform = "translateX(100%)"), 80);

  setTimeout(() => mobOv1 && (mobOv1.style.transform = "translateX(100%)"), 260);

  setTimeout(() => {
    if (mobDim) mobDim.style.opacity = "0";
  }, 340);

  setTimeout(() => {
    menuOpen = false;

    if (mobWrap) {
      mobWrap.style.pointerEvents = "none";
      mobWrap.setAttribute("aria-hidden", "true");
    }

    document.body.style.overflow = "";
  }, 520);
};

/* ESC handler */
document.addEventListener("keydown", (e) => {
  if (e.key === "Escape") {
    if (menuOpen) window.closeMob();
    window.closeModal?.();
  }
});

/* =========================================================
   CURSOR
========================================================= */

const cur = document.getElementById("cursor");
const dot = document.getElementById("cursorDot");

if (cur && !REDUCED) {
  let x = 0,
    y = 0,
    tx = 0,
    ty = 0;

  window.addEventListener("mousemove", (e) => {
    tx = e.clientX;
    ty = e.clientY;

    if (dot) dot.style.transform = `translate(${tx - 3.5}px,${ty - 3.5}px)`;
  });

  (function loop() {
    x += (tx - x) * 0.15;
    y += (ty - y) * 0.15;

    cur.style.transform = `translate(${x - 16}px,${y - 16}px)`;
    requestAnimationFrame(loop);
  })();
}

/* =========================================================
   PARALLAX ORBS
========================================================= */

const ambA = document.getElementById("amb-a");
const ambB = document.getElementById("amb-b");

let pmx = 0,
  pmy = 0,
  gax = 0,
  gay = 0,
  gbx = 0,
  gby = 0;

document.addEventListener("mousemove", (e) => {
  pmx = (e.clientX / window.innerWidth - 0.5) * 2;
  pmy = (e.clientY / window.innerHeight - 0.5) * 2;
});

if (!REDUCED) {
  (function anim() {
    gax += (pmx * 42 - gax) * 0.048;
    gay += (pmy * 30 - gay) * 0.048;
    gbx += (-pmx * 30 - gbx) * 0.036;
    gby += (-pmy * 22 - gby) * 0.036;

    if (ambA)
      ambA.style.transform = `translateX(calc(-50% + ${gax}px)) translateY(${gay}px)`;
    if (ambB)
      ambB.style.transform = `translateX(${gbx}px) translateY(${gby}px)`;

    requestAnimationFrame(anim);
  })();
}

/* =========================================================
   TILT SYSTEM
========================================================= */

/**
 * Card tilt interaction system
 */
function attachTilt(sel) {
  if (REDUCED) return;

  document.querySelectorAll(sel).forEach((el) => {
    el.addEventListener("mousemove", (e) => {
      const r = el.getBoundingClientRect();

      el.style.transform = `
        perspective(900px)
        rotateX(${((e.clientY - r.top) / r.height - 0.5) * -7}deg)
        rotateY(${((e.clientX - r.left) / r.width - 0.5) * 7}deg)
      `;
    });

    el.addEventListener("mouseleave", () => {
      el.style.transform = "";
    });
  });
}

/* ✔ FIX: actually used */
attachTilt("[data-tilt], .bcard");

/* =========================================================
   GSAP
========================================================= */

const HAS_GSAP = typeof gsap !== "undefined";

if (HAS_GSAP && !REDUCED) {
  gsap.utils.toArray(".reveal").forEach((el) => {
    gsap.fromTo(
      el,
      { opacity: 0, y: 24 },
      {
        opacity: 1,
        y: 0,
        duration: 1,
        scrollTrigger: {
          trigger: el,
          start: "top 88%",
        },
      }
    );
  });
}

/* =========================================================
   MODAL SYSTEM (FIXED LINT SAFE)
========================================================= */

window.openModal = function (id) {
  const p = window.__PROJECTS?.find((x) => x.id === id);
  if (!p) return;

  const bg = document.getElementById("modbg");
  const box = document.getElementById("modbox");
  const th = document.getElementById("modthumb");

  if (!bg || !box || !th) return;

  th.style.background = `linear-gradient(135deg,${p.g[0]}55,${p.g[1]}99)`;
  th.innerHTML = `
    <button onclick="window.closeModal()" class="absolute top-3 right-3">✕</button>
    <div class="text-[90px] opacity-[.22]">${p.e}</div>
  `;

  bg.style.opacity = "1";
  bg.style.pointerEvents = "all";
  box.style.transform = "translateY(0) scale(1)";
  document.body.style.overflow = "hidden";
};

window.closeModal = function () {
  const bg = document.getElementById("modbg");
  const box = document.getElementById("modbox");

  if (!bg || !box) return;

  bg.style.opacity = "0";
  bg.style.pointerEvents = "none";
  box.style.transform = "translateY(16px) scale(.98)";
  document.body.style.overflow = "";
};

/* =========================================================
   SAFE GLOBAL PROJECT DATA (prevents lint + runtime issues)
========================================================= */

window.__PROJECTS = window.__PROJECTS || [];

/* =========================================================
   ALPINE BOOT
========================================================= */

document.addEventListener("DOMContentLoaded", () => {
  Alpine.start();
});