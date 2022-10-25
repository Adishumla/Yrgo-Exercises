const albums = [
  { title: "...Baby One More Time", year: 1999, label: "Jive" },
  { title: "Oops!... I Did It Again", year: 2000, label: "Jive" },
  { title: "Britney", year: 2001, label: "Jive" },
  { title: "In the zone", year: 2003, label: "Jive, Zomba" },
  { title: "Blackout", year: 2007, label: "Jive, Zomba" },
  { title: "Circus", year: 2008, label: "Jive, Zomba" },
  { title: "Femme Fatale", year: 2011, label: "Jive" },
  { title: "Britney Jean", year: 2013, label: "RCA" },
  { title: "Glory", year: 2016, label: "RCA" },
];

//upgift 13
albums.forEach((album) => {
  //console.log(`${album.title} (${album.year})`);
});

//upgift 14
/* const filterAlbums = albums.filter((album, date) => {
  return album.year >= date;
}); */

const filterAlbums = (albums, date) => {
  return albums.filter((album) => {
    return album.year >= date;
  });
};

//uppgift 15
const labelCount = albums.reduce((acc, album) => {
  if (acc[album.label]) {
    acc[album.label]++;
  } else {
    acc[album.label] = 1;
  }
  return acc;
}, {});
console.log(labelCount);
