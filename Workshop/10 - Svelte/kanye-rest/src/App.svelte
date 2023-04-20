<script>
    import Button from "./lib/Button.svelte";

    const api = "https://api.kanye.rest";
    let quote = "";
    function handleClick() {
        fetch(api)
            .then((res) => res.json())
            .then((data) => {
                quote = data.quote;
            });
    }


</script>

<main>
    <p>Quote: {quote}</p>
<Button on:click={handleClick}>
    Get Quote</Button>
</main>

<style>

</style>
