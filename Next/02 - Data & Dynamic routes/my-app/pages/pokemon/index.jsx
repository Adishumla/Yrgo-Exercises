import Image from "next/image";
import styled, { css } from "styled-components";
import Layout from "../../components/Layout";
import Link from "next/link";
import Head from "next/head";

const StyledContent = styled.div`
  padding: 60px 30px;
`;

const PokemonGrid = styled.div`
  display: grid;
  grid-template-columns: repeat(4, 1fr);

  & > h1 {
    margin-bottom: 20px;
  }
`;

const PokemonLink = styled(Link)`
  border: 1px solid black;
  border-radius: 5px;
  padding: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: transform 0.2s ease-in-out;

  &:hover {
    transform: scale(1.1);
  }

  h2 {
    text-transform: capitalize;
  }
`;

export default function Home({ page, slug }) {
  return (
    <>
      <Head>
        <title>Create Next App</title>
        <meta name="description" content="Generated by create next app" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="/favicon.ico" />
      </Head>
      <main>
        <Layout
          slug={slug}
          title="Pokemon"
          description="Pokemon from getServerSideProps"
          image="../../public/vercel.svg"
        >
          <StyledContent>
            <h1>Pokemon from getServerSideProps</h1>
            <PokemonGrid>
              {page.results.map((pokemon) => {
                return (
                  <PokemonLink href={`pokemon/${pokemon.name}`}>
                    <h2>{pokemon.name}</h2>
                  </PokemonLink>
                );
              })}
            </PokemonGrid>
          </StyledContent>
        </Layout>
      </main>
    </>
  );
}

// Fetch all static content
export async function getServerSideProps() {
  let page = await fetch(`https://pokeapi.co/api/v2/pokemon`)
    .then((res) => {
      return res.json();
    })
    .then((page) => {
      return page;
    })
    .catch((err) => {
      console.error(
        "Couldnt fetch pages",
        err.response ? err.response.status : err
      );
      return null;
    });

  const title = "Pokemon";
  const description = "Pokemon from getServerSideProps";

  //will be passed to the page component as props
  return {
    notFound: !page,
    props: {
      page,
      slug: "pokemon",
      title,
      description,
    },
  };
}