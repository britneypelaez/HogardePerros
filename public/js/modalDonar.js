const exampleModal = document.getElementById('exampleModal')
  if (exampleModal) {
    exampleModal.addEventListener('show.bs.modal', event => {
      // Button that triggered the modal
      const button = event.relatedTarget
      // Extract info from data-bs-* attributes
      const recipient = button.getAttribute('data-bs-whatever')

      // Update the modal's content.
      const modalTitle = exampleModal.querySelector('.modal-title')

      modalTitle.textContent = `(Nombre de la ${recipient})`
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


  
  