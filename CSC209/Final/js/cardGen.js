function renderEntries() {
  const uname = localStorage.getItem('uname');
  const userJsonPath = `../outputFinal/${uname}/user.json`;

  fetch(userJsonPath)
    .then(response => {
      if (!response.ok) {
        throw new Error('Failed to fetch user data.');
      }
      return response.json();
    })
    .then(user_data => {
      const entries = user_data.entries;
      const container = document.getElementById("cardGrid");
      container.innerHTML = "";

      entries.forEach(entry => {
        const card = document.createElement("div");
        card.className = "card";
        card.innerHTML = `
          <h2>${entry.title}</h2>
          <p>${entry.text}</p>
          <p class="author">Posted by ${user_data.uname}</p>
        `;

        container.appendChild(card);
      });
    })
}

