<script>
    import {get} from './lib/api';
    import Gallary from "./lib/Gallary.svelte";
    import {onMount} from "svelte";
    import GallaryItem from "./lib/GallaryItem.svelte";
    import Image from "./lib/Image.svelte";

    let files = [];
    let image;
    const url = 'https://api.mediaflow.com/1/file/latest';

    onMount(async () => {
        files = await get('/1/file/latest?type=image&fields=all');
        files = files.filter((file) => file.gdprStatus === 'OK');
        console.log(files);
    });

    async function handleOpen(id) {
        const repsonse = await get(`/1/file/${id}?fields=all&jsondata=object`);
        image = repsonse[0];
        console.log('pling');
    }
    function handleClose() {
        image = null;
    }

</script>
<svelte:window
        on:keydown={(event) => event.code === 'Escape' && handleClose()}
/>
<main>
    <Gallary>
        {#each files as file}
            <GallaryItem src={file.mediumPreview} name={file.filename} id={file.id}/>
        {/each}
    </Gallary>

    {#if image}
        <Image src={image.url} on:click={handleClose}/>
    {/if}
</main>
