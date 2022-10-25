const songs = [
  "Toxic",
  "...Baby one more time",
  "Everytime",
  "Circus",
  "Oops! I did it again",
  "Lucky",
  "I'm not a girl, not yet a woman",
];
//
songs.push("Womanizer");
//upgift 4
songs.splice(songs.indexOf("Circus"), 1);
//upgift 5
songs.forEach((song, index) => {
  //console.log(`${index} ${song} `);
});
//upgift 6
/* for (let i = 0; i < songs.length; i++) {
  //console.log(songs[i].split("").reverse().join(""));
} */
//upgift 7
/* let i = 0;
while (i < songs.length) {
  if (songs[i] === "Lucky") {
    console.log("Stop! Here's Lucky!");
    break;
  }
  console.log(songs[i]);
  i++;
} */
//upgift 8
const newSongs = songs.map((song) => {
  return song.toLocaleUpperCase();
});
