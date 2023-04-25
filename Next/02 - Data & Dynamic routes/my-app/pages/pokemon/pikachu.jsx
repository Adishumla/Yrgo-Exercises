import Image from "next/image";
import styled, { css } from "styled-components";
import Layout from "../../components/Layout";

const StyledContent = styled.div`
  padding: 60px 30px;
`;

export default function Home({ page, slug }) {
  return (
    <Layout slug={slug}>
      <StyledContent>
        <h1>{page.name} - From getServerSideProps</h1>
      </StyledContent>
    </Layout>
  );
}

// Fetch all static content
export async function getServerSideProps() {
  let page = await fetch(`https://pokeapi.co/api/v2/pokemon/pikachu`)
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

  //will be passed to the page component as props
  return {
    notFound: !page,
    props: {
      page,
      slug: "home",
    },
  };
}
