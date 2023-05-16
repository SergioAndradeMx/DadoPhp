const boton = document.getElementById("boton");
const resultado = document.getElementById("resultado");

boton.addEventListener("click", () => {
	// Realizar la petición al archivo PHP utilizando fetch
	fetch("dado/Main.php")
		.then(response => response.text())
		.then(data => {
			// Mostrar los resultados en el contenedor "resultado"
			resultado.textContent = data;
		})
		.catch(error => {
			console.error(error);
		});
});
