<script>
    import {get} from './api.js';

    export let name;
    export let src;
    export let id;
    async function handleOpen(id) {
        const repsonse = await get(`/1/file/${id}?fields=all&jsondata=object`);
        image = repsonse[0];
        console.log('pling');
    }
</script>

<li>
    <div>
<img src={src} alt={name} class="img-thumbnail" width="100" height="100" on:click={() => handleOpen(id)} />
    </div>
</li>