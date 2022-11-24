const carshop$ = document.getElementById('carshop')
const shadowCarshop$ = document.getElementById('shadow-carshop')


const toggleCarshop = () => {
    carshop$.classList.toggle('is-active')
    shadowCarshop$.classList.toggle('is-active')
}

