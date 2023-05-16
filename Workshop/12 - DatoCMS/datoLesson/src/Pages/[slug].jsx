import { useQuery } from "graphql-hooks";
import gql from "graphql-tag";

const Hairdresser_Query = `
  query($id: ID!) {
    hairdresser(id: $id) {
      id
      name
      image {
        url
      }
      description
      services {
        id
        service
        cost
      }
    }
  }
`;

const HairdresserPage = ({ match }) => {
  const { loading, error, data } = useQuery(Hairdresser_Query, {
    variables: { id: match.params.id },
  });

  if (loading) return <p>Loading...</p>;
  if (error) return <p>Error :</p>;

  const { hairdresser } = data;

  return (
    <div className="hairdresser">
      <div className="hairdresser__header">
        <img src={hairdresser.image.url} alt="hairdresser" />
        <div className="hairdresser__header__content">
          <h1>{hairdresser.name}</h1>
          <p>{hairdresser.description}</p>
        </div>
      </div>
      <div className="hairdresser__services">
        <h2>Services</h2>
        <div className="hairdresser__services__container">
          {hairdresser.services.map((service, id) => (
            <div className="hairdresser__services__service" key={id}>
              <h3>{service.service}</h3>
              <p>{service.cost}</p>
            </div>
          ))}
        </div>
      </div>
    </div>
  );
};

export default HairdresserPage;
