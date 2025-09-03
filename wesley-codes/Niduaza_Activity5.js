
const age = 21;       
const isEarlyRegistered = true;
let raceNumber = Math.floor(Math.random() * 1000);
const youthRaceNumber = raceNumber - 1000;

if (age > 19 && isEarlyRegistered) {
    console.log(`Runner ${raceNumber += 1000}, your race will start at 9:30 AM.`); 
} 
else if (age > 19 && !isEarlyRegistered) {
    console.log(`Runner ${raceNumber += 1000}, your race will start at 11:00 AM. Late adults run at 11:00 AM.`);
}
else if (age < 19) {
    console.log(`Runner ${youthRaceNumber}, your race will start at 12:30 PM. Youth runners start at 12:30 PM (regardless of registration).`);
}
else if (age === 19) {
    console.log("Please see the registration desk.");
}