
const nav_menu_mobile = document.getElementById('nav_menu_mobile');
const mobile_menu_icon = document.getElementById('mobile_menu_icon');
const mobile_menu_icon_close = document.getElementById('mobile_menu_icon_close');

mobile_menu_icon.addEventListener('click' , ()=>{
    nav_menu_mobile.classList.remove('hidden');
    mobile_menu_icon.classList.add('hidden');
    mobile_menu_icon_close.classList.remove('hidden');

});
mobile_menu_icon_close.addEventListener('click' , ()=>{
    nav_menu_mobile.classList.add('hidden');
    mobile_menu_icon_close.classList.add('hidden');
    mobile_menu_icon.classList.remove('hidden');

});
// =====patient education======
const education_select = document.getElementById('exercise');
const exercise_document_wrapper = document.querySelector('#exercise_document_wrapper');
const faq = document.getElementById('faq');

const FrequentQA_content_list_item = document.querySelectorAll('.FrequentQA_content_list_item');
const list_item_description = document.querySelectorAll('.list_item_description');

console.log(FrequentQA_content_list_item);


education_select.addEventListener('change', (e) => {
    const selectedValue = e.target.value;
    console.log(selectedValue,faq,exercise_document_wrapper);

    if (selectedValue === "FAQ") {
        exercise_document_wrapper.classList.add("hidden");
        faq.classList.remove("hidden");
    } else {
        exercise_document_wrapper.classList.remove("hidden");
        faq.classList.add("hidden");
    }
});


FrequentQA_content_list_item.forEach((elem,idx)=>{
    elem.addEventListener('click' , (e)=>{
        const element = e.currentTarget;
        let desc = element.querySelector('.list_item_description');
        if(desc){
            desc.classList.toggle('colpse');
        }
        
    })
});