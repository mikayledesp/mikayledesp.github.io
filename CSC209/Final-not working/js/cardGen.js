// function formSubmit(event) {
//   // event.preventDefault(); // Prevent default form submission behavior
  
//   const title = document.getElementById("title").value;
//   const text = document.getElementById("text").value;
//   const uname = document.getElementById("uname") ? document.getElementById("uname").value : "Anonymous";

//   // Get existing entries from local storage
//   let entries = JSON.parse(localStorage.getItem("journalEntries") || "[]");

//   // Add new entry
//   const newEntry = {
//     title: title,
//     text: text,
//     uname: uname
//   };

//   entries.push(newEntry);

//   // Save updated entries back to local storage
//   localStorage.setItem("journalEntries", JSON.stringify(entries));

//   // Redirect to the main page
//   window.location.href = "../loggedview/loggedInmainPage.html.php";
// }


// function renderEntries() {
//   // get saved entries from local storage
//   let entries = localStorage.getItem("journalEntries");

//   if (entries === null) {
//     entries = [];
//   } else {
//     entries = JSON.parse(entries);
//   }

//   // find the container element
//   const container = document.getElementById("cardGrid");

//   // add each entry as a card
//   for (let i = 0; i < entries.length; i++) {
//     const entry = entries[i];

//     const card = document.createElement("div");
//     card.className = "card";
//     card.innerHTML = `
//       <h2>${entry.title}</h2>
//       <p>${entry.text}</p>
//       <p class="author">${entry.uname}</p> 
//     `;

//     container.appendChild(card);
//   }
// }
function formSubmit(event) {
  event.preventDefault(); // Prevent default form submission behavior
  
  const title = document.getElementById("title").value;
  const text = document.getElementById("text").value;
  const uname = document.getElementById("uname") ? document.getElementById("uname").value : "Anonymous";

  // Get existing entries from local storage
  let entries = JSON.parse(localStorage.getItem("journalEntries") || "[]");

  // Add new entry
  const newEntry = {
    title: title,
    text: text,
    uname: uname // Store the user's name as 'uname'
  };

  entries.push(newEntry);

  // Save updated entries back to local storage
  localStorage.setItem("journalEntries", JSON.stringify(entries));

  // Redirect to the main page
  window.location.href = "../loggedview/loggedInmainPage.html.php";
}

function renderEntries() {
  // Get saved entries from local storage
  let entries = localStorage.getItem("journalEntries");

  if (entries === null) {
    entries = [];
  } else {
    entries = JSON.parse(entries);
  }

  // Find the container element
  const container = document.getElementById("cardGrid");

  // Add each entry as a card
  for (let i = 0; i < entries.length; i++) {
    const entry = entries[i];

    const card = document.createElement("div");
    card.className = "card";
    card.innerHTML = `
      <h2>${entry.title}</h2>
      <p>${entry.text}</p>
      <p class="author">${entry.uname}</p> <!-- Use 'uname' instead of 'author' -->
    `;

    container.appendChild(card);
  }
}

window.addEventListener("DOMContentLoaded", renderEntries);
