// Отримуємо потрібні елементи з DOM для кожного попапа
var popups = [];
var openBtns = [];
var closeBtns = [];

for (var i = 1; i <= 10; i++) {
    popups[i] = document.getElementById('popup-' + i);
    openBtns[i] = document.getElementById('openBtn-' + i);
    closeBtns[i] = popups[i].querySelector('.close');

    // Функція відкриття попапа
    openBtns[i].onclick = createOpenPopupHandler(i);

    // Функція закриття попапа
    closeBtns[i].onclick = createClosePopupHandler(i);

    // Закриття попапа при кліці на пустому полі
    window.onclick = createWindowClickHandler(i);
}

// Функція для відкриття попапа
function createOpenPopupHandler(index) {
    return function() {
        popups[index].style.display = 'block';
    };
}

// Функція для закриття попапа
function createClosePopupHandler(index) {
    return function() {
        popups[index].style.display = 'none';
    };
}

// Функція для закриття попапа при кліці на пустому полі
function createWindowClickHandler(index) {
    return function(event) {
        if (event.target == popups[index]) {
            popups[index].style.display = 'none';
        }
    };
}



// Додати клас при відкритті попапів
document.body.classList.add('popup-open');

// Видалити клас при закритті попапів
document.body.classList.remove('popup-open');


