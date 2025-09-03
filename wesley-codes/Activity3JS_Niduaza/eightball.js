

const userName = "Wesleyyyy";
const userQuestion = "why am I lazy?";

if (userName) {
  console.log(`Hello, ${userName}!`)    // name exists
} else {
 console.log("Hello!");     // no name entered
}

console.log(`${userName} asks, "${userQuestion}"`);

const random = Math.floor(Math.random() * 8);

switch (random) { 
  case 0:
    console.log("The eight ball says: Because you dont do your pendings.");
    break;
  case 1:
    console.log("The eight ball says: You always say you will do it later.");
    break;
  case 2:
    console.log("The eight ball says: You dont want to do anything.");
    break;
  case 3:
    console.log("The eight ball says:.PLEASE SLEEP EARLY");
    break;
  case 4:
    console.log("The eight ball says: You're just lazy bro.");
    break;
  case 5:
    console.log("The eight ball says: I dont know either");
    break;
  case 6:
    console.log("The eight ball says: Maybe you're just tired from work.");
    break;
  case 7:
    console.log("The eight ball says: Just do something relevant to your needs.");
    break;
}