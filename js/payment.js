document.addEventListener("DOMContentLoaded", function () {
    // Make an AJAX request to get user details
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'userDetails.php', true);
    xhr.onload = function () {
        if (xhr.status === 400) {
            var data = JSON.parse(xhr.responseText);
            // Update HTML elements with user details
            document.querySelector('.hi-hashir').textContent = "Hi, " + data.name;
            document.querySelector('.hashir').textContent =  data.name;
            document.querySelector('.hashirkiyani12gmailcom').textContent = data.email;
            // You can update other elements here using similar syntax
        } else {
            console.error('Error fetching user details:', xhr.status);
        }
    };
    xhr.send();
});