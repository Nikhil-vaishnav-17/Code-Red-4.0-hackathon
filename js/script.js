document.addEventListener("DOMContentLoaded", function () {
    console.log("Page Loaded Successfully!");
    // Future JavaScript functionalities will go here
});

function searchProjects(query) {
    $.ajax({
        url: "search_projects.php",
        method: "GET",
        data: { query: query },
        success: function(data) {
            let projects = JSON.parse(data);
            $("#project-results").empty();
            projects.forEach(project => {
                $("#project-results").append(`
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">${project.title}</h5>
                            <p class="card-text">${project.description}</p>
                            <a href="project_view.php?id=${project.id}" class="btn btn-primary">View Project</a>
                        </div>
                    </div>
                `);
            });
        }
    });
}

document.getElementById("search-button").onclick = function() {
    const query = document.getElementById("search-input").value;
    searchProjects(query);
};

function searchProjects(query) {
    $.ajax({
        url: "search_projects.php",
        method: "GET",
        data: { query: query },
        success: function(data) {
            let projects = JSON.parse(data);
            $("#project-results").empty();
            if (projects.length === 0) {
                $("#project-results").append("<p>No projects found.</p>");
            } else {
                projects.forEach(project => {
                    $("#project-results").append(`
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">${project.title}</h5>
                                <p class="card-text">${project.description}</p>
                                <a href="project_view.php?id=${project.id}" class="btn btn-primary">View Project</a>
                            </div>
                        </div>
                    `);
                });
            }
        },
        error: function() {
            $("#project-results").append("<p>Error fetching results.</p>");
        }
    });
}
