
function formSubmit(event) {
  const title = document.getElementById("title").value;
  const text = document.getElementById("text").value;
  const author = document.getElementById("author").value;

  // get existing entries from local storage
  let entries = localStorage.getItem("journalEntries");

  if (entries === null) {
    entries = [];
  } else {
    entries = JSON.parse(entries);
  }

 // adds new entry
  const newEntry = {
    title: title,
    text: text,
    author: author
  };
  entries.push(newEntry);

  // save updated entries back to local storage
   localStorage.setItem("journalEntries", JSON.stringify(entries));

  // redirect to the main page
  window.location.href = "mainPage.html.php";
}

function renderEntries() {
  // get saved entries from local storage
   let entries = localStorage.getItem("journalEntries");

  if (entries === null) {
    entries = [];
  } else {
    entries = JSON.parse(entries);
  }

  // find the container element
  const container = document.getElementById("cardGrid");

// TO DO --> Figure out how to do this in PHP 
  // add each entry as a card
  for (let i = 0; i < entries.length; i++) {
    const entry = entries[i];

    const card = document.createElement("div");
    card.className = "card";
    card.innerHTML = `
      <h2>${entry.title}</h2>
      <p>${entry.text}</p>
      <p class="author">${entry.author}</p>
    `;

    container.appendChild(card);
  }}
  