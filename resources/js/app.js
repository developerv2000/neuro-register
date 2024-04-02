const spinner = document.querySelector('.spinner');

window.addEventListener('load', () => {
    // ********** Selectize **********
    // singular Selectize
    $('.selectize-singular:not(.selectize--manually-initializable)').selectize({
        plugins: ["auto_position"],
    });

    // singular Linked Selectize
    $('.selectize-singular--linked').selectize({
        plugins: ["auto_position"],
        onChange(value) {
            window.location = value;
        }
    });

    // multiple Selectize
    $('.selectize-multiple:not(.selectize--manually-initializable)').selectize({
        plugins: ["auto_position"],
    });

    // ********** Simditor **********
    Simditor.locale = 'ru-RU';

    // Simple WYSIWYGS
    document.querySelectorAll('.simditor-textarea').forEach((textarea) => {
        new Simditor({
            textarea: textarea,
            toolbarFloatOffset: '60px',
            imageButton: 'upload',
            toolbar: ['title', 'bold', 'italic', 'underline', 'color', '|', 'ol', 'ul', 'blockquote', 'code', 'table', '|', 'link', 'hr', '|', 'indent', 'outdent', 'alignment'] //image removed
            // cleanPaste: true, //clear all styles after pasting,
        });
    });

    // ********** Main Form **********
    // Show spinner to escape multiple submit button
    document.querySelector('.main-form.create-form, .main-form.edit-form')
        ?.addEventListener('submit', () => {
            showSpinner();
        });

    // ************ MODAL ************
    function showModal(modal) {
        modal.classList.add('modal--visible');
    }

    function hideModal(modal) {
        modal.classList.remove('modal--visible');
    }

    function hideAllActiveModals() {
        document.querySelectorAll('.modal--visible').forEach((modal) => {
            hideModal(modal);
        });
    }

    // Show modal
    document.querySelectorAll('[data-action="show-modal"]').forEach((item) => {
        item.addEventListener('click', (evt) => {
            hideAllActiveModals();
            let modal = document.querySelector(evt.target.dataset.modalTarget);
            showModal(modal);
        });
    });

    // Hide modal
    document.querySelectorAll('[data-action="hide-modal"], .modal__overlay').forEach((item) => {
        item.addEventListener('click', () => {
            hideAllActiveModals();
        });
    });

    // Single Item Destroy Modal
    document.querySelectorAll('.table__button--destroy').forEach((item) => {
        item.addEventListener('click', (evt) => {
            let modal = document.querySelector('.modal--single-destroy');
            let input = modal.querySelector('[name="id"]');

            // Change input value and show modal
            input.value = evt.target.dataset.itemId;
            showModal(modal);
        });
    });
    // ************ /END MODAL ************
});

function showSpinner() {
    spinner.classList.add('spinner--visible');
}

function hideSpinner() {
    spinner.classList.remove('spinner--visible');
}
