const timeLune = document.querySelector(".timeLune");
// const timeMars = document.querySelector(".timeMars");
// const timeVenus = document.querySelector(".timeVenus");
// const timeMercure = document.querySelector(".timeMercure");

function getChrono(){

    const now = new Date().getTime();
    const countDownDate = new Date("december 03,2022").getTime();

    const distanceBase = countDownDate - now;

    const days = Math.floor(distanceBase/(1000 * 60 * 60 * 24));
    const hour = Math.floor((distanceBase % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minute = Math.floor((distanceBase % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distanceBase % (1000 * 60 )) / (1000));
 
   timeLune.textContent = `${days}j ${hour}h ${minute}m ${seconds}s`;
   // timeMars.InnerText = `${days}j ${hour}h ${minute}m ${seconds}s`;
   // timeVenus.InnerText = `${days}j ${hour}h ${minute}m ${seconds}s`;
   // timeMercure.InnerText = `${days}j ${hour}h ${minute}m ${seconds}s`;
    console.log(`${days}j ${hour}h ${minute}m ${seconds}s`);
}


 let countDownInterval = setInterval(getChrono,1000);
 
 
 

 