function modal_main_toggle() {
    document.querySelector("#body_modal").classList.toggle('visible');
    document.querySelector(".body").classList.toggle('noscroll');
}


function modal_main_toggle_close() {
    document.getElementById("modalflat").classList.toggle('visible');
}
const modal_cookie_open = () => {
    document.getElementById("cok_modal").classList.add('modal_notifications_visible');
};

function modal_main_toggle_2() {
    document.getElementById("cok_modal").classList.remove('modal_notifications_visible');
}

window.onload = setTimeout(modal_cookie_open, 1000);


document.getElementById("added_news").onclick = () => {
    document.getElementById("ucaht_1").classList.toggle('visible');
}


function ValidateSize(file) {
    var FileSize = file.files[0].size / 1024 / 1024; // in MB
    if (FileSize > 50) {
        alert('Ваш файл весит больше 50 мб, пожалуйста загрузите его на google disk или dropbox и прикрепите ссылки в соответствующее поле');
        document.getElementById("btn_1_1").value = "";
    } else {

    }
}