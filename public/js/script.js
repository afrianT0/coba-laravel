new DataTable("#data");

// Pemanggilan auto slug berdasarkan halaman
document.addEventListener("DOMContentLoaded", function () {
    var currentURL = window.location.href;

    if (currentURL.includes("/posts/")) {
        postSlug();
    } else if (currentURL.includes("/categories/")) {
        categorySlug();
    }
});

// Membuat auto slug berdasarkan title
function postSlug() {
    const title = document.querySelector("#title");
    const slug = document.querySelector("#slug");

    title.addEventListener("change", function () {
        fetch("/dashboard/posts/checkSlug?title=" + title.value)
            .then((response) => response.json())
            .then((data) => (slug.value = data.slug));
    });

    document.addEventListener("trix-file-accept", function (e) {
        e.preventDefault();
    });
}

// Membuat auto slug berdasarkan name
function categorySlug() {
    const name = document.querySelector("#name");
    const slug = document.querySelector("#slug");

    name.addEventListener("change", function () {
        fetch("/dashboard/categories/checkSlug?name=" + name.value)
            .then((response) => response.json())
            .then((data) => (slug.value = data.slug));
    });
}

// Membuat preview image
function previewImage() {
    const image = document.querySelector("#image");
    const imgPreview = document.querySelector(".img-preview");

    imgPreview.classList.add("d-block");
    // imgPreview.style.display = 'block';

    const blob = URL.createObjectURL(image.files[0]);

    imgPreview.src = blob;
}
