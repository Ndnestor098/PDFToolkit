"use strict";

document.addEventListener("DOMContentLoaded", () => {
    const image = document.getElementById('images-click');
    const contentImages = document.getElementById('content-images');
    const imageClose = document.getElementById("close-images");

    const icon = document.getElementById('icon-click');
    const contentIcons = document.getElementById('content-icons');
    const iconClose = document.getElementById("close-icons");


    image.addEventListener("click", () => {
        contentImages.classList.remove('hidden');
    });
    imageClose.addEventListener("click", () => {
        contentImages.classList.add('hidden');
    });


    icon.addEventListener("click", () => {
        contentIcons.classList.remove('hidden');
    });
    iconClose.addEventListener("click", () => {
        contentIcons.classList.add('hidden');
    });
});