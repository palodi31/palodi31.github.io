AOS.init(); 
// Get form and password fields
const form = document.querySelector('form');
const passwordField = document.getElementById('password');
const confirmPasswordField = document.getElementById('confirmPassword');

// Get password and confirm password show/hide icons
const passwordIcon = document.getElementById('password-icon');
const confirmPasswordIcon = document.getElementById('confirm-password-icon');

// Toggle show/hide password function
function toggleShowPassword(inputField, icon) {
  if (inputField.type === 'password') {
    inputField.type = 'text';
    icon.classList.remove('fa-eye-slash');
    icon.classList.add('fa-eye');
  } else {
    inputField.type = 'password';
    icon.classList.remove('fa-eye');
    icon.classList.add('fa-eye-slash');
  }
}

// Add click event listener to password show/hide icon
passwordIcon.addEventListener('click', () => {
  toggleShowPassword(passwordField, passwordIcon);
});

// Add click event listener to confirm password show/hide icon
confirmPasswordIcon.addEventListener('click', () => {
  toggleShowPassword(confirmPasswordField, confirmPasswordIcon);
});


