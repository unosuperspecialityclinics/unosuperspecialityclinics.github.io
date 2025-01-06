
function search() {
    var searchTerm = document.getElementById('search-input').value.toLowerCase();

    // Define your services or keywords for searching
    var services = ["urology", "neurosurgery", "oncology", "women's health", "cardiology", "pediatrics", "dermatology", "internal medicine", "surgical procedures", "rehabilitation", "health checkup", "wellness programs", "telemedicine", "emergency care", "medical imaging","stapler-circumcision"];

    // Check if the search term matches any service
    if (services.includes(searchTerm)) {
        // Redirect to the corresponding service page
        switch (searchTerm) {
            case "urology":
                // Redirect to the Urology page
                window.location.href = "/urology.html";
                break;
            case "neurosurgery":
                // Redirect to the Neurosurgery page
                window.location.href = "/neurosurgery.html";
                break;
            case "oncology":
                // Redirect to the Oncology page
                window.location.href = "/oncology.html";
                break;
            case "stapler-circumcision":
                // Redirect to the specific section within the Urology page
                window.location.href = "/urology.html#stapler-circumcision";
                break;
            default:
                console.log('Unexpected service: ' + searchTerm);
        }
    } else {
        // Handle the case where the search term does not match any service
        console.log('Service not found: ' + searchTerm);
    }

    // Clear the search input for better user experience (optional)
    document.getElementById('search-input').value = '';
} 