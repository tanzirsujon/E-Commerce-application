let btn = document.getElementsByClassName('btn-1')[0];
let customer = document.getElementsByClassName('customer')[0];


let n = (e) => {
    customer.hidden = false;
    // console.log(e.target);
    // console.log(e.clientX);
    // console.log(e.clientY);




}
let x = (e) => {
    customer.hidden = true;


}
btn.addEventListener('mouseover', n);
// btn.addEventListener('mouseout', x);


let y = (e) => {
    console.log(e.clientX + "\n" + e.clientY);
}
// customer.addEventListener('mouseover', y);
