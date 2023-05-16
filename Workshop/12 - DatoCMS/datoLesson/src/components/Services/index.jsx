import gql from "graphql-tag";

export const Home_Query = `
    query { 
service {
      service {
        id
        service
        cost
      }
    }
    }
`;

<section className="services">
  <div className="services__container">
    <h2>Services</h2>
    <div className="services__container__services">
      {data.service.map((service) => (
        <div className="services__container__services__service">
          <h3>{service.service}</h3>
          <p>{service.cost}</p>
        </div>
      ))}
    </div>
  </div>
</section>;
