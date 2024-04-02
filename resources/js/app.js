const spinner = document.querySelector('.spinner');
const deleteTargetModal = document.querySelector('.delete-target-modal');

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

    // ********** Modal **********
    // Show modal
    document.querySelectorAll('[data-click-action="show-modal"]').forEach((item) => {
        item.addEventListener('click', (evt) => {
            hideAllActiveModals();
            showModal(document.querySelector(evt.currentTarget.dataset.modalTarget));
        });
    });

    // Hide modal
    document.querySelectorAll('[data-click-action="hide-active-modals"]').forEach((item) => {
        item.addEventListener('click', () => {
            hideAllActiveModals();
        });
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

    document.querySelectorAll('[data-click-action="delete-target"]').forEach((item) => {
        let input = deleteTargetModal.querySelector('input[name="ids[]"]');

        item.addEventListener('click', (evt) => {
            input.value = evt.currentTarget.dataset.targetId;
            showModal(deleteTargetModal);
        });
    });

    // ********** Main Form **********
    // Show spinner to escape multiple submit button
    document.querySelector('.main-form.create-form, .main-form.edit-form')
        ?.addEventListener('submit', () => {
            showSpinner();
        });
});


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

function showSpinner() {
    spinner.classList.add('spinner--visible');
}

function hideSpinner() {
    spinner.classList.remove('spinner--visible');
}
