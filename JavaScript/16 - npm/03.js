import prompts from "prompts";

const questions = ["What is your name?", "How old are you?"];

console.log(questions[0]);

const response = await prompts({
  type: "text",
  name: "name",
  message: "What is your name?",
});

console.log(response.name);

console.log(questions[1]);

const response2 = await prompts({
  type: "number",
  name: "age",
  message: "How old are you?",
});

console.log(response2.age + "? WOW! That is a cool age " + response.name);
