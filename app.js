const text = "Lucky Feliyanto"
const heading = document.querySelector(".head-container")
const button = document.querySelector(".button")
const navs = document.querySelector(".nav")
const sections = document.querySelectorAll("section")
const footer = document.querySelector("footer")
const start = document.querySelector("#start")

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

button.addEventListener("click", (e) => {
  e.preventDefault()

  footer.style.display = "block"

  sections.forEach((section) => {
    section.style.display = "block"
  })
  navs.style.display = "flex"
  setTimeout(() => {
    navs.style.transform = "translateY(0)"
    navs.style.opacity = 1
  }, 10)

  button.style.opacity = "0"

  const id = e.target.getAttribute("href")
  const start = document.querySelector(id)

  setTimeout(() => {
    if (start) {
      console.log(start)
      scrollTo({
        top: start.offsetTop,
        behavior: "smooth",
      })
    }
  }, 500)

  
})
