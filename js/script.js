window.addEventListener('scroll', function() {
  var entrenamientos = document.querySelector('.entrenamientos');
  var scrollPosition = window.scrollY;

  if (scrollPosition > 400) { 
  } else {
    entrenamientos.classList.remove('show');
  }
});
