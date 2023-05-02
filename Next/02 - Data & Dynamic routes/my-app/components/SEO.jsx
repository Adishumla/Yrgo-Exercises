import Head from "next/head";

function SEO({ title, description, image }) {
  return (
    <Head>
      <title>{title}</title>
      <meta name="description" content={description} />
      <meta property="og:title" content={title} key="title" />
      <meta property="og:description" content={description} />
      <meta property="og:image" content={image} />
    </Head>
  );
}

export default SEO;
