export function addSweetDelete(btnQuery,wrapperQuery,titleQuery) {
    const deleteComicBtns = document.querySelectorAll(btnQuery);
    deleteComicBtns.forEach( btn => {
        console.log('foreach entered')
        btn.addEventListener('click', event => {
            event.preventDefault();
    
            const comicTitle = btn.closest(wrapperQuery).querySelector(titleQuery).innerHTML;
    
            const deleteComicAlert = document.getElementById('sweet-delete-alert');
            deleteComicAlert.querySelector('h2').innerHTML = comicTitle;
            deleteComicAlert.classList.remove('d-none')
    
            const confirmDeleteBtn = deleteComicAlert.querySelector('.confirm.btn');
            const dismissBtn = deleteComicAlert.querySelector('.dismiss.btn');
    
            confirmDeleteBtn.addEventListener('click', () => {
                btn.parentElement.submit();
            });
    
            dismissBtn.addEventListener('click', () => {
                deleteComicAlert.classList.add('d-none');
            })
        })
    })
}