const person = {
  name: "Britney Jean Spears",
  birthdate: "2 December, 1981",
  from: "McComb, Mississippi, USA",
  length: 163,
  children: ["Sean Federline", "Jayden James Federline"],
  description:
    "Britney Spears has been one of the most successful — and sometimes controversial — solo acts in popular music. Six of her first seven albums reached No. 1 on the Billboard 200.",
};

firstName = person.name.split(" ")[0];
midleName = person.name.split(" ")[1];
lastName = person.name.split(" ")[2];
firstAndLastName = person.name.split(" ")[0] + " " + person.name.split(" ")[2];

//upgift 9
//console.log(`Her name is ${person.name} and she was born ${person.birthdate}`);

//upgift 10/11
const formatLenght = (length) => {
  return length / 100 + "m";
};

//upgift 12
person.children.forEach((child) => {
  //console.log(child);
});
