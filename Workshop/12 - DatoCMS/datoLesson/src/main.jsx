import React from "react";
import ReactDOM from "react-dom/client";
import App from "./App.jsx";
import "./index.css";
import { GraphQLClient, ClientContext } from "graphql-hooks";
import { createBrowserRouter, RouterProvider } from "react-router-dom";
import HairdresserPage from "./Pages/HairdresserPage.jsx";

const client = new GraphQLClient({
  url: "https://graphql.datocms.com/",
  headers: {
    Authorization: `Bearer ${import.meta.env.VITE_API_TOKEN}`, // the API token should lay in your .env file
  },
});

const router = createBrowserRouter([
  {
    path: "/",
    element: <App />,
  },
  {
    path: "/hairdresser/:id",
    element: <HairdresserPage />,
    props: ({ match }) => ({ match }),
  },
]);

ReactDOM.createRoot(document.getElementById("root")).render(
  <React.StrictMode>
    <ClientContext.Provider value={client}>
      <RouterProvider router={router} />
    </ClientContext.Provider>
  </React.StrictMode>
);
