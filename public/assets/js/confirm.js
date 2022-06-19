document.querySelectorAll('a.confirm').forEach((btn) => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();
        Swal.fire({
            icon: e.target.dataset.confirmIcon!=null?e.target.dataset.confirmIcon:'error',
            title: e.target.dataset.confirmMsg!=null?e.target.dataset.confirmMsg:'Do you want to delete this item?',
            showDenyButton: false,
            showCancelButton: true,
            cancelButtonText:'Cancel',
            confirmButtonText: 'Yes!',
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = e.target.href;
            }
        })
    })
})