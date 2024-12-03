var myButton=document.getElementById('button1');
function func1() {
  window.location.href="https://static.toiimg.com/thumb/msid-59355141,width-1280,height-720,imgsize-293364,resizemode-6,overlay-toi_sw,pt-32,y_pad-40/photo.jpg"
}
const sr = ScrollReveal({
  origin: 'top',
  distance: '60px',
  duration: 2000,
  delay: 200,
//     reset: true
});
sr.reveal('.head',{delay:400});
sr.reveal('.nav',{delay:800});
sr.reveal('.paragraph', {delay:400});
// sr.reveal('.img1TOI',{delay:1000});