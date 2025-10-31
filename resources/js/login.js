// Form Validation + Button Loading Effect

document.addEventListener("DOMContentLoaded", function() {
  const form = document.querySelector(".login");
  const emailInput = document.getElementById("Email");
  const passInput = document.getElementById("pass");
  const btn = document.querySelector(".btn");

  form.addEventListener("submit", function(e) {
    e.preventDefault(); 

    const email = emailInput.value.trim();
    const password = passInput.value.trim();
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Reset button (in case user re-tries)
    btn.textContent = "Login";
    btn.disabled = false;

    // Validation checks
    if (email === "" || password === "") {
      alert("Please fill in all fields.");
      return;
    }

    if (!emailPattern.test(email)) {
      alert("Please enter a valid email address.");
      return;
    }

    if (password.length < 6) {
      alert("Password must be at least 6 characters long.");
      return;
    }

    // If all checks pass → start loading
    btn.disabled = true;
    btn.innerHTML = `<i class="fa fa-spinner fa-spin"></i> try to login`;

    // Simulate a request delay (2 seconds)
    setTimeout(() => {
      alert("Login successful!");
      // Here you can redirect to another page
      // window.location.href = "home.html";

      btn.innerHTML = "Login";
      btn.disabled = false;
    }, 2000);
  });
});
