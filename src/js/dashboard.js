document.addEventListener('DOMContentLoaded', function() {
    if (localStorage.getItem('loggedIn') !== 'true') {
        window.location.href = 'index.html';
    }
});

function logOut() {
    localStorage.removeItem('loggedIn');
    localStorage.removeItem('username');
    window.location.href = 'index.html';
}

        document.addEventListener('DOMContentLoaded', function() {
            if (localStorage.getItem('loggedIn') !== 'true') {
                window.location.href = 'login.php';
            }
            
            const username = localStorage.getItem('username');
            const welcomeElement = document.getElementById('welcome-user');
            if (username && welcomeElement) {
                welcomeElement.textContent = username;
            }
        });
        
        function logOut() {
            localStorage.removeItem('loggedIn');
            localStorage.removeItem('username');
            
            window.location.href = 'login.php';
        }