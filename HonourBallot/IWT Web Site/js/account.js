<script>
        // Display the uploaded photo
        const fileInput = document.querySelector('input[type="file"]');
        const previewImage = document.getElementById('preview');

        fileInput.addEventListener('change', function () {
            const file = fileInput.files[0];
            const reader = new FileReader();

            reader.onload = function (e) {
                previewImage.src = e.target.result;
            };

            reader.readAsDataURL(file);
        // Handle edit photo button
    const editButton = document.getElementById('edit');

        editButton.addEventListener('click', function () {
            fileInput.value = ''; // Clear the selected file
            previewImage.src = ''; // Clear the preview image
        }); 
        </script>    
