const text = "Lucky Feliyanto"
const heading = document.querySelector('.head-container')

let index = 0;

const typeEffect = () => {
  if (index <= text.length) {
    document.getElementById("name-title").innerHTML += text.charAt(index)
    index++
    setTimeout(typeEffect, 150)
  }
}
typeEffect()

onscroll = () => {
  if (heading.offsetTop > 500) {
    heading.style.color = "#0F1035"
  } else {
    heading.style.color = ""
  }
}

