
const nav_menu_mobile = document.getElementById('nav_menu_mobile');
const mobile_menu_icon = document.getElementById('mobile_menu_icon');
const mobile_menu_icon_close = document.getElementById('mobile_menu_icon_close');

mobile_menu_icon.addEventListener('click', () => {
    nav_menu_mobile.classList.remove('hidden');
    mobile_menu_icon.classList.add('hidden');
    mobile_menu_icon_close.classList.remove('hidden');

});
mobile_menu_icon_close.addEventListener('click', () => {
    nav_menu_mobile.classList.add('hidden');
    mobile_menu_icon_close.classList.add('hidden');
    mobile_menu_icon.classList.remove('hidden');

});
// =====patient education======
const exercise_document_wrapper = document.getElementById('exercise_document_wrapper');
const faq_section = document.getElementById('faq_section');
// ---icons---
const icon_plus = document.querySelectorAll('.icon_plus');
const icon_minus = document.querySelectorAll('.icon_minus');
// --patient_btn--
const home_exercise = document.getElementById('home_exercise');
const Frequent_QA = document.getElementById('Frequent_QA');
// --petient_section--
const FrequentQA_content_list_item = document.querySelectorAll('.FrequentQA_content_list_item');
const list_item_description = document.querySelectorAll('.list_item_description');
// --- petient_secton_toggle_click_event--
home_exercise.addEventListener('click', () => {
    exercise_document_wrapper.classList.remove('hidden');
    faq_section.classList.add('hidden');

})
Frequent_QA.addEventListener('click', () => {
    exercise_document_wrapper.classList.add('hidden');
    faq_section.classList.remove('hidden');

})


FrequentQA_content_list_item.forEach((elem, idx) => {
    elem.addEventListener('click', (e) => {
        const element = e.currentTarget;
        let desc = element.querySelector('.list_item_description');
        // ---icons---
        const icon_plus = element.querySelector('.icon_plus');
        const icon_minus = element.querySelector('.icon_minus');
        if (desc) {
            desc.classList.toggle('colpse');
            icon_plus.classList.toggle('hidden');
            icon_minus.classList.toggle('hidden');
            
        }

    })
});