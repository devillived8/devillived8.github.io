let 
main_form_wrapper = document.querySelector(".main_form_wrapper"),
testDriveBtn = document.querySelector(".testdrive_button"),
main_form = document.querySelector(".main_form"),
main_form_title = document.querySelector(".main_form_title"),
categories_button = document.querySelectorAll(".categories_button"),
orderAmanager_button = document.querySelector(".orderAmanager_button"),
header_button = document.querySelector(".header_button")
;


testDriveBtn.addEventListener("click", (e)=>{
    main_form_wrapper.style.display = "block";
    main_form.style.display = "flex";
    main_form_title.textContent = "БЕСПЛАТНЫЙ ТЕСТ-ДРАЙВ АВТОШКОЛЫ";
})

orderAmanager_button.addEventListener("click", (e)=>{
    main_form_wrapper.style.display = "block";
    main_form.style.display = "flex";
    main_form_title.textContent = "ЗАКАЗАТЬ БЕСПЛАТНЫЙ ВЫЕЗД МЕНЕДЖЕРА";
})

main_form_wrapper.addEventListener("click", (e)=>{
    main_form_wrapper.style.display = "none";
    main_form.style.display = "none";
})

categories_button.forEach((e)=>{
    e.addEventListener("click", (e)=>{
        main_form_wrapper.style.display = "block";
        main_form.style.display = "flex";
        main_form_title.textContent = "ЗАПИСАТЬЯ НА ОБУЧЕНИЕ ПО АКЦИИ";
    })
});

header_button.addEventListener("click", (e)=>{
    main_form_wrapper.style.display = "block";
    main_form.style.display = "flex";
    main_form_title.textContent = "ЗАКАЗАТЬ ЗВОНОК";
})