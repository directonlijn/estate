@extends('./base/base')

@section('content')
    <div class="row">
        <div class="one-third column">
            1/3
        </div>
        <div class="four column">
            <div class="page-title">Contact</div>

            <from class="contact-div">
                <div class="row">
                    <select name="title" class="u-full-width" required>
                        <option>Geslacht</option>
                        <option value="Dhr.">Dhr.</option>
                        <option value="Mevr.">Mevr.</option>
                    </select>
                </div>
                <div class="row">
                    <input type="text" class="u-full-width" placeholder="Voornaam *" name="voornaam" required>
                </div>
                <div class="row">
                    <input type="text" class="u-full-width" placeholder="Tussenvoegsel" name="tussenvoegsel">
                </div>
                <div class="row">
                    <input type="text" class="u-full-width" placeholder="Achternaam *" name="achternaam" required>
                </div>
                <div class="row">
                    <input type="text" class="u-full-width" placeholder="Naam bedrijf" name="bedrijfsnaam">
                </div>
                <div class="row">
                    <input type="text" class="u-full-width" placeholder="Telefoonnummer *" name="telefoonnummer" required>
                </div>
                <div class="row">
                    <input type="text" class="u-full-width" placeholder="E-mailadres *" name="emailadres" required>
                </div>
                <div class="row">
                    <label>Uw bericht</label>
                    <textarea class="u-full-width" name="bericht" placeholder="Uw bericht" required></textarea>
                </div>
                <div class="row ">
                    <div class="one-half column">
                        * verplichte velden
                    </div>
                    <div class="one-half column">
                        <input type="submit" class="formbutton" value="Verzenden">
                    </div>
                </div>
            </form>
        </div>
        <div class="one column"></div>
        <div class="three column">
            {!! $settings['contact-info'] !!}
        </div>
    </div>
@stop
