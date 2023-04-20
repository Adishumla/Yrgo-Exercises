<script>
    export let src;
    export let alt;
</script>

<main>
    <button on:click>
        <img src={src} alt={alt} />
    </button>
</main>