<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        #raffle-red {
    background: #d8bfd8;
}

@media (min-width: 960px)
.entry {
    float: left;
    width: 100%;
}

.entry {
    text-align: center;
    min-height: 100vh;
    position: relative;
    height:100%;
    
}
#raffle-red div {
    background-image: radial-gradient(circle at top left, transparent 17px, #dc143c 17px), radial-gradient(circle at top right, transparent 17px, #dc143c 17px), radial-gradient(circle at bottom left, transparent 17px, #dc143c 17px), radial-gradient(circle at bottom right, transparent 17px, #dc143c 17px);
    box-shadow: 0 38px 14px -35px rgba(0,0,0,0.3);
    background-size: 50% 50%;
    background-position: top left, top right, bottom left, bottom right;
}
.raffle div {
    width: 220px;
    height: 110px;
    margin-left: -110px;
    margin-top: -55px;
    background-repeat: no-repeat;
}


.entry div {
    position: absolute;
    left: 50%;
    top: 50%;
}
#raffle-red div:before {
    content: 'ticket';
    width: 234px;
    height: 76px;
    padding-left: 40px;
    left: -7px;
    top: 17px;
    background-size: 7px 7px;
    background-repeat: repeat-y;
    background-position: 0 0, 0 0, 100% 0, 100% 0;
    background-image: linear-gradient(45deg, transparent 75%, #dc143c 75%), linear-gradient(135deg, transparent 75%, #dc143c 75%), linear-gradient(-45deg, transparent 75%, #dc143c 75%), linear-gradient(-135deg, transparent 75%, #dc143c 75%);
    line-height: 1.9;
    font-size: 42px;
    text-align: left;
}

.raffle div:before {
    font-family: 'HelveticaNeue-CondensedBold', 'Arial Narrow', Impact, 'Roboto', sans-serif;
    letter-spacing: 2px;
    text-transform: uppercase;
}

.raffle div:before, .raffle div:after {
    box-sizing: border-box;
    color: #333;
}

.entry div:before, .entry div:after {
    display: block;
    content: '';
    position: absolute;
}
#raffle-red div:after {
    content: 'BB94CF';
    width: 75px;
    height: 185px;
    padding-top: 162px;
    top: -37px;
    left: 72px;
    background: linear-gradient(to bottom, transparent 155px, #fa8072 155px, #fa8072 158px, transparent 158px);
    border: 3px solid #fa8072;
}

.raffle div:after {
    border-radius: 10px;
    transform: rotate(-90deg);
    font-size: 14px;
    font-family: monospace;
    text-align: center;
    line-height: 1;
}

.raffle div:before, .raffle div:after {
    box-sizing: border-box;
    color: #333;
}

.entry div:before, .entry div:after {
    display: block;
    content: '';
    position: absolute;
}
body {
    line-height: 1;
}

html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
}
Inherited from html
reset.css:6
html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
}


.no-scale:after {
    border-radius: 10px;
    -ms-transform: rotate(-90deg) !important; /* IE 9 */
    -webkit-transform: rotate(-90deg)!important;
    transform: rotate(-90deg)!important ; 
    font-size: 14px;
    font-family: monospace;
    text-align: center;
    line-height: 1;
}

.raffle div:before, .raffle div:after {
    box-sizing: border-box;
    color: #333;
}

.entry div:before, .entry div:after {
    display: block;
    content: '';
    position: absolute;
}
    </style>
</head>
<body>
    <div id="raffle-red" class="entry raffle">
        <div class="no-scale"></div>
    </div>
</body>
</html>