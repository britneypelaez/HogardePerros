
// var myModal = document.getElementById('modalcamp');
// var modal = bootstrap.Modal.getOrCreateInstance(myModal)
// modal.show()
const myModal = new bootstrap.Modal(document.getElementById('modalcamp')),
      btnCerrrar = document.getElementById('btn-cerar'),
      btnCerrar2 = document.getElementById('btn-cerar2');

window.addEventListener('load', ()=>{

  let visita = sessionStorage.getItem('visita');

  if(visita == null) myModal.show();

});

btnCerrrar.addEventListener('click', ()=>{
  myModal.hide();
  sessionStorage.setItem('visita', 1);

});
btnCerrar2.addEventListener('click', ()=>{
  myModal.hide();
  sessionStorage.setItem('visita', 1);

});