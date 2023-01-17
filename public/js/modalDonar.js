const exampleModal = document.getElementById('exampleModal')
  if (exampleModal) {
    exampleModal.addEventListener('show.bs.modal', event => {
      // Button that triggered the modal
      const button = event.relatedTarget
      // Extract info from data-bs-* attributes
      const recipient = button.getAttribute('data-bs-whatever')
      const descripcion = button.getAttribute('data-bs-description')
      const Meta = button.getAttribute('data-bs-meta')
      const Actual = button.getAttribute('data-bs-actual')
      const Imagen = button.getAttribute('data-bs-imagen')

      // Update the modal's content.
      const modalTitle = exampleModal.querySelector('.modal-title')
      const modalDescription = exampleModal.querySelector('.modal-description')
      const modalMeta = exampleModal.querySelector('.meta')
      const modalPorcentaje = exampleModal.querySelector('.progress-bar')
      const modalImagen = exampleModal.querySelector('.imgmodal1')
      const modalImagen2 = exampleModal.querySelector('.imgmodal2')

      modalTitle.textContent = `(${recipient})`
      modalDescription.textContent = `${descripcion}`
      modalMeta.textContent = `${Actual}/${Meta}`
      modalImagen.src = `storage/${Imagen}`
      modalImagen2.src = `storage/${Imagen}`

      porcentaje = (Actual/Meta)*100

      modalPorcentaje.textContent = `${porcentaje}%`
      modalPorcentaje.style.width = "2%"
      console.log(porcentaje)
      if(porcentaje === 0){
        modalPorcentaje.style.width = "5%"
      }
      if(porcentaje != 0){
        modalPorcentaje.style.width = `${porcentaje}%`
      }


    })
  }

const btnAbrirmodal = document.querySelector("#btn-abrir");
const btnCerrarmodal = document.querySelector("#btn-cerrar");
const modal = document.querySelector("#modal-imagen");

btnAbrirmodal.addEventListener("click", () =>{
  modal.showModal();
})

btnCerrarmodal.addEventListener("click", ()=>{
  modal.close();
})



