const countDownEl = document.querySelector('.card-footer h2');

const oneDayMs = 1000 * 60 * 60 * 24;
const oneHourMs = 1000 * 60 * 60;
const oneMinuteMs = 1000 * 60;
const oneSecondeMs = 1000;

let targetDate = '';
let countDownId ='';

function countdown(stageDate) {

    let dateNow = new Date();
    
    let timeLeft = stageDate - dateNow ;
    let daysLeft = Math.floor(timeLeft / oneDayMs);
    
    let hoursLeftMs = timeLeft - ( daysLeft * oneDayMs ) ;
    let hoursLeft = Math.floor(hoursLeftMs / oneHourMs);
    
    let minutesLeftMs = hoursLeftMs - ( hoursLeft * oneHourMs ) ;
    let minutesLeft = Math.floor(minutesLeftMs / oneMinuteMs);
    
    let secondesLeftMs = minutesLeftMs - ( minutesLeft * oneMinuteMs );
    let secondesLeft = Math.floor(secondesLeftMs / oneSecondeMs);
    
    let msLeft = secondesLeftMs - ( secondesLeft * oneSecondeMs );
    
    countDownEl.textContent = daysLeft + ' jours   [ ' + hoursLeft + ' hrs : ' + minutesLeft + ' min : ' + secondesLeft + ' sec : ' + msLeft + ' Ms ] ' ;
    
}

function toggleCountDown(stageDate){
    
    if(stageDate == 0){
        clearInterval(countDownId)
    } else{
        targetDate = new Date(stageDate);
        countDownId = setInterval(countdown, 10, targetDate)
    }

}

export{ toggleCountDown };
