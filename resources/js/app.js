import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

// *** COMIC DELETE ***
const deleteComicBtns = document.querySelectorAll('.delete-comic-btn');

deleteComicBtns.forEach( btn => {
    btn.addEventListener('click', event => {
        event.preventDefault();

        const comicTitle = btn.closest('.comic-card').querySelector('#comic-title').innerHTML;

        const deleteComicAlert = document.getElementById('delete-comic-alert');
        deleteComicAlert.querySelector('h2').innerHTML = comicTitle;
        deleteComicAlert.classList.remove('d-none')

        const confirmDeleteBtn = deleteComicAlert.querySelector('.btn.btn-danger');
        const dismissBtn = deleteComicAlert.querySelector('.btn.btn-secondary');

        confirmDeleteBtn.addEventListener('click', () => {
            btn.parentElement.submit();
        });

        dismissBtn.addEventListener('click', () => {
            deleteComicAlert.classList.add('d-none');
        })
    })
})