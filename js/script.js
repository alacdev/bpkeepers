/* Animación botones al hacer scroll */
window.addEventListener('scroll', function() {
  var entrenamientos = document.querySelector('.entrenamientos');
  var scrollPosition = window.scrollY;

  if (scrollPosition > 400) { // Cambia este valor según la posición en la que desees que aparezcan los botones
    entrenamientos.classList.add('show');
  } else {
    entrenamientos.classList.remove('show');
  }
});
