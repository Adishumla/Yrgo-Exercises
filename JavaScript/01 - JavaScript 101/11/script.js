const reverseName = (firstName, lastName) => {
  fullName = `${firstName} ${lastName}`;
  return fullName.split("").reverse().join("");
};
console.log(reverseName("Kim", "Kardashian"));
