function renderCommunityPosts() {
    fetch('../php/getCommunityData.php')
      .then(response => response.json())
      .then(posts => {
        const container = document.getElementById('cardGrid');
        container.innerHTML = '';
  
        posts.forEach(post => {
          const card = document.createElement('div');
          card.className = 'card';
          card.innerHTML = `
            <h4>${post.title}</h4>
            <p>${post.text}</p>
            <p class="author">By ${post.author}</p>
          `;
          container.appendChild(card);
        });
      })
      .catch(error => console.error('Error loading community posts:', error));
  }
  
