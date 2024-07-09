function validateForm() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var birthdate = document.getElementById('birthdate').value;

    // Validate Name
    if (!isValidName(name)) {
        alert('Please enter a valid name (letters and spaces only).');
        return false;
    }

    // Validate Email
    if (!isValidEmail(email)) {
        alert('Please enter a valid email address.');
        return false;
    }

    // Validate Birthdate (Optional)
    if (!isValidBirthdate(birthdate)) {
        alert('Please enter a valid birthdate.');
        return false;
    }

    return true; // Form submission allowed
}

// Helper functions for validation

function isValidName(name) {
    var regex = /^[A-Za-z\s]+$/;
    return regex.test(name);
}

function isValidEmail(email) {
    var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
}

function isValidBirthdate(birthdate) {
    // Example: Check if birthdate is within a certain range
    var today = new Date();
    var inputDate = new Date(birthdate);
    var minDate = new Date('1900-01-01'); // Example minimum date
    var maxDate = new Date(); // Example maximum date (today)

    return (inputDate >= minDate && inputDate <= maxDate);
}
