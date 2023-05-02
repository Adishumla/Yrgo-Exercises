import Head from "next/head";

function SEO({ title, description, image }) {
  return (
    <Head>
      <title>{title}</title>
      <meta property="og:title" content={title} />
      <meta property="og:description" content={description} />
      <meta property="og:image" content={image} />
      <meta name="twitter:card" content="summary_large_image" />
      <meta name="twitter:title" content={title} />
      <meta name="twitter:description" content={description} />
      <meta name="twitter:image" content={image} />
      <meta property="og:url" content="https://www.facebook.com/" />
      <meta property="og:type" content="website" />
    </Head>
  );
}

export default SEO;
