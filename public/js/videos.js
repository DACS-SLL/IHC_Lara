// resources/js/videos.js

const videoIds = ['YWAJF8esH4s', 'dQw4w9WgXcQ', '3JZ_D3ELwOQ']; // Lista de IDs de videos de YouTube
let currentVideoIndex = 0;

function updateVideo() {
    const iframe = document.getElementById('youtube-video');
    iframe.src = `https://www.youtube.com/embed/${videoIds[currentVideoIndex]}`;
}

function prevVideo() {
    currentVideoIndex = (currentVideoIndex - 1 + videoIds.length) % videoIds.length;
    updateVideo();
}

function nextVideo() {
    currentVideoIndex = (currentVideoIndex + 1) % videoIds.length;
    updateVideo();
}