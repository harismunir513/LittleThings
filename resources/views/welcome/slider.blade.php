<!-- Fork me on GitHub ribbon -->
<a href="https://github.com/Elitewares/CSS3-Slider" target="_blank"><img style="position: fixed; top: 0; right: 0; border: 0;z-index:99;" src="https://camo.githubusercontent.com/38ef81f8aca64bb9a64448d0d70f1308ef5341ab/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6461726b626c75655f3132313632312e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png"></a>

<!-- Header -->
<header>
    <div class="logo">
        <a href="#"><img src="images/logo.jpg"></a>
    </div>
    <nav>
        <li> <a href="login" target="_blank">Login</a></li>
        <li> <a href="register" target="_blank">Sign Up</a> </li>
        <select onchange="if (this.value) window.location.href=this.value">
            <option value="#"> Default </option>
            <option value="#"> Left to Right </option>
            <option value="#"> Top to Bottom </option>
            <option value="#"> Bottom to Top </option>
            <option value="#"> light </option>
        </select>
    </nav>
</header>

<!-- Slider -->
<div id="slider">
    <div class="slides">
        <div class="slider">
            <div class="legend"></div>
            <div class="content">
                <div class="content-txt">
                    <h1>Lorem ipsum dolor</h1>
                    <h2>Nam ultrices pellentesque facilisis. In semper tellus mollis nisl pulvinar vitae vulputate lorem consequat. Fusce odio tortor, pretium sit amet auctor ut, ultrices vel nibh.</h2>
                </div>
            </div>
            <div class="image">
                <img src="http://img11.hostingpics.net/pics/767361311.jpg">
            </div>
        </div>
        <div class="slider">
            <div class="legend"></div>
            <div class="content">
                <div class="content-txt">
                    <h1>Lorem ipsum dolor</h1>
                    <h2>Nam ultrices pellentesque facilisis. In semper tellus mollis nisl pulvinar vitae vulputate lorem consequat. Fusce odio tortor, pretium sit amet auctor ut, ultrices vel nibh.</h2>
                </div>
            </div>
            <div class="image">
                <img src="http://img11.hostingpics.net/pics/412998972.jpg">
            </div>
        </div>
        <div class="slider">
            <div class="legend"></div>
            <div class="content">
                <div class="content-txt">
                    <h1>Lorem ipsum dolor</h1>
                    <h2>Nam ultrices pellentesque facilisis. In semper tellus mollis nisl pulvinar vitae vulputate lorem consequat. Fusce odio tortor, pretium sit amet auctor ut, ultrices vel nibh.</h2>
                </div>
            </div>
            <div class="image">
                <img src="http://img11.hostingpics.net/pics/990696943.jpg">
            </div>
        </div>
        <div class="slider">
            <div class="legend"></div>
            <div class="content">
                <div class="content-txt">
                    <h1>Lorem ipsum dolor</h1>
                    <h2>Nam ultrices pellentesque facilisis. In semper tellus mollis nisl pulvinar vitae vulputate lorem consequat. Fusce odio tortor, pretium sit amet auctor ut, ultrices vel nibh.</h2>
                </div>
            </div>
            <div class="image">
                <img src="http://img11.hostingpics.net/pics/601549194.jpg">
            </div>
        </div>
    </div>
    <div class="switch">
        <ul>
            <li>
                <div class="on"></div>
            </li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
</div>

<div class="container">
    <h1> Note </h1>
    <h2> The dropdown menu doesn't work in this demo. You need to download the code from github for the full version</h2>
    <h1> How to use </h1>
    <h2> Choose the version you want to integrate in your website, then link it through your HTML page </h2>
    <div class="code">
        <span>&lt;head></span>
        <br>
        <div class="space"></div>
        ... <span><i>&lt;!-- Your stuff --></span></i>
        <br>
        <div class="space"></div>
        <span>&lt;link rel="</span>stylesheet<span>" href="</span>style/slider-def.css<span>"></span>
        <br>
        <span>&lt;/head></span>
    </div>
    <h2> Then add this structure to your page </h2>
    <div class="code">
        <span>&lt;div id="</span>slider<span>"></span>
        <br>
        <div class="space"></div>
        <span>&lt;div class="</span>slides<span>"></span></br>
        <br>

        <div class="space"></div>
        <div class="space"></div>
        <span><i>&lt;!-- First slide --></span></i>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;div class="</span>slider<span>"></span></br>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;div class="</span>legend<span>">&lt;/div></span>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;div class="</span>content<span>"></span>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;div class="</span>content-txt<span>"></span>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;h1></span> Your title <span>&lt;/h1></span>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;h2></span> Your description <span>&lt;/h2></span>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;/div></span>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;/div></span>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;div class="</span>images<span>"></span>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;img src="</span>ImagePath/ImageName.jpg<span>"></span>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;/div></span>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;/div></span>
        <br>
        <br>

        <div class="space"></div>
        <div class="space"></div>
        <span><i>&lt;!-- Second slide --></span></i>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;div class="</span>slider<span>"></span></br>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;div class="</span>legend<span>">&lt;/div></span>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;div class="</span>content<span>"></span>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;div class="</span>content-txt<span>"></span>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;h1></span> Your title <span>&lt;/h1></span>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;h2></span> Your description <span>&lt;/h2></span>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;/div></span>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;/div></span>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;div class="</span>images<span>"></span>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;img src="</span>ImagePath/ImageName.jpg<span>"></span>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;/div></span>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;/div></span>
        <br>
        <br>


        <div class="space"></div>
        <div class="space"></div>
        <span><i>&lt;!-- Third slide --></span></i>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;div class="</span>slider<span>"></span></br>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;div class="</span>legend<span>">&lt;/div></span>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;div class="</span>content<span>"></span>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;div class="</span>content-txt<span>"></span>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;h1></span> Your title <span>&lt;/h1></span>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;h2></span> Your description <span>&lt;/h2></span>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;/div></span>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;/div></span>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;div class="</span>images<span>"></span>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;img src="</span>ImagePath/ImageName.jpg<span>"></span>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;/div></span>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;/div></span>
        <br>
        <br>

        <div class="space"></div>
        <div class="space"></div>
        <span><i>&lt;!-- Fourth slide --></span></i>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;div class="</span>slider<span>"></span></br>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;div class="</span>legend<span>">&lt;/div></span>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;div class="</span>content<span>"></span>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;div class="</span>content-txt<span>"></span>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;h1></span> Your title <span>&lt;/h1></span>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;h2></span> Your description <span>&lt;/h2></span>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;/div></span>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;/div></span>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;div class="</span>images<span>"></span>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;img src="</span>ImagePath/ImageName.jpg<span>"></span>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;/div></span>
        <br>
        <div class="space"></div>
        <div class="space"></div>
        <span>&lt;/div></span>
        <br>
        <br>
        <div class="space"></div>
        <span>&lt;/div></span>
        <br>
        <span>&lt;/div></span>
    </div>
    <h2> Finally add the images and text content and enjoy </h2>
    <br>
    <h1> CSS files index </h1>
    <h3> slider-def.css : Default </h3>
    <h3> slider-ltr.css : Left to right </h3>
    <h3> slider-ttb.css : Top to bottom </h3>
    <h3> slider-btt.css : Bottom to top </h3>
    <h3> slider-simp.css : Light </h3>
</div>

<footer>
    <h1> Opensource your work, knowledge is free </h1>
</footer>
