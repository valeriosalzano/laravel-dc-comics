import './bootstrap';
import '~resources/scss/app.scss';
import { addSweetDelete } from './sweet_delete';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

// *** COMIC DELETE ***
addSweetDelete('.sweet-delete.btn','.comic-card','.comic-title');
