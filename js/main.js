function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

function validateForm() {
  var searchInput = document.getElementById("search").value;
  
  if (searchInput.trim() === "") {
      alert("Please enter a search term.");
      return false; // Prevent form submission
  }
  
  // If the input is not empty, allow the form submission
  return true;
}