let
card_button = document.querySelectorAll(".card_button"),
header_button = document.querySelector(".header_button"),
main_form_wrapper = document.querySelector(".main_form_wrapper"),
main_form = document.querySelector(".main_form"),
main_form_title = document.querySelector(".main_form_title")
;


main_form_wrapper.addEventListener("click", (e)=>{
    main_form_wrapper.style.display = "none";
    main_form.style.display = "none";
})

card_button.forEach((e)=>{
    e.addEventListener("click", (e)=>{
        main_form_wrapper.style.display = "block";
        main_form.style.display = "flex";
        main_form_title.textContent = "УЗНАТЬ ПОДРОБНЕЕ";
    })
});

header_button.addEventListener("click", (e)=>{
    main_form_wrapper.style.display = "block";
    main_form.style.display = "flex";
    main_form_title.textContent = "ЗАКАЗАТЬ ЗВОНОК";
})