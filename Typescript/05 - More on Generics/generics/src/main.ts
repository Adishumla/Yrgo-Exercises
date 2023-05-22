import "./style.css";

//01
function identity<T>(arg: T): T {
  return arg;
}

const value = identity<string>("Hello World");
console.log(value);
console.log(typeof value);

//02
type KeyValuePair<K, V> = {
  key: K;
  value: V;
};

const myVar: KeyValuePair<string, number> = { key: "string", value: 123 };

console.log(myVar);

//03

type WrappedWithId<T> = {
  id: string;
  original: T;
};

const wrapped = <T>(input: T): WrappedWithId<T> => {
  return {
    id: "someId",
    original: input,
  };
};

const wrappedValue = wrapped(123);
console.log(wrappedValue);

document.querySelector<HTMLDivElement>("#app")!.innerHTML = `
  <div>

  </div>
`;
