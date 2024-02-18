const userEmail = new URLSearchParams(window.location.search).get('email');
        document.getElementById('user-email').textContent = userEmail;