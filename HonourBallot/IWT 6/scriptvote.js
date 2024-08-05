function loadCandidates() {
    var categorySelect = document.getElementById("category");
    var selectedCategory = categorySelect.value;

    // Simulated JSON data
    var candidateData = {

        "ba": [
            {
                "name": "Dharshan Dharmaraj",
                "image": "dharshan-dharmaraj.jpeg",
                "description": "Candidate 1 details."
            
            },
            {
                "name": "Jackson Anthony",
                "image": "jackson.jpeg",
                "description": "Candidate 2 details."
            },
            {
                "name": "Jayalath Manorathna",
                "image": "Jayalath-manorathna.jpg",
                "description": "Candidate 1 details."
            },
            {
                "name": "Mahendra Perera",
                "image": "mahendra perera.jpeg",
                "description": "Candidate 2 details."
            }
            
        ],

        "bas": [
            
            {
                "name": "Pooja Umashankar",
                "image": "pooja .jpeg",
                "description": "Candidate 3 details."
            },
            {
                "name": "Shalani Tharaka",
                "image": "Shalani  Tharaka-17.jpg",
                "description": "Candidate 4 details."
            },
            {
                "name": "Ureni Noshika",
                "image": "uraniii.jpeg",
                "description": "Candidate 2 details."
            },
            {
                "name": "Vinu Siriwardhana",
                "image": "vinu siriwardhana.jpeg",
                "description": "Candidate 2 details."
            }
            
        ],

        "bfd": [
            {
                "name": "Chandram Rutnam",
                "image": "chandran rutnam.jpeg",
                "description": "Candidate 5 details."
            },
            {
                "name": "Prasanna Jayakody",
                "image": "prasanna jayakody.jpeg",
                "description": "Candidate 6 details."
            },
            {
                "name": "Prasannajith Abeysooriya",
                "image": "prasannajith abeysooriya.jpeg",
                "description": "Candidate 2 details."
            },
            {
                "name": "Somarathna Dissanayake",
                "image": "somarathna dissanayake.jpeg",
                "description": "Candidate 2 details."
            }
            
        ],

        "bfm": [
            {
                "name": "Rohana Beddage",
                "image": "Rohana_Beddage 2.jpg",
                "description": "Candidate 3 details."
            },
            {
                "name": "Victor Rathnayake",
                "image": "victor rathnayake.jpeg",
                "description": "Candidate 4 details."
            },
            {
                "name": "W.D.Amaradeva",
                "image": "amara.jpg",
                "description": "Candidate 2 details."
            },
            {
                "name": "Manoj peiris",
                "image": "manoj.jpg",
                "description": "Candidate 2 details."
            }
            
        ],
        
        "bsa": [
            {
                "name": "Hemal Ranasinghe",
                "image": "hemal ranasinghe.jpeg",
                "description": "Candidate 5 details."
            },
            {
                "name": "Ranjan Ramanayake",
                "image": "ranjan ramanayake.jpeg",
                "description": "Candidate 6 details."
            },
            {
                "name": "Raveen Kavishka",
                "image": "raveen kavishka.jpeg",
                "description": "Candidate 2 details."
            },
            {
                "name": "Roshan Ranawana",
                "image": "Roshan-Ranawana.jpg",
                "description": "Candidate 2 details."
            }
            
        ],
        "bsas": [
            {
                "name": "Shanudrie Priyasad",
                "image": "Shanudrie-Priyasad.jpg",
                "description": "Candidate 5 details."
            },
            {
                "name": "Dinithi Walgamage",
                "image": "Dinithi.jpeg",
                "description": "Candidate 6 details."
            },
            {
                "name": "Kavihari Haputhanthri",
                "image": "Kavihari-Haputhanthri.webp",
                "description": "Candidate 2 details."
            },
            {
                "name": "Anarkali Akarsha",
                "image": "Anarkali Akarsha.jpg",
                "description": "Candidate 2 details."
            }
            
        ]

    };

    var candidates = candidateData[selectedCategory];

    var candidateDetailsContainer = document.getElementById("candidate-details");
    candidateDetailsContainer.innerHTML = "";

    for (var i = 0; i < candidates.length; i++) {
        var candidate = candidates[i];

        var candidateCard = document.createElement("div");
        candidateCard.classList.add("candidate-card");

        var candidateImage = document.createElement("img");
        candidateImage.src = candidate.image;

        var candidateName = document.createElement("h3");
        candidateName.textContent = candidate.name;

        var candidateDescription = document.createElement("p");
        candidateDescription.textContent = candidate.description;

        var voteButton = document.createElement("input");
        voteButton.type= "radio";
        voteButton.name= "vote";
        voteButton.value= candidate.name;
        /*voteButton.textContent = "Vote";
        voteButton.classList.add("vote-button");
        voteButton.addEventListener("click", function() {
            castVote(candidate.name);
        });*/

        var voteLabel = document.createElement("label");
        voteLabel.textContent = "Vote";
        voteLabel.htmlFor = candidate.name;

        voteButton.addEventListener("change", function(event) {
            // Handle vote button change event here
        });

        candidateCard.appendChild(candidateImage);
        candidateCard.appendChild(candidateName);
        candidateCard.appendChild(candidateDescription);
        candidateCard.appendChild(voteButton);
        candidateCard.appendChild(voteLabel);


        candidateDetailsContainer.appendChild(candidateCard);

       
    }
}

var style = document.createElement("style");
style.textContent = ".vote-button { background-color: #fff; color: black; box-shadow: 0 4px 5px 1px #E0E0E0; font-size: 16px; border:non; }";
document.head.appendChild(style);

// Initial load of candidates
loadCandidates();
