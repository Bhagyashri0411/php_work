// const form = document.querySelector('.form form');
// const btn = form.querySelector('.submitbtn');
// const error = form.querySelector('.error');
// const loginlink = document.querySelector('.form .link')

// form.onsubmit = (a) => {
//     a.preventDefault();
// }
// btn.onclick = () => {
//     let reqt = new XMLHttpRequest();
//     reqt.open("POST", "./php/register.php", true)
//     reqt.onload = () => {
//         if (reqt.readyState === XMLHttpRequest.DONE) {
//             if (reqt.status == 200) {
//                 let data = reqt.response;
//                 if (data == 'success') {
//                     alert('success');
//                     error.textContent = data;
//                     loginlink.style.display='block';
//                 }
//                 else {
//                     error.textContent = data;                  
//                 }
//             }
//         }
//     }
//     let formda = new FormData(form);
//     reqt.send(formda)
// }