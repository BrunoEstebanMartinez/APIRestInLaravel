const boton = document.querySelector('.btn-1-1-next');
const tablemodal1 = document.querySelector('.tabla-1');

console.log(boton);
console.log(tablemodal1);

boton.addEventListener('click', ()=>{  // or =>(){}
    tablemodal1.classList.toggle("table-lock")
})

