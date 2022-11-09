const form = document.querySelector(".form");
const input = document.querySelector(".input");
const ul = document.querySelector(".tasks");
const addTask = document.querySelector(".btn");
const name = document.querySelector(".name").value;
const duration = document.querySelector(".duration").value;

//task object with name, duration and isDone properties
const task = {
  name: "",
  duration: 0,
  isDone: false,
};

//array to store tasks
const tasks = [];

//event listener for add task button
