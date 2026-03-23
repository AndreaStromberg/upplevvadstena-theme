const headerScroll = () => {
  const header = document.querySelector(".site-header")

  //   Definine Current Scroll
  let currentScroll = 0

  // Funktion för när man scrollar fönstret
  const toggleClassOnScroll = () => {
    currentScroll = window.scrollY

    if (currentScroll > 100) {
      header.classList.add("site-header--scrolled")
    } else {
      header.classList.remove("site-header--scrolled")
    }
  }

  // Event
  window.addEventListener("scroll", toggleClassOnScroll)
}

headerScroll()
