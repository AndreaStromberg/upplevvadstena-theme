const videoControl = () => {
  // Hämta element från DOM
  const hero = document.querySelector(".hero")
  const video = hero.querySelector("video")

  //   Paus-Innehåll för pausknappen
  const pausIcon = `<svg
      width="8"
      height="12"
      viewBox="0 0 8 12"
      fill="none"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path
        d="M1 0C1.26522 0 1.51957 0.105357 1.70711 0.292893C1.89464 0.48043 2 0.734784 2 1V11C2 11.2652 1.89464 11.5196 1.70711 11.7071C1.51957 11.8946 1.26522 12 1 12C0.734784 12 0.48043 11.8946 0.292893 11.7071C0.105357 11.5196 0 11.2652 0 11V1C0 0.734784 0.105357 0.48043 0.292893 0.292893C0.48043 0.105357 0.734784 0 1 0ZM7 0C7.26522 0 7.51957 0.105357 7.70711 0.292893C7.89464 0.48043 8 0.734784 8 1V11C8 11.2652 7.89464 11.5196 7.70711 11.7071C7.51957 11.8946 7.26522 12 7 12C6.73478 12 6.48043 11.8946 6.29289 11.7071C6.10536 11.5196 6 11.2652 6 11V1C6 0.734784 6.10536 0.48043 6.29289 0.292893C6.48043 0.105357 6.73478 0 7 0Z"
        fill="currentColor"
      />
    </svg>`

  const pauseContent = `<figure class=video-control__icon>${pausIcon}</figure><span class="video-control__text">Pausa video</span>`

  // Skapa knapp
  const button = document.createElement("button")
  button.classList.add("video-control")

  button.innerHTML = pauseContent

  //   Play-innehåll för paus/play-knappen
  const playIcon = `<svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.515625 0.1249C0.833496 -0.0510652 1.22215 -0.0403328 1.53027 0.152244L9.53027 5.15224C9.82245 5.33502 10 5.65525 10 5.9999C10 6.34455 9.82245 6.66478 9.53027 6.84756L1.53027 11.8476C1.22215 12.0401 0.833496 12.0509 0.515625 11.8749C0.19767 11.6987 0 11.3634 0 10.9999V0.9999C0 0.636375 0.19767 0.301126 0.515625 0.1249ZM2 9.19521L7.11328 5.9999L2 2.80361V9.19521Z" fill="currentColor"/>
                    </svg>`

  const playContent = `<figure class=video-control__icon>${playIcon}</figure><span class="video-control__text">Spela video</span>`

  // Funktion för att toggla play och paus
  const toggleVideoState = () => {
    if (video.paused) {
      video.play()
      button.innerHTML = pauseContent
    } else {
      video.pause()
      button.innerHTML = playContent
    }
  }

  //   Event
  button.addEventListener("click", toggleVideoState)

  //   lägg in knappen i hero
  hero.append(button)
}

videoControl()
