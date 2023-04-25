import Link from 'next/link'

export default function Pokemon({ pokemon }) {
    return (
        <div>
            <h1>{pokemon.name}</h1>
            <img src={pokemon.sprites.front_default} />
            <Link href="/">
                <a>Home</a>
            </Link>
        </div>
    )
}