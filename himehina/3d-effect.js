//Items
const card = document.querySelector('body main');
const container = document.querySelector('body main');

const release = document.querySelector('main .release');

//Animation event
container.addEventListener('mousemove', (e) => {
    let xAxis = (window.innerWidth / 2 - e.pageX) / 10; 
    let yAxis = (window.innerHeight / 2 - e.pageY) / 10; 
    card.style.transform = `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;
    
});

//Animate In
card.addEventListener('mouseenter', (e) => {
    card.style.transition = 'none';

    //Cool stuff
    release.style.transform = 'translateZ(200px) perspective(400px)';


});

//Animate out
card.addEventListener('mouseleave', (e) => {
    card.style.transition = 'all 0.5s ease';
    card.style.transform = `rotateY(0deg) rotateX(0deg)`;

    release.style.transform = 'translateZ(0px) perspective(400px)';

})