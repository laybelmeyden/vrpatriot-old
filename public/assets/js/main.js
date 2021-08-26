function modal_main_toggle() {
    document.querySelector("#body_modal").classList.toggle('visible');
    document.querySelector(".body").classList.toggle('noscroll');
}


function modal_main_toggle_close() {
    document.getElementById("modalflat").classList.toggle('visible');
}
// const modal_cookie_open = () => {
//     document.getElementById("cok_modal").classList.add('modal_notifications_visible');
// };

// function modal_main_toggle_2() {
//     document.getElementById("cok_modal").classList.remove('modal_notifications_visible');
// }

// window.onload = setTimeout(modal_cookie_open, 1000);


// document.getElementById("added_news").onclick = () => {
//     document.getElementById("ucaht_1").classList.toggle('visible');
// }


// function ValidateSize(file) {
//     const FileSize = file.files[0].size / 1024 / 1024; // in MB
//     if (FileSize > 50) {
//         alert('Ваш файл весит больше 50 мб, пожалуйста загрузите его на google disk или dropbox и прикрепите ссылки в соответствующее поле');
//         document.getElementById("btn_1_1").value = "";
//     } else {

//     }
// }
const x = document.getElementsByClassName("slider-produtos-wrap");

for (let i = 0; i < x.length; i++) {

    const el = x[i];

    const swiper = el.getElementsByClassName("swiper")[0];
    const nx = el.getElementsByClassName("swiper-next")[0];
    const pr = el.getElementsByClassName("swiper-prev")[0];

    new Swiper(swiper, {
        slidesPerView: 1,
        spaceBetween: 20,
        breakpoints: {
            992: {
                slidesPerView: 2,
            },
            1350: {
                slidesPerView: 3,
            }
        },
        navigation: {
            nextEl: nx,
            prevEl: pr
        }
    });
}