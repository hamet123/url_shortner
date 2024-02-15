<!doctype html>
<html lang="en">

<head>
    <title>iShortner</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="styles/styles.css">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <main class="main">
        <!-- Header -->
        <header class="header">
          <div class="container flex-between">
            <div class="logo">
              <a href="#">
                <img src="https://raw.githubusercontent.com/MohamedAridah/frontendmentor_url-shortening-api/main/images/logo.svg" alt="" />
              </a>
            </div>
            <nav class="main-navgation flex-between flex-ver-top">
              <div class="nav-links">
                {{-- <a href="#features">Features</a>
                <a href="#pricing">Pricing</a>
                <a href="#resources">Resources</a> --}}
              </div>
              <div class="nav-buttons">
                @if(Auth::user())
                <a href="/dashboard" class="log-in">Dashboard</a>
                @else
                <a href="/login" class="log-in">Login</a>
                <a href="/register" class="log-in">Sign Up</a>
                @endif
              </div>
            </nav>
            <div class="burger-menu">
              <i class="fa-regular fa-bars icon"></i>
            </div>
          </div>
        </header>
        <!-- Landing -->
        <section class="landing">
          <div class="landing-text">
            <h1>More than just shorter links</h1>
            <p>
              Build your brand’s recognition and get detailed insights on how your
              links are performing.
            </p>
            <a href="/dashboard" class="btn btn-lg btn-primary">Get Started</a>
          </div>
          <div class="landing-image">
            <img src="https://raw.githubusercontent.com/MohamedAridah/frontendmentor_url-shortening-api/main/images/illustration-working.svg" alt="Working Illustration" />
          </div>
        </section>
        <!-- Features -->
        <section class="features" id="features">
          <div class="container">
            <!-- Short URL Feature -->
            <div class="url-shorten-feature">
              <form class="url-shorten-form" id="url-shorten-form">
                {{-- <div>
                  <input type="text" class="url-input" placeholder="Shorten a link here..." autocomplete="off" />
                  <span class="alert"></span>
                </div>
                <button type="submit" class="btn btn-lg btn-plus-icon">Shorten It!</button> --}}
              </form>
              <div class="url-shorten-results"></div>
            </div>
            <!-- Advanced Features -->
            <div class="more-features">
              <div class="section-header">
                <h2>Advanced Statistics</h2>
                <p>
                  Track how your links are performing across the web with our
                  advanced statistics dashboard.
                </p>
              </div>
              <div class="more-features-content">
                <div class="feature">
                  <div class="feature-illustration">
                    <img src="https://raw.githubusercontent.com/MohamedAridah/frontendmentor_url-shortening-api/main/images/icon-brand-recognition.svg" alt="Feature Illustration Icon" />
                  </div>
                  <div class="feature-details">
                    <h3>Brand Recognition</h3>
                    <p>
                      Boost your brand recognition with each click. Generic links
                      don’t mean a thing. Branded links help instil confidence in
                      your content.
                    </p>
                  </div>
                </div>
                <div class="feature">
                  <div class="feature-illustration">
                    <img src="https://raw.githubusercontent.com/MohamedAridah/frontendmentor_url-shortening-api/main/images/icon-detailed-records.svg" alt="Feature Illustration Icon" />
                  </div>
                  <div class="feature-details">
                    <h3>Detailed Records</h3>
                    <p>
                      Gain insights into who is clicking your links. Knowing when
                      and where people engage with your content helps inform
                      better decisions.
                    </p>
                  </div>
                </div>
                <div class="feature">
                  <div class="feature-illustration">
                    <img src="https://raw.githubusercontent.com/MohamedAridah/frontendmentor_url-shortening-api/main/images/icon-fully-customizable.svg" alt="Feature Illustration Icon" />
                  </div>
                  <div class="feature-details">
                    <h3>Fully Customizable</h3>
                    <p>
                      Improve brand awareness and content discoverability through
                      customizable links, supercharging audience engagement.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Pricing -->
        <section class="pricing" id="pricing">
          <div class="container">
            <div class="section-header">
              <h2>Boost your links today</h2>
              <a href="/dashboard" class="btn btn-lg btn-danger">Get Started</a>
            </div>
          </div>
        </section>
        <!-- Footer -->
        {{-- <footer class="footer" id="resources">
          <div class="container">
            <!-- Website Logo -->
            <div class="logo">
              <a href="#">
                <img src="https://raw.githubusercontent.com/MohamedAridah/frontendmentor_url-shortening-api/main/images/logo.svg" alt="" />
              </a>
            </div>
            <!-- Quick Links -->
            <div class="quick-links">
              <div class="links-group">
                <span>Features</span>
                <div>
                  <a href="#">Link Shortening</a>
                  <a href="#">Branded Links</a>
                  <a href="#">Analytics</a>
                </div>
              </div>
              <div class="links-group">
                <span>Resources</span>
                <div>
                  <a href="#">Blog</a>
                  <a href="#">Developers</a>
                  <a href="#">Support</a>
                </div>
              </div>
              <div class="links-group">
                <span>Company</span>
                <div>
                  <a href="#">About</a>
                  <a href="#">Our Team</a>
                  <a href="#">Careers</a>
                  <a href="#">Contact</a>
                </div>
              </div>
            </div>
            <!-- Social Media -->
            <div class="social-media">
              <a href="#">
                <img src="https://raw.githubusercontent.com/MohamedAridah/frontendmentor_url-shortening-api/main/images/icon-facebook.svg" alt="Facebook Logo">
              </a>
              <a href="#">
                <img src="https://raw.githubusercontent.com/MohamedAridah/frontendmentor_url-shortening-api/main/images/icon-twitter.svg" alt="Twitter Logo">
              </a>
              <a href="#">
                <img src="https://raw.githubusercontent.com/MohamedAridah/frontendmentor_url-shortening-api/main/images/icon-pinterest.svg" alt="Pinterest Logo">
              </a>
              <a href="#">
                <img src="https://raw.githubusercontent.com/MohamedAridah/frontendmentor_url-shortening-api/main/images/icon-instagram.svg" alt="Instagram Logo">
              </a>
            </div>
          </div>
          <!-- Made By -->
          <div class="attribution">
            Challenge by <a href="https://www.frontendmentor.io?ref=challenge" class="outer-link" target="_blank">Frontend Mentor</a>.
            Coded by <span class="outer-link">Mohamed Aridah</span>.
            <ul class="social-media">
              <li>
                <a href="https://www.codepen.io/FedLover" title="go To My Codepen Account">
                  <i class="fa-brands fa-codepen icon"></i>
                </a>
              </li>
              <li>
                <a href="https://www.frontendmentor.io/profile/MohamedAridah" title="go To My Frontend Mentor Account">
                  <img src="https://mohamedaridah.github.io/hosted-assets/FEM.png" class="image" alt="">
                </a>
              </li>
            </ul>
          </div>
        </footer> --}}
      </main>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script>
        /*

  ////// NOTE ///////
  
LocalStorage Doesn't Wok On Coden Pen [Access Denied]. So When Refreshing The Browser All The Generated URLs will Be Removed.

To View The Full Functionality Of The Website, You Can Visit My Github Page

https://github.com/MohamedAridah/frontendmentor_url-shortening-api

*/

// Global Variables
let shortURLsWrapper = document.querySelector(".url-shorten-results");
let shortUrlForm = document.querySelector("#url-shorten-form");
let submitButton = shortUrlForm.querySelector("button");
let input = shortUrlForm.querySelector(".url-input");
let alertMessage = shortUrlForm.querySelector(".alert");

// Build Short URL HTML Structure
function generatedShortUrlHtml(id, originalURL, shortUrl) {
  shortURLsWrapper.insertAdjacentHTML(
    "beforeend",
    `
  <div class="url-shorten-result" id='${id}'>
    <div class="old-url">
    <p><a href="${originalURL}" target="_blank">${originalURL}</a></p>
    </div>
    <div class="new-url">
      <p><a href="${shortUrl}" target="_blank">${shortUrl}</a></p>
      <div class="options">
        <button type="button" class="copy-new-url btn btn-sm scale-effect">
          copy
        </button>

        <button type="button" class="delete-url scale-effect">
          <i class="fa-regular fa-trash-can icon"></i>
        </button>
      </div>
    </div>
  </div>`
  );
  removeURL();
  copyURL();
  removeAllGeneratedURLs();
}

// Put Delete Button At The End Of The Generated Links Function
function insertAfter(newNode, existingNode) {
  existingNode.parentNode.insertBefore(newNode, existingNode.nextSibling);
}

// Add Remove All Generated URls
function removeAllGeneratedURLs() {
  // When There Is More Than One Generated URL & Delete Button Is Already Exists Delete It And Then Add It To The End Of The URLs List.
  if (shortURLsWrapper.querySelectorAll(".url-shorten-result").length >= 2) {
    if (shortURLsWrapper.querySelector(".delete-all-urls")) {
      shortURLsWrapper.querySelector(".delete-all-urls").remove();
    }
    // Create Delete Generated URLs Button
    let button = document.createElement("button");
    button.type = "button";
    button.classList = "btn btn-sm delete-all-urls scale-effect";
    button.textContent = "delete all";
    insertAfter(button, shortURLsWrapper.lastElementChild);
    // Delete All Genetared URLs & LocalStorage
    let deleteAll = shortURLsWrapper.querySelector(".delete-all-urls");
    deleteAll.addEventListener("click", () => {
      shortURLsWrapper.innerHTML = "";
      savedURLs = [];
      localStorage.removeItem("saved");
    });
  } else {
    if (shortURLsWrapper.querySelector(".delete-all-urls")) {
      shortURLsWrapper.querySelector(".delete-all-urls").remove();
    }
  }
}

// Remove Sindle URL
function removeURL() {
  let deleteURLButton = shortURLsWrapper.querySelectorAll(".delete-url");
  deleteURLButton.forEach((button) => {
    button.addEventListener("click", () => {
      // Get URL ID
      let linkId = button.closest(".url-shorten-result").id;
      // Remove URL From The List
      button.closest(".url-shorten-result").remove();
      // Get Index Of This URL And Remove It From Array
      const index = savedURLs.findIndex((url) => url.id == linkId);
      // Remove URL From The Array
      savedURLs.splice(index, 1);
      // Resave The Array & LocalStorage
      localStorage.setItem("saved", JSON.stringify(savedURLs));
      removeAllGeneratedURLs();
    });
  });
}

// Copy URl
function copyURL() {
  let copyButtons = shortURLsWrapper.querySelectorAll(".copy-new-url");
  copyButtons.forEach((button) => {
    button.addEventListener("click", () => {
      // Get URL Content
      let urlText = button
        .closest(".url-shorten-result")
        .querySelector(".new-url p").textContent;
      const body = document.querySelector("body");
      const area = document.createElement("textarea");
      body.appendChild(area);
      area.value = urlText;
      area.select();
      document.execCommand("copy");
      button.classList.add("copied");
      button.innerHTML = "copied!";
      setTimeout(() => {
        button.classList.remove("copied");
        button.innerHTML = "copy";
      }, 1500);
      body.removeChild(area);
    });
  });
}

// Generate Random IDs
function reandomIds() {
  let currentTime = Date.now();
  let currentTimeString = currentTime.toString(32).slice(0, 8);
  let reandomNumber = Math.floor(Math.random() * Number.MAX_SAFE_INTEGER)
    .toString()
    .slice(0, 4);
  let reabdomId = `${currentTimeString}-${reandomNumber}`;
  return reabdomId;
}

// shrtcode API
const makeShortURL = async (userUrl) => {
  let apiBaseURL = "https://api.shrtco.de/v2/";
  let shortenQuery = `shorten?url=`;
  let fetchLink = `${apiBaseURL}${shortenQuery}${userUrl}`;

  try {
    let response = await fetch(fetchLink);
    let data = await response.json();
    let status = data.ok;

    // Response With Data
    if (status) {
      let originalURL = data.result.original_link;
      let shortUrl = data.result.full_short_link;
      // Make Object For [originalURL, shortUrl]
      let generatedURL = {
        id: reandomIds(),
        originalURL: originalURL,
        shortUrl: shortUrl
      };
      // Change Submit Button Text & Style
      shortUrlForm.classList.add("success");
      submitButton.innerHTML = `<i class="fa-solid fa-check icon"></i> shortened!`;
      setTimeout(() => {
        shortUrlForm.classList.remove("success");
        submitButton.innerHTML = "shorten it!";
      }, 1700);
      generatedShortUrlHtml(reandomIds(), originalURL, shortUrl);
      // Save [link] Object To Localstorage After Pushing It To The [savedURLs] Array
      savedURLs.push(generatedURL);
      localStorage.setItem("saved", JSON.stringify(savedURLs));
    }
    // Response With Error Message [No Data].
    else {
      // Change Submit Button Text
      submitButton.innerHTML = "shorten it!";
      let errorCode = data.error_code;
      switch (errorCode) {
        // If Input Is Empty
        case 1:
          alerts("Please add a link first");
          break;
        // If URL Is Not Valid
        case 2:
          alerts(data.error.split(",")[0] + ", Please check your link again.");
          break;
        // If URL Is Not Allowed To Be Shortened
        case 10:
          alerts("The link you entered is not allowed to be shortened.");
          break;
        // Any Other Problem
        default:
          alerts(data.error);
      }
    }
  } catch (error) {
    // Incase Can't Connect To The Api [Ex: No Internet Connection]
    alerts("Sorry, unknown error happened please try again later.");
  }
};

shortUrlForm.addEventListener("submit", (e) => {
  e.preventDefault();
  // Get Input Value & Remove Extra Spaces.
  let inputValue = input.value.trim().replace(" ", "");
  // Change Submit Button Text
  submitButton.innerHTML = `<i class="fa-solid fa-spinner icon fa-spin"></i> Generating...`;
  makeShortURL(inputValue);
  // Clear Input
  shortUrlForm.reset();
});

// Show Alerts
function alerts(message) {
  shortUrlForm.classList.add("empty");
  alertMessage.textContent = message;

  setTimeout(() => {
    shortUrlForm.classList.remove("empty");
  }, 5000);
}

// Expand Header Navgation Function
function expandNavgation() {
  let navgation = document.querySelector(".header .main-navgation");
  let toggleMenu = document.querySelector(".header .burger-menu");
  let icon = toggleMenu.querySelector(".icon");
  let closed = true;

  toggleMenu.addEventListener("click", () => {
    // Change Icon
    if (icon.classList.contains("fa-bars")) {
      icon.className = "fa-regular fa-xmark icon";
    } else {
      icon.className = "fa-regular fa-bars icon";
    }

    // Open Or Close Navgation Menu
    let navgationHeight = navgation.scrollHeight;
    if (closed) {
      navgation.style.height = `${navgationHeight}px`;
    } else {
      navgation.style.height = "";
    }
    closed = !closed;
  });
  // Close Navgation For Devices Greater Than 992px Width.
  window.addEventListener("resize", () => {
    if (window.innerWidth > 992) {
      icon.className = "fa-regular fa-bars icon";
      navgation.style.height = "";
      closed = true;
    }
  });
}
expandNavgation();

    </script>
</body>

</html>
