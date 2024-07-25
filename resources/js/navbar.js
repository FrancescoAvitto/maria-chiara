window.addEventListener('DOMContentLoaded', () =>{
    const navbar = document.querySelector('#navbar');
    window.addEventListener('scroll', () =>{
        if(document.body.scrollTop > 30 || document.documentElement.scrollTop > 30){
            navbar.classList.remove('bg-transparent')
            navbar.classList.add('bg-white')
        } else {
            navbar.classList.remove('bg-white')
            navbar.classList.add('bg-transparent')
        }
    })
});
