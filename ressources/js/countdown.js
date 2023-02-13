const countDownEl = document.querySelector('.card-footer h2');
//la seclection de l'élement où s'affiche le compte à rebour.
const oneDayMs = 1000 * 60 * 60 * 24;
const oneHourMs = 1000 * 60 * 60;
const oneMinuteMs = 1000 * 60;
const oneSecondeMs = 1000;
// la convertion du temps en millis secondes.
let targetDate = '';
//pour effacer l'affichage de la date.
let countDownId ='';
// pour afficher l'intervalle

function countdown(stageDate) {

    let dateNow = new Date();
    
    let timeLeft = stageDate - dateNow ;
    // le temps restant entre la date de mainteant et la date prèvu.
    let daysLeft = Math.floor(timeLeft / oneDayMs);
    // ça compte le nombre de jours de restant.
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
