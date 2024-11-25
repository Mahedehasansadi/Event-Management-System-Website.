function handleCheckboxClick() {
    const selectedServices = document.querySelectorAll('.service-checkbox:checked');
    const selectedServicesList = document.getElementById('selectedServicesList');

    // Clear the previous list
    selectedServicesList.innerHTML = '';

    // Populate the list with selected services
    selectedServices.forEach(service => {
        const serviceName = service.getAttribute('data-service-name');
        const servicePrice = service.getAttribute('data-service-price');
        const listItem = document.createElement('li');
        listItem.textContent = `${serviceName} - Tk ${servicePrice}`;
        selectedServicesList.appendChild(listItem);
    });
}

// Add event listener to checkboxes
document.querySelectorAll('.service-checkbox').forEach(checkbox => {
    checkbox.addEventListener('change', handleCheckboxClick);
});