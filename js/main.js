const carshop$ = document.getElementById('carshop')
const shadowCarshop$ = document.getElementById('shadow-carshop')

const toggleCarshop = () => {
    carshop$.classList.toggle('is-active')
    shadowCarshop$.classList.toggle('is-active')
}

const showMessage = (title,icon = 'success', timer = 1500,) => {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })
      
      Toast.fire({
        icon,
        title
      })
}