document.addEventListener('DOMContentLoaded', function() {

  if ('loading' in HTMLImageElement.prototype) {

    var images = document.querySelectorAll('img[loading="lazy"]');

    for (var i = 0; i < images.length; i++) {
      images[i].src = images[i].dataset.src;
      images[i].onload = function(e) {
        e.target.classList.add('loaded');
      }
    }

  } else {

    var script = document.createElement('script');
    script.async = true;
    script.src = 'https://cdnjs.cloudflare.com/ajax/libs/lazysizes/4.1.8/lazysizes.min.js';

    document.body.appendChild(script);

  }


  objectFitImages();

});