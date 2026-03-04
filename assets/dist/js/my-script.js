jQuery(document).ready(function ($) {
  // Hero image bubble animation
  var heroBubbles = document.querySelector('.hero-bubbles');
  if (heroBubbles) {
    var bubbleData = [
      { size: 8, top: 12, left: 18, duration: 2.8, delay: 0.0 },
      { size: 14, top: 28, left: 72, duration: 3.5, delay: 0.4 },
      { size: 6, top: 55, left: 40, duration: 2.4, delay: 0.8 },
      { size: 20, top: 70, left: 85, duration: 4.0, delay: 1.2 },
      { size: 10, top: 15, left: 60, duration: 3.1, delay: 0.6 },
      { size: 16, top: 42, left: 22, duration: 3.7, delay: 1.5 },
      { size: 7, top: 80, left: 55, duration: 2.6, delay: 0.2 },
      { size: 12, top: 35, left: 90, duration: 3.3, delay: 1.0 },
      { size: 22, top: 60, left: 10, duration: 4.2, delay: 1.8 },
      { size: 9, top: 20, left: 45, duration: 2.9, delay: 0.3 },
      { size: 18, top: 88, left: 30, duration: 3.8, delay: 0.9 },
      { size: 5, top: 50, left: 68, duration: 2.3, delay: 1.4 },
      { size: 13, top: 75, left: 78, duration: 3.4, delay: 0.7 },
      { size: 11, top: 8, left: 82, duration: 3.0, delay: 2.1 },
      { size: 24, top: 45, left: 50, duration: 4.5, delay: 1.6 },
    ];
    bubbleData.forEach(function (b) {
      var el = document.createElement('span');
      el.className = 'hero-bubble';
      el.style.width = b.size + 'px';
      el.style.height = b.size + 'px';
      el.style.top = b.top + '%';
      el.style.left = b.left + '%';
      el.style.animationDuration = b.duration + 's';
      el.style.animationDelay = b.delay + 's';
      heroBubbles.appendChild(el);
    });
  }
});
