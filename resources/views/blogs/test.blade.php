<html>
<head>
    <meta charset="UTF-8">
    <title>MediumEditor | demo</title>
    <link rel="stylesheet" href="css/demo.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://yabwe.github.io/medium-editor/bower_components/medium-editor/dist/css/medium-editor.css">
    <link rel="stylesheet" href="https://yabwe.github.io/medium-editor/bower_components/medium-editor/dist/css/themes/default.css" id="medium-editor-theme">
</head>
<body>
    <a href="https://github.com/yabwe/medium-editor" class="github-link">
      <img src="https://s3.amazonaws.com/github/ribbons/forkme_right_gray_6d6d6d.png" alt="Fork me on GitHub">
    </a>
    <div id="version"></div>
    <div class="top-bar">
        Theme:
        <select id="sel-themes">
            <option value="themes/default" selected>default</option>
            <option value="themes/roman">roman</option>
            <option value="themes/mani">mani</option>
            <option value="themes/flat">flat</option>
            <option value="themes/bootstrap">bootstrap</option>
            <option value="themes/tim">tim</option>
            <option value="themes/beagle">beagle</option>
        </select>
    </div>
    <div id="container">
        <h1>MediumEditor</h1>
        <div class="editable">
            <p>My father’s family name being <a href="https://en.wikipedia.org/wiki/Pip_(Great_Expectations)">Pirrip</a>, and my Christian name Philip, my infant tongue could make of both names nothing longer or more explicit than Pip. So, I called myself Pip, and came to be called Pip.</p>
            <p>I give Pirrip as my father’s family name, on the authority of his tombstone and my sister,—Mrs. Joe Gargery, who married the blacksmith. As I never saw my father or my mother, and never saw any likeness of either of them (for their days were long before the days of photographs), my first fancies regarding what they were like were unreasonably derived from their tombstones. The shape of the letters on my father’s, gave me an odd idea that he was a square, stout, dark man, with curly black hair. From the character and turn of the inscription, “Also Georgiana Wife of the Above,” I drew a childish conclusion that my mother was freckled and sickly. To five little stone lozenges, each about a foot and a half long, which were arranged in a neat row beside their grave, and were sacred to the memory of five little brothers of mine,—who gave up trying to get a living, exceedingly early in that universal struggle,—I am indebted for a belief I religiously entertained that they had all been born on their backs with their hands in their trousers-pockets, and had never taken them out in this state of existence.</p>
            <p>Ours was the marsh country, down by the river, within, as the river wound, twenty miles of the sea. My first most vivid and broad impression of the identity of things seems to me to have been gained on a memorable raw afternoon towards evening. At such a time I found out for certain that this bleak place overgrown with nettles was the churchyard; and that Philip Pirrip, late of this parish, and also Georgiana wife of the above, were dead and buried; and that Alexander, Bartholomew, Abraham, Tobias, and Roger, infant children of the aforesaid, were also dead and buried; and that the dark flat wilderness beyond the churchyard, intersected with dikes and mounds and gates, with scattered cattle feeding on it, was the marshes; and that the low leaden line beyond was the river; and that the distant savage lair from which the wind was rushing was the sea; and that the small bundle of shivers growing afraid of it all and beginning to cry, was Pip.</p>
        </div>
    </div>
    <p style="text-align: center;"><small><a style="color: #333;" target="_blank" href="http://www.goodreads.com/reader/475-great-expectations">Source</a></small></p>
    <script src="https://yabwe.github.io/medium-editor/bower_components/medium-editor/dist/js/medium-editor.js"></script>
    <script>
        var editor = new MediumEditor('.editable'),
            cssLink = document.getElementById('medium-editor-theme');

        document.getElementById('sel-themes').addEventListener('change', function () {
            cssLink.href = 'https://yabwe.github.io/medium-editor/bower_components/medium-editor/dist/css/' + this.value + '.css';
        });

        document.getElementById('version').innerHTML = 'This demo uses MediumEditor v' + MediumEditor.version;
    </script>
</body>
</html>