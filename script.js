document.addEventListener("DOMContentLoaded", function() {
    // Example of dynamically loading gallery images
    const gallery = document.getElementById('gallery');
    const talents = ['talent1.jpg', 'talent2.jpg', 'talent3.jpg']; // Image paths

    talents.forEach(talent => {
        const img = document.createElement('img');
        img.src = talent;
        img.alt = "Talent Image";
        img.style.width = "100px";
        img.style.height = "100px";
        gallery.appendChild(img);
    });
});
