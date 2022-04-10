<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kedvenc játékaink | Kezdőlap</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../images/controller.jpg">
</head>
<body>
    <header>
        <h1 class="kozepre">Kedvenc játékaink</h1>
    </header>

    <nav id="fent">

        <ul>
            <li>
                <a href="#udvozlo">Üdvözlő</a>
            </li>
            <li>
                <a href="#games">The games</a>
            </li>
            <li>
                <a href="#urlap">Vélemény megosztó</a>
            </li>
        </ul>
    </nav>

    <main class="fadeIn">

        <section id="udvozlo">

            <h2>Üdvözlő</h2>

            <p>
            Üdvözlünk minden kedves idelátogatót az oldalunkon! Ezen az oldalon megosztunk veletek egy pár, általunk nagyon
            kedvelt és imádott videojátékokról infótkat és azt is, miért is szeretjük őket igazán.<br>
            Számunkra a videojátékozás egy fontos szabadidős tevékenység, mert ez az egyik legjobb médium arra, hogy
            <strong>történeteket meséljen, világokat építsen és embereket kössön össze.</strong>
            </p>

            <p>
            A következő négy oldalon kiválasztottunk 2-2 játékot amikről olvashattok és nagyon örülnénk, ha ti is kipróbálnátok őket,
            ha kedvet adtunk nektek a felfedezésükre. Az egyes játékokról szóló oldalakat a képekre kattintva érhetitek el.
            </p>

            <p>
            Ha esetleg már játszottatok a játékok valamelyikével vagy azután próbáltátok ki, miután kedvet adtunk nektek, akkor
            lehetőségetek van a lap alján lévő űrlapon keresztül leírni mi a véleményetek az adott játékról. Meglátásaitokat kíváncsian
            várjuk! :)
            </p>

        </section>

        <section id="games">

            <h2>The games</h2>

            <a href="danigame1.php">
                <img class="kezdo" src="../images/wolfkezdo.jpg" alt="Where wolf" title="Wolfenstein: The New Order | Dani kedvencei part 1">
            </a>

            <a href="danigame2.php">
                <img class="kezdo" src="../images/halokezdo.jpg" alt="Where halo" title="Halo: Combat Evolved | Dani kedvencei part 2">
            </a>

            <a href="ferigame1.php">
                <img class="kezdo" src="../images/larakezdo.jpg" alt="Where lara" title="Shadow of the Tomb Raider | Feri kedvencei part 1">
            </a>

            <a href="ferigame2.php">
                <img class="kezdo" src="../images/huntkezdo.jpg" alt="Where hunt" title="Hunt: Showdown | Feri kedvencei part 2">
            </a>

        </section>

        <section id="urlap">

            <h2>Vélemény megosztó</h2>

            <form autocomplete="off">

                <fieldset>

                    <legend>Regisztrációs adatok</legend>
                    <br/>

                    <label>Felhasználónév:<input type="text" name="username" required></label>
                    <br/><br/>

                    <label>Kor:<input type="number" name="age" required></label>
                    <br/><br/>

                    Nem: <label for="option1">Férfi:</label>
                    <input type="radio" id="option1" name="sex" checked/>

                    <label for="option2">Nő:</label>
                    <input type="radio" id="option2" name="sex"/>

                    <label for="option3">Egyéb:</label>
                    <input type="radio" id="option3" name="sex"/>
                    <br/><br/>

                    <label>Jelszó:<input type="password" name="psswd" required></label>
                    <br/><br/>

                    <label>Jelszó ismét:<input type="password" name="psswd" required></label>
                    <br/><br/>

                    <label>E-mail:<input type="email" name="email" placeholder="valaki@valami.com" required></label>
                    <br/><br/>

                </fieldset>

                <fieldset>

                    <legend>Játékok</legend>
                    <br/>
                    Mely játékot/játékokat próbáltad ki? <br/><br/>

                    <label for="game1">Wolfenstein: The New Order</label>
                    <input type="checkbox" id="game1" name="Wolfenstein: The New Order" checked/> <br/>

                    <label for="game2">Halo: Combat Evolved</label>
                    <input type="checkbox" id="game2" name="Halo: Combat Evolved"/> <br/>

                    <label for="game3">Shadow of the Tomb Raider</label>
                    <input type="checkbox" id="game3" name="Shadow of the Tomb Raider"/> <br/>

                    <label for="game4">Hunt: Showdown</label>
                    <input type="checkbox" id="game4" name="Hunt: Showdown"/> <br/><br/>

                    Mik tetszettek benne/bennük?
                    <label for="pos"></label> <br/><br/>
                    <textarea id="pos" name="positives" rows="20" cols="60" maxlength="1000" required></textarea>
                    <br/><br/>

                    Mik NEM tetszettek benne/bennük?
                    <label for="neg"></label> <br/><br/>
                    <textarea id="neg" name="negatives" rows="20" cols="60" maxlength="1000" required></textarea>
                    <br/><br/>

                    <input type="reset" name="rst" value="Visszaállítás">
                    <input type="submit" name="sbmt" value="Küldés">

                </fieldset>
            </form>

        </section>

    </main>

    <footer>
        <h3 class="kozepre">Készítette: Sprok Dániel és Megyesi Ferenc</h3>
    </footer>

</body>
</html>

