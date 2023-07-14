const blurElement = document.querySelector('.Blur');
const boxElement = document.querySelector('.Box');

blurElement.addEventListener('click', () => {
  blurElement.style.display = 'none';
  boxElement.style.display = 'none';
});

function scrollToData() {
  const dataSection = document.getElementById("data-section");
  dataSection.scrollIntoView({ behavior: "smooth" });
}

const readMoreImage = document.getElementById("read-more");
  readMoreImage.addEventListener("mouseover", function() {
   readMoreImage.classList.add("animate");
});

  readMoreImage.addEventListener("mouseout", function() {
  readMoreImage.classList.remove("animate");
});