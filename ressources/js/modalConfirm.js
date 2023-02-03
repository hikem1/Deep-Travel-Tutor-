
let deleteBtns = document.querySelectorAll('.delete-btn');
let confirmBtn = document.querySelector('#confirm-btn');
let submitBtn = document.querySelector('#submit-btn');
let modalSpanUserId = document.querySelector('#user-id');
let userForm = document.querySelector('#user-form');

deleteBtns.forEach(element => element.addEventListener('click',() => {
    let userId = element.getAttribute('user');
    confirmBtn.setAttribute('href','./user_delete.php?id=' + userId);
    modalSpanUserId.textContent = userId;
}))

submitBtn.addEventListener( 'click', ()=> {
    let userId = submitBtn.getAttribute('user');
    modalSpanUserId.textContent = userId;
})

confirmBtn.addEventListener( 'click', ()=> {
    userForm.submit();
})


