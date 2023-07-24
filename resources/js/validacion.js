function validateForm() {
    // Validar la fecha
    var fecha_nacimientonInput = document.getElementById("fecha_creacion");
    var fecha_nacimienton = new Date(fecha_nacimientonInput.value);
    var today = new Date();
    today.setHours(0, 0, 0, 0);

    var minDate = new Date("1923-01-01");  // Fecha mínima permitida (1923-01-01)
    if (fecha_nacimienton < minDate) {
      alert("La fecha de nacimiento debe ser mayor a 1923.");
      fecha_nacimientonInput.focus();
      return false;
    }

    if (fecha_nacimiento > today) {
      alert("La fecha de nacimiento no puede ser mayor a la fecha actual.");
      fecha_nacimientonInput.focus();
      return false;
    }
    // La fecha de creación es válida
    return true;
  }

  // Obtener todos los enlaces de eliminación
  const deleteLinks = document.querySelectorAll('.delete-link');

  // Iterar sobre los enlaces y agregar el evento de clic
  deleteLinks.forEach(function(link) {
    link.addEventListener('click', function(event) {
      // Prevenir el comportamiento predeterminado del enlace (navegar a la URL)
      event.preventDefault();

      // Mostrar un cuadro de diálogo de confirmación
      const confirmed = confirm('¿Estás seguro de que deseas eliminar este cliente?');

    
      if (confirmed) {
        window.location.href = link.getAttribute('href');
      }
    });
  });
