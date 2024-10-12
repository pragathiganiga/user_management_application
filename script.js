document.getElementById("userForm").addEventListener("submit", function (e) {
  const phone = document.getElementById("phone_number").value;
  const email = document.getElementById("email").value;

  const phonePattern = /^[0-9]{10}$/;
  const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

  if (!phonePattern.test(phone)) {
    alert("Please enter a valid phone number");
    e.preventDefault();
  } else if (!emailPattern.test(email)) {
    alert("Please enter a valid email address");
    e.preventDefault();
  }
});
