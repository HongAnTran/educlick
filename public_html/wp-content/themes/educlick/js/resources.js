

const showTop = () => {
    document.querySelector('.bttmbtn').classList.remove('active')
    document.querySelector('.topbtn').classList.add('active')
    document.querySelector('#top').classList.add('d-block')
    document.querySelector('#top').classList.remove('d-none')
    document.querySelector('#bottom').classList.remove('d-block')
    document.querySelector('#bottom').classList.add('d-none')
}

const showBottom = () => {
    document.querySelector('.bttmbtn').classList.add('active')
    document.querySelector('.topbtn').classList.remove('active')
    document.querySelector('#bottom').classList.add('d-block')
    document.querySelector('#bottom').classList.remove('d-none')
    document.querySelector('#top').classList.remove('d-block')
    document.querySelector('#top').classList.add('d-none')
}


const input = document.getElementById('input-pass')
const btn = document.getElementById('btn-pass')
const form = document.getElementById('form-micro')
const form_login = document.getElementById('form-login')
form.style.display = 'none'
btn.addEventListener('click' , ()=>{
    const value = input.value

    if(value){
        if(value==='educlick2024'){
                form.style.display = 'block'
                form_login.style.display = 'none'
        }else{
            alert('Wrong password')
        }
    }else{
        alert('Please password')
    }
})