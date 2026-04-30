function getBooks() {

    const loader = document.getElementById("loader");
    const bookList = document.getElementById("bookList");

    loader.style.display = "block";
    bookList.innerHTML = "";

    fetch("https://openlibrary.org/search.json?q=programming")
        .then(res => res.json())
        .then(data => {

            loader.style.display = "none";

            data.docs.slice(0, 6).forEach(book => {
                bookList.innerHTML += `
                    <div class="book-card">
                        <h3>${book.title}</h3>
                        <p><strong>Yazar: </strong> ${book.author_name ? book.author_name[0] : "Bilinmiyor"}</p>
                    </div>
                `;
            });
        })
        .catch(() => {
            loader.style.display = "none";
            bookList.innerHTML = "Veri alınamadı.";
        });
}