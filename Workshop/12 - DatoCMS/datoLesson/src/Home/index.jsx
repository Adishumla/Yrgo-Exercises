import { useQuery } from "graphql-hooks";
import gql from "graphql-tag";

const Home_Query = gql`
  query {
    hero {
      hero
      content
      image {
        url
      }
    }
  }
`;

const Home = () => {
  const { loading, error, data } = useQuery(Home_Query);

  if (loading) return <p>Loading...</p>;
  if (error) return <p>Error :</p>;

  return (
    <div className="home">
      <div className="home__hero">
        <img src={data.hero.image.url} alt="hero" />
        <div className="home__hero__content">
          <h1>{data.hero.hero}</h1>
          <p>{data.hero.content}</p>
        </div>
      </div>
    </div>
  );
};

export default Home;
