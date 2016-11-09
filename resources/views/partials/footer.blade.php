<div class="separator-horizontal"></div>
<div class="row">
    <div class="nine column">
        <ul>
            <li>{{ App\Models\Settings::getSettingValueByName('site-copyright') }}</li>
            <li><a href="/">Home</a></li>
            <li><a href="/nieuws">Nieuws</a></li>
            <li><a href="/disclaimer">Disclaimer</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="http://www.mbbl.nl">www.mbbl.nl</a></li>
            <li><a target="_blank" href="http://www.adobe.com/nl/products/reader.html">Adobe Reader</a></li>
            <li><a href="/login">Login</a></li>
        </ul>
    </div>
    <div class="three column">
        <img class="footer-logo" src="{{ App\Models\Settings::getSettingValueByName('img-folder') . App\Models\Settings::getSettingValueByName('logo-url') }}">
    </div>
</div>
