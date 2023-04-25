export async function getServerSideProps(context) {
    const res = await fetch('https://pokeapi.co/api/v2/pokemon/pikachu')
    const data = await res.json()

    return {
        props: { pokemon: data }
    }
}

export default function Pikachu({ pokemon }) {
    return (
        <div>
            <h1>{pokemon.name}</h1>
            <img src={pokemon.sprites.front_default} />
        </div>
    )
}
