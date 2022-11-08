const list = document.querySelector("ul");
const input = document.querySelector(".l1");
const submit = document.querySelector(".submit");
const name = document.querySelector(".name");
const duration = document.querySelector(".duration");

const task = {
  name: "do laundry",
  duration: 30,
  isDone() {
    return "done";
  },
};

const tasks = [
  {
    name: "do laundry",
    duration: 30,
    isDone() {
      return "done";
    },
  },
  {
    name: "do dishes",
    duration: 15,
    isDone() {
      return "done";
    },
  },
  {
    name: "do homework",
    duration: 120,
    isDone() {
      return "done";
    },
  },
];

//add all tasks DOM
tasks.forEach((task) => {
  const li = document.createElement("li");
  li.innerHTML = `${task.name} - ${task.duration} minutes`;
  list.appendChild(li);
});

/* for (let i = 0; i < tasks.length; i++) {
  const task = tasks[i];
  const li = document.createElement("li");
  li.classList.add("task");
  li.innerHTML = `<span class="name">${task.name}</span> <span class="duration">${task.duration}</span>`;
  list.appendChild(li);
} */

/* input.addEventListener("keydown", (event) => {
  if (event.key === "Enter") {
    const item = document.createElement("li");
    item.textContent = input.value;
    list.appendChild(item);
    input.value = "";
  }
}); */

/* submit.addEventListener("click", () => {
  const item = document.createElement("li");
  item.textContent = `${name.value} - ${duration.value} minutes`;
  list.appendChild(item);
  name.value = "";
  duration.value = "";
}); */
