import { get as read } from 'svelte/store';
import { accessToken } from './stores.js';

export async function get(path) {
    if (!read(accessToken)) {
        const {
            VITE_MEDIAFLOW_CLIENT_ID: CLIENT_ID,
            VITE_MEDIAFLOW_CLIENT_SECRET: CLIENT_SECRET,
            VITE_MEDIAFLOW_REFRESH_TOKEN: REFRESH_TOKEN,
        } = import.meta.env;

        const response = await fetch(
            `https://api.mediaflow.com/1/oauth2/token?grant_type=refresh_token&client_id=${CLIENT_ID}&client_secret=${CLIENT_SECRET}&refresh_token=${REFRESH_TOKEN}`
        );

        const { access_token } = await response.json();

        accessToken.set(access_token);
    }

    const url = new URL(path, 'https://api.mediaflow.com/1/');

    const response = await fetch(url, {
        headers: {
            Authorization: `Bearer ${read(accessToken)}`,
        },
    });

    return await response.json();
}