import React from "react";
import { useEffect } from "react";
import "../App.css";

function Home() {
  const [data, setData] = React.useState(null);
  const [search, setSearch] = React.useState("");
  const url = "https://api.spotify.com/v1";

  if (window.location.hash) {
    const token = window.location.hash.split("=")[1].split("&")[0];
    token && localStorage.setItem("token", token);
  }

  React.useEffect(() => {
    fetch(url + "/search?q=" + search + "&type=track", {
      headers: {
        Authorization: "Bearer " + localStorage.getItem("token"),
      },
    })
      .then((res) => res.json())
      .then((data) => setData(data));
  }, [search]);
  console.log(data);
  return (
    <div className="home-view">
      <h1>Home</h1>
      <input
        type="text"
        placeholder="Fly Away"
        onChange={(e) => setSearch(e.target.value)}
      />
      <button>Search</button>
      <div className="list">
        {data &&
          data.tracks.items.map((item) => {
            return (
              <div className="song">
                <img src={item.album.images[0].url} />
                <p>{item.name}</p>

                <audio controls>
                  <source src={item.preview_url} type="audio/mpeg" />
                </audio>

                <p>{item.artists[0].name}</p>
              </div>
            );
          })}
      </div>
    </div>
  );
}

export default Home;
