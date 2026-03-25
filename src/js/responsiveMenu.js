const responsiveMenu = () => {
  // Hämta element från DOM
  const menuButton = document.querySelector("#menu-button")
  const menu = document.querySelector(".responsive-menu")
  const closeButton = document.querySelector(".close-menu")

  // Funktion för att öppna responsiv meny
  // const openResponsiveMenu = () => {
  //   menu.classList.add("responsive-menu--visible")
  // }

  // Funktion för att stänga resonsiv meny
  const closeResponsiveMenu = () => {
    menu.classList.remove("responsive-menu--visible")
  }

  // Funktion för att toggla responsiv meny
  const toggleResponsiveMenu = () => {
    menu.classList.toggle("responsive-menu--visible")
  }

  // Event
  menuButton.addEventListener("click", toggleResponsiveMenu)
  closeButton.addEventListener("click", closeResponsiveMenu)
}

responsiveMenu()
