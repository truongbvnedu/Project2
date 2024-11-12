document.getElementById('profileImage').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const img = document.createElement('img');
            img.src = e.target.result;
            const uploadArea = document.querySelector('.upload-area');
            uploadArea.innerHTML = '';
            uploadArea.appendChild(img);
        };
        reader.readAsDataURL(file);
    }
});
