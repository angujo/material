<?php
$colors =
    ['black', 'grey', 'grey-1', 'grey-2', 'grey-3', 'grey-4', 'grey-5', 'grey-6', 'grey-7', 'grey-8', 'red', 'red-1', 'red-2', 'red-3', 'red-4', 'red-5', 'red-6', 'red-7', 'red-8', 'green', 'green-1',
     'green-2', 'green-3', 'green-4', 'green-5', 'green-6', 'green-7', 'green-8', 'blue', 'blue-1', 'blue-2', 'blue-3', 'blue-4', 'blue-5', 'blue-6', 'blue-7', 'blue-8']; ?>
<?php
$realColors     = ['purple', 'indigo', 'teal', 'green', 'blue', 'grey', 'red', 'orange', 'pink', 'yellow'];
$colorIntensity = ['darkest', 'darker', 'dark', '', 'light', 'lighter', 'lightest'];
$fullColors     =
    array_reduce(array_map(function ($c) use ($colorIntensity) { return array_map(function ($i) use ($c) { return $c . ($i ? '-' . $i : ''); }, $colorIntensity); }, $realColors), 'array_merge', []);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML5 Test Page</title>
    <link href="css/gmaterial.css" rel="stylesheet" type="text/css">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="top" class="page" role="document">
    <header role="banner">
        <h1>HTML5 Test Page</h1>
        <p>This is a test page filled with common HTML elements to be used to provide visual feedback whilst building CSS systems and frameworks.</p>
    </header>
    <nav role="navigation">
        <ul>
            <li>
                <a href="#grids">Grids</a>
            </li>
            <li><a href="#dropdown">DropDown</a></li>
            <li><a href="#borders">Borders</a></li>
            <li><a href="#borders">Colors</a></li>
            <li><a href="#cards">Cards</a></li>
            <li><a href="#rounds">Rounds</a></li>
            <li>
                <a href="#text">Text</a>
                <ul>
                    <li><a href="#text__headings">Headings</a></li>
                    <li><a href="#text__paragraphs">Paragraphs</a></li>
                    <li><a href="#text__blockquotes">Blockquotes</a></li>
                    <li><a href="#text__lists">Lists</a></li>
                    <li><a href="#text__hr">Horizontal rules</a></li>
                    <li><a href="#text__tables">Tabular data</a></li>
                    <li><a href="#text__code">Code</a></li>
                    <li><a href="#text__inline">Inline elements</a></li>
                </ul>
            </li>
            <li>
                <a href="#embedded">Embedded content</a>
                <ul>
                    <li><a href="#embedded__images">Images</a></li>
                    <li><a href="#embedded__audio">Audio</a></li>
                    <li><a href="#embedded__video">Video</a></li>
                    <li><a href="#embedded__canvas">Canvas</a></li>
                    <li><a href="#embedded__meter">Meter</a></li>
                    <li><a href="#embedded__progress">Progress</a></li>
                    <li><a href="#embedded__svg">Inline SVG</a></li>
                    <li><a href="#embedded__iframe">IFrames</a></li>
                </ul>
            </li>
            <li>
                <a href="#forms">Form elements</a>
                <ul>
                    <li><a href="#forms__input">Input fields</a></li>
                    <li><a href="#forms__select">Select menus</a></li>
                    <li><a href="#forms__checkbox">Checkboxes</a></li>
                    <li><a href="#forms__radio">Radio buttons</a></li>
                    <li><a href="#forms__textareas">Textareas</a></li>
                    <li><a href="#forms__html5">HTML5 inputs</a></li>
                    <li><a href="#forms__action">Action buttons</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <main role="main">
        <section id="dropdown">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 row-pushed">
                    <div class="dropdown-hover">
                        <button class="btn-success">Action</button>
                        <div class="dropdown-content">
                            <a>Menu Item 1</a>
                            <a>Menu Item 2</a>
                            <a>Menu Item 3</a>
                            <a>Menu Item 4</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="dropdown-hover">
                        <button class="btn-info">Action</button>
                        <div class="dropdown-content">
                            <a>Menu Item 1</a>
                            <a>Menu Item 2</a>
                            <a>Menu Item 3</a>
                            <a>Menu Item 4</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="dropdown active">
                        <button class="btn-default">Action</button>
                        <div class="dropdown-content">
                            <a>Menu Item 1</a>
                            <a>Menu Item 2</a>
                            <a>Menu Item 3</a>
                            <a>Menu Item 4</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="lists">
            <ul class="default">
                <li><code>.default</code></li>
                <li>Lara, Randall P.</li>
                <li>tortor.nibh@nonummyFusce.edu</li>
                <li>P.O. Box 461, 9181 Nostra, Street</li>
                <li>Dapibus Id Ltd</li>
            </ul>
            <hr/>
            <ul>
                <li>Default</li>
                <li>Lara, Randall P.</li>
                <li>tortor.nibh@nonummyFusce.edu</li>
                <li>P.O. Box 461, 9181 Nostra, Street</li>
                <li>Dapibus Id Ltd</li>
            </ul>
            <hr/>
            <ul class="inline">
                <li><code>.inline</code></li>
                <li>Lara, Randall P.</li>
                <li>tortor.nibh@nonummyFusce.edu</li>
                <li>P.O. Box 461, 9181 Nostra, Street</li>
                <li>Dapibus Id Ltd</li>
            </ul>
            <hr/>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <ul class="list-group">
                        <li>
                            <header>John doe Smith</header>
                            <section>
                                Rationes potus in ferox lentia!Decors crescere, tanquam albus amor.Experimentum cito ducunt ad neuter lanista.Aonides grandis clinias est.Tata de mirabilis fermium,
                                prensionem
                                nomen!Salvus eleates etiam gratias homo est.Demolitiones prarere in tubinga!Est emeritis brabeuta, cesaris.
                            </section>
                            <footer>
                                Footer Here
                            </footer>
                        </li>
                        <li>
                            <header>James Smith</header>
                            <section>
                                Rationes potus in ferox lentia!Decors crescere, tanquam albus amor.Experimentum cito ducunt ad neuter lanista.Aonides grandis clinias est.Tata de mirabilis fermium,
                                prensionem
                                nomen!Salvus eleates etiam gratias homo est.Demolitiones prarere in tubinga!Est emeritis brabeuta, cesaris.
                            </section>
                            <button class="btn-default">
                                Click for more ...
                            </button>
                        </li>
                        <li>
                            <header>Jane doe Smith</header>
                            <section>
                                Rationes potus in ferox lentia!Decors crescere, tanquam albus amor.Experimentum cito ducunt ad neuter lanista.Aonides grandis clinias est.Tata de mirabilis fermium,
                                prensionem
                                nomen!Salvus eleates etiam gratias homo est.Demolitiones prarere in tubinga!Est emeritis brabeuta, cesaris.
                            </section>
                            <div class="button-group">
                                <button class="btn-info">Details</button>
                                <button class="btn-success">Save</button>
                                <button class="btn-warning">Delete</button>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-6"></div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <ul class="list-group list-success">
                        <li>
                            <header>John doe Smith</header>
                            <section>
                                Rationes potus in ferox lentia!Decors crescere, tanquam albus amor.Experimentum cito ducunt ad neuter lanista.Aonides grandis clinias est.Tata de mirabilis fermium,
                                prensionem
                                nomen!Salvus eleates etiam gratias homo est.Demolitiones prarere in tubinga!Est emeritis brabeuta, cesaris.
                            </section>
                            <footer>
                                Footer Here
                            </footer>
                        </li>
                        <li>
                            <header>Jane doe Smith</header>
                            <section>
                                Rationes potus in ferox lentia!Decors crescere, tanquam albus amor.Experimentum cito ducunt ad neuter lanista.Aonides grandis clinias est.Tata de mirabilis fermium,
                                prensionem
                                nomen!Salvus eleates etiam gratias homo est.Demolitiones prarere in tubinga!Est emeritis brabeuta, cesaris.
                            </section>
                            <footer>
                                Footer Here
                            </footer>
                        </li>
                        <li>
                            <header>James mcSmith</header>
                            <section>
                                Rationes potus in ferox lentia!Decors crescere, tanquam albus amor.Experimentum cito ducunt ad neuter lanista.Aonides grandis clinias est.Tata de mirabilis fermium,
                                prensionem
                                nomen!Salvus eleates etiam gratias homo est.Demolitiones prarere in tubinga!Est emeritis brabeuta, cesaris.
                            </section>
                            <footer>
                                Footer Here
                            </footer>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-6"></div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <ul class="list-group list-success">
                        <li>
                            <img src="img/oldman.png">
                            <section>
                                <header>John doe Smith</header>
                                <section>
                                    Rationes potus in ferox lentia!Decors crescere, tanquam albus amor.Experimentum cito ducunt ad neuter lanista.Aonides grandis clinias est.Tata de mirabilis fermium,
                                    prensionem
                                    nomen!Salvus eleates etiam gratias homo est.Demolitiones prarere in tubinga!Est emeritis brabeuta, cesaris.
                                </section>
                                <footer>
                                    Footer Here
                                </footer>
                            </section>
                        </li>
                        <li>
                            <img src="img/matureman.png">
                            <section>
                                <section>
                                    <b>John Smith Doe</b><br/>
                                    Rationes potus in ferox lentia!Decors crescere, tanquam albus amor.Experimentum cito ducunt ad neuter lanista.Aonides grandis clinias est.Tata de mirabilis fermium,
                                    prensionem
                                    nomen!Salvus eleates etiam gratias homo est.Demolitiones prarere in tubinga!Est emeritis brabeuta, cesaris.
                                </section>
                            </section>
                        </li>
                        <li>
                            <figure><img src="img/supportfemale.png">
                                <figcaption>Jane Doe</figcaption>
                            </figure>
                            <section>
                                <header>Born: 23rd, May, 1987</header>
                                <section>
                                    Rationes potus in ferox lentia!Decors crescere, tanquam albus amor.Experimentum cito ducunt ad neuter lanista.Aonides grandis clinias est.Tata de mirabilis fermium,
                                    prensionem
                                    nomen!Salvus eleates etiam gratias homo est.Demolitiones prarere in tubinga!Est emeritis brabeuta, cesaris.
                                </section>
                                <footer>
                                    Footer Here
                                </footer>
                            </section>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-6"></div>
            </div>
            <hr/>
        </section>
        <section id="tables">
            <h3>Tables</h3>
            <table class="table-success">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Company</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Welch, Mercedes Z.</td>
                    <td>eget.magna@scelerisquenequeNullam.edu</td>
                    <td>Ap #293-399 Faucibus Road</td>
                    <td>Rutrum Eu Ultrices Company</td>
                </tr>
                <tr>
                    <td>Miller, Nomlanga L.</td>
                    <td>imperdiet@nisidictumaugue.edu</td>
                    <td>Ap #666-3154 Molestie Street</td>
                    <td>Mauris Limited</td>
                </tr>
                <tr>
                    <td>Decker, Dacey P.</td>
                    <td>nisl@odiovel.org</td>
                    <td>P.O. Box 257, 7847 Elit. Ave</td>
                    <td>Nullam Nisl Foundation</td>
                </tr>
                <tr>
                    <td>Albert, Melodie A.</td>
                    <td>magnis@etrutrum.net</td>
                    <td>984 In, Street</td>
                    <td>Vestibulum Ante Associates</td>
                </tr>
                <tr>
                    <td>Brown, Rajah Y.</td>
                    <td>odio.Aliquam@urnaconvallis.ca</td>
                    <td>528-4562 Morbi Avenue</td>
                    <td>Neque Sed LLC</td>
                </tr>
                <tr>
                    <td>Montgomery, Athena W.</td>
                    <td>eu.ultrices@lacusvarius.org</td>
                    <td>Ap #797-9238 Ante. St.</td>
                    <td>Magna PC</td>
                </tr>
                <tr>
                    <td>Livingston, Carlos E.</td>
                    <td>Nunc.commodo@Donecfelis.net</td>
                    <td>Ap #152-1406 Nec, Road</td>
                    <td>Luctus Et Corporation</td>
                </tr>
                <tr>
                    <td>Rivera, Cassady G.</td>
                    <td>Nunc.mauris.elit@diamvel.com</td>
                    <td>260-4651 Eu Ave</td>
                    <td>Ipsum Suspendisse Institute</td>
                </tr>
                <tr>
                    <td>Gonzalez, Mechelle F.</td>
                    <td>Nullam.vitae.diam@milorem.edu</td>
                    <td>Ap #560-6633 Nullam Street</td>
                    <td>Blandit Ltd</td>
                </tr>
                <tr>
                    <td>Vargas, Yoshi Y.</td>
                    <td>at@ultrices.com</td>
                    <td>8984 Diam. Road</td>
                    <td>Tellus Imperdiet Non Corp.</td>
                </tr>
                </tbody>
            </table>
            <hr/>
            <table class="striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Company</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Welch, Mercedes Z.</td>
                    <td>eget.magna@scelerisquenequeNullam.edu</td>
                    <td>Ap #293-399 Faucibus Road</td>
                    <td>Rutrum Eu Ultrices Company</td>
                </tr>
                <tr>
                    <td>Miller, Nomlanga L.</td>
                    <td>imperdiet@nisidictumaugue.edu</td>
                    <td>Ap #666-3154 Molestie Street</td>
                    <td>Mauris Limited</td>
                </tr>
                <tr>
                    <td>Decker, Dacey P.</td>
                    <td>nisl@odiovel.org</td>
                    <td>P.O. Box 257, 7847 Elit. Ave</td>
                    <td>Nullam Nisl Foundation</td>
                </tr>
                <tr>
                    <td>Albert, Melodie A.</td>
                    <td>magnis@etrutrum.net</td>
                    <td>984 In, Street</td>
                    <td>Vestibulum Ante Associates</td>
                </tr>
                <tr>
                    <td>Brown, Rajah Y.</td>
                    <td>odio.Aliquam@urnaconvallis.ca</td>
                    <td>528-4562 Morbi Avenue</td>
                    <td>Neque Sed LLC</td>
                </tr>
                <tr>
                    <td>Montgomery, Athena W.</td>
                    <td>eu.ultrices@lacusvarius.org</td>
                    <td>Ap #797-9238 Ante. St.</td>
                    <td>Magna PC</td>
                </tr>
                <tr>
                    <td>Livingston, Carlos E.</td>
                    <td>Nunc.commodo@Donecfelis.net</td>
                    <td>Ap #152-1406 Nec, Road</td>
                    <td>Luctus Et Corporation</td>
                </tr>
                <tr>
                    <td>Rivera, Cassady G.</td>
                    <td>Nunc.mauris.elit@diamvel.com</td>
                    <td>260-4651 Eu Ave</td>
                    <td>Ipsum Suspendisse Institute</td>
                </tr>
                <tr>
                    <td>Gonzalez, Mechelle F.</td>
                    <td>Nullam.vitae.diam@milorem.edu</td>
                    <td>Ap #560-6633 Nullam Street</td>
                    <td>Blandit Ltd</td>
                </tr>
                <tr>
                    <td>Vargas, Yoshi Y.</td>
                    <td>at@ultrices.com</td>
                    <td>8984 Diam. Road</td>
                    <td>Tellus Imperdiet Non Corp.</td>
                </tr>
                </tbody>
            </table>
            <hr/>
            <table class="bordered">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Company</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Welch, Mercedes Z.</td>
                    <td>eget.magna@scelerisquenequeNullam.edu</td>
                    <td>Ap #293-399 Faucibus Road</td>
                    <td>Rutrum Eu Ultrices Company</td>
                </tr>
                <tr>
                    <td>Miller, Nomlanga L.</td>
                    <td>imperdiet@nisidictumaugue.edu</td>
                    <td>Ap #666-3154 Molestie Street</td>
                    <td>Mauris Limited</td>
                </tr>
                <tr>
                    <td>Decker, Dacey P.</td>
                    <td>nisl@odiovel.org</td>
                    <td>P.O. Box 257, 7847 Elit. Ave</td>
                    <td>Nullam Nisl Foundation</td>
                </tr>
                <tr>
                    <td>Albert, Melodie A.</td>
                    <td>magnis@etrutrum.net</td>
                    <td>984 In, Street</td>
                    <td>Vestibulum Ante Associates</td>
                </tr>
                <tr>
                    <td>Brown, Rajah Y.</td>
                    <td>odio.Aliquam@urnaconvallis.ca</td>
                    <td>528-4562 Morbi Avenue</td>
                    <td>Neque Sed LLC</td>
                </tr>
                <tr>
                    <td>Montgomery, Athena W.</td>
                    <td>eu.ultrices@lacusvarius.org</td>
                    <td>Ap #797-9238 Ante. St.</td>
                    <td>Magna PC</td>
                </tr>
                <tr>
                    <td>Livingston, Carlos E.</td>
                    <td>Nunc.commodo@Donecfelis.net</td>
                    <td>Ap #152-1406 Nec, Road</td>
                    <td>Luctus Et Corporation</td>
                </tr>
                <tr>
                    <td>Rivera, Cassady G.</td>
                    <td>Nunc.mauris.elit@diamvel.com</td>
                    <td>260-4651 Eu Ave</td>
                    <td>Ipsum Suspendisse Institute</td>
                </tr>
                <tr>
                    <td>Gonzalez, Mechelle F.</td>
                    <td>Nullam.vitae.diam@milorem.edu</td>
                    <td>Ap #560-6633 Nullam Street</td>
                    <td>Blandit Ltd</td>
                </tr>
                <tr>
                    <td>Vargas, Yoshi Y.</td>
                    <td>at@ultrices.com</td>
                    <td>8984 Diam. Road</td>
                    <td>Tellus Imperdiet Non Corp.</td>
                </tr>
                </tbody>
            </table>
            <hr/>
            <table class="hover striped bordered table-info">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Company</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Welch, Mercedes Z.</td>
                    <td>eget.magna@scelerisquenequeNullam.edu</td>
                    <td>Ap #293-399 Faucibus Road</td>
                    <td>Rutrum Eu Ultrices Company</td>
                </tr>
                <tr>
                    <td>Miller, Nomlanga L.</td>
                    <td>imperdiet@nisidictumaugue.edu</td>
                    <td>Ap #666-3154 Molestie Street</td>
                    <td>Mauris Limited</td>
                </tr>
                <tr>
                    <td>Decker, Dacey P.</td>
                    <td>nisl@odiovel.org</td>
                    <td>P.O. Box 257, 7847 Elit. Ave</td>
                    <td>Nullam Nisl Foundation</td>
                </tr>
                <tr>
                    <td>Albert, Melodie A.</td>
                    <td>magnis@etrutrum.net</td>
                    <td>984 In, Street</td>
                    <td>Vestibulum Ante Associates</td>
                </tr>
                <tr>
                    <td>Brown, Rajah Y.</td>
                    <td>odio.Aliquam@urnaconvallis.ca</td>
                    <td>528-4562 Morbi Avenue</td>
                    <td>Neque Sed LLC</td>
                </tr>
                <tr>
                    <td>Montgomery, Athena W.</td>
                    <td>eu.ultrices@lacusvarius.org</td>
                    <td>Ap #797-9238 Ante. St.</td>
                    <td>Magna PC</td>
                </tr>
                <tr>
                    <td>Livingston, Carlos E.</td>
                    <td>Nunc.commodo@Donecfelis.net</td>
                    <td>Ap #152-1406 Nec, Road</td>
                    <td>Luctus Et Corporation</td>
                </tr>
                <tr>
                    <td>Rivera, Cassady G.</td>
                    <td>Nunc.mauris.elit@diamvel.com</td>
                    <td>260-4651 Eu Ave</td>
                    <td>Ipsum Suspendisse Institute</td>
                </tr>
                <tr>
                    <td>Gonzalez, Mechelle F.</td>
                    <td>Nullam.vitae.diam@milorem.edu</td>
                    <td>Ap #560-6633 Nullam Street</td>
                    <td>Blandit Ltd</td>
                </tr>
                <tr>
                    <td>Vargas, Yoshi Y.</td>
                    <td>at@ultrices.com</td>
                    <td>8984 Diam. Road</td>
                    <td>Tellus Imperdiet Non Corp.</td>
                </tr>
                </tbody>
            </table>
            <hr/>
            <table class="bordered-rows table-success">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Company</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Welch, Mercedes Z.</td>
                    <td>eget.magna@scelerisquenequeNullam.edu</td>
                    <td>Ap #293-399 Faucibus Road</td>
                    <td>Rutrum Eu Ultrices Company</td>
                </tr>
                <tr>
                    <td>Miller, Nomlanga L.</td>
                    <td>imperdiet@nisidictumaugue.edu</td>
                    <td>Ap #666-3154 Molestie Street</td>
                    <td>Mauris Limited</td>
                </tr>
                <tr>
                    <td>Decker, Dacey P.</td>
                    <td>nisl@odiovel.org</td>
                    <td>P.O. Box 257, 7847 Elit. Ave</td>
                    <td>Nullam Nisl Foundation</td>
                </tr>
                <tr>
                    <td>Albert, Melodie A.</td>
                    <td>magnis@etrutrum.net</td>
                    <td>984 In, Street</td>
                    <td>Vestibulum Ante Associates</td>
                </tr>
                <tr>
                    <td>Brown, Rajah Y.</td>
                    <td>odio.Aliquam@urnaconvallis.ca</td>
                    <td>528-4562 Morbi Avenue</td>
                    <td>Neque Sed LLC</td>
                </tr>
                <tr>
                    <td>Montgomery, Athena W.</td>
                    <td>eu.ultrices@lacusvarius.org</td>
                    <td>Ap #797-9238 Ante. St.</td>
                    <td>Magna PC</td>
                </tr>
                <tr>
                    <td>Livingston, Carlos E.</td>
                    <td>Nunc.commodo@Donecfelis.net</td>
                    <td>Ap #152-1406 Nec, Road</td>
                    <td>Luctus Et Corporation</td>
                </tr>
                <tr>
                    <td>Rivera, Cassady G.</td>
                    <td>Nunc.mauris.elit@diamvel.com</td>
                    <td>260-4651 Eu Ave</td>
                    <td>Ipsum Suspendisse Institute</td>
                </tr>
                <tr>
                    <td>Gonzalez, Mechelle F.</td>
                    <td>Nullam.vitae.diam@milorem.edu</td>
                    <td>Ap #560-6633 Nullam Street</td>
                    <td>Blandit Ltd</td>
                </tr>
                <tr>
                    <td>Vargas, Yoshi Y.</td>
                    <td>at@ultrices.com</td>
                    <td>8984 Diam. Road</td>
                    <td>Tellus Imperdiet Non Corp.</td>
                </tr>
                </tbody>
            </table>
            <hr/>
            <table>
                <tbody>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Company</th>
                </tr>
                <tr class="success">
                    <td>Welch, Mercedes Z.</td>
                    <td>eget.magna@scelerisquenequeNullam.edu</td>
                    <td>Ap #293-399 Faucibus Road</td>
                    <td>Rutrum Eu Ultrices Company</td>
                </tr>
                <tr class="info">
                    <td>Miller, Nomlanga L.</td>
                    <td>imperdiet@nisidictumaugue.edu</td>
                    <td>Ap #666-3154 Molestie Street</td>
                    <td>Mauris Limited</td>
                </tr>
                <tr class="warning">
                    <td>Decker, Dacey P.</td>
                    <td>nisl@odiovel.org</td>
                    <td>P.O. Box 257, 7847 Elit. Ave</td>
                    <td>Nullam Nisl Foundation</td>
                </tr>
                <tr class="danger">
                    <td>Albert, Melodie A.</td>
                    <td>magnis@etrutrum.net</td>
                    <td>984 In, Street</td>
                    <td>Vestibulum Ante Associates</td>
                </tr>
                <tr class="primary">
                    <td>Brown, Rajah Y.</td>
                    <td>odio.Aliquam@urnaconvallis.ca</td>
                    <td>528-4562 Morbi Avenue</td>
                    <td>Neque Sed LLC</td>
                </tr>
                <tr>
                    <td>Montgomery, Athena W.</td>
                    <td>eu.ultrices@lacusvarius.org</td>
                    <td>Ap #797-9238 Ante. St.</td>
                    <td>Magna PC</td>
                </tr>
                <tr>
                    <td>Livingston, Carlos E.</td>
                    <td>Nunc.commodo@Donecfelis.net</td>
                    <td>Ap #152-1406 Nec, Road</td>
                    <td>Luctus Et Corporation</td>
                </tr>
                <tr>
                    <td>Rivera, Cassady G.</td>
                    <td>Nunc.mauris.elit@diamvel.com</td>
                    <td>260-4651 Eu Ave</td>
                    <td>Ipsum Suspendisse Institute</td>
                </tr>
                <tr>
                    <td>Gonzalez, Mechelle F.</td>
                    <td>Nullam.vitae.diam@milorem.edu</td>
                    <td>Ap #560-6633 Nullam Street</td>
                    <td>Blandit Ltd</td>
                </tr>
                <tr>
                    <td>Vargas, Yoshi Y.</td>
                    <td>at@ultrices.com</td>
                    <td>8984 Diam. Road</td>
                    <td>Tellus Imperdiet Non Corp.</td>
                </tr>
                </tbody>
            </table>
            <hr/>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <table class="tiny">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Company</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Welch, Mercedes Z.</td>
                            <td>eget.magna@scelerisquenequeNullam.edu</td>
                            <td>Ap #293-399 Faucibus Road</td>
                            <td>Rutrum Eu Ultrices Company</td>
                        </tr>
                        <tr>
                            <td>Miller, Nomlanga L.</td>
                            <td>imperdiet@nisidictumaugue.edu</td>
                            <td>Ap #666-3154 Molestie Street</td>
                            <td>Mauris Limited</td>
                        </tr>
                        <tr>
                            <td>Decker, Dacey P.</td>
                            <td>nisl@odiovel.org</td>
                            <td>P.O. Box 257, 7847 Elit. Ave</td>
                            <td>Nullam Nisl Foundation</td>
                        </tr>
                        <tr>
                            <td>Albert, Melodie A.</td>
                            <td>magnis@etrutrum.net</td>
                            <td>984 In, Street</td>
                            <td>Vestibulum Ante Associates</td>
                        </tr>
                        <tr>
                            <td>Brown, Rajah Y.</td>
                            <td>odio.Aliquam@urnaconvallis.ca</td>
                            <td>528-4562 Morbi Avenue</td>
                            <td>Neque Sed LLC</td>
                        </tr>
                        <tr>
                            <td>Montgomery, Athena W.</td>
                            <td>eu.ultrices@lacusvarius.org</td>
                            <td>Ap #797-9238 Ante. St.</td>
                            <td>Magna PC</td>
                        </tr>
                        <tr>
                            <td>Livingston, Carlos E.</td>
                            <td>Nunc.commodo@Donecfelis.net</td>
                            <td>Ap #152-1406 Nec, Road</td>
                            <td>Luctus Et Corporation</td>
                        </tr>
                        <tr>
                            <td>Rivera, Cassady G.</td>
                            <td>Nunc.mauris.elit@diamvel.com</td>
                            <td>260-4651 Eu Ave</td>
                            <td>Ipsum Suspendisse Institute</td>
                        </tr>
                        <tr>
                            <td>Gonzalez, Mechelle F.</td>
                            <td>Nullam.vitae.diam@milorem.edu</td>
                            <td>Ap #560-6633 Nullam Street</td>
                            <td>Blandit Ltd</td>
                        </tr>
                        <tr>
                            <td>Vargas, Yoshi Y.</td>
                            <td>at@ultrices.com</td>
                            <td>8984 Diam. Road</td>
                            <td>Tellus Imperdiet Non Corp.</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <table class="small">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Company</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Welch, Mercedes Z.</td>
                            <td>eget.magna@scelerisquenequeNullam.edu</td>
                            <td>Ap #293-399 Faucibus Road</td>
                            <td>Rutrum Eu Ultrices Company</td>
                        </tr>
                        <tr>
                            <td>Miller, Nomlanga L.</td>
                            <td>imperdiet@nisidictumaugue.edu</td>
                            <td>Ap #666-3154 Molestie Street</td>
                            <td>Mauris Limited</td>
                        </tr>
                        <tr>
                            <td>Decker, Dacey P.</td>
                            <td>nisl@odiovel.org</td>
                            <td>P.O. Box 257, 7847 Elit. Ave</td>
                            <td>Nullam Nisl Foundation</td>
                        </tr>
                        <tr>
                            <td>Albert, Melodie A.</td>
                            <td>magnis@etrutrum.net</td>
                            <td>984 In, Street</td>
                            <td>Vestibulum Ante Associates</td>
                        </tr>
                        <tr>
                            <td>Brown, Rajah Y.</td>
                            <td>odio.Aliquam@urnaconvallis.ca</td>
                            <td>528-4562 Morbi Avenue</td>
                            <td>Neque Sed LLC</td>
                        </tr>
                        <tr>
                            <td>Montgomery, Athena W.</td>
                            <td>eu.ultrices@lacusvarius.org</td>
                            <td>Ap #797-9238 Ante. St.</td>
                            <td>Magna PC</td>
                        </tr>
                        <tr>
                            <td>Livingston, Carlos E.</td>
                            <td>Nunc.commodo@Donecfelis.net</td>
                            <td>Ap #152-1406 Nec, Road</td>
                            <td>Luctus Et Corporation</td>
                        </tr>
                        <tr>
                            <td>Rivera, Cassady G.</td>
                            <td>Nunc.mauris.elit@diamvel.com</td>
                            <td>260-4651 Eu Ave</td>
                            <td>Ipsum Suspendisse Institute</td>
                        </tr>
                        <tr>
                            <td>Gonzalez, Mechelle F.</td>
                            <td>Nullam.vitae.diam@milorem.edu</td>
                            <td>Ap #560-6633 Nullam Street</td>
                            <td>Blandit Ltd</td>
                        </tr>
                        <tr>
                            <td>Vargas, Yoshi Y.</td>
                            <td>at@ultrices.com</td>
                            <td>8984 Diam. Road</td>
                            <td>Tellus Imperdiet Non Corp.</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12">
                    <table>
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Company</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Welch, Mercedes Z.</td>
                            <td>eget.magna@scelerisquenequeNullam.edu</td>
                            <td>Ap #293-399 Faucibus Road</td>
                            <td>Rutrum Eu Ultrices Company</td>
                        </tr>
                        <tr>
                            <td>Miller, Nomlanga L.</td>
                            <td>imperdiet@nisidictumaugue.edu</td>
                            <td>Ap #666-3154 Molestie Street</td>
                            <td>Mauris Limited</td>
                        </tr>
                        <tr>
                            <td>Decker, Dacey P.</td>
                            <td>nisl@odiovel.org</td>
                            <td>P.O. Box 257, 7847 Elit. Ave</td>
                            <td>Nullam Nisl Foundation</td>
                        </tr>
                        <tr>
                            <td>Albert, Melodie A.</td>
                            <td>magnis@etrutrum.net</td>
                            <td>984 In, Street</td>
                            <td>Vestibulum Ante Associates</td>
                        </tr>
                        <tr>
                            <td>Brown, Rajah Y.</td>
                            <td>odio.Aliquam@urnaconvallis.ca</td>
                            <td>528-4562 Morbi Avenue</td>
                            <td>Neque Sed LLC</td>
                        </tr>
                        <tr>
                            <td>Montgomery, Athena W.</td>
                            <td>eu.ultrices@lacusvarius.org</td>
                            <td>Ap #797-9238 Ante. St.</td>
                            <td>Magna PC</td>
                        </tr>
                        <tr>
                            <td>Livingston, Carlos E.</td>
                            <td>Nunc.commodo@Donecfelis.net</td>
                            <td>Ap #152-1406 Nec, Road</td>
                            <td>Luctus Et Corporation</td>
                        </tr>
                        <tr>
                            <td>Rivera, Cassady G.</td>
                            <td>Nunc.mauris.elit@diamvel.com</td>
                            <td>260-4651 Eu Ave</td>
                            <td>Ipsum Suspendisse Institute</td>
                        </tr>
                        <tr>
                            <td>Gonzalez, Mechelle F.</td>
                            <td>Nullam.vitae.diam@milorem.edu</td>
                            <td>Ap #560-6633 Nullam Street</td>
                            <td>Blandit Ltd</td>
                        </tr>
                        <tr>
                            <td>Vargas, Yoshi Y.</td>
                            <td>at@ultrices.com</td>
                            <td>8984 Diam. Road</td>
                            <td>Tellus Imperdiet Non Corp.</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12">
                    <table class="large">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Company</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Welch, Mercedes Z.</td>
                            <td>eget.magna@scelerisquenequeNullam.edu</td>
                            <td>Ap #293-399 Faucibus Road</td>
                            <td>Rutrum Eu Ultrices Company</td>
                        </tr>
                        <tr>
                            <td>Miller, Nomlanga L.</td>
                            <td>imperdiet@nisidictumaugue.edu</td>
                            <td>Ap #666-3154 Molestie Street</td>
                            <td>Mauris Limited</td>
                        </tr>
                        <tr>
                            <td>Decker, Dacey P.</td>
                            <td>nisl@odiovel.org</td>
                            <td>P.O. Box 257, 7847 Elit. Ave</td>
                            <td>Nullam Nisl Foundation</td>
                        </tr>
                        <tr>
                            <td>Albert, Melodie A.</td>
                            <td>magnis@etrutrum.net</td>
                            <td>984 In, Street</td>
                            <td>Vestibulum Ante Associates</td>
                        </tr>
                        <tr>
                            <td>Brown, Rajah Y.</td>
                            <td>odio.Aliquam@urnaconvallis.ca</td>
                            <td>528-4562 Morbi Avenue</td>
                            <td>Neque Sed LLC</td>
                        </tr>
                        <tr>
                            <td>Montgomery, Athena W.</td>
                            <td>eu.ultrices@lacusvarius.org</td>
                            <td>Ap #797-9238 Ante. St.</td>
                            <td>Magna PC</td>
                        </tr>
                        <tr>
                            <td>Livingston, Carlos E.</td>
                            <td>Nunc.commodo@Donecfelis.net</td>
                            <td>Ap #152-1406 Nec, Road</td>
                            <td>Luctus Et Corporation</td>
                        </tr>
                        <tr>
                            <td>Rivera, Cassady G.</td>
                            <td>Nunc.mauris.elit@diamvel.com</td>
                            <td>260-4651 Eu Ave</td>
                            <td>Ipsum Suspendisse Institute</td>
                        </tr>
                        <tr>
                            <td>Gonzalez, Mechelle F.</td>
                            <td>Nullam.vitae.diam@milorem.edu</td>
                            <td>Ap #560-6633 Nullam Street</td>
                            <td>Blandit Ltd</td>
                        </tr>
                        <tr>
                            <td>Vargas, Yoshi Y.</td>
                            <td>at@ultrices.com</td>
                            <td>8984 Diam. Road</td>
                            <td>Tellus Imperdiet Non Corp.</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12">
                    <code>.xlarge .table-info</code>
                    <table class="xlarge table-info">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Company</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Welch, Mercedes Z.</td>
                            <td>eget.magna@scelerisquenequeNullam.edu</td>
                            <td>Ap #293-399 Faucibus Road</td>
                            <td>Rutrum Eu Ultrices Company</td>
                        </tr>
                        <tr>
                            <td>Miller, Nomlanga L.</td>
                            <td>imperdiet@nisidictumaugue.edu</td>
                            <td>Ap #666-3154 Molestie Street</td>
                            <td>Mauris Limited</td>
                        </tr>
                        <tr>
                            <td>Decker, Dacey P.</td>
                            <td>nisl@odiovel.org</td>
                            <td>P.O. Box 257, 7847 Elit. Ave</td>
                            <td>Nullam Nisl Foundation</td>
                        </tr>
                        <tr>
                            <td>Albert, Melodie A.</td>
                            <td>magnis@etrutrum.net</td>
                            <td>984 In, Street</td>
                            <td>Vestibulum Ante Associates</td>
                        </tr>
                        <tr>
                            <td>Brown, Rajah Y.</td>
                            <td>odio.Aliquam@urnaconvallis.ca</td>
                            <td>528-4562 Morbi Avenue</td>
                            <td>Neque Sed LLC</td>
                        </tr>
                        <tr>
                            <td>Montgomery, Athena W.</td>
                            <td>eu.ultrices@lacusvarius.org</td>
                            <td>Ap #797-9238 Ante. St.</td>
                            <td>Magna PC</td>
                        </tr>
                        <tr>
                            <td>Livingston, Carlos E.</td>
                            <td>Nunc.commodo@Donecfelis.net</td>
                            <td>Ap #152-1406 Nec, Road</td>
                            <td>Luctus Et Corporation</td>
                        </tr>
                        <tr>
                            <td>Rivera, Cassady G.</td>
                            <td>Nunc.mauris.elit@diamvel.com</td>
                            <td>260-4651 Eu Ave</td>
                            <td>Ipsum Suspendisse Institute</td>
                        </tr>
                        <tr>
                            <td>Gonzalez, Mechelle F.</td>
                            <td>Nullam.vitae.diam@milorem.edu</td>
                            <td>Ap #560-6633 Nullam Street</td>
                            <td>Blandit Ltd</td>
                        </tr>
                        <tr>
                            <td>Vargas, Yoshi Y.</td>
                            <td>at@ultrices.com</td>
                            <td>8984 Diam. Road</td>
                            <td>Tellus Imperdiet Non Corp.</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <table>
                <tbody>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Company</th>
                </tr>
                <tr>
                    <td>Welch, Mercedes Z.</td>
                    <td>eget.magna@scelerisquenequeNullam.edu</td>
                    <td>Ap #293-399 Faucibus Road</td>
                    <td>Rutrum Eu Ultrices Company</td>
                </tr>
                <tr>
                    <td>Miller, Nomlanga L.</td>
                    <td>imperdiet@nisidictumaugue.edu</td>
                    <td>Ap #666-3154 Molestie Street</td>
                    <td>Mauris Limited</td>
                </tr>
                <tr>
                    <td>Decker, Dacey P.</td>
                    <td>nisl@odiovel.org</td>
                    <td>P.O. Box 257, 7847 Elit. Ave</td>
                    <td>Nullam Nisl Foundation</td>
                </tr>
                <tr>
                    <td>Albert, Melodie A.</td>
                    <td>magnis@etrutrum.net</td>
                    <td>984 In, Street</td>
                    <td>Vestibulum Ante Associates</td>
                </tr>
                <tr>
                    <td>Brown, Rajah Y.</td>
                    <td>odio.Aliquam@urnaconvallis.ca</td>
                    <td>528-4562 Morbi Avenue</td>
                    <td>Neque Sed LLC</td>
                </tr>
                <tr>
                    <td>Montgomery, Athena W.</td>
                    <td>eu.ultrices@lacusvarius.org</td>
                    <td>Ap #797-9238 Ante. St.</td>
                    <td>Magna PC</td>
                </tr>
                <tr>
                    <td>Livingston, Carlos E.</td>
                    <td>Nunc.commodo@Donecfelis.net</td>
                    <td>Ap #152-1406 Nec, Road</td>
                    <td>Luctus Et Corporation</td>
                </tr>
                <tr>
                    <td>Rivera, Cassady G.</td>
                    <td>Nunc.mauris.elit@diamvel.com</td>
                    <td>260-4651 Eu Ave</td>
                    <td>Ipsum Suspendisse Institute</td>
                </tr>
                <tr>
                    <td>Gonzalez, Mechelle F.</td>
                    <td>Nullam.vitae.diam@milorem.edu</td>
                    <td>Ap #560-6633 Nullam Street</td>
                    <td>Blandit Ltd</td>
                </tr>
                <tr>
                    <td>Vargas, Yoshi Y.</td>
                    <td>at@ultrices.com</td>
                    <td>8984 Diam. Road</td>
                    <td>Tellus Imperdiet Non Corp.</td>
                </tr>
                </tbody>
            </table>
        </section>
        <section id="buttons">
            <h3>Buttons</h3>
            <div class="row align-center button-sizes stretch">
                <?php $btnCol = $fullColors;
                shuffle($btnCol);
                $btnCol = array_slice($btnCol, 0, 20); ?>
                <button class="btn-success margin-bottom-small"><code>.btn-success</code></button>
                <button class="btn-primary margin-bottom-small"><code>.btn-primary</code></button>
                <button class="btn-warning margin-bottom-small"><code>.btn-warning</code></button>
                <button class="btn-info margin-bottom-small"><code>.btn-info</code></button>
                <button class="btn-default margin-bottom-small"><code>.btn-default</code></button>
                <button class="btn-danger margin-bottom-small"><code>.btn-danger</code></button>
                <button class="btn-primary disabled margin-bottom-small"><code>.btn-danger</code></button>
            </div>
            <div class="row align-center button-sizes stretch">
                <button class="btn-border-success margin-bottom-small"><code>.btn-success</code></button>
                <button class="btn-border-primary margin-bottom-small"><code>.btn-primary</code></button>
                <button class="btn-border-warning margin-bottom-small"><code>.btn-warning</code></button>
                <button class="btn-border-info margin-bottom-small"><code>.btn-info</code></button>
                <button class="btn-border-default margin-bottom-small"><code>.btn-default</code></button>
                <button class="btn-border-danger margin-bottom-small"><code>.btn-danger</code></button>
                <button class="btn-border-primary disabled margin-bottom-small"><code>.btn-danger</code></button>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                    <input type="button" value="input[type=button]" class="btn-success">
                    <div>
                        <code>input[type=button]</code>
                    </div>
                </div>
            </div>
            <div class="row align-bottom button-sizes">
                <button class="btn-tiny btn-info">Tiny</button>
                <button class="btn-small btn-success">Small</button>
                <button class="btn-medium btn-warning">Medium</button>
                <button class="btn-large btn-danger">Large</button>
                <button class="btn-xlarge btn-primary">X-Large</button>
            </div>
        </section>
        <section id="rounds">
            <h3>Round Corners</h3>
            <?php $mediums = ['small', 'medium', 'large', 'xlarge', 'circle']; ?>
            <div class="row">
                <?php foreach ($mediums as $medium) { ?>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="round-<?= $medium; ?> bg-green-dark"><p><code>.round-<?= $medium; ?></code></p></div>
                    </div>
                <?php } ?>
            </div>
        </section>
        <section id="cards">
            <h3>Cards</h3>
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-3">
                    <div class="card-blue-dark">
                        <header><h3>Card 101</h3></header>
                        <section>
                            <p>Content based card layout. <code>.card-blue-dark</code></p>
                        </section>
                        <footer>
                            Some footer
                        </footer>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3">
                    <div class="card-blue-dark">
                        <header><h3>Card 101</h3></header>
                        <section>
                            <p>Content based card layout. <code>.card-blue-dark</code></p>
                        </section>
                        <div class="button-group">
                            <a class="btn btn-success">Save</a>
                            <a class="btn btn-warning">Cancel</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3">
                    <div class="card-blue-dark">
                        <header><h3>Card 101</h3></header>
                        <section>
                            <p>Content based card layout. <code>.card-blue-dark</code></p>
                        </section>
                        <a class="btn btn-default">&plus; Load</a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3">
                    <div class="card">
                        <figure>
                            <img src="img/nairobi.jpg">
                        </figure>
                        <section>
                            <p>Image based card layout. <code>.card</code></p>
                        </section>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3">
                    <div class="card-teal-light">
                        <figure>
                            <img src="img/nairobi.jpg">
                        </figure>
                        <section>
                            <p>Image based card layout.</code>
                            </p>
                            <div>
                                <code>
                                    &lt;div class=&quot;card-teal-light&quot;&gt;<br/>
                                    &nbsp;&nbsp;&lt;figure&gt; &lt;img src=&quot;...&quot;&gt; &lt;/figure&gt;<br/>
                                    &nbsp;&nbsp;&lt;section&gt; &lt;p&gt;...&lt;/p&gt; &lt;/section&gt;<br/>
                                    &nbsp;&nbsp;&lt;footer&gt; Some footer &lt;/footer&gt;<br/>
                                    &lt;/div&gt;
                                </code>
                            </div>
                        </section>
                        <footer>
                            Some footer
                        </footer>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3">
                    <div class="card-teal-light">
                        <figure>
                            <img src="img/nairobi.jpg">
                            <figcaption>
                                Nairobi
                            </figcaption>
                        </figure>
                        <section>
                            <p>Image based card layout.</code>
                            </p>
                            <div>
                                <code>
                                    &lt;div class=&quot;card-teal-light&quot;&gt;<br/>
                                    &nbsp;&nbsp;&lt;figure&gt; &lt;img src=&quot;...&quot;&gt; &lt;/figure&gt;<br/>
                                    &nbsp;&nbsp;&lt;section&gt; &lt;p&gt;...&lt;/p&gt; &lt;/section&gt;<br/>
                                    &nbsp;&nbsp;&lt;footer&gt; Some footer &lt;/footer&gt;<br/>
                                    &lt;/div&gt;
                                </code>
                            </div>
                        </section>
                        <footer>
                            Some footer
                        </footer>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3">
                </div>
            </div>
        </section>
        <section id="colors">
            <h3>Colors</h3>
            <div class="row colors">
                <?php foreach ($realColors as $c) { ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 bg-<?= $c; ?>xx">
                        <?php foreach ($colorIntensity as $i => $col) { ?>
                            <div class="bg<?= $col ? '-' . $c . '-' . $col : '-' . $c; ?>">
                                <p><?= ucwords($c), ($col ? '-' : ''), ucwords($col); ?></p>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </section>
        <section id="borders">
            <h3>Borders</h3>
            <?php $borders = ['top', 'left', 'bottom', 'right'];
            $sizes         = ['thick', 'thin']; ?>
            <p></p>
            <div class="border border-thin border-<?= ($color = $fullColors[rand(0, (count($fullColors) - 1))]) ?>">
                <b>Border thin:</b>(<?= ucwords($color) ?>)<code>.border .border-thin .border-<?= ($color) ?></code>
                <p> Nuptia festus ausus est.Heu, ionicis tormento!Animaliss sunt turpiss de audax parma.Cadunt acceleratrix ducunt ad festus calceus.Raptus bromiums ducunt ad abactus.Heu,
                    fermium!A falsis, lacta rusticus equiso.A falsis, cursus nobilis gemna.</p>
            </div>
            <p></p>
            <div class="border border-<?= ($color = $fullColors[rand(0, (count($fullColors) - 1))]) ?>">
                <b>Border:</b>(<?= ucwords($color) ?>)<code>.border .border-<?= ($color) ?></code>
                <p> Nuptia festus ausus est.Heu, ionicis tormento!Animaliss sunt turpiss de audax parma.Cadunt acceleratrix ducunt ad festus calceus.Raptus bromiums ducunt ad abactus.Heu,
                    fermium!A falsis, lacta rusticus equiso.A falsis, cursus nobilis gemna.</p>
            </div>
            <?php foreach ($borders as $border) {
                $color = $fullColors[rand(0, (count($fullColors) - 1))];
                ?>
                <p></p>
                <div class="border-<?= $border, '-', $color ?>">
                    <b>Border <?= ucwords($border); ?>:</b>(<?= ucwords($color) ?>)<code>.border-<?= $border, '-', $color ?></code>
                    <p> Nuptia festus ausus est.Heu, ionicis tormento!Animaliss sunt turpiss de audax parma.Cadunt acceleratrix ducunt ad festus calceus.Raptus bromiums ducunt ad abactus.Heu,
                        fermium!A falsis, lacta rusticus equiso.A falsis, cursus nobilis gemna.</p>
                </div>
                <p></p>
            <?php } ?>
            <?php
            foreach ($sizes as $size) {
                $color  = $fullColors[rand(0, (count($fullColors) - 1))];
                $border = $borders[rand(0, (count($borders) - 1))];
                ?>
                <p></p>
                <div class="border-<?= $border, '-', $color ?> border-<?= $size ?>">
                    <b>Border <?= ucwords($border), ' ', ucwords($size); ?>:</b>(<?= ucwords($color) ?>) <code>.border-<?= $border, '-', $color ?> .border-<?= $size ?></code>
                    <p> Nuptia festus ausus est.Heu, ionicis tormento!Animaliss sunt turpiss de audax parma.Cadunt acceleratrix ducunt ad festus calceus.Raptus bromiums ducunt ad abactus.Heu,
                        fermium!A falsis, lacta rusticus equiso.A falsis, cursus nobilis gemna.</p>
                </div>
                <p></p>
            <?php } ?>
            <p></p>
            <div class="border border-thick border-<?= ($color = $fullColors[rand(0, (count($fullColors) - 1))]) ?> border-hover-<?= ($color2 = $fullColors[rand(0, (count($fullColors) - 1))]) ?>">
                <b>Border thin:</b>(<?= ucwords($color) ?>)<code>.border .border-hover-<?= ($color2) ?> .border-<?= ($color) ?></code>
                <p> Nuptia festus ausus est.Heu, ionicis tormento!Animaliss sunt turpiss de audax parma.Cadunt acceleratrix ducunt ad festus calceus.Raptus bromiums ducunt ad abactus.Heu,
                    fermium!A falsis, lacta rusticus equiso.A falsis, cursus nobilis gemna.</p>
            </div>
            <p></p>
            <div class="border-<?= ($border = $borders[rand(0, (count($borders) - 1))]), '-', ($color1 = $fullColors[rand(0, (count($fullColors) - 1))]) ?> border-thick  border-hover-<?= ($color =
                $fullColors[rand(0, (count($fullColors) - 1))]) ?>">
                <b>Border:</b>(<?= ucwords($color) ?>)<code>.border-<?= ($border) ?>-<?= ($color1) ?> .border-hover-<?= ($color) ?></code>
                <p> Nuptia festus ausus est.Heu, ionicis tormento!Animaliss sunt turpiss de audax parma.Cadunt acceleratrix ducunt ad festus calceus.Raptus bromiums ducunt ad abactus.Heu,
                    fermium!A falsis, lacta rusticus equiso.A falsis, cursus nobilis gemna.</p>
            </div>
            <p></p>
        </section>
        <section id="grids">
            <div class="row">
                <?php foreach (range(1, 12) as $col) {
                    echo "<div class='col-xs-1'>col-xs-1</div>";
                } ?>
            </div>
            <div class="row">
                <?php foreach (range(1, 2) as $col) {
                    echo "<div class='col-sm-6'>col-sm-6</div>";
                } ?>
            </div>
            <div class="row">
                <?php foreach (range(1, 3) as $col) {
                    echo "<div class='col-md-4'>col-md-4</div>";
                } ?>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">col-xs-12 col-sm-6 col-md-4 col-lg-3</div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">col-xs-12 col-sm-6 col-md-4 col-lg-3</div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">col-xs-12 col-sm-6 col-md-4 col-lg-3</div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">col-xs-12 col-sm-6 col-md-4 col-lg-3</div>
            </div>
        </section>
        <section id="text">
            <header><h1>Text</h1></header>
            <article id="text__headings">
                <header>
                    <h1>Headings</h1>
                </header>
                <div>
                    <h1>Heading 1</h1>
                    <h2>Heading 2</h2>
                    <h3>Heading 3</h3>
                    <h4>Heading 4</h4>
                    <h5>Heading 5</h5>
                    <h6>Heading 6</h6>
                </div>
                <footer><p><a href="#top">[Top]</a></p></footer>
            </article>
            <article id="text__paragraphs">
                <header><h1>Paragraphs</h1></header>
                <div>
                    <p>A paragraph (from the Greek paragraphos, “to write beside” or “written beside”) is a self-contained unit of a discourse in writing dealing with a particular point or idea. A
                        paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize
                        longer prose.</p>
                </div>
                <footer><p><a href="#top">[Top]</a></p></footer>
            </article>
            <article id="text__blockquotes">
                <header><h1>Blockquotes</h1></header>
                <div>
                    <blockquote>
                        <p>A block quotation (also known as a long quotation or extract) is a quotation in a written document, that is set off from the main text as a paragraph, or block of text.</p>
                        <p>It is typically distinguished visually using indentation and a different typeface or smaller size quotation. It may or may not include a citation, usually placed at the
                            bottom.</p>
                        <cite><a href="#!">Said no one, ever.</a></cite>
                    </blockquote>
                </div>
                <footer><p><a href="#top">[Top]</a></p></footer>
            </article>
            <article id="text__lists">
                <header><h1>Lists</h1></header>
                <div>
                    <h3>Definition list</h3>
                    <dl>
                        <dt>Definition List Title</dt>
                        <dd>This is a definition list division.</dd>
                    </dl>
                    <h3>Ordered List</h3>
                    <ol>
                        <li>List Item 1</li>
                        <li>List Item 2</li>
                        <li>List Item 3</li>
                    </ol>
                    <h3>Unordered List</h3>
                    <ul>
                        <li>List Item 1</li>
                        <li>List Item 2</li>
                        <li>List Item 3</li>
                    </ul>
                </div>
                <footer><p><a href="#top">[Top]</a></p></footer>
            </article>
            <article id="text__hr">
                <header><h1>Horizontal rules</h1></header>
                <div>
                    <hr>
                </div>
                <footer><p><a href="#top">[Top]</a></p></footer>
            </article>
            <article id="text__tables">
                <header><h1>Tabular data</h1></header>
                <table>
                    <caption>Table Caption</caption>
                    <thead>
                    <tr>
                        <th>Table Heading 1</th>
                        <th>Table Heading 2</th>
                        <th>Table Heading 3</th>
                        <th>Table Heading 4</th>
                        <th>Table Heading 5</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Table Footer 1</th>
                        <th>Table Footer 2</th>
                        <th>Table Footer 3</th>
                        <th>Table Footer 4</th>
                        <th>Table Footer 5</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <tr>
                        <td>Table Cell 1</td>
                        <td>Table Cell 2</td>
                        <td>Table Cell 3</td>
                        <td>Table Cell 4</td>
                        <td>Table Cell 5</td>
                    </tr>
                    <tr>
                        <td>Table Cell 1</td>
                        <td>Table Cell 2</td>
                        <td>Table Cell 3</td>
                        <td>Table Cell 4</td>
                        <td>Table Cell 5</td>
                    </tr>
                    <tr>
                        <td>Table Cell 1</td>
                        <td>Table Cell 2</td>
                        <td>Table Cell 3</td>
                        <td>Table Cell 4</td>
                        <td>Table Cell 5</td>
                    </tr>
                    <tr>
                        <td>Table Cell 1</td>
                        <td>Table Cell 2</td>
                        <td>Table Cell 3</td>
                        <td>Table Cell 4</td>
                        <td>Table Cell 5</td>
                    </tr>
                    </tbody>
                </table>
                <footer><p><a href="#top">[Top]</a></p></footer>
            </article>
            <article id="text__code">
                <header><h1>Code</h1></header>
                <div>
                    <p><strong>Keyboard input:</strong> <kbd>Cmd</kbd></p>
                    <p><strong>Inline code:</strong> <code>&lt;div&gt;code&lt;/div&gt;</code></p>
                    <p><strong>Sample output:</strong> <samp>This is sample output from a computer program.</samp></p>
                    <h2>Pre-formatted text</h2>
                    <pre>P R E F O R M A T T E D T E X T
  ! " # $ % &amp; ' ( ) * + , - . /
  0 1 2 3 4 5 6 7 8 9 : ; &lt; = &gt; ?
  @ A B C D E F G H I J K L M N O
  P Q R S T U V W X Y Z [ \ ] ^ _
  ` a b c d e f g h i j k l m n o
  p q r s t u v w x y z { | } ~ </pre>
                </div>
                <footer><p><a href="#top">[Top]</a></p></footer>
            </article>
            <article id="text__inline">
                <header><h1>Inline elements</h1></header>
                <div>
                    <p><a href="#!">This is a text link</a>.</p>
                    <p><strong>Strong is used to indicate strong importance.</strong></p>
                    <p><em>This text has added emphasis.</em></p>
                    <p>The <b>b element</b> is stylistically different text from normal text, without any special importance.</p>
                    <p>The <i>i element</i> is text that is offset from the normal text.</p>
                    <p>The <u>u element</u> is text with an unarticulated, though explicitly rendered, non-textual annotation.</p>
                    <p>
                        <del>This text is deleted</del>
                        and
                        <ins>This text is inserted</ins>
                        .
                    </p>
                    <p><s>This text has a strikethrough</s>.</p>
                    <p>Superscript<sup>®</sup>.</p>
                    <p>Subscript for things like H<sub>2</sub>O.</p>
                    <p>
                        <small>This small text is small for for fine print, etc.</small>
                    </p>
                    <p>Abbreviation: <abbr title="HyperText Markup Language">HTML</abbr></p>
                    <p><q cite="https://developer.mozilla.org/en-US/docs/HTML/Element/q">This text is a short inline quotation.</q></p>
                    <p><cite>This is a citation.</cite></p>
                    <p>The <dfn>dfn element</dfn> indicates a definition.</p>
                    <p>The
                        <mark>mark element</mark>
                        indicates a highlight.
                    </p>
                    <p>The <var>variable element</var>, such as <var>x</var> = <var>y</var>.</p>
                    <p>The time element:
                        <time datetime="2013-04-06T12:32+00:00">2 weeks ago</time>
                    </p>
                </div>
                <footer><p><a href="#top">[Top]</a></p></footer>
            </article>
        </section>

        <section id="embedded">
            <header><h1>Embedded content</h1></header>
            <article id="embedded__images">
                <header><h2>Images</h2></header>
                <div>
                    <h3>No <code>&lt;figure&gt;</code> element</h3>
                    <p><img src="http://placekitten.com/480/480" alt="Image alt text"></p>
                    <h3>Wrapped in a <code>&lt;figure&gt;</code> element, no <code>&lt;figcaption&gt;</code></h3>
                    <figure><img src="http://placekitten.com/420/420" alt="Image alt text"></figure>
                    <h3>Wrapped in a <code>&lt;figure&gt;</code> element, with a <code>&lt;figcaption&gt;</code></h3>
                    <figure>
                        <img src="http://placekitten.com/420/420" alt="Image alt text">
                        <figcaption>Here is a caption for this image.</figcaption>
                    </figure>
                </div>
                <footer><p><a href="#top">[Top]</a></p></footer>
            </article>
            <article id="embedded__audio">
                <header><h2>Audio</h2></header>
                <div>
                    <audio controls="">audio</audio>
                </div>
                <footer><p><a href="#top">[Top]</a></p></footer>
            </article>
            <article id="embedded__video">
                <header><h2>Video</h2></header>
                <div>
                    <video controls="">video</video>
                </div>
                <footer><p><a href="#top">[Top]</a></p></footer>
            </article>
            <article id="embedded__canvas">
                <header><h2>Canvas</h2></header>
                <div>
                    <canvas>canvas</canvas>
                </div>
                <footer><p><a href="#top">[Top]</a></p></footer>
            </article>
            <article id="embedded__meter">
                <header><h2>Meter</h2></header>
                <div>
                    <meter value="2" min="0" max="10">2 out of 10</meter>
                </div>
                <footer><p><a href="#top">[Top]</a></p></footer>
            </article>
            <article id="embedded__progress">
                <header><h2>Progress</h2></header>
                <div>
                    <progress>progress</progress>
                </div>
                <footer><p><a href="#top">[Top]</a></p></footer>
            </article>
            <article id="embedded__svg">
                <header><h2>Inline SVG</h2></header>
                <div>
                    <svg width="100px" height="100px">
                        <circle cx="100" cy="100" r="100" fill="#1fa3ec"></circle>
                    </svg>
                </div>
                <footer><p><a href="#top">[Top]</a></p></footer>
            </article>
            <article id="embedded__iframe">
                <header><h2>IFrame</h2></header>
                <div>
                    <iframe src="index.php" height="300"></iframe>
                </div>
                <footer><p><a href="#top">[Top]</a></p></footer>
            </article>
        </section>
        <section id="forms">
            <header><h1>Form elements</h1></header>
            <form>
                <fieldset id="forms__input">
                    <legend>Input fields</legend>
                    <p>
                        <label for="input__text">Text Input</label>
                        <input id="input__text" type="text" placeholder="Text Input">
                    </p>
                    <p>
                        <label for="input__password">Password</label>
                        <input id="input__password" type="password" placeholder="Type your Password">
                    </p>
                    <p>
                        <label for="input__webaddress">Web Address</label>
                        <input id="input__webaddress" type="url" placeholder="http://yoursite.com">
                    </p>
                    <p>
                        <label for="input__emailaddress">Email Address</label>
                        <input id="input__emailaddress" type="email" placeholder="name@email.com">
                    </p>
                    <p>
                        <label for="input__phone">Phone Number</label>
                        <input id="input__phone" type="tel" placeholder="(999) 999-9999">
                    </p>
                    <p>
                        <label for="input__search">Search</label>
                        <input id="input__search" type="search" placeholder="Enter Search Term">
                    </p>
                    <p>
                        <label for="input__text2">Number Input</label>
                        <input id="input__text2" type="number" placeholder="Enter a Number">
                    </p>
                    <p>
                        <label for="input__text3" class="error">Error</label>
                        <input id="input__text3" class="is-error" type="text" placeholder="Text Input">
                    </p>
                    <p>
                        <label for="input__text4" class="valid">Valid</label>
                        <input id="input__text4" class="is-valid" type="text" placeholder="Text Input">
                    </p>
                </fieldset>
                <p><a href="#top">[Top]</a></p>
                <fieldset id="forms__select">
                    <legend>Select menus</legend>
                    <p>
                        <label for="select">Select</label>
                        <select id="select">
                            <optgroup label="Option Group">
                                <option>Option One</option>
                                <option>Option Two</option>
                                <option>Option Three</option>
                            </optgroup>
                        </select>
                    </p>
                </fieldset>
                <p><a href="#top">[Top]</a></p>
                <fieldset id="forms__checkbox">
                    <legend>Checkboxes</legend>
                    <ul class="list list--bare">
                        <li><label for="checkbox1"><input id="checkbox1" name="checkbox" type="checkbox" checked="checked"> Choice A</label></li>
                        <li><label for="checkbox2"><input id="checkbox2" name="checkbox" type="checkbox"> Choice B</label></li>
                        <li><label for="checkbox3"><input id="checkbox3" name="checkbox" type="checkbox"> Choice C</label></li>
                    </ul>
                </fieldset>
                <p><a href="#top">[Top]</a></p>
                <fieldset id="forms__radio">
                    <legend>Radio buttons</legend>
                    <ul class="list list--bare">
                        <li><label for="radio1"><input id="radio1" name="radio" type="radio" class="radio" checked="checked"> Option 1</label></li>
                        <li><label for="radio2"><input id="radio2" name="radio" type="radio" class="radio"> Option 2</label></li>
                        <li><label for="radio3"><input id="radio3" name="radio" type="radio" class="radio"> Option 3</label></li>
                    </ul>
                </fieldset>
                <p><a href="#top">[Top]</a></p>
                <fieldset id="forms__textareas">
                    <legend>Textareas</legend>
                    <p>
                        <label for="textarea">Textarea</label>
                        <textarea id="textarea" rows="8" cols="48" placeholder="Enter your message here"></textarea>
                    </p>
                </fieldset>
                <p><a href="#top">[Top]</a></p>
                <fieldset id="forms__html5">
                    <legend>HTML5 inputs</legend>
                    <p>
                        <label for="ic">Color input</label>
                        <input type="color" id="ic" value="#000000">
                    </p>
                    <p>
                        <label for="in">Number input</label>
                        <input type="number" id="in" min="0" max="10" value="5">
                    </p>
                    <p>
                        <label for="ir">Range input</label>
                        <input type="range" id="ir" value="10">
                    </p>
                    <p>
                        <label for="idd">Date input</label>
                        <input type="date" id="idd" value="1970-01-01">
                    </p>
                    <p>
                        <label for="idm">Month input</label>
                        <input type="month" id="idm" value="1970-01">
                    </p>
                    <p>
                        <label for="idw">Week input</label>
                        <input type="week" id="idw" value="1970-W01">
                    </p>
                    <p>
                        <label for="idt">Datetime input</label>
                        <input type="datetime" id="idt" value="1970-01-01T00:00:00Z">
                    </p>
                    <p>
                        <label for="idtl">Datetime-local input</label>
                        <input type="datetime-local" id="idtl" value="1970-01-01T00:00">
                    </p>
                </fieldset>
                <p><a href="#top">[Top]</a></p>
                <fieldset id="forms__action">
                    <legend>Action buttons</legend>
                    <p>
                        <input class="btn-success" type="submit" value="<input type=submit>">
                        <input class="btn-success" type="button" value="<input type=button>">
                        <input class="btn-success" type="reset" value="<input type=reset>">
                        <input class="btn-success" type="submit" value="<input disabled>" disabled>
                    </p>
                    <p>
                        <a class="btn btn-success">Success</a>
                        <a class="btn btn-warning">Warning</a>
                        <a class="btn btn-danger">Danger</a>
                        <a class="btn btn-info">Info</a>
                    </p>
                    <p>
                        <a class="disabled btn btn-success">Success</a>
                        <a class="disabled btn btn-warning">Warning</a>
                        <a class="disabled btn btn-danger">Danger</a>
                        <a class="disabled btn btn-info">Info</a>
                    </p>
                    <p>
                        <a class="btn btn-round btn-success">Success</a>
                        <a class="btn btn-round btn-warning">Warning</a>
                        <a class="btn btn-round btn-danger">Danger</a>
                        <a class="btn btn-round btn-info">Info</a>
                    </p>
                    <p>
                        <button type="submit">&lt;button type=submit&gt;</button>
                        <button type="button">&lt;button type=button&gt;</button>
                        <button type="reset">&lt;button type=reset&gt;</button>
                        <button type="button" disabled>&lt;button disabled&gt;</button>
                    </p>
                </fieldset>
                <p><a href="#top">[Top]</a></p>
            </form>
        </section>
    </main>
    <footer role="contentinfo">
        <p>Made by <a href="http://twitter.com/cbracco">@cbracco</a>. Code on <a href="http://github.com/cbracco/html5-test-page">GitHub</a>.</p>
    </footer>
</div>
</body>
</html>
