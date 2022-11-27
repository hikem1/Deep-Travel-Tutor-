let countdownEl = document.querySelector('.card-footer h2');


const nextStageDate = new Date('2023-05-16 15:00:00');
const oneDayMs = 1000 * 60 * 60 * 24;
const oneHourMs = 1000 * 60 * 60;
const oneMinuteMs = 1000 * 60;
const oneSecondeMs = 1000;


function countdown() {

let dateNow = new Date();

let timeLeft = nextStageDate - dateNow ;
let daysLeft = Math.floor(timeLeft / oneDayMs);

let hoursLeftMs = timeLeft - ( daysLeft * oneDayMs ) ;
let hoursLeft = Math.floor(hoursLeftMs / oneHourMs);

let minutesLeftMs = hoursLeftMs - ( hoursLeft * oneHourMs ) ;
let minutesLeft = Math.floor(minutesLeftMs / oneMinuteMs);

let secondesLeftMs = minutesLeftMs - ( minutesLeft * oneMinuteMs );
let secondesLeft = Math.floor(secondesLeftMs / oneSecondeMs);

let msLeft = secondesLeftMs - ( secondesLeft * oneSecondeMs );

let countDown = daysLeft + ' jours   [ ' + hoursLeft + ' hrs : ' + minutesLeft + ' min : ' + secondesLeft + ' sec : ' + msLeft + ' Ms ] ' ;
countdownEl.textContent = countDown;
}

let countDownInterval = setInterval(countdown, 10);

countdown();
