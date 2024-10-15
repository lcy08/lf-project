const text = "Lucky Feliyanto"
const heading = document.querySelector(".head-container")
const button = document.querySelector(".button")
const navs = document.querySelector(".nav")
const sections = document.querySelectorAll("section")
const footer = document.querySelector("footer")

let index = 0

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

button.addEventListener("click", () => {
  
  footer.style.display = "block"

  sections.forEach((section) => {
    section.style.display = "block"
  })
  navs.style.display = "flex"
  setTimeout(() => {
    navs.style.opacity = 1
  }, 10)
})
