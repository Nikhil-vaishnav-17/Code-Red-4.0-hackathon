document.getElementById('search-button').addEventListener('click', function() {
    const searchInput = document.getElementById('search-input').value;

    fetch(`search_projects.php?query=${encodeURIComponent(searchInput)}`)
        .then(response => response.json())
        .then(data => {
            // Clear previous cards
            const cardContainer = document.getElementById('card-container');
            cardContainer.innerHTML = '';

            // Display new cards
            displayCards(data);
        })
        .catch(error => console.error('Error:', error));
});

function displayCards(projects) {
    const cardContainer = document.getElementById('card-container');
    cardContainer.innerHTML = ''; // Clear previous cards

    if (projects.length > 0) {
        projects.forEach(project => {
            const cardDiv = document.createElement('div');
            cardDiv.className = 'container crd ';

            const card = document.createElement('div');
            card.className = 'card';

            const img = document.createElement('img');
            img.src = project.image;
            img.alt = 'Project Image';
            img.className = 'card-img';

            const button = document.createElement('a');
            button.className = 'card-button';
            button.href = `http://localhost/vgu/project_view.php?id=${project.id}`;
            button.innerText = 'More info';

            // Append image and button to card
            card.appendChild(img);
            card.appendChild(button);

            // Create the details div
            const details = document.createElement('div');
            details.className = 'card-details';

            const title = document.createElement('p');
            title.className = 'text-title';
            title.innerText = project.title;

            const description = document.createElement('p');
            description.className = 'text-body';
            description.innerText = project.description;

            // Append title and description to details div
            details.appendChild(title);
            details.appendChild(description);

            // Append card and details to cardDiv
            cardDiv.appendChild(card);
            cardDiv.appendChild(details);

            // Append cardDiv to the card container
            cardContainer.appendChild(cardDiv);
        });
    } else {
        // Create the custom "No Results" card
        const cardDiv = document.createElement('div');
        cardDiv.className = 'container crd ';

        const card = document.createElement('div');
        card.className = 'card';

        // Image for "No Results" card
        const img = document.createElement('img');
        img.src = 'assets/no_results.png';  // Specify the path to a default image for "No Results"
        img.alt = 'No Results Image';
        img.className = 'card-img';

        const button = document.createElement('a');
        button.className = 'card-button';
        button.href = 'project_creation.php';
        button.innerText = 'Create a Project';

        // Append image and button to card
        card.appendChild(img);
        card.appendChild(button);

        // Create the details div
        const details = document.createElement('div');
        details.className = 'card-details';

        const title = document.createElement('p');
        title.className = 'text-title';
        title.innerText = 'No Results';

        const description = document.createElement('p');
        description.className = 'text-body';
        description.innerText = 'No results for your search query. Don’t worry, you can create one project too.';

        // Append title and description to details div
        details.appendChild(title);
        details.appendChild(description);

        // Append card and details to cardDiv
        cardDiv.appendChild(card);
        cardDiv.appendChild(details);

        // Append cardDiv to the card container
        cardContainer.appendChild(cardDiv);
    }
}
