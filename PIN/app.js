const form = document.getElementById('fomulario');
const successMessage = document.getElementById('success-message');

form.addEventListener('submit', (e) => {
  e.preventDefault(); // Evita el envío del formulario por defecto

  const nombre = form.elements.nombre.value;
  const telefono = form.elements.telefono.value;
  const correo = form.elements.correo.value;
  const opcion = form.elements.opcion.value;
  const fecha = form.elements.fecha.value;
  const mensaje = form.elements.mensaje.value;

  const formData = {
    nombre: nombre,
    telefono: telefono,
    correo: correo,
    opcion: opcion,
    fecha: fecha,
    mensaje: mensaje
  };

  // Realiza el envío de datos utilizando fetch
fetch('dashing-hammer-production.up.railway.app', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json'
  },
  body: JSON.stringify(formData)
})
.then(response => {
  if (response.ok) {
    document.querySelector("#success-message").innerHTML = '¡Envío exitoso!';
    document.querySelector("#success-message").style.color = 'red';
    document.querySelector("#success-message").style.display = 'block';

    setTimeout(() => {
      document.querySelector("#success-message").style.display = 'none';
    }, 5000);
  } else {
    console.error('Error al enviar los datos');
    // Manejar el error de envío de datos
  }
})
.catch(error => {
  console.error('Error en la solicitud', error);
  // Manejar el error de la solicitud
});
