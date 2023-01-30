const exampleModal = document.getElementById('exampleModal')
if (exampleModal) {
    exampleModal.addEventListener('show.bs.modal', event => {
        // Button that triggered the modal
        let button = event.relatedTarget
        // Extract info from data-bs-* attributes
        let recipient = button.getAttribute('data-bs-whatever')
        let descripcion = button.getAttribute('data-bs-description')
        let Meta = button.getAttribute('data-bs-meta')
        let Actual = button.getAttribute('data-bs-actual')
        let Imagen = button.getAttribute('data-bs-imagen')
        let link = encodeURI(window.location.href)
        let linkGlobal = window.location.host
        let msg = encodeURIComponent('Apoya esta campaña')
        let title = encodeURIComponent(recipient)


        // Update the modal's content.Update the modal's content.
        let modalTitle = exampleModal.querySelector('.modal-title')
        let modalDescription = exampleModal.querySelector('.modal-description')
        let modalMeta = exampleModal.querySelector('.meta')
        let modalPorcentaje = exampleModal.querySelector('.progress-bar')
        let modalImagen = exampleModal.querySelector('.imgmodal1')
        let modalImagen2 = exampleModal.querySelector('.imgmodal2')

        modalTitle.textContent = `(${recipient})`
        modalDescription.textContent = `${descripcion}`
        modalMeta.textContent = `${Actual}/${Meta}`
        modalImagen.src = `storage/${Imagen}`
        modalImagen2.src = `storage/${Imagen}`

        // let metaTitle = document.querySelector('meta[property="og:title"]');
        // metaTitle.setAttribute('content', recipient);
        // let metaDescripcion = document.querySelector('meta[property="og:description"]');
        // metaDescripcion.setAttribute('content', descripcion);
        // let metaImagen = document.querySelector('meta[property="og:image"]');
        // metaImagen.setAttribute('content', `storage/${Imagen}`);
        // let metaUrl = document.querySelector('meta[property="og:url"]');
        // metaUrl.setAttribute('content', link);

        porcentaje = (Actual / Meta) * 100

        modalPorcentaje.textContent = `${porcentaje}%`
        modalPorcentaje.style.width = "2%"
        if (porcentaje === 0) {
            modalPorcentaje.style.width = "5%"
        }
        if (porcentaje != 0) {
            modalPorcentaje.style.width = `${porcentaje}%`
        }

        let fb = document.querySelector('.Facebook')
        fb.href = `https://www.facebook.com/sharer/sharer.php?u=${link}`
        let ws = document.querySelector('.whatsapp')
        ws.href = "whatsapp://send?text=" + recipient + "%20" + link + "%20" + `https://` + linkGlobal + `/storage/${Imagen}` + "%20" + descripcion

        let shareButton = document.getElementById('share');

        var imagenURL = `/storage/${Imagen}`

        var xhr = new XMLHttpRequest()
        xhr.open('GET', imagenURL, true)
        xhr.responseType = 'blob'




        shareButton.addEventListener('click', async () => {
            if (navigator.share) {
                try {
                    xhr.onload = function(e) {
                        if(this.status === 200) {
                            var blob = this.response

                            var file = new File([blob], 'imagen.jpg', {
                                type: 'image/jpeg'
                            })
                            navigator.share({
                                title: recipient,
                                text: descripcion,
                                url: link,
                                files: [file]
                            });
                        }
                    }
                    console.log('Content shared successfully!');
                } catch (err) {
                    console.log('Error sharing content: ', err);
                }
            } else {
                console.log('Web Share API is not supported on this browser.');
            }
            xhr.send()
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



