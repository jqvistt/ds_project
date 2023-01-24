/*let time = document.getElementById("current-time");

setInterval(() =>{
    let d = new Date();
    time.innerHTML = d.toLocaleTimeString();
}, 1000)
*/

setInterval(() =>{

var t=new Date();
var re=t.toLocaleString('en-GB');
re=re.slice(12);
document.getElementById('current-time').innerHTML=re;

}, 1000)
