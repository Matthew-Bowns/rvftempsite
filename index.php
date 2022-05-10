<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Roche Valley Films</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <div class="header-box">
        <div class="logo-box">
            <img src="/images/rvf_logoblue.png" alt="">
            <p>Roche Valley Films is a full service production company right in the heart of Yorkshire. We make fiction films, documentaries and branded contant.</p>
            <div class="triangle-down"></div>
        </div>
    </div>
    <div class="tab-box">
        <div class="container">
            <p class="tab-hint">Click to find out more:</p>
            <div class="tab-buttons">
                <button id="fiction-btn" onclick="SwitchTabFic()">Fiction</button>
                <button id="documentary-btn" onclick="SwitchTabDoc()">Documentary</button>
                <button id="branded-btn" onclick="SwitchTabBra()">Branded</button>
            </div>

            <div class="tab-area">

                <div class="tab hide-tab" id="fiction-tab">
                    <div class="tab-image" style="background-image: url('/images/fiction_image.jpg');">
                        <div class="img-text">
                            <div class="img-credit">
                                <p class="italic">Coming soon</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-description">
                        <h1>Film Production</h1>
                        <p>Telling good stories is what filmaking is all about. They can teach us about ourselves, leave us giddy with excitment or open our 
                            eyes to the world around us. You can probably think of a film you love. Thats the power of a good story, and here at 
                            Roche Valley Films we're always looking for a new story to tell.
                        </p>
                    </div>
                </div>

                <div class="tab" id="documentary-tab">
                    <div class="tab-image" style="background-image: url('/images/documentary_image.jpg');">
                        <div class="img-text">
                            <div class="img-credit">
                                <p class="italic">from,</p>
                                <p class="bold">The Churches of Wentworth</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-description">
                        <h1>Documentary Production</h1>
                        <p>We beleive that preserving our history is just as important as telling a good story. Thats why we've worked on dozens of documentaries
                            bring to light places and people all over the country. Get in touch, and find out how we can help you tell your story.
                        </p>
                    </div>
                </div>

                <div class="tab hide-tab" id="branded-tab">
                    <div class="tab-image" style="background-image: url('/images/branded_image.jpg');">
                        <div class="img-text">
                            <div class="img-credit">
                                <p class="italic">Coming Soon</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-description">
                        <h1>Branded Videos</h1>
                        <p>Promoting yourself, your businees or a product? We can help you spread the word. We offer packages for simple interviews 
                            or, if you need something more bespoke, we can tailor our services to meet your needs. Get in touch to arrange a meeting.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-area">
        <div class="form-container">

            <p>email us at <b>enquiries@RocheValleyFilms.co.uk</b></p>
            <h3>Or contact us here:</h3>

            <form action="contactform.php" method="post">

                <label class="required" for="form_name">Name</label>
                <input type="text" id="form_name" name="name" placeholder="Full name" required>
                
                <label for="form_company">Company</label>
                <input type="text" id="form_company" name="company" required>
                
                <label class="required" for="form_email">Email</label>
                <input type="email" id="form_email" name="email" placeholder="youremail@example.com" required>
                
                <label for="form_phone">Phone number</label>
                <input type="text" id="form_phone" name="phone" required>

                <label class="required" for="form_message">Message</label>
                <textarea name="message" id="form_message" cols="30" rows="10" placeholder="How can we help?" required></textarea>

                <input type="submit" name="submit">
            </form>      
        </div>
    </div>

</body>

</html>

<script>

    var fictionTab = document.getElementById("fiction-tab")
    var documentaryTab = document.getElementById("documentary-tab")
    var brandedTab = document.getElementById("branded-tab")

    function SwitchTabFic () {
        if (fictionTab.classList.contains("hide-tab")) {
            console.log("Show Fiction");
            documentaryTab.classList.add("hide-tab");
            brandedTab.classList.add("hide-tab");
            fictionTab.classList.remove("hide-tab");
        }
    } 

    function SwitchTabDoc () {
        if (documentaryTab.classList.contains("hide-tab")) {
            console.log("Show Documentary");
            fictionTab.classList.add("hide-tab");
            brandedTab.classList.add("hide-tab");
            documentaryTab.classList.remove("hide-tab");
        }
    }

    function SwitchTabBra () {
        if (brandedTab.classList.contains("hide-tab")) {
            console.log("Show Branded");
            documentaryTab.classList.add("hide-tab");
            fictionTab.classList.add("hide-tab");
            brandedTab.classList.remove("hide-tab");
        }
    }

</script>