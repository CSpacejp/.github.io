
// The following is the general structure of the updates
/*
const publicationsData = [
    {
      date: "9 Jul 2023",
      title: "Recruiting New Members",
      tag: "Recruitment",
      innertitle: "Recruiting new members for CSpace",
      description: "Are you interested to work in a motivated tech-environment?",
      link: "",
    },
];
*/


async function fetchAndDisplayPublicationData() {
    try {

        const translateButton = document.getElementById("translateButton");
        translateButton.addEventListener("click", function () {
            currentLanguage = currentLanguage === "en" ? "ja" : "en";
            updateContent(currentLanguage);
        });

        var response = "";
        if (currentLanguage === "en") {
            response = await fetch('https://raw.githubusercontent.com/CSpacejp/CSpacejp.github.io/main/assets/updates/updates_en.json');
        }
        else {
            response = await fetch('https://raw.githubusercontent.com/CSpacejp/CSpacejp.github.io/main/assets/updates/updates_jp.json');
        }
        const data = await response.json();
        //console.log(data); // Verify the extracted data

        // Get the container element
        const swiperWrapper = document.querySelector(".swiper-slide");

        // Loop through the data and insert publication sections
        data.forEach(data => {
            const section = document.createElement("div");
            section.innerHTML = createNewPublication(data);
            swiperWrapper.appendChild(section);

            // Add click event listener to "Read more" button
            const readMoreButton = section.querySelector(".publications__button");
            const closeButton = section.querySelector(".publications__model-close");
            const modelContent = section.querySelector(".publications__model");

            readMoreButton.addEventListener("click", () => {
                modelContent.classList.add("show");
            });
            
            closeButton.addEventListener("click", () => {
                modelContent.classList.remove("show");
            });            
        });
    } catch (error) {
        console.error('Error loading updates.json:', error);
    }
}

// Call the function to fetch and display publication data
fetchAndDisplayPublicationData();


  

function createNewPublication(data) {
return `
    <div class="publications__content">
        <div>
            <span class="publications__subtitle">${data.date} | ${data.tag}</span>
            <h1 class="publications__title">${data.title}</h1></br>

            <span class="publications__button">
            Read more <i class='bx bx-right-arrow-alt'></i>
            </span>

            <div class="publications__model">
                <div class="publications__model-content">
                    <i class='bx bx-x publications__model-close'></i>

                    <h3 class="publications__model-title">${data.innertitle}</h3>
                    <p class="publications__model-description">
                        ${data.description}
                        </br>
                        ${data.link ? `<br><a href="${data.link}">${data.link}</a>` : ''}
                    </p>
                </div>
            </div>
        </div>
    </div>
    `;
} 