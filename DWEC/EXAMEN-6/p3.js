
const btnEstimar = document.getElementById("btn-estimar");
const btnSeguir = document.getElementById("btn-seguir");
const coordenadasElem = document.getElementById("coordenadas");
const altitudElem = document.getElementById("altitud");
const precisionElem = document.getElementById("precision");
const mapaElem = document.getElementById("mapa");
const historialElem = document.getElementById("historial");

function mostrarPosicion(posicion) {
  const coordenadas = posicion.coords;
  const latitud = coordenadas.latitude;
  const longitud = coordenadas.longitude;
  const altitud = coordenadas.altitude;
  const precision = coordenadas.accuracy;

  coordenadasElem.textContent = `${latitud}, ${longitud}`;
  altitudElem.textContent = altitud ? `${altitud} metros` : "No disponible";
  precisionElem.textContent = `${precision} metros`;

  const urlMapa = `https://www.google.com/maps?q=${latitud},${longitud}`;
  mapaElem.setAttribute("href", urlMapa);
  mapaElem.textContent = "Ver en Google Maps";
}

function mostrarFechaHora() {
  const fechaHora = new Date();
  return fechaHora.toLocaleString();
}

function actualizarHistorial(posicion) {
  const li = document.createElement("li");
  
  const fechaHoraElem = document.createElement("span");
  fechaHoraElem.textContent = `${mostrarFechaHora()} - `;
  
  const posicionElem = document.createElement("span");
  const coordenadas = posicion.coords;
  const latitud = coordenadas.latitude;
  const longitud = coordenadas.longitude;
  const altitud = coordenadas.altitude;
  const precision = coordenadas.accuracy;
  posicionElem.textContent = `Latitud: ${latitud}, Longitud: ${longitud}, Altitud: ${altitud}, Precisión: ${precision} metros`;
  
  li.appendChild(fechaHoraElem);
  li.appendChild(posicionElem);
  
  historialElem.appendChild(li);
}

function seguirPosicion() {
  navigator.geolocation.getCurrentPosition(function(posicion) {
    mostrarPosicion(posicion);
    actualizarHistorial(posicion);
  });

  setInterval(function() {
    navigator.geolocation.getCurrentPosition(function(posicion) {
      mostrarPosicion(posicion);
      actualizarHistorial(posicion);
    });
  }, 10000);
}

btnEstimar.addEventListener("click", function() {
  navigator.geolocation.getCurrentPosition(function(posicion) {
    mostrarPosicion(posicion);
  });
});

btnSeguir.addEventListener("click", seguirPosicion);
