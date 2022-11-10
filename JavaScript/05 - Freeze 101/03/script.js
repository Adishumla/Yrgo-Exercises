const tasks = [
  { name: "Do the dishes", duration: 50, isDone: true },
  { name: "Walk the dog", duration: 20, isDone: false },
  { name: "Take a nap", duration: 60, isDone: false },
];

const form = document.querySelector("form");
const tasksElement = document.querySelector(".tasks");

const initialize = () => {
  tasks.forEach(createTask);

  form.addEventListener("submit", onFormSubmit);
};

const createTask = (task) => {
  const div = document.createElement("div");

  div.innerHTML = `<div class="task">
      <p>Name: ${task.name} </p>
      <p>Duration: ${task.duration} minutes </p>
      <label for="isDone"> Is done </label>
      <input type="checkbox" id="isDone" name="isDone" ${
        task.isDone ? "checked" : ""
      }/>  
  </div>`;

  // Only prepend the first child. It will then skip the first div
  tasksElement.prepend(div.firstChild);
};

const onFormSubmit = (e) => {
  e.preventDefault();

  const formData = new FormData(form);
  const data = Object.fromEntries(formData);

  createTask(data);

  form.reset(); // Built in function on a form element
};

//when isDone is checked, the task is done  and the task is removed from the list
const onIsDoneChange = (e) => {
  const task = e.target.closest(".task");
  task.remove();
};

initialize(); // Run code
