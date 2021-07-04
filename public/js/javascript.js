let btn = document.querySelector('.bi-navtop');
let sidebar = document.querySelector('#navside');
let navbar = document.querySelector('.navbar')

btn.onclick = function() {
    sidebar.classList.toggle('active');
    document.getElementById("navbar").style.marginLeft= "0";
}



