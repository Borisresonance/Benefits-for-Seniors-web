<?php
include_once("config/config.php");
$domainName = "Dental Benefit Finder";
$currentDomain = "LastDomain";
$ringbaNumberPrimaryTel = "888-888-8888";
$ringbaNumberPrimary = "(XXX) XXX-XXXX";
$ringbaScriptPrimary = "b-js.ringba.com/CAb49cfcb9181147da91c79a5b41b45130"


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" description="noindex,nofollow,noarchive">
    <title>

        <?php echo (($domainName == "Dental Benefit Finder") ? "Benefits For Seniors" : $domainName) ?>

    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>

    <a href="https://cdn.sppoints.xyz/click" class="hidden" id="rtRef"></a>
    <nav class="bg-blue-500 p-3 mt-0 w-full >
        <div class=" container mx-auto flex items-center justify-between align-middle md:px-48">
        <div class="flex text-white font-extrabold ">
            <?php echo (($domainName == "Dental Benefit Finder") ? "Benefits For Seniors" : $domainName) ?>
        </div>
        </div>
    </nav>
    <div id="mainContainer" class="mx-auto md:pt-4 pt-1 px-4 md:px-0 max-w-5xl  container">
        <h1 class="font-bold text-base md:text-3xl mx-auto px-50 md:px-60 text-left">
            [STATE] Senior: 2024 Medicare Advantage Plans Can Help You Save <br> Thousands In Additional Benefits. Check Your Eligibility Now
        </h1>
        <img class="mx-auto my-3 w-1/2 h-auto " src="/assets/images/hero1.png" // CDN approach might not be necesary />
        <p class="my-2 md:text-xl  px-50 md:px-60 text-left p-2">
            Millions of Seniors are rushing the hotlines to secure their 2024 Medicare Advantage benefit.
        </p>
        <p class=" font-bold my-2 md:text-xl  px-50 md:px-60 text-left ">
            Benefit plans and options are always changing
        </p>
        <p class=" md:text-xl  px-50 md:px-60 text-left ">
            so speak to our licensed sales agents and choose the rigth Medicare Advantage plant before enrollment ends!.
        </p>

        <div>
            <div id="display1" class="md:mt-8 mt-4">
                <h3 class="font-bold text-center md:text-4xl text-3xl my-8">
                    Tap Your Age
                </h3>
                <div class="grid grid-cols-1  gap-6">

                    <button id="btn-2" class="flex justify-center bg-blue-500 hover:bg-blue-400  tracking-wide text-white font-bold rounded-2xl md:w-3/4 w-1/2 mx-auto border-b-2 border-green-500 uppercase shadow-md md:py-6 py-4 md:text-2xl px-4 items-center">64
                        - 75
                    </button>
                    <button id="btn-3" class="flex justify-center bg-blue-500 hover:bg-blue-400  tracking-wide text-white font-bold rounded-2xl md:w-3/4 w-1/2 mx-auto border-b-2 border-green-500 uppercase shadow-md md:py-6 py-4 md:text-2xl px-4 items-center">76
                        and older
                    </button>
                </div>
            </div>
            <div id="display2" class="md:mt-8 mt-4 hidden">
                <h3 class="font-bold text-center md:text-4xl text-3xl my-8">
                    Are You Enrolled In Medicare <br>
                    Part A or Part B?
                </h3>
                <div class="grid grid-cols-1 gap-6">
                    <button id="btn-yes" class="flex justify-center bg-green-500 hover:bg-green-500  tracking-wide text-white font-bold rounded-2xl md:w-3/4 w-1/2 mx-auto border-b-2 border-green-500 uppercase shadow-md md:py-6 py-4 md:text-2xl px-6 items-center cta_btn btn_2">

                        Yes
                    </button>
                    <button id="btn-no" class="flex justify-center bg-green-500 hover:bg-green-500  tracking-wide text-white font-bold rounded-2xl md:w-3/4 w-1/2 mx-auto border-b-2 border-green-500 uppercase shadow-md md:py-6 py-4 md:text-2xl px-6 items-center cta_btn btn_2">
                        No
                    </button>
                </div>
            </div>



        </div>
    </div>
    <div id="display4" class="hidden hidden mx-auto md:pt-4 pt-1 px-4 md:px-0 max-w-5xl container ">
        <div class="p-6  mt-4  text-center ">
            <h1 class="font-bold text-green-600 text-center md:text-4xl text-3xl my-8">Congratulations!</h1>
            <h3 class="text-xl md:text-2xl font-bold mx-48 px-22 py-3  ">
                You may be eligible for additional benefits and savings that may include:
            </h3>
            <div class="flex justify-center">
                <ol class="text-base p-3 flex flex-col">
                    <li class="text-base font-bold flex items-center">
                        <img class="w-10 h-10 mr-2" src="/assets/images/check.png">
                        Dental Hearing <br> and Vision Care
                    </li>
                    <li class="text-base font-bold flex items-center">
                        <img class="w-10 h-10 mr-2" src="/assets/images/check.png">
                        Groceries
                    </li>
                    <li class="text-base font-bold flex items-center">
                        <img class="w-10 h-10 mr-2" src="/assets/images/check.png">
                        Prescriptions
                    </li>
                </ol>
            </div>



            <a href="tel:<?php echo $ringbaNumberPrimaryTel; ?>">
                <button class="capitalize font-bold  bg-green-500 animate__animated animate__pulse animate__infinite  text-white my-4 p-5  shadow-2xl md:text-2xl text-base rounded-2xl ">
                    CALL
                    <?php echo $ringbaNumberPrimary; ?>
                </button>
            </a>

            <p class="text-base text-black rounded-full px-1 py-2  text-center"><mark>Make a<strong> quick call</strong> to our licensed sales <br> agents to learn more before enroll</mark></p>



            <div id="countdown" class="border-2 border-red-500 border-dashed w-max px-6 py-2 mx-auto">
                <span class="text-red-500" id="time"></span>
            </div>
        </div>
    </div>

    <footer class="footer mt-12 footer-center p-4 mt-12 mb-2 text-center max-w-6xl mx-auto text-xs">

    </footer>
    <script src="https://cdn.sppoints.xyz/track.js?rtkcmpid="></script>
    <script>
        const setRtClickId = () => {
            var anchorTag = document.getElementById("rtRef");
            var anchorUrl = new URL(anchorTag.href);
            var anchorParams = new URLSearchParams(anchorUrl.search);

            // Assume your window location is something like /path?param2=value2
            var windowUrl = new URL(window.location.href);
            var windowParams = new URLSearchParams(windowUrl.search);

            windowUrl.searchParams.set('age', '64');
            window.history.pushState({
                path: windowUrl.toString()
            }, '', windowUrl.toString());
            // Append params from the anchor tag to the main URL's params
            for (let pair of anchorParams.entries()) {
                windowParams.append(pair[0], pair[1]);
            }

            // Set the window's location search params
            windowUrl.search = windowParams.toString();
            history.replaceState({}, "", windowUrl.toString());

        }

        const loadRingba = () => {
            var script = document.createElement("script");
            script.src =
                "<?php echo $ringbaScriptPrimary; ?>";
            document.head.appendChild(script);
        }

        function scrollToTop() {
            window.scrollTo({
                top: 0, // Scroll to the top of the window
                behavior: 'smooth' // Smooth scroll
            });
        }
        const runCountdownTimer = () => {
            var now = new Date().getTime();
            var countDownDate = new Date(now + 3 * 60000).getTime();

            setInterval(function() {
                var now = new Date().getTime();

                var distance = countDownDate - now;

                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                document.getElementById("time").innerHTML = minutes + ":" + seconds;

                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("time").innerHTML = "EXPIRED";
                }
            }, 500);
        }
        const btn2 = document.getElementById("btn-2");
        const btn3 = document.getElementById("btn-3");
        const btnYes = document.getElementById("btn-yes");
        const btnNo = document.getElementById("btn-no");
        const btnNo1 = document.getElementById("btn-no1");

        const mainContainer = document.getElementById("mainContainer");
        const display1 = document.getElementById("display1");
        const display2 = document.getElementById("display2");

        const display4 = document.getElementById("display4");

        btn2.addEventListener("click", () => {
            console.log("here");
            display1.style.display = "none";
            display2.style.display = "block";
            const newUrl = new URL(window.location.href);
            newUrl.searchParams.set('age', '64');
            window.history.pushState({
                path: newUrl.href
            }, '', newUrl.href);

            setRtClickId();
        })
        btn3.addEventListener("click", () => {
            display1.style.display = "none";
            display2.style.display = "block";
            const newUrl = new URL(window.location.href);
            newUrl.searchParams.set('age', '76');
            window.history.pushState({
                path: newUrl.href
            }, '', newUrl.href);

            setRtClickId();

        })



        btnNo.addEventListener("click", () => {
            display2.style.display = "none";
            window.location.href =
                "https://nationalcareoptions.com/lp/sca-aca";
            display5.style.display = "block";

        })


        btnYes.addEventListener("click", () => {
            display2.style.display = "none";
            mainContainer.style.display = "none";
            display4.style.display = "block";

            loadRingba()
            runCountdownTimer()
            scrollToTop()
        })

        btnNo1.addEventListener("click", () => {
            display2.style.display = "none";
            mainContainer.style.display = "none";
            display4.style.display = "block";
            loadRingba()
            runCountdownTimer()
            scrollToTop()
        })
    </script>
</body>

</html>