// resources/js/spotify.js

const spotifyTracks = [
    'https://open.spotify.com/embed/track/5FUPss7Xsr9hnxuIUe9b01?si=b6fdad7d40b04fa2',
    'https://open.spotify.com/embed/track/30BcZTYYtzpEuLEzqp1yu5?si=00c41db3f8e1415c',
    'https://open.spotify.com/embed/track/249dFji5L8tPSptgUEMR1R?si=ee15d831e7d14b42'
]; // Lista de URLs de canciones de Spotify
let currentTrackIndex = 0;

function updateSpotifyTrack() {
    const iframe = document.getElementById('spotify-iframe');
    iframe.src = spotifyTracks[currentTrackIndex];
}

function prevTrack() {
    currentTrackIndex = (currentTrackIndex - 1 + spotifyTracks.length) % spotifyTracks.length;
    updateSpotifyTrack();
}

function nextTrack() {
    currentTrackIndex = (currentTrackIndex + 1) % spotifyTracks.length;
    updateSpotifyTrack();
}