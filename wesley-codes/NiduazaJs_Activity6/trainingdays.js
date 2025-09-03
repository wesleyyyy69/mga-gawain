// The scope of `random` is too loose 
const getRandEvent = () => {
  const random = Math.floor(Math.random() * 3);
  if (random === 0) {
    return 'Marathon';
  } 
  else if (random === 1) {
    return 'Triathlon';
  } 
  else if (random === 2) {
    return 'Pentathlon';
  }
};

// The scope of `days` is too tight 
const getTrainingDays = event => {
  let days;
  if (event === 'Marathon') {
    days = 50;
  } else if (event === 'Triathlon') {
    days = 100;
  } else if (event === 'Pentathlon') {
    days = 200;
  }
  return days;
};

// The scope of `name` is too tight 
// Move name to global scope so it can be used for different athletes

const logEvent = (name, event) => {
  console.log(`${name}'s event is: ${event}`);
};

const logTime = (name, days) => {
  console.log(`${name}'s time to train is: ${days} days`);
};

// First athlete
const name = 'Nala';
const event = getRandEvent();
const days = getTrainingDays(event);
logEvent(name, event);
logTime(name, days);

// Second athlete 
const name2 = 'Nathan';
const event2 = getRandEvent();
const days2 = getTrainingDays(event2);
logEvent(name2, event2);
logTime(name2, days2);