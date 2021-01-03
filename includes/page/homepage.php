<section class="main">
    <img src="../../../../Downloads/BACKUP_WEBMAJSTR/img/webmajstrlogo.svg" class="logo-big" alt="Logo stránky">
    <h1 class="hero">Vítá vás <span>Webmajstr</span>!</h1>
    <p>Webmajstr je webová miniaplikace, která vám pomůže pochopit základy webového vývoje. Představí vám jak web
        funguje, fundamentální koncepty kódování, tipy a triky a nakonec vám nabídne i kvíz, kde si budete moci
        vyzkoušet své nově dobyté znalosti. </p>
    <section class="webwireframe">
        <img src="../../../../Downloads/BACKUP_WEBMAJSTR/img/webwireframe.svg" id="ww" alt="Vektorové schéma prototypu webových stránek">
    </section>
    <div class="btn">
        <button id="button2" class="button" type="button">JDEME NA TO!</button>
    </div>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2 class="modalH2">Předtím než začneme prosím napiš jak tě máme oslovovat:</h2>
            <form>
                <input type="text" id="fname" placeholder="Např. Aleksi ..." required>
            </form>
            <br>
            <button id="submitNameBtn" class="button" type="button">Hotovo!</button>
        </div>
    </div>
</section>
<script src="../../../../Downloads/BACKUP_WEBMAJSTR/js/start.js"></script>

<script>
    new Date().getFullYear()
    document.getElementById("currentYear").innerHTML = new Date().getFullYear();
</script>
