const validateAge = () => {
  const age = window.confirm("Are you sure you are 45 years old?");
  if (age === true) {
    return true;
  } else {
    return false;
  }
};
console.log(validateAge());
