function toggleDropdown() {
    var dropdown = document.getElementById('dropdownMenu');
    dropdown.style.display = dropdown.style.display === 'none' ? 'block' : 'none';
  }
  
  document.addEventListener('DOMContentLoaded', function() {
    var dropdownMenu = document.getElementById('dropdownMenu');
    
    dropdownMenu.addEventListener('click', function(event) {
      event.stopPropagation();
    });
  });
  
  document.addEventListener('click', function() {
    var dropdownMenu = document.getElementById('dropdownMenu');
    dropdownMenu.style.display = 'none';
  });