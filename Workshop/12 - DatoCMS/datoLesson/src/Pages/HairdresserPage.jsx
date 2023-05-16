import { useQuery } from "graphql-hooks";
import PropTypes from "prop-types";

const Hairdresser_Query = `
  query {
    hairdresser (
      filter: {
        id: {
          eq: $id
        }
      }
    ) {
      name
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
        <h1>test</h1>
        <div className="hairdresser__header__content">
          <h1>{hairdresser.name}</h1>
        </div>
      </div>
    </div>
  );
};

HairdresserPage.propTypes = {
  match: PropTypes.object.isRequired,
};

export default HairdresserPage;
