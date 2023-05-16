import { useQuery } from "graphql-hooks";
import gql from "graphql-tag";
import "./app.css";
import { GraphQLClient, ClientContext } from "graphql-hooks";
import { Link } from "react-router-dom";

const Home_Query = `
  query {
    hero {
      hero
      content
      image {
        url
      }
    }
    service {
      image {
        url
      }
      service {
        id
        service
        cost
      }
    }
    allHairdressers {
      id
      name
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
    <>
      <div className="home">
        <div className="home__hero">
          <img src={data.hero.image.url} alt="hero" />
          <div className="home__hero__content">
            <h1>{data.hero.hero}</h1>
            <p>{data.hero.content}</p>
          </div>
        </div>
      </div>
      <section className="services">
        <h2>Services</h2>
        <div className="services__container">
          <div className="services__container__services">
            {data.service.service.map((service, id) => (
              <div className="services__container__services__service" key={id}>
                <h3>{service.service}</h3>
                <p>{service.cost}</p>
              </div>
            ))}
          </div>
          <div className="services__container__image">
            <img src={data.service.image.url} alt="services" />
          </div>
        </div>
      </section>
      <section className="hairdressers">
        <div className="hairdressers__container">
          <h2>Hairdressers</h2>
          <div className="hairdressers__container__hairdressers">
            {data.allHairdressers.map((hairdresser, id) => (
              <div
                className="hairdressers__container__hairdressers__hairdresser"
                key={id}
              >
                <Link
                  to={{
                    pathname: `/hairdresser/${hairdresser.id}`,
                    state: { match: { params: { id: hairdresser.id } } },
                  }}
                >
                  <img
                    className="hairdresser__image"
                    src={hairdresser.image.url}
                    alt="hairdresser"
                  />
                </Link>
                <h3>{hairdresser.name}</h3>
              </div>
            ))}
          </div>
        </div>
      </section>
    </>
  );
};
export default Home;
