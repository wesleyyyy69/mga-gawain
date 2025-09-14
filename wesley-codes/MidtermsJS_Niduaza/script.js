const chapters = {
  61: [
    "images/ch61_1.jpg",
    "images/ch61_2.jpg",
    "images/ch61_3.jpg"
  ],
  62: [
    "images/ch62_1.jpg",
    "images/ch62_2.jpg",
    "images/ch62_3.jpg"
  ],
  63: [
    "images/ch63_1.jpg",
    "images/ch63_2.jpg",
    "images/ch63_3.jpg"
  ]
};

let currentChapter = 61;
let currentPage = 0;

function showPage() {
  const viewer = document.getElementById("chapterViewer");
  viewer.innerHTML = `
    <h2>Chapter ${currentChapter}</h2>
    <img src="${chapters[currentChapter][currentPage]}" alt="Chapter ${currentChapter} Page ${currentPage + 1}" style="max-width:100%; border:2px solid white; border-radius:8px;">
    <p>Page ${currentPage + 1} of ${chapters[currentChapter].length}</p>
  `;
}

function nextPage() {
  if (currentPage < chapters[currentChapter].length - 1) {
    currentPage++;
  } else if (currentChapter < 63) {
    currentChapter++;
    currentPage = 0;
  }
  showPage();
}

function prevPage() {
  if (currentPage > 0) {
    currentPage--;
  } else if (currentChapter > 61) {
    currentChapter--;
    currentPage = chapters[currentChapter].length - 1;
  }
  showPage();
}

document.addEventListener("DOMContentLoaded", showPage);
