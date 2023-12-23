const $ = document.querySelector.bind(document)
const $$ = document.querySelectorAll.bind(document)

const loginBtn = $('#loginBtn')
const addAcc = $('#addAccount')
const tk = $('#email')
const mk = $('#password')


loginBtn.addEventListener("click",login);

function login(){
    if(tk.value == "" || mk.value == "" ) alert('Đăng nhập không thành công!');
        
}


