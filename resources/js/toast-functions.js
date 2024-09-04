const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 4000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.onmouseenter = Swal.stopTimer;
        toast.onmouseleave = Swal.resumeTimer;
    }
});


window.toastSuccess = function (message){
    Toast.fire({
        icon: 'success',
        title: message,
    });
}

window.toastError = function (message){
    Toast.fire({
        icon: 'error',
        title: message,
    });
}
