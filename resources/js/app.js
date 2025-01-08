function sbscrdClickButton(){
    let a = document.querySelector('.i-1').value;
    let b = document.querySelector('.i-2').value;
    let name1 = document.querySelector('#name1');
    let email1 = document.querySelector('#email1');
    // Предполагаем, что a и b - это значения, которые вы проверяете
    if (!a && !b) {
        alert("Вы не ввели имя и электронную почту");
    } else {
        if (!a) {
            alert("Вы не ввели имя");
        }
        if (!b) {
            alert("Вы не ввели электронную почту");
        }
        if (a && b) { // Проверяем, если оба значения присутствуют
            name1.innerHTML = a;
            email1.innerHTML = b;
            document.getElementById("my-modal").classList.add("open");
        }
    }

    // Добавляем обработчик события один раз, чтобы закрыть модальное окно
    document.getElementById("close-my-model-btn").addEventListener("click", function() {
        document.getElementById("my-modal").classList.remove("open");
    });

}

document.getElementById("close-my-model-btn").addEventListener("click", function(){
    document.getElementById("my-modal").classList.remove("open")
})
// Закрыть модальное окно при нажатии на Esc
window.addEventListener('keydown', (e) => {
    if (e.key === "Escape") {
        document.getElementById("my-modal").classList.remove("open")
    }
});

//Закрыть модальное окно при нажатии на Enter
window.addEventListener('keydown', (e) => {
    if (e.key === "Enter") {
        document.getElementById("my-modal").classList.remove("open")
    }
});


// Закрыть модальное окно при клике вне его
document.querySelector("#my-modal .modal__box").addEventListener('click', event => {
    event._isClickWithInModal = true;
});
document.getElementById("my-modal").addEventListener('click', event => {
    if (event._isClickWithInModal) return;
    event.currentTarget.classList.remove('open');
});

function togglePassword(fieldId) {
    const passwordInput = document.getElementById(fieldId);
    const passwordType = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', passwordType);
}
