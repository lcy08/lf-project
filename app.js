navs = document.querySelector('a:[href^="#"]')

navs.forEach((anchor) => {
  anchor.addEventListener("click", (e) => {
    e.preventDefault()

    document
      .querySelector(this.getAttribute("href"))
      .scrollIntoView({ behavior: "smooth" })
  })
})
