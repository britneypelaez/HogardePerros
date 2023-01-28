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
        const link = encodeURI(window.location.href)
        const linkGlobal = window.location.host
        const msg = encodeURIComponent('Apoya esta campaña')
        const title = encodeURIComponent(recipient)


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

        porcentaje = (Actual / Meta) * 100

        modalPorcentaje.textContent = `${porcentaje}%`
        modalPorcentaje.style.width = "2%"
        if (porcentaje === 0) {
            modalPorcentaje.style.width = "5%"
        }
        if (porcentaje != 0) {
            modalPorcentaje.style.width = `${porcentaje}%`
        }

        const fb = document.querySelector('.Facebook')
        fb.href = `https://www.facebook.com/sharer/sharer.php?u=${link}`
        const ws = document.querySelector('.whatsapp')
        ws.href = "whatsapp://send?text=" + recipient + "%20" + link + "%20" + `http://` + linkGlobal + `/storage/${Imagen}` + "%20" + descripcion

        const shareButton = document.getElementById('share');

        shareButton.addEventListener('click', async () => {
            console.log('hola')
            if (navigator.share) {
                try {
                    await navigator.share({
                        title: 'Example Title',
                        text: 'Example text',
                        url: 'https://example.com'
                    });
                    console.log('Content shared successfully!');
                } catch (err) {
                    console.log('Error sharing content: ', err);
                }
            } else {
                console.log('Web Share API is not supported on this browser.');
            }
        });

    })
}

const btnAbrirmodal = document.querySelector("#btn-abrir");
const btnCerrarmodal = document.querySelector("#btn-cerrar");
const modal = document.querySelector("#modal-imagen");

btnAbrirmodal.addEventListener("click", () => {
    modal.showModal();
})

btnCerrarmodal.addEventListener("click", () => {
    modal.close();
})



