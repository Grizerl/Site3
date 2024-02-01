const button1 = document.getElementById("Button-1");
const button2 = document.getElementById("Button-2");
const button3 = document.getElementById("Button-3");
const button4 = document.getElementById("Button-4");
const button5 = document.getElementById("Button-5");
const icon=document.getElementById("material-icons")
const dropdown1 = document.getElementById("dropdown-1");
const dropdown2 = document.getElementById("dropdown-2");
const dropdown3 = document.getElementById("dropdown-3");
const dropdown4 = document.getElementById("dropdown-4");
const dropdown5 = document.getElementById("dropdown-5");

icon.addEventListener("click",()=>{
window.location.href="../index.php"
});
button1.addEventListener("click", () => {
  if (dropdown1.style.display === "none") {
    dropdown1.style.display = "block";
    dropdown2.style.display = "none";
    dropdown3.style.display = "none";
    dropdown4.style.display = "none";
    dropdown5.style.display = "none";
  } else {
    dropdown1.style.display = "none";
  }
});
button2.addEventListener("click", () => {
    if (dropdown2.style.display === "none") {
      dropdown2.style.display = "block";
      dropdown1.style.display = "none";
    dropdown3.style.display = "none";
    dropdown4.style.display = "none";
    dropdown5.style.display = "none";
    } else {
      dropdown2.style.display = "none";
    }
  });
  button3.addEventListener("click", () => {
    if (dropdown3.style.display === "none") {
      dropdown3.style.display = "block";
      dropdown2.style.display = "none";
    dropdown1.style.display = "none";
    dropdown4.style.display = "none";
    dropdown5.style.display = "none";
    } else {
      dropdown3.style.display = "none";
    }
  });
  button4.addEventListener("click", () => {
    if (dropdown4.style.display === "none") {
      dropdown4.style.display = "block";
      dropdown2.style.display = "none";
    dropdown3.style.display = "none";
    dropdown1.style.display = "none";
    dropdown5.style.display = "none";
    } else {
      dropdown4.style.display = "none";
    }
  });
  button5.addEventListener("click", () => {
    if (dropdown5.style.display === "none") {
      dropdown5.style.display = "block";
      dropdown2.style.display = "none";
    dropdown3.style.display = "none";
    dropdown4.style.display = "none";
    dropdown1.style.display = "none";
    } else {
      dropdown5.style.display = "none";
    }
  });
 

    