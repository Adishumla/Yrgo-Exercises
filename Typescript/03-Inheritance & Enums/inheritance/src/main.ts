import "./style.css";
import typescriptLogo from "./typescript.svg";
import viteLogo from "/vite.svg";
import { setupCounter } from "./counter.ts";

type Post = {
  title: string;
  body: string;
  published?: Date;
};

type User = {
  username: string;
  posts?: Post[];
};

type Admin = User & {
  role: UserRole;
};

enum UserRole {
  Super = "super",
  Moderator = "moderator",
  Editor = "editor",
} as const;

const users: (User | Admin)[] = [
  {
    username: "Hans",
    role: UserRole.Super,
  },
  {
    username: "Tobias",
  },
  {
    username: "Mr. Post writer",
    posts: [
      {
        title: "A very interesting post",
        body: "Some body",
      },
      {
        title: "Another great post",
        body: "Some more body content",
        published: new Date(),
      },
    ],
  },
];

document.querySelector<HTMLDivElement>("#app")!.innerHTML = `
  <div>
    <a href="https://vitejs.dev" target="_blank">
      <img src="${viteLogo}" class="logo" alt="Vite logo" />
    </a>
    <a href="https://www.typescriptlang.org/" target="_blank">
      <img src="${typescriptLogo}" class="logo vanilla" alt="TypeScript logo" />
    </a>
    <h1>Vite + TypeScript</h1>
    <div class="card">
      <button id="counter" type="button"></button>
    </div>
    <p class="read-the-docs">
      Click on the Vite and TypeScript logos to learn more
    </p>
  </div>
`;

setupCounter(document.querySelector<HTMLButtonElement>("#counter")!);
