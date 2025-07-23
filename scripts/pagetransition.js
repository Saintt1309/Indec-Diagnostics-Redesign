window.addEventListener('DOMContentLoaded', () => {
  document.body.style.opacity = 0;
  document.body.style.transition = 'opacity 0.3s ease-in-out';
  requestAnimationFrame(() => {
    document.body.style.opacity = 1;
  });
});

document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('a[href]').forEach(link => {
    const url = new URL(link.href, window.location.origin);
    if (url.origin !== window.location.origin || url.hash) return;

    link.addEventListener('click', function (e) {
      e.preventDefault();
      const href = this.href;
      document.body.style.opacity = 0;

      setTimeout(() => {
        window.location.href = href;
      }, 300);
    });
  });
});
