const departamentosConProvinciasYCiudades = {
    Amazonas: {
        Chachapoyas: ["Chachapoyas City", "Otra Ciudad de Chachapoyas"],
        Bagua: ["Bagua City", "Otra Ciudad de Bagua"],
        // Otras provincias de Amazonas y sus ciudades
    },
    Áncash: {
        Huaraz: ["Huaraz City", "Otra Ciudad de Huaraz"],
        Casma: ["Casma City", "Otra Ciudad de Casma"],
        // Otras provincias de Áncash y sus ciudades
    },
    // Agrega más departamentos, provincias y ciudades según necesites
};
// Función para actualizar las opciones de provincia según el departamento seleccionado
function actualizarProvincias() {
    const departamentoSelect = document.getElementById("departamento");
    const provinciaSelect = document.getElementById("provincia");
    const ciudadSelect = document.getElementById("ciudad");
    const departamentoSeleccionado = departamentoSelect.value;
    // Limpiar las opciones anteriores
    provinciaSelect.innerHTML = '<option value="">Seleccione provincia</option>';
    ciudadSelect.innerHTML = '<option value="">Seleccione ciudad</option>';
    // Obtener las provincias del departamento seleccionado
    const provincias = Object.keys(departamentosConProvinciasYCiudades[departamentoSeleccionado]);
    // Llenar el campo de provincias
    provincias.forEach((provincia) => {
        const option = document.createElement("option");
        option.value = provincia;
        option.textContent = provincia;
        provinciaSelect.appendChild(option);
    });
}

// Función para actualizar las opciones de ciudad según la provincia seleccionada
function actualizarCiudades() {
    const departamentoSelect = document.getElementById("departamento");
    const provinciaSelect = document.getElementById("provincia");
    const ciudadSelect = document.getElementById("ciudad");
    const departamentoSeleccionado = departamentoSelect.value;
    const provinciaSeleccionada = provinciaSelect.value;
    // Limpiar las opciones anteriores
    ciudadSelect.innerHTML = '<option value="">Seleccione ciudad</option>';
    // Obtener las ciudades de la provincia seleccionada
    const ciudades = departamentosConProvinciasYCiudades[departamentoSeleccionado][provinciaSeleccionada];
    // Llenar el campo de ciudades
    ciudades.forEach((ciudad) => {
        const option = document.createElement("option");
        option.value = ciudad;
        option.textContent = ciudad;
        ciudadSelect.appendChild(option);
    });
}

// Agregar eventos onchange a los campos de selección de departamento y provincia
const departamentoSelect = document.getElementById("departamento");
departamentoSelect.addEventListener("change", actualizarProvincias);
const provinciaSelect = document.getElementById("provincia");
provinciaSelect.addEventListener("change", actualizarCiudades);
// Llamar a la función inicialmente para cargar las provincias del primer departamento
actualizarProvincias();