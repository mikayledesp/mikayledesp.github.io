function renderEditableEntries() {
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
  
        entries.forEach((entry, index) => {
          const card = document.createElement("div");
          card.className = "card";
          card.innerHTML = `
              <h2 >${entry.title}</h2>
              <p >${entry.text}</p>
              <p class="author">Entry from ${user_data.uname}</p>
              <button class="btn-warning" data-index="${index}">Delete</button>
          `;
  
          container.appendChild(card);
        });
  
        // Attach delete button listeners
        document.querySelectorAll('.btn-warning').forEach(button => {
          button.addEventListener('click', function() {
            const index = this.getAttribute('data-index');
            confirmDelete(index);
          });
        });
      })
      .catch(error => {
        console.error(error);
      });
  }
  
  function confirmDelete(index) {
    const confirmed = confirm("Are you sure you want to delete this entry?");
    if (confirmed) {
      deleteEntry(index);
    }
  }
  
  function deleteEntry(index) {
    const uname = localStorage.getItem('uname');
  
    const formData = new FormData();
    formData.append('uname', uname);
    formData.append('index', index);
  
    fetch('../php/deleteEntry.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.ok ? response.text() : Promise.reject('Failed to delete entry.'))
    .then(() => {
      renderEditableEntries();
    })
    .catch(error => {
      console.error(error);
    });
  }
  
  // Run when page is ready
  document.addEventListener('DOMContentLoaded', function() {
    renderEditableEntries();
  });
  