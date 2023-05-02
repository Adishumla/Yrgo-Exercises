import React from "react";
import fetch from "node-fetch";
import Layout from "../../components/Layout.jsx";
import Image from "next/image";
import styled, { css } from "styled-components";

const StyledContent = styled.div`
  padding: 60px 30px;
`;

const Slug = ({ page, slug }) => {
  return (
    <Layout
      slug={slug}
      title={page.name}
      description={page.name}
      image={page.sprites.front_default}
    >
      <StyledContent>
        <h1>{page.name} - From getStaticProps</h1>
        <img
          src={page.sprites.front_default}
          style={{ width: "300px", height: "300px" }}
        />
      </StyledContent>
    </Layout>
  );
};

export async function getStaticPaths() {
  // Fetch all pages
  const pages = await fetch(`https://pokeapi.co/api/v2/pokemon`).then((res) => {
    return res.json();
  });

  console.log({ pages });

  // Map through all pages and assign the slug to the path
  const paths = await pages.results.map((page) => {
    let slug = page.name;

    return {
      params: {
        slug,
      },
    };
  });

  // Return the paths
  return {
    paths,
    fallback: "blocking",
  };
}

// Fetch all static content
export async function getStaticProps(context) {
  // Fetch page and add page to props if it matches the current slug

  const { slug } = context.params;

  console.log("context", context);

  let page = await fetch(`https://pokeapi.co/api/v2/pokemon/${slug}`)
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

  // will be passed to the page component as props
  return {
    notFound: !page,
    props: {
      page,
      slug,
    },
    revalidate: 30,
  };
}

export default Slug;
